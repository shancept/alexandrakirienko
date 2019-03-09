<?php
/**
 * Created by PhpStorm.
 * User: Shancept
 * Date: 09.03.19
 * Time: 22:27
 */

namespace classes;


class Response extends \Symfony\Component\HttpFoundation\Response
{
    public function __construct($content = '', $status = 200, array $headers = [])
    {
        parent::__construct($content, $status, $headers);
    }
}