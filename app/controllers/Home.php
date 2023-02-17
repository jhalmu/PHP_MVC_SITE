<?php

namespace Controller;

defined('ROOTPATH') OR exit('Access Denied!');



class Home
{
    use Controller;


    public function index(): void
    {
        $data = [];
        $data['username'] = empty($_SESSION['USER']) ? 'User' : $_SESSION['USER']->email;
        $this->view('home', data: $data);
    }
}

