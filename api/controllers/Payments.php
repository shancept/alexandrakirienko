<?php
/**
 * Created by PhpStorm.
 * User: Shancept
 * Date: 10.03.19
 * Time: 12:54
 */

namespace controllers;


use classes\Request;
use classes\Response;
use models\Payments as MPayments;

class Payments
{
    /**
     * @param $request Request
     * @param $response Response
     */
    public static function actionIndex($request, $response)
    {
        if (!$request->isXmlHttpRequest()) {
            return;
        }
        if ($request->isMethod('post')) {
            $post = $request->request;
            $answer = MPayments::addPayment(
                $post->get('user_id'),
                $post->get('course_id'),
                $post->get('sum')) ?
                ['result' => 'success'] :
                ['result' => 'error'];
            //todo  отправка на почту
            $response->setContent(json_encode($answer));
            $response->send();
        } elseif ($request->isMethod('put')) {
            parse_str($request->getContent(), $put);
            //todo переделать определение статусов
            if (isset($put['status']) && isset($put['payment_id'])) {
                $answer = MPayments::changeStatusById(
                    $put['payment_id'],
                    $put['status']) ?
                    ['result' => 'success'] :
                    ['result' => 'error'];
                $response->setContent(json_encode($answer));
                $response->send();
            }
        }
    }
}