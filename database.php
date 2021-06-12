<?php

$username = "root" $_POST['name'];
$password = "" $_POST['password'];
$database = new POD("mysql:host=localhost;dbname=devlopsiso;charset=utf8;"$username,$password);

if($database){
echo'ok';
}
  ?>
