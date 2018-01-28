<?php

namespace App\Http\Controllers\Api;

use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    protected $user;

    public function __construct(UserRepository $user)
    {
        $this->user = $user;
    }

    /*User Registration*/
    public function registration(){

    }
}
