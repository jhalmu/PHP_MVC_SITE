<?php

namespace Model;

defined('ROOTPATH') OR exit('Access Denied!');
class User
{
    use Model;

    protected string $table = 'users';
    protected array $allowedColumns = [
      'email',
      'password',
    ];

    public function validate($data)
    {
        $this->errors = [];

        if(!empty($data['email'])) {
            if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL))
            {
                $this->errors['email'] = "Valid Email needed, thanks";
            }
        } else {
            $this->errors['email'] = "Email needed, thanks";
        }
        if(empty($data['password']))
        {
            $this->errors['password'] = "Password needed, thanks";
        }

        if (empty($this->errors))
        {
            return true;
        }

        return false;


    }
}