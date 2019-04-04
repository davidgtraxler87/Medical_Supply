<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

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

    public function profile(Request $request)
    {

        $user = Auth::user();

        $profile = User::find($user->id);
        $method = $request->method();
        if ($request->isMethod('PATCH')) {
            $profile->fill($request->all());
            $profile->save();
        }

        $profileInfo = [
            'firstName' => $profile->first_name,
            'middleName' => $profile->middle_name,
            'lastName' => $profile->last_name,
            'institution' => $profile->institution,
            'streetAddress' => $profile->street_address,
            'city' => $profile->city,
            'state' => $profile->state,
            'zipCode' => $profile->zip_code,
            'email' => $profile->email,
            'telephoneNumber' => $profile->telephone_number,
            'cardholderName' => $profile->cardholder_name,
            'cardNumber' => $profile->card_number,
            'month' => $profile->month,
            'year' => $profile->year,
            'cvv' => $profile->cvv,
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
