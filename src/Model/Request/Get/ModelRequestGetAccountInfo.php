<?php

namespace Anytime\ApiClient\Model\Request\Get;

use Anytime\ApiClient\Constant\API;

class ModelRequestGetAccountInfo extends ModelRequestGet
{

    /**
     * @var integer
     */
    private $id;

    /**
     * @return string
     */
    public function getApiName()
    {
        return API::ACCOUNT_INFO;
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param integer $id
     * @return ModelRequestGetAccountInfo
     */
    public function setId($id)
    {
        $this->id = (int)$id;
        return $this;
    }


}