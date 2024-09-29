<?php

namespace App\Http\Controllers;

use App\Models\discount;
use App\Models\PizzaHiva;
use App\Http\Requests\StorePizzaHivaRequest;
use App\Http\Requests\UpdatePizzaHivaRequest;

class PizzaHivaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $buyers=PizzaHiva::all();
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
    public function store(StorePizzaHivaRequest $request)
    {
        $validated = $request->validated();
        if($request->hasFile('image')){
            $filePath=$request->file('image')->store('pizza_hivas','public');
            $fileMime=$request->file('image')->getMimeType();
        }
        PizzaHiva::create([
            'name'=>$validated['name'],
            'price'=>$validated['price'],
            'image'=>$filePath,
            'mime'=>$fileMime,
            'description'=>$validated['description'],
            'discount_id'=>$validated['discount_id'],
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
        $buyers=PizzaHiva::FindOrFail($id);
        return view('viewPizza_Hiva.edit',compact('buyers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePizzaHivaRequest $request, PizzaHiva $pizzaHiva,string $id)
    {
        $buyers=PizzaHiva::FindOrFail($id);
        $validated=$request->validated();
        if($request->hasFile('image')){
            $filePath=$request->file('image')->store('pizza_hivas','public');
            $fileMime=$request->file('image')->getMimeType();
        }
        $buyers->update([
            'name'=>$validated['name'],
            'price'=>$validated['price'],
            'image'=>$filePath,
            'mime'=>$fileMime,
            'description'=>$validated['description'],
            'discount_id'=>$validated['discount_id'],
        ]);
        return redirect()->route('FastFoodHiva');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PizzaHiva $pizzaHiva,string $id)
    {
        $pizza=PizzaHiva::FindOrFail($id);
        $pizza->delete();
        return redirect()->route('FastFoodHiva');
    }
}
