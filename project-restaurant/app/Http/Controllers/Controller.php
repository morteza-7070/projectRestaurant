<?php

namespace App\Http\Controllers;

use App\Models\fastfoodAtavich;
use App\Models\fastfoodCretishing;
use App\Models\PizzaHiva;
use App\Models\product;
use App\Models\Reserve;
use Illuminate\Http\Request;


use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Requests\StoreReservationRequest;
use Morilog\Jalali\Jalalian;

class Controller extends BaseController
{
    public function index(){
        return view('index');
    }


    public function home(Request $request )
    {

        $pastaItems = product::where('type', 'پاستا')->get();

        $sandwiches = product::where('type', 'ساندویچ')->get();

        $friedItems = product::where('type', 'سوخاری')->get();

        $pizzas = product::where('type', 'پیتزا')->get();


        return view('index', compact('pastaItems', 'pizzas', 'sandwiches', 'friedItems'));
    }

    public function dashboard()
    {
        return view('List.index');
    }
    public function article(){
        return view('Article.aboute2');
    }

}
