<?php
/**
 * Date: 8/24/11
 * Time: 1:13 PM
 * @author Aleksey Kuznetsov <mrakobesov@gmail.com>
 */


namespace Aristos\ConsilioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/** @Entity */
class Video extends  Material {

 protected $description;

    protected $releaseDate;
}

