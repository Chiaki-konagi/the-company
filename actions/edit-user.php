<?php
include "../classes/User.php";

// Create obj
$user = new User();

// calling the method
$user->update($_POST, $_FILES);
?>