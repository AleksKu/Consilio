<?php

namespace Aristos\PlazaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use DateTime;

/**
 * Aristos\PlazaBundle\Entity\Material
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



    public function __construct()
    {
        $this->created_at = new DateTime();
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
     * Set type
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
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


}