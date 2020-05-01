<?php

namespace App\Http\Controllers;

use App\Notifications\UserConnect;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //On cherche l'email des supers admin
        $users = User::where('role','=',5)->pluck('email')->toArray();
        //On leur envoi la notification
        foreach ($users as $user) {
            Notification::route('mail', $user)->notify(new UserConnect($user));
        }
        return view('admin.index');
    }
}
