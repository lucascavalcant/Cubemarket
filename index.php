<?php

ob_start();

session_start();

require 'functions.php';
require 'config/config.php';
require 'vendor/autoload.php';

$bootstrap = new Bootstrap();
$bootstrap->init();