<?php
//session_start();

require __DIR__.'/../
config.php';
require __DIR__.'/../Helpers/Helpers.php';
require __DIR__.'/../vendor/autoload.php';

$core = new Core\Core();
$core->run();