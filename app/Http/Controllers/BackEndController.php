<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BackEndController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function profile()
    {
        $user = Auth::user();
        $profileInfo = [
            'firstName' => $user->first_name,
            'lastName' => $user->last_name,
        ];
        return view('profile', $profileInfo);
    }

    public function home()
    {
        return view('home');
    }

    public function orders()
    {
        return view('orders');
    }
}
