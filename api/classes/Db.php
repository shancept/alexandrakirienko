<?php
/**
 * Created by PhpStorm.
 * User: Shancept
 * Date: 07.03.19
 * Time: 0:32
 */

namespace classes;

/**
 * Class Db
 */
final class Db
{
    private static $dbh;

    /**
     * @param array $config
     * @return string
     */
    public static function getDsn($config)
    {
        return $config['mysql'] . ';dbname=' . $config['dbname'];
    }

    /**
     * Соединение с базой даных
     * @param array $config
     * @return boolean | \PDO
     */
    public static function dBConnect($config)
    {
        try {
            self::$dbh = new \PDO(self::getDsn($config), $config['user'], $config['pass'], [
                \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
            ]);
            return self::$dbh;
        } catch (\Exception $e) {
            return false;
        }
    }

    /**
     * @param array $config
     * @return \PDO
     */
    public static function mySqlConnect($config)
    {
        try {
            return new \PDO($config['mysql'], $config['user'], $config['pass'], [
                \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
            ]);
        } catch (\PDOException $e) {
            die('Ошибка подключения к базе данных: ' . $e->getMessage() . PHP_EOL);
        }
    }

    public static function getDbh()
    {
        return self::$dbh;
    }
}