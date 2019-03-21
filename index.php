<?php
/**
 * Created by PhpStorm.
 * User: Shancept
 * Date: 07.03.19
 * Time: 0:09
 */

$config = include_once(__DIR__.'/config.php');

if(isset($config['mode']) && $config['mode'] === 'dev') {
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
}

require(__DIR__ . '/vendor/autoload.php');

(new \classes\Router())->init($config);