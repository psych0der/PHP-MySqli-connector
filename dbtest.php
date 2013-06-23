<?php

include('database.php');

$db = new Database('localhost','root','root','test');
$flag = $db->delete('name');
if (!$flag)
echo $db->error();
$db->select('name');
print_r($db->getResult());
unset($db);
?>

