<?php

declare(strict_types=1);

namespace FAPI\Fortnox\Api;

use FAPI\Fortnox\Model\ApiResponse;
use FAPI\Fortnox\Model\Customer\CustomerCollection;
use FAPI\Fortnox\Model\Invoice\InvoiceCollection;
use FAPI\Fortnox\Model\Invoice\Invoice as Model;
use Psr\Http\Message\ResponseInterface;

/**
 * {@link https://developer.fortnox.se/documentation/resources/invoices/}
 *
 * @author Tobias Nyholm <tobias.nyholm@gmail.com>
 */
class Invoice extends HttpApi
{
    /**
     * @throws \FAPI\Fortnox\Exception\DomainException
     * @return ResponseInterface|CustomerCollection
     */
    public function all(array $params = [])
    {
        $response = $this->httpGet('/3/invoices?'.http_build_query($params));

        if (!$this->hydrator) {
            return $response;
        }

        // Use any valid status code here
        if ($response->getStatusCode() !== 200) {
            $this->handleErrors($response);
        }

        return $this->hydrator->hydrate($response, InvoiceCollection::class);
    }

    /**
     * @throws \FAPI\Fortnox\Exception\DomainException
     * @return ResponseInterface|Model
     */
    public function get(int $invoice)
    {
        $response = $this->httpGet('/3/invoices/'.$invoice);

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
        $response = $this->httpPost('/3/invoices', ['Invoice'=>$data]);

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
    public function update(int $invoice, array $data)
    {
        $response = $this->httpPut('/3/invoices/'.$invoice, ['Invoice'=>$data]);

        if (!$this->hydrator) {
            return $response;
        }

        // Use any valid status code here
        if ($response->getStatusCode() !== 200) {
            $this->handleErrors($response);
        }

        return $this->hydrator->hydrate($response, Model::class);
    }
}
