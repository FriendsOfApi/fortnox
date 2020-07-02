<?php

declare(strict_types=1);

namespace FAPI\Fortnox\Tests;

use FAPI\Fortnox\RequestBuilder;
use Http\Message\MultipartStream\MultipartStreamBuilder;
use Http\Message\RequestFactory;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;

/**
 * @author Radoje Albijanic <radoje.albijanic@gmail.com>
 */
class RequestBuilderTest extends TestCase
{
    /**
     * @var MockObject
     */
    private $requestFactory;

    /**
     * @var MultipartStreamBuilder
     */
    private $multipartStreamBuilder;
    /**
     * @var RequestBuilder
     */
    private $builder;

    protected function setUp()
    {
        parent::setUp();
        $this->builder = new RequestBuilder(
            $this->requestFactory = $this->getMockBuilder(RequestFactory::class)->getMock(),
            $this->multipartStreamBuilder = $this->getMockBuilder(MultipartStreamBuilder::class)->disableOriginalConstructor()->getMock()
        );
    }

    public function testCreateAddsDefaultHeadersWhenNoBodyOrHeadersProvided(): void
    {
        $this->requestFactory->expects(self::once())->method('createRequest')
            ->with('GET', '/some-uri', [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
            ], null)
        ->willReturn($this->getMockBuilder(RequestInterface::class)->getMock());

        $this->builder->create('GET', '/some-uri', []);
    }
}
