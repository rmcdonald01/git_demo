 <?php
/**
 * Created by PhpStorm.
 * User: R.McDonald
 * Date: 3/23/2015
 * Time: 9:20 PM
 */

 //======================USING OBJECT===============================


require 'Bird.php';
require 'Pigeon.php';
require 'Penguin.php';

 $pigeon = new Pigeon(true,2);

 $penguin = new Penguin(true,2);

 echo 'Will Never'.'<br>';
 echo $pigeon->getLegCount()." Wats Wrong".'<br>';

 if($pigeon->canFly()){
     echo 'Can Fly';
 }

 $penguin->foo();