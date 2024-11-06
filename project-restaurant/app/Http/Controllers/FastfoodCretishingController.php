<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\discount;
use App\Models\fastfoodCretishing;
use App\Http\Requests\StorefastfoodCretishingRequest;
use App\Http\Requests\UpdatefastfoodCretishingRequest;
use App\Models\product;

class FastfoodCretishingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fastfoodCretishes = product::where("name_restaurant",'فست فود لقمه کش')->get();
        return view('Critieshing.index', compact('fastfoodCretishes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $discounts=Discount::all();

        return view('Critieshing.create',compact('discounts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {

        $validated=$request->validated();
        if ($request->hasFile('image')){
            $filePath=$request->file('image')->store('products','public');
            $fileMime=$request->file('image')->getMimeType();
        }
        product::create([
            'name'=>$validated['name'],
            'name_restaurant'=>$validated['name_restaurant'],
            'description'=>$validated['description'],
            'image'=>$filePath,
            'price'=>$validated['price'],
            'discount_id'=>$validated['discount_id'],
        ]);
        return redirect()->route('FastFoodBoof');

    }

    /**
     * Display the specified resource.
     */
    public function show(fastfoodCretishing $fastfoodCretishing)
    {
        return view('Critieshing.show',compact('fastfoodCretishing'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(fastfoodCretishing $fastfoodCretishing,string $id)
    {
        $fasts=product::FindOrFail($id);
        return view('Critieshing.edit',compact('fasts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, fastfoodCretishing $fastfoodCretishing,string $id)
    {
        $fasts=product::FindOrFail($id);
        $validated=$request->validated();
        if ($request->hasFile('image')){
            $filePath=$request->file('image')->store('products','public');
            $fileMime=$request->file('image')->getMimeType();
        }
        $fasts->update([
            'name'=>$validated['name'],
            'description'=>$validated['description'],
            'image'=>$filePath,
            'price'=>$validated['price'],

        ]);
        return redirect()->route('FastFoodBoof');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(fastfoodCretishing $fastfoodCretishing,string $id)
    {
        $fasts=product::FindOrFail($id);
        $fasts->delete();
        return redirect()->route('FastFoodBoof');
    }
}
