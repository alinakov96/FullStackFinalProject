<?php
require_once __DIR__ . '/../../helpers.php';

class Authenticate
{
    public function __construct(
        public $model = User::class
    ) {
    }

    public function login(array $credentials): void
    {
        if(($_SESSION['is_authenticated'] ?? '')){
            redirect('index.php');
        }

        $model = (new $this->model)->getByCredentials($credentials['email']);

        if (!$model) {
            redirect('login.php');
        }

        $verified = password_verify(($credentials['password'] ?? ''), ($model['password'] ?? ''));

        if ($verified) {
            $this->setAuthenticated($model);
            redirect('index.php');
        }else{
            redirect('login.php');
        }
    }

    public function logout()
    {
        session_destroy();
        redirect('index.php');
    }

    public function setAuthenticated($model): void
    {
        $_SESSION['is_authenticated'] = 1;
        $_SESSION['user_id'] = $model['id'];
    }
}
