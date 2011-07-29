<?php

namespace Aristos\ConsilioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Aristos\ConsilioBundle\Entity\UserNotification
 */
class UserNotification
{
    /**
     * @var boolean $severity
     */
    private $severity;

    /**
     * @var datetime $createdAt
     */
    private $createdAt;

    /**
     * @var string $eventType
     */
    private $eventType;

    /**
     * @var string $title
     */
    private $title;

    /**
     * @var text $description
     */
    private $description;

    /**
     * @var boolean $isRead
     */
    private $isRead;

    /**
     * @var boolean $isRemove
     */
    private $isRemove;

    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var Aristos\ConsilioBundle\Entity\User
     */
    private $user;


    /**
     * Set severity
     *
     * @param boolean $severity
     */
    public function setSeverity($severity)
    {
        $this->severity = $severity;
    }

    /**
     * Get severity
     *
     * @return boolean 
     */
    public function getSeverity()
    {
        return $this->severity;
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
     * Set eventType
     *
     * @param string $eventType
     */
    public function setEventType($eventType)
    {
        $this->eventType = $eventType;
    }

    /**
     * Get eventType
     *
     * @return string 
     */
    public function getEventType()
    {
        return $this->eventType;
    }

    /**
     * Set title
     *
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param text $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Get description
     *
     * @return text 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set isRead
     *
     * @param boolean $isRead
     */
    public function setIsRead($isRead)
    {
        $this->isRead = $isRead;
    }

    /**
     * Get isRead
     *
     * @return boolean 
     */
    public function getIsRead()
    {
        return $this->isRead;
    }

    /**
     * Set isRemove
     *
     * @param boolean $isRemove
     */
    public function setIsRemove($isRemove)
    {
        $this->isRemove = $isRemove;
    }

    /**
     * Get isRemove
     *
     * @return boolean 
     */
    public function getIsRemove()
    {
        return $this->isRemove;
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
     * Set user
     *
     * @param Aristos\ConsilioBundle\Entity\User $user
     */
    public function setUser(\Aristos\ConsilioBundle\Entity\User $user)
    {
        $this->user = $user;
    }

    /**
     * Get user
     *
     * @return Aristos\ConsilioBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}