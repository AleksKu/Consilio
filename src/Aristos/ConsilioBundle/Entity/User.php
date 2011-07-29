<?php

namespace Aristos\ConsilioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Aristos\ConsilioBundle\Entity\User
 */
class User
{
    /**
     * @var string $email
     */
    private $email;

    /**
     * @var string $firstName
     */
    private $firstName;

    /**
     * @var string $lastName
     */
    private $lastName;

    /**
     * @var string $middleName
     */
    private $middleName;

    /**
     * @var string $password
     */
    private $password;

    /**
     * @var string $passwordSalt
     */
    private $passwordSalt;

    /**
     * @var integer $materialsCount
     */
    private $materialsCount;

    /**
     * @var integer $commentsCount
     */
    private $commentsCount;

    /**
     * @var integer $notificationsCount
     */
    private $notificationsCount;

    /**
     * @var integer $bookmarksCount
     */
    private $bookmarksCount;

    /**
     * @var integer $id
     */
    private $id;


    /**
     * Set email
     *
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set middleName
     *
     * @param string $middleName
     */
    public function setMiddleName($middleName)
    {
        $this->middleName = $middleName;
    }

    /**
     * Get middleName
     *
     * @return string 
     */
    public function getMiddleName()
    {
        return $this->middleName;
    }

    /**
     * Set password
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set passwordSalt
     *
     * @param string $passwordSalt
     */
    public function setPasswordSalt($passwordSalt)
    {
        $this->passwordSalt = $passwordSalt;
    }

    /**
     * Get passwordSalt
     *
     * @return string 
     */
    public function getPasswordSalt()
    {
        return $this->passwordSalt;
    }

    /**
     * Set materialsCount
     *
     * @param integer $materialsCount
     */
    public function setMaterialsCount($materialsCount)
    {
        $this->materialsCount = $materialsCount;
    }

    /**
     * Get materialsCount
     *
     * @return integer 
     */
    public function getMaterialsCount()
    {
        return $this->materialsCount;
    }

    /**
     * Set commentsCount
     *
     * @param integer $commentsCount
     */
    public function setCommentsCount($commentsCount)
    {
        $this->commentsCount = $commentsCount;
    }

    /**
     * Get commentsCount
     *
     * @return integer 
     */
    public function getCommentsCount()
    {
        return $this->commentsCount;
    }

    /**
     * Set notificationsCount
     *
     * @param integer $notificationsCount
     */
    public function setNotificationsCount($notificationsCount)
    {
        $this->notificationsCount = $notificationsCount;
    }

    /**
     * Get notificationsCount
     *
     * @return integer 
     */
    public function getNotificationsCount()
    {
        return $this->notificationsCount;
    }

    /**
     * Set bookmarksCount
     *
     * @param integer $bookmarksCount
     */
    public function setBookmarksCount($bookmarksCount)
    {
        $this->bookmarksCount = $bookmarksCount;
    }

    /**
     * Get bookmarksCount
     *
     * @return integer 
     */
    public function getBookmarksCount()
    {
        return $this->bookmarksCount;
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