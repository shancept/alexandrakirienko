<?php
/**
 * Created by PhpStorm.
 * User: Shancept
 * Date: 09.03.19
 * Time: 22:25
 */

namespace controllers;


use classes\Mail;
use classes\Request;
use classes\Response;
use \models\Feedback as MFeedback;
use PHPMailer\PHPMailer\PHPMailer;

class Feedback
{
    /**
     * @param $request Request
     * @param $response Response
     * @param array $config
     */
    public static function actionIndex($request, $response, $config)
    {
        if (!$request->isXmlHttpRequest()) {
            return;
        }
        if ($request->isMethod('post')) {
            $post = $request->request;
            $m_feedback = MFeedback::addFeedback(
                $post->get('name'),
                $post->get('phone'),
                $post->get('message'),
                $post->get('email'),
                $post->get('city'));
            $answer = $m_feedback !== false ?
                ['result' => 'success'] :
                ['result' => 'error'];

            (new Mail($config['mail'], new PHPMailer(true)))
                ->send($config['mail']['user_name'], 'Сообщение с сайта', Mail::getTextFeedBack($m_feedback));
            $response->setContent(json_encode($answer));
            $response->send();
        }
    }
}
