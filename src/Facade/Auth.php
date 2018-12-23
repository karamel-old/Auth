<?php

namespace Karamel\Auth\Facade;

class Auth
{
    private static $instace;

    public static function login()
    {
        return self::getInstance()->login();
    }

    private static function getInstance()
    {
        if (self::$instace == null)
            self::$instace = new \Karamel\Auth\Auth();
        return self::$instace;
    }

    public static function logout()
    {

        return self::getInstance()->logout();
    }

    public static function user()
    {
        return self::getInstance()->user();
    }

    public static function check()
    {
        return self::getInstance()->check();
    }
}