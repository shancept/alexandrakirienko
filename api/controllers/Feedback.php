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
use \models\Feedback as MFeedback;

class Feedback
{
    /**
     * @param $request Request
     * @param $response Response
     */
    public static function actionIndex($request, $response)
    {
        //todo $request->isXmlHttpRequest() $request->isMethod('post')
        $post = $request->request;
        $answer = MFeedback::addFeedback(
            $post->get('name'),
            $post->get('phone'),
            $post->get('message'),
            $post->get('email'),
            $post->get('city')) ?
            ['result' => 'success'] :
            ['result' => 'error'];
        //todo  отправка на почту
        $response->setContent(json_encode($answer));
        $response->send();
    }
}