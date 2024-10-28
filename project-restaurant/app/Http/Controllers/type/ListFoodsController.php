<?php
//
//namespace App\Http\Controllers\type;
//
//use App\Http\Controllers\Controller;
//use App\Models\fastfoodAtavich;
//use App\Models\fastfoodCretishing;
//use App\Models\PizzaHiva;
//use Illuminate\Http\Request;
//
//class ListFoodsController extends Controller
//{
//    public function pizza($pizzas){
//        $pizzas=fastfoodAtavich::where('type','پیتزا')->get();
//        $pizzas=PizzaHiva::where('type','پیتزا')->get();
//        $pizzas=FastfoodCretishing::where('type','پیتزا')->get();
//        return view('index',compact('pizzas'));
//    }
//    public function sandwich()
//    {
//        $sandwich=fastfoodAtavich::where('type','ساندویچ')->get();
//        $sandwich=fastfoodCretishing::where('type','ساندویچ')->get();
//        $sandwich=PizzaHiva::where('type','ساندویچ')->get();
//        return view('index',compact('sandwich'));
//
//    }
//    public function fried($freid)
//    {
//        $fried=fastfoodAtavich::where('type','سوخاری')->get();
//        $fried=fastfoodCretishing::where('type','سوخاری')->get();
//        $fried=PizzaHiva::where('type','سوخاری')->get();
//        return view('index',compact('fried'));
//
//    }
//    public function pasta($pasta)
//    {
//        $pasta=fastfoodAtavich::where('type','سوخاری')->get();
//        $pasta=fastfoodCretishing::where('type','سوخاری')->get();
//        $pasta=PizzaHiva::where('type','سوخاری')->get();
//        return view('index',compact('pasta','pasta','pasta'));
//
//    }
//    public function home($pasta,$sandwich,$fried,$pizzas)
//    {
//        return view('index',compact('pasta','pizzas','sandwich','fried','',''));
//
//    }
//}


namespace App\Http\Controllers\type;

use App\Http\Controllers\Controller;
use App\Models\FastfoodAtavich;
use App\Models\FastfoodCretishing;
use App\Models\PizzaHiva;
use Illuminate\Http\Request;

class ListFoodsController extends Controller
{
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
//
//    public function home()
//    {
//        // بارگذاری داده‌های مختلف
//        $pastaItems = FastfoodAtavich::where('type', 'پاستا')->get();
//        $sandwiches = FastfoodCretishing::where('type', 'ساندویچ')->get();
//        $friedItems = PizzaHiva::where('type', 'سوخاری')->get();
//        $pizzas = FastfoodAtavich::where('type', 'پیتزا')->get()
//            ->merge(PizzaHiva::where('type', 'پیتزا')->get())
//            ->merge(FastfoodCretishing::where('type', 'پیتزا')->get());
//
//        return view('index', compact('pastaItems', 'pizzas', 'sandwiches', 'friedItems'));
//    }
}
