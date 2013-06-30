<?php

include('database.php');

$db = new Database('localhost','root','root','test');

$db->insert('name',array('mayank','psych0der','bhola'),array('first','middle','last'));
$db->insert('name',array('m','psych0der','b'),array('first','middle','last'));
echo $db->error();



echo $db->error();

$db->update('name',array('middle'=>'nobles0ul'),array('first','mayank'));
echo $db->error();
$db->select('name',true,'*','middle = "nobles0ul"');
echo $db->error();
echo "result   ".$db->getResult();


?>

