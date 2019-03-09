<?php
/**
 * Created by PhpStorm.
 * User: Shancept
 * Date: 09.03.19
 * Time: 22:08
 */

namespace classes;


use controllers\Courses;
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
        if($path_info !== '/') {
            Db::dBConnect($config['db']);
        }
        if ($path_info === '/api/feedback') {
            Feedback::actionIndex($this->request, $this->response);
        } elseif ($path_info === '/api/courses') {
            Courses::actionIndex($this->request, $this->response);
        } else {
            require_once $config['base_path'] . '/dist/index.html';
        }
    }
}