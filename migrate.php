<?php
/**
 * Created by PhpStorm.
 * User: Shancept
 * Date: 07.03.19
 * Time: 10:54
 */

require(__DIR__ . '/vendor/autoload.php');

$config = include_once(__DIR__.'/config.php');

$config_db = $config['db'];
$db_name = $config_db['dbname'];
$user = $config_db['dbname'];
$pass = $config_db['dbname'];

$mysql = \classes\Db::mySqlConnect($config_db);

//SQL
$create_db_sql = "CREATE DATABASE `$db_name`;
            CREATE USER '$user'@'localhost' IDENTIFIED BY '$pass';
            GRANT ALL ON `$db_name`.* TO '$user'@'localhost';
            FLUSH PRIVILEGES;";
$create_users_table = "CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `surname` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `date_create` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
$create_courses_table = "CREATE TABLE `courses` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `price` float NOT NULL,
  `price_for_sale` float DEFAULT NULL,
  `product_identifier` varchar(12) NOT NULL DEFAULT '',
  `active` tinyint(11) DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `product_identifier` (`product_identifier`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
$create_feedback_table = "CREATE TABLE `feedback` (
  `id` INT(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `phone` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) DEFAULT NULL,
  `city` VARCHAR(255) DEFAULT NULL,
  `message` TEXT,
  `date` DATETIME DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=INNODB DEFAULT CHARSET=utf8;";

//Создание базы данных
try {
    if($mysql->exec($create_db_sql)) {
        echo "Create data base $db_name".PHP_EOL;
    } else {
        echo 'error: ' . $mysql->errorInfo()[2] . PHP_EOL;
    }
} catch (PDOException $e) {
    die("DB ERROR: ". $e->getMessage().PHP_EOL);
}

//Создание таблиц
$db = \classes\Db::dBConnect($config_db);
$migrations = [
    ['sql' => $create_users_table, 'message' => 'Create table users'],
    ['sql' => $create_courses_table, 'message' => 'Create table courses'],
    ['sql' => $create_feedback_table, 'message' => 'Create table feedback'],
];
try {
    foreach ($migrations as $migration) {
        if($db->exec($migration['sql'])) {
            echo $migration['sql'] . PHP_EOL;
        } else {
            echo 'error: ' . $db->errorInfo()[2] . PHP_EOL;
        }
    }
} catch (PDOException $e) {
    die("DB ERROR: ". $e->getMessage().PHP_EOL);
}