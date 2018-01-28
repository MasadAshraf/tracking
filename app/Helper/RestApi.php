<?php

namespace App\Helper;

class RestApi{

    public static function response($data = array(), $code = 200 , $msg = 'Success'){

        $res['code'] = $code;
        $res['message'] = $msg;
        $res['result'] = $data;

        return response()->json($res);

    }


}

