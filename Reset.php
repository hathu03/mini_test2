<?php
include_once "PersonManager.php";
$person = new PersonManager();
$person->reset();
header("location: index.php");
?>