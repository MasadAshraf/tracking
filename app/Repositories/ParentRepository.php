<?php

namespace App\Repositories;

use Czim\Repository\BaseRepository;
use App\Models\ParentTable;

class ParentRepository extends BaseRepository
{
    /**
     * Returns specified model class name.
     *
     * @return string
     */
    public function model()
    {
        return ParentTable::class;
    }

    public function loginParent($data)
    {
        return $this->model->where([
            ['email', $data['email']],
            ['password', $data['password']]
        ])
            ->first();
    }


}
