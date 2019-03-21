<?php
/**
 * Created by PhpStorm.
 * User: Shancept
 * Date: 11.03.19
 * Time: 0:52
 */

namespace classes;


use PHPMailer\PHPMailer\PHPMailer;

class Mail
{
    private $php_mailer;
    private $config;

    public function __construct($config, PHPMailer $php_mailer)
    {
        $this->config = $config;
        $this->php_mailer = $php_mailer;

        $this->php_mailer->SMTPDebug = 2;
        $this->php_mailer->isSMTP();
        $this->php_mailer->Host = $this->config['host'];
        $this->php_mailer->SMTPAuth = true;
        $this->php_mailer->Username = $this->config['user_name'];
        $this->php_mailer->Password = $this->config['password'];
        $this->php_mailer->SMTPSecure = $this->config['SMTP_secure'];
        $this->php_mailer->Port = 587;
        return $this;
    }

    public function send($to, $subj, $body)
    {
        try {
            $this->php_mailer->setFrom($this->config['user_name'], 'Александра Кириенко');
            $this->php_mailer->addAddress($to);
            $this->php_mailer->isHTML(true);

            $this->php_mailer->Subject = $subj;
            $this->php_mailer->Body = $body;

            $this->php_mailer->send();
        } catch (\Exception $e) {
            echo 'Message could not be sent. Mailer Error: ', $this->php_mailer->ErrorInfo;
        }
    }

    /**
     * return text html for mail
     * @param $feedback
     * @return string
     */
    public static function getTextFeedBack($feedback)
    {
        $html = '<h1>Новое обращение с сайта</h1>';
        if (isset($feedback['name'])) $html = '<p>Имя: ' . $feedback['name'] . '</p>';
        if (isset($feedback['phone'])) $html .= '<p>Телефон: ' . $feedback['phone'] . '</p>';
        if (isset($feedback['email'])) $html .= '<p>Email: ' . $feedback['email'] . '</p>';
        if (isset($feedback['city'])) $html .= '<p>Город: ' . $feedback['city'] . '</p>';
        if (isset($feedback['message'])) $html .= '<p>Текст: ' . $feedback['message'] . '</p>';
        if (isset($feedback['email'])) $html .= '<p>Дата: ' . $feedback->date . '</p>';
        return $html;
    }
}