<?php
include_once "Person.php";
include_once "PersonManager.php";
$person = new PersonManager();
$person = $person->load();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
          integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
<form action="" method="post">

</form>
</body>
<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">STT</th>
        <th scope="col">Name</th>
        <th scope="col">Age</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($person as $key => $person): ?>
        <tr>
            <td><?php echo $key + 1 ?></td>
            <td><?php echo $person->getName() ?></td>
            <td><?php echo $person->getAge() ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
    <button style="border-radius: 15px;background-color: cornflowerblue; border: none"><a href="Add.php"
                                                                                          style="color: white">Add
            Person</a></button> &ensp;
    <button style="border-radius: 15px;background-color: cornflowerblue; border: none"><a href="tang_dan.php"
                                                                                          style="color: white">Sort
            (A-Z)</a></button> &ensp;
    <button style="border-radius: 15px;background-color: cornflowerblue; border: none"><a href="giam_dan.php"
                                                                                          style="color: white">Sort
            (Z-A)</a></button>&ensp;
    <button style="border-radius: 15px;background-color: cornflowerblue; border: none"><a href="Search.php"
                                                                                          style="color: white">Search</a>
    </button>&ensp;
    <button style="border-radius: 15px;background-color: cornflowerblue; border: none"><a href="Reset.php"
                                                                                          style="color: white">Reset</a>
    </button>
</table>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2"
        crossorigin="anonymous"></script>
</html>