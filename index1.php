<?php
/**
 * Created by PhpStorm.
 * User: R.McDonald
 * Date: 3/23/2015
 * Time: 9:30 PM
 */

/*===========================USING CLASS========================*/

require 'Person.php';

$person = new Person('John',20);


/*$person->name = "John";
$person->age = 20;*/

echo $person->sentence();

