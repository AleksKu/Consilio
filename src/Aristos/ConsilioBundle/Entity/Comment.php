<?php

namespace Aristos\ConsilioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Aristos\ConsilioBundle\Entity\Comment
 */
class Comment
{
    /**
     * @var text $body
     */
    private $body;

    /**
     * @var datetime $createdAt
     */
    private $createdAt;

    /**
     * @var datetime $updatedAt
     */
    private $updatedAt;

    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var Aristos\ConsilioBundle\Entity\Comment
     */
    private $author;

    /**
     * @var Aristos\ConsilioBundle\Entity\Material
     */
    private $material;


    /**
     * Set body
     *
     * @param text $body
     */
    public function setBody($body)
    {
        $this->body = $body;
    }

    /**
     * Get body
     *
     * @return text 
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set createdAt
     *
     * @param datetime $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Get createdAt
     *
     * @return datetime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param datetime $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * Get updatedAt
     *
     * @return datetime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
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
     * Set author
     *
     * @param Aristos\ConsilioBundle\Entity\Comment $author
     */
    public function setAuthor(\Aristos\ConsilioBundle\Entity\Comment $author)
    {
        $this->author = $author;
    }

    /**
     * Get author
     *
     * @return Aristos\ConsilioBundle\Entity\Comment 
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set material
     *
     * @param Aristos\ConsilioBundle\Entity\Material $material
     */
    public function setMaterial(\Aristos\ConsilioBundle\Entity\Material $material)
    {
        $this->material = $material;
    }

    /**
     * Get material
     *
     * @return Aristos\ConsilioBundle\Entity\Material 
     */
    public function getMaterial()
    {
        return $this->material;
    }
}