<?php
/**
 * Created by PhpStorm.
 * User: Shancept
 * Date: 09.03.19
 * Time: 14:43
 */

namespace models;


use classes\Models;

class Courses extends Models
{
    public $table_name = 'courses';

    public static function getAll()
    {
        $sql = "SELECT * FROM `courses`";
        $sth = self::model()->db->prepare($sql);
        $sth->execute();
        return $sth->fetchAll();
    }

    public static function getAllActive()
    {
        $sql = "SELECT * FROM `courses` WHERE `active` = 1";
        $sth = self::model()->db->prepare($sql);
        $sth->execute();
        return $sth->fetchAll();
    }

    public static function getAllActiveInPage($page)
    {
        $sql = "SELECT * FROM `courses` WHERE `active` = 1 AND `page` = :page";
        $sth = self::model()->db->prepare($sql);
        $sth->bindParam(':page', $page);
        $sth->execute();
        return $sth->fetchAll();
    }

    public static function getByProductIdentifier($pi)
    {
        $sql = "SELECT * FROM `courses` WHERE `product_identifier` = :pi";
        $sth = self::model()->db->prepare($sql);
        $sth->bindParam(':pi', $pi);
        $sth->execute();
        return $sth->fetch();
    }

    public static function getById($id)
    {
        $sql = "SELECT * FROM `courses` WHERE `id` = :id";
        $sth = self::model()->db->prepare($sql);
        $sth->bindParam(':id', $id);
        $sth->execute();
        return $sth->fetch();
    }
}