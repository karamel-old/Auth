<?php

namespace Karamel\Auth;

use Karamel\Cookie\Facade\Cookie;

class Auth
{
    private $session;
    private $filename;

    public function __construct()
    {
        $this->filename = md5(time() . rand());
        $session = new \Karamel\Session\Session($this->filename);
        $this->session = $session;
    }


    public function login()
    {
        Cookie::set(KM_AUTH_COOKIE_NAME, $this->filename, KM_AUTH_COOKIE_EXPIRE);
        $this->session->set('logged', true);
    }

    public function logout($user)
    {

        $this->session->destroy();
        Cookie::set(KM_AUTH_COOKIE_NAME, null, -1);
    }

    public function user()
    {

    }

    public function check()
    {
        if (Cookie::get(KM_AUTH_COOKIE_NAME) == null)
            return false;

        if ($this->session->get('logged') == null)
            return false;

        return true;
    }
}