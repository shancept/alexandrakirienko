<?php
/**
 * Created by PhpStorm.
 * User: Shancept
 * Date: 09.03.19
 * Time: 15:07
 */

namespace models;


use classes\Models;

class Feedback extends Models
{
    public $table_name = 'feedback';

    public static function addFeedback($name, $phone, $message = null, $email = null, $city = null)
    {
        $sql = "INSERT INTO `feedback` (`name`, `phone`, `email`, `city`, `message`,`date`)
          VALUES (:name, :phone, :email, :city, :message, :date);";
        $model = self::model()->db->prepare($sql);
        $model->bindParam(':name', $name);
        $model->bindParam(':phone', $phone);
        $model->bindParam(':email', $email);
        $model->bindParam(':city', $city);
        $model->bindParam(':message', $message);
        $model->bindParam(':date', $date);

        $date = (new \DateTime())->format('Y.m.d H:i:s');
        try {
            if(!!$model->execute() === false) {
                return false;
            } else {
                return [
                    'name' => $name,
                    'phone' => $phone,
                    'email' => $email,
                    'city' => $city,
                    'message' => $message,
                    'date' => $date,
                ];
            }
        } catch (\PDOException $exception) {
            return false;
        }
    }

    public static function getAll()
    {
        $sql = "SELECT * FROM `feedback`";
        $sth = self::model()->db->prepare($sql);
        $sth->execute();
        return $sth->fetchAll();
    }
}