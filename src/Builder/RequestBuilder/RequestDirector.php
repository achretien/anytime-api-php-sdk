<?php

namespace Anytime\ApiClient\Builder\RequestBuilder;

use Anytime\ApiClient\Model\Request\ModelRequestInterface;
use GuzzleHttp\Psr7\Request;

abstract class RequestDirector
{
    /**
     * @var RequestBuilder
     */
    protected $requestBuilder;

    /**
     * RequestDirector constructor.
     *
     * @param RequestBuilder $requestBuilder
     */
    public function __construct(RequestBuilder $requestBuilder)
    {
        $this->requestBuilder = $requestBuilder;
    }

    /**
     * @return RequestDirector
     */
    abstract public function buildRequest();

    /**
     * @param ModelRequestInterface $modelRequest
     * @return Request
     */
    abstract public function getRequest(ModelRequestInterface $modelRequest);
}