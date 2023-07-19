<?php

namespace App\Http\Controllers\API\V1;



use App\Http\Controllers\Controller;
use App\Repositories\Contracts\UserRepositoryInterface;

class UsersController extends Controller
{
    public function __construct(private UserRepositoryInterface $userRepository)
    {

    }

    public function store()
    {
        $this->userRepository->create();
        return response()->json([
            'success' => true,
            'message' => 'user created successfully',
            'data' => [
                'full_name' => 'Peyman mantali',
                'email' => 'peyman@gmail.com',
                'mobile' => '09123456789',
                'password' => '123456',
                ]
        ]
        )-> setStatusCode(201);
    }
}
