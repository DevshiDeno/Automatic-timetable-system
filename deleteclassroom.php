<?php
include 'connection.php';
$id = $_GET['name'];
$q = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"),
    "DELETE FROM classrooms WHERE name = '$id' ");
if ($q) {

    header("Location:allotclasses.php");

} else {
    echo 'Error';
}