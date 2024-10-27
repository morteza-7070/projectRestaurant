<?php

namespace App\Http\Controllers\type;

use App\Http\Controllers\Controller;
use App\Models\fastfoodAtavich;
use App\Models\fastfoodCretishing;
use App\Models\PizzaHiva;
use Illuminate\Http\Request;

class ListFoodsController extends Controller
{
    public function pizza(){
        $fastAtavich=fastfoodAtavich::where('type','پیتزا')->get();
        $fastHiva=PizzaHiva::where('type','پیتزا')->get();
        $fastCretishing=FastfoodCretishing::where('type','پیتزا')->get();
        return view('List.index',compact('fastAtavich','fastHiva','fastCretishing'));
    }
    public function sandwich()
    {
        $sandwich1=fastfoodAtavich::where('type','ساندویچ')->get();
        $sandwich2=fastfoodCretishing::where('type','ساندویچ')->get();
        $sandwich3=PizzaHiva::where('type','ساندویچ')->get();

    }
    public function fried()
    {
        $fried1=fastfoodAtavich::where('type','سوخاری')->get();
        $fried2=fastfoodCretishing::where('type','سوخاری')->get();
        $fried3=PizzaHiva::where('type','سوخاری')->get();

    }
    public function pasta()
    {
        $pasta1=fastfoodAtavich::where('type','سوخاری')->get();
        $pasta2=fastfoodCretishing::where('type','سوخاری')->get();
        $pasta3=PizzaHiva::where('type','سوخاری')->get();

    }
}
