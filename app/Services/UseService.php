<?php

use App\Illuminate\Http\Request;

class UseService
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function creator(Request $request)
    {
        $attributes = $request->all();

        if ($attributes['name'] && $attributes['email']) {
            $this->userRepository->save($attributes);
        }

    }

}
