<?php

namespace Aristos\ConsilioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Aristos\ConsilioBundle\Entity\Category
 */
class Category
{
    /**
     * @var string $name
     */
    private $name;

    /**
     * @var integer $id
     */
    private $id;


    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
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
}