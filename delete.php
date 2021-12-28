<?php 
require_once "db.php";
$id = $_GET["id"];
$sql = "delete from persons where id = $id";
$conn->query($sql);  
header('location:table.php');
 ?>