<?php


namespace App\classes;


class Auth
{
    protected $userEmail;
    protected $userPassword;
    protected $adminEmail;
    protected $adminPass;


    public function __construct($post=null)
    {
        if ($post)
        {
            $this->userEmail = $post['user_email'];
            $this->userPassword = $post['user_pass'];
        }
    }

    public function login()
    {
       // echo $this->userEmail;
       // echo $this->userPassword;
       // exit();
        $this->adminEmail = 'admin@admin.com';
        $this->adminPass  = '123456';

        if ($this->userEmail == $this->adminEmail && $this->userPassword == $this->adminPass)
        {
          header('Location: action.php?pages=fileU');
        }
        else {
            return 'Sorry TRy Again!!';
        }
    }

    public function logout()
    {

    }
}