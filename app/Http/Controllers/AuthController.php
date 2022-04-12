<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function login (Request $request)
    {
        $user = $request->only('name','email');
        if ( Auth ::attempt($user))
        {
            return response()->json(
                [
                    'status'=>201,
                    'msg'=> 'Dang nhap thanh cong'
                ]
            );
        }
        else
        {
            return response()->json(
                [
                    'status'=>false,
                    'msg'=>'Sai ten tai khoan hoac mat khau',
                ]
            );
        }
    }
}