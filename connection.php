<?php
require_once __DIR__ . '/vendor/autoload.php';
$db = (new MongoDB\Client)->test->tasks;
?>