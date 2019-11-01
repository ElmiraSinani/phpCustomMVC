<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

$GLOBALS['config'] = array(
    'addname' => 'phpSteroid',
    'domain' => 'phpSteroid.com',
    'path' => array(
        'app' => 'app/',
        'core' => 'core/',
        'index' => 'index.php'
    ),
    'defaults' => array(
        'controller' => 'main',
        'method' => 'index'
    ),
    'routes' => array(),
    'database' => array(
        'host' => 'localohost',
        'username' => 'root',
        'password' => '',
        'name' => 'webappmaker'
    ),
);

require_once $GLOBALS['config']['path']['core'] . 'autoload.php';
new router();
