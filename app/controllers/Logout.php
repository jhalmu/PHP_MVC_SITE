<?php

namespace Controller;
class Logout
{
    use Controller;

    public function index()
    {
        if (!empty($_SESSION['USER']))
            unset($_SESSION['USER']);

        $this->view('home');
    }

/*    public function edit()
    {
        $this->view('home');
    }*/
}

