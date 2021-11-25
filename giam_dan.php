<?php
include_once "PersonManager.php";
$person = new PersonManager();
$person->sortDown();
header("location: index.php");
?>