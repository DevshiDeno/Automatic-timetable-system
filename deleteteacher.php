<?php
/**
 * Created by PhpStorm.
 * User: MSaqib
 * Date: 30-09-2016
 * Time: 22:44
 */
include 'connection.php';
$id = $_GET['name'];
$q = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"),
    "DELETE FROM teachers WHERE faculty_number = '$id' ");
$drop = "DROP TABLE " . $id;

$q = mysqli_query(mysqli_connect("localhost", "root", "", "ttms"), $drop);
if ($drop) {

    ?>
        <script>
            setTimeout(()=>{
                window.location.assign("./addteachers.php");
            }, 100)
        </script>
    <?php 

} else {
    echo 'Error';
}
?>

