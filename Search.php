<?php
include_once "PersonManager.php";
$person = new PersonManager();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <a href="index.php">Back</a><br>
    <hr>
    <input type="text" name="name" placeholder="Enter Name">
    <button type="submit">Search</button>
</form>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $person->searchName($_REQUEST);
}
?>
