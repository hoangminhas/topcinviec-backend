<?php
namespace App\Services;
class BaseService
{
    public function sendResponse($data,$msg,$code = 200)
    {
        $response = [
            'status'=>true,
            'data'=>$data,
            'msg'=>$msg
        ];
        return response()->json($response,$code);
    }

    public function sendError($data,$msg)
    {
        $response = [
            'status'=>false,
            'data'=>$data,
            'msg'=>$msg
        ];
        return response()->json($response);
    }
}
