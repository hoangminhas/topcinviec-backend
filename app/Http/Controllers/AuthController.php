<?php

namespace App\Http\Controllers;
use App\Http\Requests\LoginFormRequest;


use App\Services\AuthService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
     public $authService;
    public function __construct(AuthService $authService)
    {
        return $this->authService = $authService;
    }
    public function login (LoginFormRequest $request)
    {
      if ( $this->authService->login($request))
      {
          return response()->json(
              [
                  'status'=>true,
                  'msg'=>'Dang nhap thanh cong'
              ]
          );
      }
      else
      {
          return response()->json(
              [
                  'status'=>false,
                  'msg'=>'Sai ten toan khoan hoac mat khau'
              ]
          );
      }
    }

    public function logout()
    {
        Auth::logout();
    }
}
