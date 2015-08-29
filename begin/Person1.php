<?php
/**
 * Created by PhpStorm.
 * User: R.McDonald
 * Date: 3/23/2015
 * Time: 9:29 PM
 */

class Person1 {

    public    $name;
    public    $age;

/**/    public   function __construct(){
        echo 'Constructed';
    }


    public   function sentence() {
        return $this->name .' is '.$this->age.' years old';
    }



} 