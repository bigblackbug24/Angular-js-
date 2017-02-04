<?php
include 'database/config.php';
$data = json_decode(file_get_contents("php://input"));
$pid = $_GET['id'];

$query = "DELETE from product where id =".$pid;

$result = mysql_query($query);
