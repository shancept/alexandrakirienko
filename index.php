<?php
/**
 * Created by PhpStorm.
 * User: Shancept
 * Date: 07.03.19
 * Time: 0:09
 */

//todo убрать в продакшне
ini_set('display_errors', 1);
error_reporting(E_ALL);

require(__DIR__ . '/vendor/autoload.php');

$config = include_once(__DIR__.'/config.php');

\classes\Db::dBConnect($config['db']);

(new \classes\Router())->init($config);