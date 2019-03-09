<?php
/**
 * Created by PhpStorm.
 * User: Shancept
 * Date: 10.03.19
 * Time: 1:24
 */

namespace controllers;


use classes\Request;
use classes\Response;

class Courses
{
    /**
     * @param $request Request
     * @param $response Response
     */
    public static function actionIndex($request, $response)
    {
        $answer = \models\Courses::getAllActive();
        $response->setContent(json_encode($answer));
        $response->send();
    }
}