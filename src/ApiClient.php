<?php

declare(strict_types=1);

/*
 * This software may be modified and distributed under the terms
 * of the MIT license. See the LICENSE file for details.
 */

namespace FAPI\Fortnox;

use FAPI\Fortnox\Api\Customer;
use FAPI\Fortnox\Api\Invoice;
use FAPI\Fortnox\Hydrator\Hydrator;
use FAPI\Fortnox\Hydrator\ModelHydrator;
use Http\Client\HttpClient;

/**
 * @author Tobias Nyholm <tobias.nyholm@gmail.com>
 */
final class ApiClient
{
    /**
     * @var HttpClient
     */
    private $httpClient;

    /**
     * @var Hydrator
     */
    private $hydrator;

    /**
     * @var RequestBuilder
     */
    private $requestBuilder;

    /**
     * The constructor accepts already configured HTTP clients.
     * Use the configure method to pass a configuration to the Client and create an HTTP Client.
     */
    public function __construct(
        HttpClient $httpClient,
        Hydrator $hydrator = null,
        RequestBuilder $requestBuilder = null
    ) {
        $this->httpClient = $httpClient;
        $this->hydrator = $hydrator ?: new ModelHydrator();
        $this->requestBuilder = $requestBuilder ?: new RequestBuilder();
    }

    /**
     * @return ApiClient
     */
    public static function configure(
        HttpClientConfigurator $httpClientConfigurator,
        Hydrator $hydrator = null,
        RequestBuilder $requestBuilder = null
    ): self {
        $httpClient = $httpClientConfigurator->createConfiguredClient();

        return new self($httpClient, $hydrator, $requestBuilder);
    }

    public static function create(string $clientSecret, string $accessToken): self
    {
        $httpClientConfigurator = (new HttpClientConfigurator())
            ->setClientSecret($clientSecret)
            ->setAccessToken($accessToken);

        return self::configure($httpClientConfigurator);
    }

    public function customer(): Customer
    {
        return new Api\Customer($this->httpClient, $this->hydrator, $this->requestBuilder);
    }

    public function invoice(): Invoice
    {
        return new Api\Invoice($this->httpClient, $this->hydrator, $this->requestBuilder);
    }
}
