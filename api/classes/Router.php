<?php
/**
 * Created by PhpStorm.
 * User: Shancept
 * Date: 09.03.19
 * Time: 22:08
 */

namespace classes;


use controllers\Feedback;

class Router
{
    private $request;

    private $response;

    public function __construct()
    {
        $this->request = new Request();
        $this->response = new Response();
    }

    public function init($config)
    {
        $path_info = $this->request->getPathInfo();
        if ($path_info === '/feedback') {
            Feedback::actionIndex($this->request, $this->response);
        } else {
            require_once $config['base_path'] . '/dist/index.html';
        }
    }
}