<?php
include 'database/config.php';
$result = "select * from product";
$data=  mysql_query($result) or die(mysql_error());

$rows = array();

while ($row = mysql_fetch_array($data)) {
  $rows[] = $row;
}
    print json_encode($rows);