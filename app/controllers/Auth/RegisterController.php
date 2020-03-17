<?php
declare(strict_types=1);

namespace Auth;

use Phalcon\Mvc\Controller;
use Phalcon\Validation;
use Phalcon\Validation\Validator\Email;
use Phalcon\Validation\Validator\PresenceOf;
use Phalcon\Validation\Validator\StringLength;
use Phalcon\Validation\Validator\Confirmation;

class RegisterController extends Controller
{
    public function indexAction()
    {
        $this->view->pick('auth/register');
    }

    public function postAction()
    {
        $validation = new Validation();

        $validation->add(
            'name',
            new PresenceOf(
                [
                    'message' => 'The name is required'
                ]
            )
        );

        $validation->add(
            'name',
            new StringLength(
                [
                    'max' => 50,
                    'min' => 2,
                    'messageMaximum' => 'We don\'t like really long names',
                    'messageMinimum' => 'We want more than just your initials',
                ]
            )
        );

        $validation->add(
            'email',
            new Email(
                [
                    'message' => 'The e-mail is not valid',
                ]
            )
        );

        $validation->add(
            'email',
            new StringLength(
                [
                    'max' => 50,
                    'min' => 2,
                    'messageMaximum' => 'Your email is more 50 characters, really ?',
                    'messageMinimum' => 'Just put a normal email',
                ]
            )
        );

        $validation->add(
            'password',
            new PresenceOf(
                [
                    'message' => 'The password is required'
                ]
            )
        );

        $validation->add(
            'password',
            new StringLength(
                [
                    'max' => 50,
                    'min' => 8,
                    'messageMaximum' => 'We don\'t like really long password (no more 50 chars)',
                    'messageMinimum' => 'Password too weak (min 8)',
                ]
            )
        );

        $validation->add(
            "password",
            new Confirmation(
                [
                    "message" => "Password doesn't match confirmation",
                    "with"    => "password_confirmation",
                ]
            )
        );



        $messages = $validation->validate($_POST);
        if (count($messages)) {
            foreach ($messages as $message) {
                echo $message, '<br>';
            }

            return 'nope';
        }
    }
}