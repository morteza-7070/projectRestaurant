<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\discount;
use App\Models\fastfoodAtavich;
use App\Http\Requests\StorefastfoodAtavichRequest;
use App\Http\Requests\UpdatefastfoodAtavichRequest;
use App\Models\product;

class FastfoodAtavichController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Ataviches = product::where('name_restaurant','عطاویچ')->get();
        return view('Ataviches.index', compact('Ataviches'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $discounts=Discount::all();
        return view('Ataviches.create',compact('discounts'));
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
            'discount_id'=>$validated['discount_id'],
        ]);
        return redirect()->route('FastFoodAtavich');
    }

    /**
     * Display the specified resource.
     */
    public function show(fastfoodAtavich $fastfoodAtavich)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(fastfoodAtavich $fastfoodAtavich,string $id)
    {
        $Ataviches = product::FindOrFail($id);

        return view('Ataviches.Edit',compact('Ataviches'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request,string $id)
    {
        $Ataviches=product::FindOrFail($id);
        $validated=$request->validated();
        if($request->hasFile('image')){
            $filePath=$request->file('image')->store('products','public');
            $fileMime=$request->file('image')->getMimeType();
        }
        $Ataviches->update([
            'name'=>$validated['name'],
            'price'=>$validated['price'],
            'description'=>$validated['description'],
            'image'=>$filePath,
            'mime'=>$fileMime,



        ]);
        return redirect()->route('FastFoodAtavich',compact("Ataviches",));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(fastfoodAtavich $fastfoodAtavich,string $id)
    {
        $Ataviches=product::FindOrFail($id);
        $Ataviches->delete();
        return redirect()->route('FastFoodAtavich');
    }
}
