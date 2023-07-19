<?php

namespace Tests\API\V1\Users;

use Tests\TestCase;

class UsersTest extends TestCase
{
    public function test_should_create_new_user()
    {
        $response = $this->call('POST','api/v1/users', [
            'full_name' => 'Peyman mantali',
            'email' => 'peyman@gmail.com',
            'mobile' => '09123456789',
            'password' => '123456',
        ]);

        $this -> assertEquals('201', $response->status());
        $this -> seeJsonStructure([
            'success' ,
            'message',
            'data' => [
                'full_name' ,
                'email',
                'mobile',
                'password',
            ]
        ]);
    }
}
