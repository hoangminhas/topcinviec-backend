<?php

namespace App\Services;

use App\Repositories\AuthRepository;
use http\Client\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthService extends BaseService
{
    public $authRepository;

    public function __construct(AuthRepository $authRepository)
    {
        $this->authRepository = $authRepository;
    }

    public function login($request)
    {
        $data = $request->only('email','password');
        if(Auth::attempt($data)){
            return response()->json(
              [
                  'status'=>201,
                  'msg'=>'Dang nhap thanh cong'
              ]
          );
        }
        else{
            return response()->json(
              [
                  'status'=>false,
                  'msg'=>'Sai ten toan khoan hoac mat khau'
              ]
          );
        }
    }

    public function register($request)
    {
        $data = $request->only('email', 'password');
        $data['password'] = Hash::make($data['password']);
        $this->authRepository->createUser($data);
//        return $this->sendResponse($data, 'create success');
    }
}
