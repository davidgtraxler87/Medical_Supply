<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Mail\ResponseMail;
use App\User;
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

    public function equipment(Datatables $datatables)
    {
//        return datatables(Equipment::all())->toJson();
        return $datatables->eloquent(Equipment::query())
            ->order(function ($query) {
                if (request()->has('name')) {
                    $query->orderBy('name', 'asc');
                }
            })
            ->editColumn('name', function ($equipment) {
                return '<b>' . $equipment->name . '</b>';
            })
            ->editColumn('image', function ($equipment) {
                return '<img src="images/product/' . $equipment->image . '" width="100px" height="auto"/>';
            })
            ->editColumn('price', function ($equipment) {
                return '$' . $equipment->price;
            })
            ->addColumn('select', 'eloquent.tables.users-action')
            ->removeColumn('created_at')
            ->removeColumn('updated_at')
            ->orderColumn('image', '-image $1')
            ->rawColumns(['name', 'image', 'select'])
            ->toJson();


    }


}
