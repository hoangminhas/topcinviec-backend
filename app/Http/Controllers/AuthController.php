<?php

namespace App\Http\Controllers;
use App\Services\AuthService;
use Illuminate\Http\Request;



class AuthController extends Controller
{
     public $authService;
    public function __construct(AuthService $authService)
    {
        return $this->authService = $authService;
    }
    public function login (Request $request)
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
}
