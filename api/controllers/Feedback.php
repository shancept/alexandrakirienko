<?php
/**
 * Created by PhpStorm.
 * User: Shancept
 * Date: 09.03.19
 * Time: 22:25
 */

namespace controllers;


use classes\Request;
use classes\Response;

class Feedback
{
    /**
     * @param $request Request
     * @param $response Response
     */
    public static function actionIndex($request, $response)
    {
        $response->setContent('hello');
        $response->send();
    }
}