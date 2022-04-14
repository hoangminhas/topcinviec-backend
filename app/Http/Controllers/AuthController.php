<?php

namespace App\Http\Controllers;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use App\Http\Requests\LoginFormRequest;
use App\Services\AuthService;
use Illuminate\Http\Request;



class AuthController extends Controller
{
    public $authService;
    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }
    public function login (LoginFormRequest $request)
    {
      if ( $this->authService->login($request))
      {
          return redirect()->route('posts.index');
      }
//          return response()->json(
//              [
//                  'status'=>true,
//                  'msg'=>'Dang nhap thanh cong'
//              ]
//          );
//      }
//      else
//      {
//          return response()->json(
//              [
//                  'status'=>false,
//                  'msg'=>'Sai ten toan khoan hoac mat khau'
//              ]
//          );
//      }
    }

    public function register(RegisterRequest $request)
    {
        $this->authService->register($request);
        return redirect()->route('login');
//        return response()->json('create user success', 201);
    }


    public function showFormLogin()
    {
        return view('login');
    }
}
