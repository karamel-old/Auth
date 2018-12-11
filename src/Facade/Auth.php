<?php

namespace Karamel\Auth\Facade;

class Auth
{
    private static $instace;

    private static function getInstance()
    {
        if (self::$instace == null)
            self::$instace = new \Karamel\Auth\Auth();
        return self::$instace;
    }


    public function login()
    {
        return self::getInstance()->login();
    }

    public function logout()
    {

        return self::getInstance()->logout();
    }

    public function user()
    {
        return self::getInstance()->user();
    }

    public function check()
    {
        return self::getInstance()->check();
    }
}