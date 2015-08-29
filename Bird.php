<?php
/**
 * Created by PhpStorm.
 * User: R.McDonald
 * Date: 3/23/2015
 * Time: 9:55 PM
 */

class Bird {

    protected  $canFly;
    protected  $legCount;

    public function __construct($canFly,$legCount){

        $this->canFly = $canFly;
        $this->legCount = $legCount;


    }

    public  function canFly(){
     return $this->canFly;
    }

    public  function getLegCount(){
     return $this->legCount;
    }



} 