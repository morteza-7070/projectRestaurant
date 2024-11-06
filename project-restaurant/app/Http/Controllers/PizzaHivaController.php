<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\discount;
use App\Models\PizzaHiva;
use App\Http\Requests\StorePizzaHivaRequest;
use App\Http\Requests\UpdatePizzaHivaRequest;
use App\Models\product;

class PizzaHivaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $buyers = product::where("name_restaurant",'پیتزا هیوا')->get();
        return view('viewPizza_Hiva.index',compact('buyers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $discounts=Discount::all();
        return view('viewPizza_Hiva.create',compact('discounts'));
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(StoreProductRequest $request)
    {
        $filePath=null;
        $fileMime=null;
        $validated = $request->validated();
        if($request->hasFile('image')){
            $filePath=$request->file('image')->store('products','public');
            $fileMime=$request->file('image')->getMimeType();
        }
        product::create([
            'name'=>$validated['name'],
            'name_restaurant'=>$validated['name_restaurant'],
            'type'=>$validated['type'],
            'price'=>$validated['price'],
            'description'=>$validated['description'],
            'image'=>$filePath,
            'mime'=>$fileMime,
            'discount_id'=>$validated['discount_id']??null,
        ]);

        return redirect()->route('FastFoodHiva');
    }
    /**
     * Display the specified resource.
     */
    public function show(PizzaHiva $pizzaHiva)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PizzaHiva $pizzaHiva, string $id)
    {
        $buyers=product::FindOrFail($id);
        return view('viewPizza_Hiva.edit',compact('buyers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, PizzaHiva $pizzaHiva,string $id)
    {
        $buyers=product::FindOrFail($id);
        $validated=$request->validated();
        if($request->hasFile('image')){
            $filePath=$request->file('image')->store('products','public');
            $fileMime=$request->file('image')->getMimeType();
        }
        $buyers->update([
            'name'=>$validated['name'],
            'price'=>$validated['price'],
            'image'=>$filePath,
            'mime'=>$fileMime,
            'description'=>$validated['description'],

        ]);
        return redirect()->route('FastFoodHiva');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PizzaHiva $pizzaHiva,string $id)
    {
        $pizza=product::FindOrFail($id);
        $pizza->delete();
        return redirect()->route('FastFoodHiva');
    }
}
