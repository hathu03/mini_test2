<?php
include_once "PersonManager.php";
$person = new PersonManager();
$person->sortUp();
header("location: index.php");
?>
