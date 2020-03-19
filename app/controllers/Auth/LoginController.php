<?php
declare(strict_types=1);

namespace Auth;

use Phalcon\Mvc\Controller;
use Phalcon\Http\Request;
use Phalcon\Validation;
use Phalcon\Validation\Validator\Email;
use Phalcon\Validation\Validator\PresenceOf;
use Phalcon\Validation\Validator\StringLength;
use Phalcon\Validation\Validator\Confirmation;
use Phalcon\Logger;
use Phalcon\Logger\Adapter\Stream;

class LoginController extends Controller
{
    /**
     * @param array $data
     */
    private function log(array $data)
    {
        $date = Date('Y-m-d');
        $adapter = new Stream("../storage/logs/{$date}.log");
        $logger  = new Logger(
            'messages',
            [
                'main' => $adapter,
            ]
        );
        $logger->info(json_encode($data));
    }

    public function indexAction()
    {
        $request = new Request;
        $data = [
            'ip' => $request->getClientAddress(),
            'page' => 'login'
        ];
        $this->log($data);

        $this->view->pick('auth/login');
    }

    public function postAction()
    {

    }
}