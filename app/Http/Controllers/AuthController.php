<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use App\Http\Requests\LoginFormRequest;
use App\Notifications\WelcomeEmailNotification;
use App\Services\AuthService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class AuthController extends Controller
{
    public $authService;
    public $welcomeEmail;

    public function __construct(AuthService  $authService,
                                WelcomeEmail $welcomeEmail)
    {
        $this->authService = $authService;
        $this->welcomeEmail = $welcomeEmail;
    }

    public function login(LoginFormRequest $request)
    {
//      if ( $this->authService->login($request))
//      {
//          return redirect()->route('posts.index');
//      }
//      else
//      {
//          Session::flash('msg','Tài khoản hoặc mật khẩu sai');
//          return redirect()->back();
//      }

        if ($this->authService->login($request)) {
            return response()->json(
                [
                    'status' => true,
                    'data'=> Auth::user(),
                    'msg' => 'Dang nhap thanh cong'
                ]
            );
        } else {
            return response()->json(
                [
                    'status' => false,
                    'msg' => 'Sai ten toan khoan hoac mat khau'
                ]
            );
        }
    }

    public function register(RegisterRequest $request)
    {
        $user = $request->only('name', 'email', 'password', 'role_id', 'phone');
        $this->authService->register($user);
//        $user->notify(new WelcomeEmailNotification());
        $this->welcomeEmail->sendWelcomeEmail();
        return redirect()->route('login');
//        return response()->json('create user success', 201);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }


    public function showFormLogin()
    {
        return view('login');
    }
}
