<?php
/**
 * Date: 8/24/11
 * Time: 1:13 PM
 * @author Aleksey Kuznetsov <mrakobesov@gmail.com>
 */


namespace Aristos\ConsilioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


class News extends  Material {

    /**
     * @var string
     */
    protected $content;

    /**
     * Источник новости
     * @var string
     */
    protected $source;


    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param string $source
     */
    public function setSource($source)
    {
        $this->source = $source;
    }
}

