<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Mail\ContactMail;
use App\Mail\ResponseMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

    public function about()
    {
        return view('about');
    }

    public function help()
    {
        return view('help');
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
        $dataForEquipment = $datatables->eloquent(Equipment::query())->order(function ($query) {
                if (request()->has('name')) {
                    $query->orderBy('name', 'asc');
                }
            })->editColumn('name', function ($equipment) {
                return '<b>'.$equipment->name.'</b>';
            })->editColumn('image', function ($equipment) {
                return '<img src="images/product/'.$equipment->image.'" width="auto" height="100px"/>';
            })->editColumn('price', function ($equipment) {
                return '$'.$equipment->price;
            })->removeColumn('stock_amount')->removeColumn('created_at')->removeColumn('updated_at')->orderColumn('image',
                '-image $1');

        if (Auth::check()) {
            // Get cart info

            $equipmentsInCart = Cart::select('order_equipment_id')->where('user_id',
                Auth::user()->getAuthIdentifier())->get()->toArray();
            $equipmentsInCart = array_column($equipmentsInCart, 'order_equipment_id');

            // Logged in
            return $dataForEquipment->addColumn('quantity', function ($equipment) {

                    return '<input class="quantity" id="'.$equipment->equipment_id.'" value="0" maxlength="4" size="4" />';
                })->addColumn('select', function ($equipment) use ($equipmentsInCart) {
                    $disable = in_array($equipment->equipment_id, $equipmentsInCart, false) ? 'disabled' : '';
                    return '<button class="addToCartBtn" type="button" '.$disable.'>Add to Cart</button>';
                })->rawColumns(['name', 'image', 'quantity', 'select'])->toJson();
        } else {
            return $dataForEquipment->rawColumns(['name', 'image'])->toJson();
        }
    }
}
