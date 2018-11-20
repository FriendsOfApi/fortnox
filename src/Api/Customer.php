<?php

declare(strict_types=1);

namespace FAPI\Fortnox\Api;

use FAPI\Fortnox\Model\ApiResponse;
use FAPI\Fortnox\Model\Customer\CustomerCollection;
use Psr\Http\Message\ResponseInterface;
use FAPI\Fortnox\Model\Customer\Customer as Model;

/**
 * {@link https://developer.fortnox.se/documentation/resources/customers/}
 *
 * @author Tobias Nyholm <tobias.nyholm@gmail.com>
 */
class Customer extends HttpApi
{
    /**
     * @throws \FAPI\Fortnox\Exception\DomainException
     * @return ResponseInterface|CustomerCollection
     */
    public function all(array $params = [])
    {
        $response = $this->httpGet('/3/customers?'.http_build_query($params));

        if (!$this->hydrator) {
            return $response;
        }

        // Use any valid status code here
        if ($response->getStatusCode() !== 200) {
            $this->handleErrors($response);
        }

        return $this->hydrator->hydrate($response, CustomerCollection::class);
    }

    /**
     * @throws \FAPI\Fortnox\Exception\DomainException
     * @return ResponseInterface|Model
     */
    public function get(string $customer)
    {
        $response = $this->httpGet('/3/customers/'.$customer);

        if (!$this->hydrator) {
            return $response;
        }

        // Use any valid status code here
        if ($response->getStatusCode() !== 200) {
            $this->handleErrors($response);
        }

        return $this->hydrator->hydrate($response, Model::class);
    }

    /**
     * @throws \FAPI\Fortnox\Exception\DomainException
     * @return ResponseInterface|Model
     */
    public function create(array $data)
    {
        $response = $this->httpPost('/3/customers', ['Customer'=>$data]);

        if (!$this->hydrator) {
            return $response;
        }

        // Use any valid status code here
        if ($response->getStatusCode() !== 201) {
            $this->handleErrors($response);
        }

        return $this->hydrator->hydrate($response, Model::class);
    }

    /**
     * @throws \FAPI\Fortnox\Exception\DomainException
     * @return ResponseInterface|Model
     */
    public function update(string $customer, array $data)
    {
        $response = $this->httpPut('/3/customers/'.$customer, ['Customer'=>$data]);

        if (!$this->hydrator) {
            return $response;
        }

        // Use any valid status code here
        if ($response->getStatusCode() !== 200) {
            $this->handleErrors($response);
        }

        return $this->hydrator->hydrate($response, Model::class);
    }


    /**
     * @throws \FAPI\Fortnox\Exception\DomainException
     * @return ResponseInterface|ApiResponse
     */
    public function delete(string $customer)
    {
        $response = $this->httpDelete('/3/customers/'.$customer);

        if (!$this->hydrator) {
            return $response;
        }

        // Use any valid status code here
        if ($response->getStatusCode() !== 204) {
            $this->handleErrors($response);
        }

        return $this->hydrator->hydrate($response, ApiResponse::class);
    }
}
