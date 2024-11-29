<?php

namespace App\Http\Controllers;

use App\Models\fastfoodAtavich;
use App\Models\fastfoodCretishing;
use App\Models\PizzaHiva;
use App\Models\product;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function index(){
        return view('index');
    }
//    public function pizza()
//    {
//        $pizzas = FastfoodAtavich::where('type', 'پیتزا')->get()
//            ->merge(PizzaHiva::where('type', 'پیتزا')->get())
//            ->merge(FastfoodCretishing::where('type', 'پیتزا')->get());
//
//        return view('index', compact('pizzas'));
//    }
//
//    public function sandwich()
//    {
//        $sandwiches = FastfoodAtavich::where('type', 'ساندویچ')->get()
//            ->merge(FastfoodCretishing::where('type', 'ساندویچ')->get())
//            ->merge(PizzaHiva::where('type', 'ساندویچ')->get());
//
//        return view('index', compact('sandwiches'));
//    }
//
//    public function fried()
//    {
//        $friedItems = FastfoodAtavich::where('type', 'سوخاری')->get()
//            ->merge(FastfoodCretishing::where('type', 'سوخاری')->get())
//            ->merge(PizzaHiva::where('type', 'سوخاری')->get());
//
//        return view('index', compact('friedItems'));
//    }
//
//    public function pasta()
//    {
//        $pastaItems = FastfoodAtavich::where('type', 'پاستا')->get()
//            ->merge(FastfoodCretishing::where('type', 'پاستا')->get())
//            ->merge(PizzaHiva::where('type', 'پاستا')->get());
//
//        return view('index', compact('pastaItems'));
//    }

    public function home()
    {

        $pastaItems = product::where('type', 'پاستا')->get();

        $sandwiches = product::where('type', 'ساندویچ')->get();

        $friedItems = product::where('type', 'سوخاری')->get();

        $pizzas = product::where('type', 'پیتزا')->get();


        return view('index', compact('pastaItems', 'pizzas', 'sandwiches', 'friedItems'));
    }
//    public function dashboard($pastaItems, $sandwiches, $friedItems,$pizzas)
//    {
//        return view('List.index', compact('pastaItems', 'pizzas', 'sandwiches', 'friedItems'));
//    }
    public function dashboard()
    {
        return view('List.index');
    }
}
