<?php
/**
 * Created by PhpStorm.
 * User: Shancept
 * Date: 09.03.19
 * Time: 22:00
 */

namespace classes;


class Request extends \Symfony\Component\HttpFoundation\Request
{
    public function __construct()
    {
        parent::__construct($_GET, $_POST, [], $_COOKIE, $_FILES, $_SERVER);
    }
}