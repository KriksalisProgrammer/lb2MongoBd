<?php
$cursor = $db->find([],[
	'projection' => array(
		'manager' => 1
    )
]);
$result = iterator_to_array($cursor);

$managers = array();
foreach ($result as $manager) {
		$managers[] = $manager;
}