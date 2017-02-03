<?php

include 'database/config.php';
$data = json_decode(file_get_contents("php://input"));
$pname = mysql_real_escape_string($data->pname);

$pqty = mysql_real_escape_string($data->pqty);
$pprice = mysql_real_escape_string($data->pprice);
$name = mysql_real_escape_string($data->name);
$total = mysql_real_escape_string($data->total);
$query = "INSERT INTO product SET
                    pname = '" . $pname . "',
                    pqty = '" . $pqty . "',
                    pprice = '" . $pprice . "',
                    name = '" . $name . "',
                   total = '" . $total . "'";
mysql_query($query);
