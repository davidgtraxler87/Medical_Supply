<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Mail\ResponseMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Equipment;
use Yajra\Datatables\Datatables;

class FrontEndController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome');
    }

    public function sendMail(Request $request)
    {
        $email = new ContactMail($request);
        Mail::to('david.g.traxler87@gmail.com')->send($email);
        $email = new ResponseMail($request);
        Mail::to($request->input('email'))->send($email);
        return redirect('contact')->with('status', 'Message sent!');
    }

    public function equipment()
    {
        $equipmentData = Equipment::all();
        return DataTables::of($equipmentData);
    }


}
