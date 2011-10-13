<?php

namespace Aristos\PlazaBundle\Document;

use DateTime;

/**
 * Aristos\PlazaBundle\Document\Material
 */
class Material
{
   


    /**
     * @var MongoId $id
     */
    protected $id;

    /**
     * @var date $created_at
     */
    protected $created_at;

    /**
     * @var date $updated_at
     */
    protected $updated_at;

    /**
     * @var hash $params
     */
    protected $params;


    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set created_at
     *
     * @param date $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;
    }

    /**
     * Get created_at
     *
     * @return date $createdAt
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set updated_at
     *
     * @param date $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updated_at = $updatedAt;
    }

    /**
     * Get updated_at
     *
     * @return date $updatedAt
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * Set params
     *
     * @param hash $params
     */
    public function setParams($params)
    {
        $this->params = $params;
    }



    /**
     * Get params
     *
     * @return hash $params
     */
    public function getParams()
    {
        return $this->params;
    }
    public function addParam($name, $value)
    {
        $this->params[$name] = $value;
    }

}