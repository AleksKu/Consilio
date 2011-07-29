<?php

namespace Aristos\ConsilioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Aristos\ConsilioBundle\Entity\MaterialUser
 */
class MaterialUser
{
    /**
     * @var integer $commentsCount
     */
    private $commentsCount;

    /**
     * @var integer $friendsCount
     */
    private $friendsCount;

    /**
     * @var integer $viewedCount
     */
    private $viewedCount;

    /**
     * @var boolean $isBookmark
     */
    private $isBookmark;

    /**
     * @var boolean $isOwner
     */
    private $isOwner;

    /**
     * @var boolean $isMember
     */
    private $isMember;

    /**
     * @var string $tags
     */
    private $tags;

    /**
     * @var datetime $lastReadDate
     */
    private $lastReadDate;

    /**
     * @var integer $unreadComments
     */
    private $unreadComments;

    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var Aristos\ConsilioBundle\Entity\Comment
     */
    private $lastCommentRead;

    /**
     * @var Aristos\ConsilioBundle\Entity\Material
     */
    private $material;

    /**
     * @var Aristos\ConsilioBundle\Entity\User
     */
    private $user;


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
     * Set friendsCount
     *
     * @param integer $friendsCount
     */
    public function setFriendsCount($friendsCount)
    {
        $this->friendsCount = $friendsCount;
    }

    /**
     * Get friendsCount
     *
     * @return integer 
     */
    public function getFriendsCount()
    {
        return $this->friendsCount;
    }

    /**
     * Set viewedCount
     *
     * @param integer $viewedCount
     */
    public function setViewedCount($viewedCount)
    {
        $this->viewedCount = $viewedCount;
    }

    /**
     * Get viewedCount
     *
     * @return integer 
     */
    public function getViewedCount()
    {
        return $this->viewedCount;
    }

    /**
     * Set isBookmark
     *
     * @param boolean $isBookmark
     */
    public function setIsBookmark($isBookmark)
    {
        $this->isBookmark = $isBookmark;
    }

    /**
     * Get isBookmark
     *
     * @return boolean 
     */
    public function getIsBookmark()
    {
        return $this->isBookmark;
    }

    /**
     * Set isOwner
     *
     * @param boolean $isOwner
     */
    public function setIsOwner($isOwner)
    {
        $this->isOwner = $isOwner;
    }

    /**
     * Get isOwner
     *
     * @return boolean 
     */
    public function getIsOwner()
    {
        return $this->isOwner;
    }

    /**
     * Set isMember
     *
     * @param boolean $isMember
     */
    public function setIsMember($isMember)
    {
        $this->isMember = $isMember;
    }

    /**
     * Get isMember
     *
     * @return boolean 
     */
    public function getIsMember()
    {
        return $this->isMember;
    }

    /**
     * Set tags
     *
     * @param string $tags
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
    }

    /**
     * Get tags
     *
     * @return string 
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Set lastReadDate
     *
     * @param datetime $lastReadDate
     */
    public function setLastReadDate($lastReadDate)
    {
        $this->lastReadDate = $lastReadDate;
    }

    /**
     * Get lastReadDate
     *
     * @return datetime 
     */
    public function getLastReadDate()
    {
        return $this->lastReadDate;
    }

    /**
     * Set unreadComments
     *
     * @param integer $unreadComments
     */
    public function setUnreadComments($unreadComments)
    {
        $this->unreadComments = $unreadComments;
    }

    /**
     * Get unreadComments
     *
     * @return integer 
     */
    public function getUnreadComments()
    {
        return $this->unreadComments;
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
     * Set lastCommentRead
     *
     * @param Aristos\ConsilioBundle\Entity\Comment $lastCommentRead
     */
    public function setLastCommentRead(\Aristos\ConsilioBundle\Entity\Comment $lastCommentRead)
    {
        $this->lastCommentRead = $lastCommentRead;
    }

    /**
     * Get lastCommentRead
     *
     * @return Aristos\ConsilioBundle\Entity\Comment 
     */
    public function getLastCommentRead()
    {
        return $this->lastCommentRead;
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