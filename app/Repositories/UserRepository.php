<?php

namespace App\Repositories;

use Czim\Repository\BaseRepository;
use App\Models\User;

class UserRepository extends BaseRepository
{
    /**
     * Returns specified model class name.
     *
     * @return string
     */
    public function model()
    {
        return User::class;
    }
}
