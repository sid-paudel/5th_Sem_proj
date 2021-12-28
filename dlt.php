<?php 
require_once "db.php";
$id = $_GET["id"];
$sql = "delete from tbl_miss where id = $id";
$conn->query($sql);  
header('location:missing_table.php');
 ?>