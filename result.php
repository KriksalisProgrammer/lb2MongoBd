<?php
require 'connection.php';
$name1=$_GET['name1'];
$name2=$_GET['date1'];
$person=$db->find(['projectName'=>$name1,'startDate'=>$name2],
        ['_id' => 0, 'description' => 1]);
foreach ($person as $per) 
{
	print_r($per['description']);
echo "<br>";

}
?>