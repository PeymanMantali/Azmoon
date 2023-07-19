<?php

namespace App\Repositories\Contracts\Eloquent;

use App\Repositories\Contracts\UserRepositoryInterface;

class EloquentUserRepository extends EloquentBaseRepository implements UserRepositoryInterface
{
    protected $model = User::class;
}
