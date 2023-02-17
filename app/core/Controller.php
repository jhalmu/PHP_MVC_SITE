<?php

namespace Controller;

defined('ROOTPATH') OR exit('Access Denied!');
Trait Controller
{
    public function view($name, $data = []): void
    {
        if (!empty($data))
            extract($data);

        $filename = "../app/views/".$name.".view.php";

        if (file_exists($filename)) {
            require $filename;
        } else {
            $filename = "../app/controllers/_404.php";
            require $filename;
        }
    }
}