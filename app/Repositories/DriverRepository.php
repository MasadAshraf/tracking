<?php

namespace App\Repositories;

use Czim\Repository\BaseRepository;
use App\Models\Driver;

class DriverRepository extends BaseRepository
{
    /**
     * Returns specified model class name.
     *
     * @return string
     */
    public function model()
    {
        return Driver::class;
    }

    public function getDriverDetailById($id){
        /*return $this->model
            ->select('driver.dest_add','driver.scr_add','location.longitude','location.latitude')
            ->join('location','driver.driver_id','location.driver_id')
            ->where('driver.driver_id','=',$id)
            ->first();*/
        return $this->model
            ->select('driver.dest_add','driver.scr_add','location.longitude','location.latitude')
            ->join('location', 'driver.driver_id', '=', 'location.driver_id')
            ->where('driver.driver_id',$id)
            ->first();

    }
}
