<?php

namespace App\Http\Controllers;

use App\Models\fastfoodAtavich;
use App\Models\fastfoodCretishing;
use App\Models\PizzaHiva;
use App\Models\product;
use App\Models\Reserve;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Requests\StoreReservationRequest;

class Controller extends BaseController
{
    public function index(){
        return view('index');
    }


    public function home()
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
//    public function store(StoreReservationRequest $request)
//    {
//        $validated = request()->validated();
//        Reserve::create([
//            'name'=>$validated['name'],
//            'email'=>$validated['email'],
//            'phone'=>$validated['phone'],
//            'date'=>$validated['date'],
//            'number'=>$validated['number'],
//        ]);
//        return redirect('/');
//    }
    public function store(StoreReservationRequest $request)
    {

        $validated = $request->validated([]);


        Reserve::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'date' => $validated['date'],
            'number' => $validated['number'],
        ]);

        // بازگشت به صفحه اصلی
        return redirect('/');
    }

}
