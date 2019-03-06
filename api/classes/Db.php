<?php
/**
 * Created by PhpStorm.
 * User: Shancept
 * Date: 07.03.19
 * Time: 0:32
 */

/**
 * Class DB
 */
final class DB
{
    /**
     * Хранит инстанс класса
     * @var DB
     */
    private static $instance;

    /**
     * DB constructor.
     * @param $param
     */
    public function __construct($param)
    {

    }

    /**
     * Отключение клона
     */
    public function __clone(){}


    /**
     * Получить инстанс класса
     */
    public static function getInstance()
    {

    }

    /**
     * Соединение с базой даных
     */
    public function DBConnect() {

    }
}