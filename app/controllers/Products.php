<?php

namespace Controller;
class Products
{
    use Controller;

    public function index()
    {
        $this->view('products');
    }
}
