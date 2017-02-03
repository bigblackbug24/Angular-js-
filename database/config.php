<?php

$localhost = "127.0.0.1";
$username = "root";
$password = "";
//$dbname = "inventory";
$con = mysql_connect($localhost,$username ,$password );
 $connect=mysql_select_db("angular",$con);