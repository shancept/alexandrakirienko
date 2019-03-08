<?php
/**
 * Created by PhpStorm.
 * User: Shancept
 * Date: 09.03.19
 * Time: 1:51
 */

namespace classes;


class Models
{
    /**
     * @var \PDO | null
     */
    protected $db;

    public function __construct()
    {
        $this->db = Db::getDbh();
    }

    public static function model()
    {
        return new self();
    }
}