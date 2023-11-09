<?php

namespace Ductong\BaseMvc\Controllers;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\User;

class UserController extends Controller
{
    public function index() {
        $users = (new User)->all();
        
        $this->render('user/index', ['users' => $users]);
    }
}
