<?php

namespace Aristos\ConsilioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\CommentBundle\Entity\Comment as BaseComment;
/**
 * Aristos\ConsilioBundle\Entity\Comment
 */


//class Comment extends BaseComment
class Comment extends BaseComment
{

    protected $id;

    /**
     * Author of the comment
     *
     * @var User
     */
    protected $author;


    /**
     * @param User
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * Get authorName
     * @return string
     */
    public function getAuthorName()
    {
        return $this->getAuthor()->getUsername();
    }

    /**
     * Comment voting score.
     *
     * @MongoDB\Field(type="int")
     * @var integer
     */
    protected $score;

    /**
     * Sets the current comment score.
     *
     * @param integer $score
     */
    public function setScore($score)
    {
        $this->score = intval($score);
    }

    /**
     * Gets the current comment score.
     *
     * @return integer
     */
    public function getScore()
    {
        return $this->score;
    }
}