 <?php
/**
 * Created by PhpStorm.
 * User: R.McDonald
 * Date: 3/23/2015
 * Time: 9:20 PM
 */

 //======================USING OBJECT===============================



 $object = new stdClass();

 $object -> name = "John";

 echo $object->name.'<br>';



 //=====================USING OBJECT WITH ARRAY===============================\

 $object_2 = new stdClass();
 $object_2->names = ['John','Billy', 'Susan','Max'];

 foreach($object_2->names as $name){
  echo $name .'<br>';
 }