<?php

namespace App\Http\Controllers;

use App\Models\discount;
use App\Models\fastfoodCretishing;
use App\Http\Requests\StorefastfoodCretishingRequest;
use App\Http\Requests\UpdatefastfoodCretishingRequest;

class FastfoodCretishingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fastfoodCretishes = fastfoodCretishing::all();
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
    public function store(StorefastfoodCretishingRequest $request)
    {

        $validated=$request->validated();
        if ($request->hasFile('image')){
            $filePath=$request->file('image')->store('fastfood_cretishings','public');
            $fileMime=$request->file('image')->getMimeType();
        }
        fastfoodCretishing::create([
            'name'=>$validated['name'],
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(fastfoodCretishing $fastfoodCretishing,string $id)
    {
        $fasts=fastfoodCretishing::FindOrFail($id);
        return view('Critieshing.edit',compact('fasts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatefastfoodCretishingRequest $request, fastfoodCretishing $fastfoodCretishing,string $id)
    {
        $fasts=fastfoodCretishing::FindOrFail($id);
        $validated=$request->validated();
        if ($request->hasFile('image')){
            $filePath=$request->file('image')->store('fastfood_cretishings','public');
            $fileMime=$request->file('image')->getMimeType();
        }
        $fasts->update([
            'name'=>$validated['name'],
            'description'=>$validated['description'],
            'image'=>$filePath,
            'price'=>$validated['price'],
            'type'=>$validated['type'],

        ]);
        return redirect()->route('FastFoodBoof');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(fastfoodCretishing $fastfoodCretishing,string $id)
    {
        $fasts=fastfoodCretishing::FindOrFail($id);
        $fasts->delete();
        return redirect()->route('FastFoodBoof');
    }
}
