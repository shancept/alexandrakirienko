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
$drop_data_base = "DROP DATABASE `$db_name`";


//Миграция для удаления базы данных
if($argv[1] === 'drop_data_base') {
    try {
        $mysql->exec($drop_data_base);
        die("Drop data base $db_name".PHP_EOL);
    } catch (PDOException $e) {
        die("DB ERROR: ". $e->getMessage().PHP_EOL);
    }
}

try {
    $mysql->exec($create_db_sql);
    //todo таблица пользователи
    echo "Create data base $db_name".PHP_EOL;
} catch (PDOException $e) {
    die("DB ERROR: ". $e->getMessage().PHP_EOL);
}