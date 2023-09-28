

<?php

$serverName = 'localhost';
$userName = 'root';
$password = '';
$dbName = 'fci';


echo "<pre>";
print_r($_POST);
echo "</pre>";

$fnameDb = $_POST["fname"];
$lnameDb = $_POST["lname"];
$emailDb = $_POST["email"];
$passwordDb = $_POST["password"];


if (isset($_POST["id"])) {
    $id = $_POST["id"];
}


$con = new mysqli($serverName, $userName, $password, $dbName);


if (isset($_POST["add"])) {
    $con->query("insert into student (fname,lname,email,password) values('$fnameDb','$lnameDb','$emailDb','$passwordDb')");
    header("location:display.php");

} elseif (isset($_POST["update"])) {
    $con->query("UPDATE student SET fname = '$fnameDb', lname= '$lnameDb', email= '$emailDb', password= '$passwordDb' WHERE id='$id' ");

    header("location:display.php");
}






?>

