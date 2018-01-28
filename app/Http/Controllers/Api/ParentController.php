<?php

namespace App\Http\Controllers\Api;

use App\Helper\RestApi;
use App\Http\Requests\Api\ParentLoginRequest;
use App\Repositories\ParentRepository;
use App\Http\Controllers\Controller;

class ParentController extends Controller
{
    //
    protected $parent;

    public function __construct(ParentRepository $parent)
    {
        $this->parent = $parent;
    }

    public function login(ParentLoginRequest $request)
    {
        $postData = $request->all();
        try {
            $res = $this->parent->loginParent($postData);
            if ($res) {
                return RestApi::response($res);
            } else {
                return RestApi::response([], 404, 'Password Do not Match');
            }

        } catch (\Exception $e) {
            return RestApi::response([], 404, $e->getMessage());
        }

    }

}
