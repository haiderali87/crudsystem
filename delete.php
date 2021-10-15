<?php
include_once("connection.php");
$id = $_GET['id'];
$sql = "DELETE  FROM users WHERE id=$id";
$res = mysqli_query($conn, $sql);
if ($res) {
    header("location:show.php");
}
