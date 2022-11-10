<?php 
include "../classes/User.php";

//Create an obj
$user = new User();

$user->store($_POST);
?>