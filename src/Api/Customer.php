<?php

declare(strict_types=1);

namespace FAPI\Fortnox\Api;

use FAPI\Fortnox\Model\ApiResponse;
use FAPI\Fortnox\Model\Customer\Customer as Model;
use FAPI\Fortnox\Model\Customer\CustomerCollection;
use Psr\Http\Message\ResponseInterface;

/**
 * {@link https://developer.fortnox.se/documentation/resources/customers/}.
 *
 * @author Tobias Nyholm <tobias.nyholm@gmail.com>
 */
class Customer extends HttpApi
{
    /**
     * @throws \FAPI\Fortnox\Exception\DomainException
     *
     * @return CustomerCollection|ResponseInterface
     */
    public function all(array $params = [])
    {
        $response = $this->httpGet('/3/customers', $params);

        if (!$this->hydrator) {
            return $response;
        }

        // Use any valid status code here
        if (200 !== $response->getStatusCode()) {
            $this->handleErrors($response);
        }

        return $this->hydrator->hydrate($response, CustomerCollection::class);
    }

    /**
     * @throws \FAPI\Fortnox\Exception\DomainException
     *
     * @return Model|ResponseInterface
     */
    public function get(string $customer)
    {
        $response = $this->httpGet('/3/customers/'.$customer);

        if (!$this->hydrator) {
            return $response;
        }

        // Use any valid status code here
        if (200 !== $response->getStatusCode()) {
            $this->handleErrors($response);
        }

        return $this->hydrator->hydrate($response, Model::class);
    }

    /**
     * @throws \FAPI\Fortnox\Exception\DomainException
     *
     * @return Model|ResponseInterface
     */
    public function create(array $data)
    {
        $response = $this->httpPost('/3/customers', ['Customer' => $data]);

        if (!$this->hydrator) {
            return $response;
        }

        // Use any valid status code here
        if (201 !== $response->getStatusCode()) {
            $this->handleErrors($response);
        }

        return $this->hydrator->hydrate($response, Model::class);
    }

    /**
     * @throws \FAPI\Fortnox\Exception\DomainException
     *
     * @return Model|ResponseInterface
     */
    public function update(string $customer, array $data)
    {
        $response = $this->httpPut('/3/customers/'.$customer, ['Customer' => $data]);

        if (!$this->hydrator) {
            return $response;
        }

        // Use any valid status code here
        if (200 !== $response->getStatusCode()) {
            $this->handleErrors($response);
        }

        return $this->hydrator->hydrate($response, Model::class);
    }

    /**
     * @throws \FAPI\Fortnox\Exception\DomainException
     *
     * @return ApiResponse|ResponseInterface
     */
    public function delete(string $customer)
    {
        $response = $this->httpDelete('/3/customers/'.$customer);

        if (!$this->hydrator) {
            return $response;
        }

        // Use any valid status code here
        if (204 !== $response->getStatusCode()) {
            $this->handleErrors($response);
        }

        return $this->hydrator->hydrate($response, ApiResponse::class);
    }
}
