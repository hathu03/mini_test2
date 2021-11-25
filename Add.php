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
    <form method="post">
        <h4>Add New Person</h4>
        <table style="border: 1px solid;">
            <tr>
                <td><input type="text" name="name" placeholder="Enter Name"></td>
            </tr>
            <tr>
                <td><input type="text" name="age" placeholder="Enter Age"></td>
            </tr>
            <tr>
                <td><button style="background-color: cornflowerblue; color: white; border-radius: 15px; border: none">Add</button></td>
            </tr>
        </table>
    </form>
    </body>
    </html>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {

    $person->addData($_REQUEST);
    header("location: index.php");
}

?>