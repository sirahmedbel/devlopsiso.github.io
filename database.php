<?php

$username = "root";
$password = "";
$database = new POD("mysql:host=localhost;dbname=devlopsiso;charset=utf8;"$username,$password);

if($database){
echo'ok';
}
  ?>
