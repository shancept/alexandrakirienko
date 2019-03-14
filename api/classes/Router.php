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
use controllers\Payments;

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
        if ($path_info !== '/') {
            Db::dBConnect($config['db']);
        }
        $path_info_array = array_filter(explode('/', $path_info), function ($elem) {
            return $elem !== '';
        });

        $first_param = array_shift($path_info_array);
        if ($first_param == 'api') {
            $next_param = array_shift($path_info_array);
            if ($next_param === 'feedback') {
                Feedback::actionIndex($this->request, $this->response, $config);
            } elseif ($next_param === 'courses') {
                Courses::actionIndex($this->request, $this->response);
            } elseif ($next_param === 'payments') {
                Payments::actionIndex($this->request, $this->response);
            }
        } else {
            require_once $config['base_path'] . '/dist/index.html';
        }
        die;
    }
}