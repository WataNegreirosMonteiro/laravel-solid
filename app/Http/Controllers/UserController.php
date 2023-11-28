<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userService;

    public function __construct(\UseService $userService)
    {
        $this->userService = $userService;
    }

    public function register(Request $request)
    {
        $this->userService->creator($request);

        return 'registrado';
    }
}
