<?php

declare(strict_types=1);

namespace FAPI\Fortnox\Api;

/**
 * {@link https://developer.fortnox.se/documentation/resources/customers/}
 *
 * @author Tobias Nyholm <tobias.nyholm@gmail.com>
 */
class Customer extends HttpApi
{
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

    public function get(int $customer)
    {
        $response = $this->httpGet('/3/customers/'.$customer);

        if (!$this->hydrator) {
            return $response;
        }

        // Use any valid status code here
        if ($response->getStatusCode() !== 200) {
            $this->handleErrors($response);
        }

        return $this->hydrator->hydrate($response, Customer::class);
    }

    public function create(array $data)
    {
        $response = $this->httpPost('/3/customers', ['Customer'=>$data]);

        if (!$this->hydrator) {
            return $response;
        }

        // Use any valid status code here
        if ($response->getStatusCode() !== 200) {
            $this->handleErrors($response);
        }

        return $this->hydrator->hydrate($response, Customer::class);
    }
    public function update(int $customer, array $data)
    {
        $response = $this->httpPut('/3/customers/'.$customer, ['Customer'=>$data]);

        if (!$this->hydrator) {
            return $response;
        }

        // Use any valid status code here
        if ($response->getStatusCode() !== 200) {
            $this->handleErrors($response);
        }

        return $this->hydrator->hydrate($response, Customer::class);
    }


    public function delete(int $customer)
    {
        $response = $this->httpDelete('/3/customers/'.$customer);

        if (!$this->hydrator) {
            return $response;
        }

        // Use any valid status code here
        if ($response->getStatusCode() !== 200) {
            $this->handleErrors($response);
        }

        return $this->hydrator->hydrate($response, ApiResponse::class);
    }
}
