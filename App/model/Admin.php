<?php 

namespace App\Model;
use app\Model\UserAuth;

class Admin extends UserAuth
{
    public function __construct($id = null, $email = null, $password = null, $status = null, $Action = null, $name = null, $username = null, $image = null, $role = null)
    {
        parent::__construct($id, $email, $password, $status, $Action, $name, $username, $image, $role);

        $this->role = $role;
    }

}