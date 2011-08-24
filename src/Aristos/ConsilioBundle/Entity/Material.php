<?php

namespace Aristos\ConsilioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use DateTime;

/**
 * Aristos\ConsilioBundle\Entity\Material
 */
class Material
{






    /**
     * @var string $lang
     */
    private $lang;

    /**
     * @var integer $commentsCount
     */
    private $commentsCount = 0;

    /**
     * @var integer $membersCount
     */
    private $membersCount = 0;

    /**
     * @var integer $viewsCount
     */
    private $viewsCount = 0;

    /**
     * @var integer $bookmarksCount
     */
    private $bookmarksCount = 0;

    /**
     * @var datetime $createdAt
     */
    private $createdAt;

    /**
     * @var datetime $updatedAt
     */
    private $updatedAt;

    /**
     * @var integer $tagsCount
     */
    private $tagsCount = 0;

    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var Aristos\ConsilioBundle\Entity\User
     */
    private $author;

    /**
     * @var Aristos\ConsilioBundle\Entity\Category
     */
    private $category;

    /**
     * @var Doctrine\Common\Collections\ArrayCollection
     */

    public $comments;


    public function _construct()
    {
        $this->comments = new ArrayCollection();
        $this->createdAt = new DateTime();
        $this->updatedAt = new DateTime();
    }





    /**
     * Set lang
     *
     * @param string $lang
     */
    public function setLang($lang)
    {
        $this->lang = $lang;
    }

    /**
     * Get lang
     *
     * @return string
     */
    public function getLang()
    {
        return $this->lang;
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
     * Set membersCount
     *
     * @param integer $membersCount
     */
    public function setMembersCount($membersCount)
    {
        $this->membersCount = $membersCount;
    }

    /**
     * Get membersCount
     *
     * @return integer
     */
    public function getMembersCount()
    {
        return $this->membersCount;
    }

    /**
     * Set viewsCount
     *
     * @param integer $viewsCount
     */
    public function setViewsCount($viewsCount)
    {
        $this->viewsCount = $viewsCount;
    }

    /**
     * Get viewsCount
     *
     * @return integer
     */
    public function getViewsCount()
    {
        return $this->viewsCount;
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
     * Set tagsCount
     *
     * @param integer $tagsCount
     */
    public function setTagsCount($tagsCount)
    {
        $this->tagsCount = $tagsCount;
    }

    /**
     * Get tagsCount
     *
     * @return integer
     */
    public function getTagsCount()
    {
        return $this->tagsCount;
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
     * @param Aristos\ConsilioBundle\Entity\User $author
     */
    public function setAuthor(\Aristos\ConsilioBundle\Entity\User $author)
    {
        $this->author = $author;
    }

    /**
     * Get author
     *
     * @return Aristos\ConsilioBundle\Entity\User
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set category
     *
     * @param Aristos\ConsilioBundle\Entity\Category $category
     */
    public function setCategory(\Aristos\ConsilioBundle\Entity\Category $category)
    {
        $this->category = $category;
    }

    /**
     * Get category
     *
     * @return Aristos\ConsilioBundle\Entity\Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @return \Aristos\ConsilioBundle\Entity\Doctrine\Common\Collections\ArrayCollection
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * @param \Aristos\ConsilioBundle\Entity\Doctrine\Common\Collections\ArrayCollection $comments
     */
    public function setComments(\Aristos\ConsilioBundle\Entity\Doctrine\Common\Collections\ArrayCollection $comments)
    {
        $this->comments = $comments;
    }


}