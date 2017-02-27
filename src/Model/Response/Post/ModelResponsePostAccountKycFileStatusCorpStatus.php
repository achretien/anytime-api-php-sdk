<?php

namespace Anytime\ApiClient\Model\Response\Post;

class ModelResponsePostAccountKycFileStatusCorpStatus
{
    /**
     * @var integer
     */
    private $status;

    /**
     * @var string
     */
    private $error;

    /**
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param int $status
     * @return ModelResponsePostAccountKycFileStatusCorpStatus
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * @param string $error
     * @return ModelResponsePostAccountKycFileStatusCorpStatus
     */
    public function setError($error)
    {
        $this->error = $error;
        return $this;
    }


}