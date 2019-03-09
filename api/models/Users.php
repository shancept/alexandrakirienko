<?php
/**
 * Created by PhpStorm.
 * User: Shancept
 * Date: 07.03.19
 * Time: 16:35
 */

namespace models;


use classes\Models;

class Users extends Models
{
    public $table_name = 'users';

    public static function addUser($name, $phone, $instagram, $surname = null, $email = null)
    {
        $sql = "INSERT INTO `users` (`name`, `surname`, `phone`, `email`, `instagram`, `date_create`)
          VALUES (:name, :surname, :phone, :email, :instagram, :date_create);";
        $model = self::model()->db->prepare($sql);
        $model->bindParam(':name', $name);
        $model->bindParam(':surname', $surname);
        $model->bindParam(':phone', $phone);
        $model->bindParam(':email', $email);
        $model->bindParam(':instagram', $instagram);
        $model->bindParam(':date_create', $date_create);

        $date_create = (new \DateTime())->format('Y.m.d H:i:s');
        try {
            return !!$model->execute();
        } catch (\PDOException $exception) {
            return false;
        }
    }

    public static function getAll()
    {
        $sql = "SELECT * FROM `users`";
        $sth = self::model()->db->prepare($sql);
        $sth->execute();
        return $sth->fetchAll();
    }
}