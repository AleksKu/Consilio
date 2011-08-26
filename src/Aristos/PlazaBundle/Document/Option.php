<?php
/**
 * Date: 8/25/11
 * Time: 12:29 PM
 * @author Aleksey Kuznetsov <mrakobesov@gmail.com>
 */
 namespace Aristos\PlazaBundle\Document;

 /** @EmbeddedDocument */
 class Option {




    protected $okey;

    protected $ovalue;



    public function _construct($key, $value = null)
    {
        $this->okey = $key;
        $this->ovalue = $value;
    }

     public function getOkey()
     {
         return $this->okey;
     }

     public function setOkey($okey)
     {
         $this->okey = $okey;
     }

     public function getOvalue()
     {
         return $this->ovalue;
     }

     public function setOvalue($ovalue)
     {
         $this->ovalue = $ovalue;
     }


 }
