<?php
/**
 * Created by PhpStorm.
 * User: R.McDonald
 * Date: 3/23/2015
 * Time: 9:29 PM
 */

class Person {

    public $name;
    public $age;

    public function __construct($name,$age){
        $this->age = $age;
        $this->name =  $name;

    }


    public function sentence() {
        return $this->name .' is '.$this->age.' years old';
    }



} 