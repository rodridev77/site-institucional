<?php

session_start();

require_once "configs/config.inc.php";
require_once "configs/my_autoload.php";

$core = new Core();
$core->run();
