<?php

namespace App\Http\Controllers\Api;

use App\Helper\RestApi;
use App\Http\Requests\Api\ParentLoginRequest;
use App\Repositories\DriverRepository;
use App\Repositories\ParentRepository;
use App\Http\Controllers\Controller;

class ParentController extends Controller
{
    //
    protected $parent,$driver;

    public function __construct(ParentRepository $parent,DriverRepository $driver)
    {
        $this->parent = $parent;
        $this->driver = $driver;
    }

    public function login(ParentLoginRequest $request)
    {
        $postData = $request->all();
        try {
            $res = $this->parent->loginParent($postData);
            if ($res) {
                $driverRes = $this->driver->getDriverDetailById($res->driver_id);
                return RestApi::response($driverRes);
            } else {
                return RestApi::response([], 404, 'Password Do not Match');
            }

        } catch (\Exception $e) {
            return RestApi::response([], 404, $e->getMessage());
        }

    }

}
