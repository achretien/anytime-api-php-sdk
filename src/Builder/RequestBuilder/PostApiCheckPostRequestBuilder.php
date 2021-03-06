<?php

namespace Anytime\ApiClient\Builder\RequestBuilder;

use Anytime\ApiClient\IO\IORequest;
use Anytime\ApiClient\Model\Request\ModelRequest;

class PostApiCheckPostRequestBuilder extends RequestBuilder
{
    /**
     * @param ModelRequest $modelRequest
     * @return IORequest
     */
    public function getRequest(ModelRequest $modelRequest)
    {
        return $this->createIORequestObject(
            $modelRequest->getMethod(),
            $this->getFullUrl($this->preBuiltData['uri']),
            $this->filterNullParams([
                'test_param'  =>  $modelRequest->getTestParam()
            ])
        );
    }
}