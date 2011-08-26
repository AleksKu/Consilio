<?php

namespace Aristos\PlazaBundle\Document;

use DateTime;

/**
 * Aristos\PlazaBundle\Document\Material
 */
class Material
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $type
     */
    private $type;

    /**
     * @var datetime $created_at
     */
    private $created_at;

    /**
     * @var datetime $updated_at
     */
    private $updated_at;


 /**
     *
     */
    private $options = array();


    public function _construct()
    {

        $this->created_at = new DateTime();
        $this->updated_at = new DateTime();

    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * Set created_at
     *
     * @param datetime $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;
    }

    /**
     * Get created_at
     *
     * @return datetime
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set updated_at
     *
     * @param datetime $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updated_at = $updatedAt;
    }

    /**
     * Get updated_at
     *
     * @return datetime
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }


    public function addOption(\Aristos\PlazaBundle\Document\Option $option)
    {
        $this->options[] = $option;
    }

    public function getOption($key)
    {
        //return $this->options[$key];
    }

    public function setOptions($options)
    {
        $this->options = $options;
    }


        public function getOptions()
    {
        return $this->options;
    }


}