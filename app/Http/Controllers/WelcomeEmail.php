<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\WelcomeEmailNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class WelcomeEmail extends Controller
{
    //
    public function sendWelcomeEmail()
    {
        $user = User::latest()->first();

        $welcomeData = [
            'body'=> 'Welcome to TOPCINVIEC',
            'welcomeText'=> 'You are allowed to register',
            'url'=> url('/'),
            'thankyou'=> 'You have 5 days to verification'
        ];

//        $user->notify(new WelcomeEmailNotification($welcomeData));
        Notification::send($user, new WelcomeEmailNotification($welcomeData));
    }
}
