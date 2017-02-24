<?php

namespace Anytime\ApiClient\Model\Request\Get;

use Anytime\ApiClient\Constant\API;

class ModelRequestGetAccountStatement extends ModelRequestGet
{
    /**
     * @var \DateTime
     */
    private $dateStart;

    /**
     * @var \DateTime
     */
    private $dateEnd;

    /**
     * @return string
     */
    public function getApiName()
    {
        return API::ACCOUNT_STATEMENT;
    }

    /**
     * @return \DateTime
     */
    public function getDateStart()
    {
        return $this->dateStart;
    }

    /**
     * @param \DateTime|string $dateStart
     * @return ModelRequestGetAccountStatement
     */
    public function setDateStart($dateStart)
    {
        $this->dateStart = $this->timezoneNormalizer->normalize($dateStart);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateEnd()
    {
        return $this->dateEnd;
    }

    /**
     * @param \DateTime|string $dateEnd
     * @return ModelRequestGetAccountStatement
     */
    public function setDateEnd($dateEnd)
    {
        $this->dateEnd = $this->timezoneNormalizer->normalize($dateEnd);
        return $this;
    }


}