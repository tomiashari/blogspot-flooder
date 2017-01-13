<?php

require_once('lib/flood.php');

$url = 'tomi-xxx.blogspot.co.id';
$hits = '5';

$flood = new Flood();
$flood->send_flood($url, $hits);