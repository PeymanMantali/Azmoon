<?php

namespace App\Http\Controllers\API\V1;



use App\Http\Controllers\Controller;
use App\Repositories\Contracts\UserRepositoryInterface;
use Illuminate\Http\Request;


class UsersController extends Controller
{
    public function __construct(private UserRepositoryInterface $userRepository)
    {
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'full_name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'password' => 'required',
        ]);

        $this->userRepository->create([
            'full_name' => 'Peyman mantali',
            'email' => 'peyman@gmail.com',
            'mobile' => '09123456789',
            'password' => '123456',
        ]);
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
