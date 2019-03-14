<?php
/**
 * Created by PhpStorm.
 * User: Shancept
 * Date: 10.03.19
 * Time: 12:56
 */

namespace models;


use classes\Models;

class Payments extends Models
{
    const STATUS_STARTED = 'started';
    const STATUS_IN_PROCESSING = 'in_processing';
    const STATUS_PAID = 'paid';
    const STATUS_PAYMENT_ERROR = 'payment_error';

    public $table_name = 'payments';

    public static function addPayment($user_id, $course_id, $sum = false)
    {
        $sql = "INSERT INTO `payments` (`user_id`, `course_id`, `sum`, `status`, `date_create`,`date_update`)
          VALUES (:user_id, :course_id, :sum, :status, :date_create, :date_update);";
        $model = self::model()->db->prepare($sql);
        $model->bindParam(':user_id', $user_id);
        $model->bindParam(':course_id', $course_id);
        $model->bindParam(':sum', $sum);
        $model->bindParam(':status', $status);
        $model->bindParam(':date_create', $date_create);
        $model->bindParam(':date_update', $date_update);

        if(!$sum) {
            $course = Courses::getById($course_id);
            if($course === false) {
                return false;
            }
            $sum = $course['price'];
        }

        $status = self::STATUS_STARTED;
        $date_create = (new \DateTime())->format('Y.m.d H:i:s');
        $date_update = (new \DateTime())->format('Y.m.d H:i:s');
        try {
            return !!$model->execute();
        } catch (\PDOException $exception) {
            return false;
        }
    }

    public static function changeStatusById($id, $status)
    {
        $sql = "UPDATE `payments` SET `status` = :status, `date_update` = :date_update WHERE `id` = :id;";
        $model = self::model()->db->prepare($sql);
        $model->bindParam(':id', $id);
        $model->bindParam(':status', $status);
        $model->bindParam(':date_update', $date_update);
        $date_update = (new \DateTime())->format('Y.m.d H:i:s');
        try {
            return !!$model->execute();
        } catch (\PDOException $exception) {
            return false;
        }
    }
}