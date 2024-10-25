<?php

namespace App\Http\Controllers;

use App\Models\discount;
use App\Models\fastfoodAtavich;
use App\Http\Requests\StorefastfoodAtavichRequest;
use App\Http\Requests\UpdatefastfoodAtavichRequest;

class FastfoodAtavichController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Ataviches = FastfoodAtavich::all();
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
    public function store(StorefastfoodAtavichRequest $request)
    {
        $filePath=null;
        $fileMime=null;
        $validated = $request->validated();
        if($request->hasFile('image')){
            $filePath=$request->file('image')->store('fastfood_ataviches','public');
            $fileMime=$request->file('image')->getMimeType();
        }
        fastfoodAtavich::create([
            'name'=>$validated['name'],
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
        $Ataviches = FastfoodAtavich::FindOrFail($id);

        return view('Ataviches.Edit',compact('Ataviches'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatefastfoodAtavichRequest $request,string $id)
    {
        $discounts=Discount::all();
        $Ataviches=fastfoodAtavich::FindOrFail($id);
        $validated=$request->validated();
        if($request->hasFile('image')){
            $filePath=$request->file('image')->store('fastfood_ataviches','public');
            $fileMime=$request->file('image')->getMimeType();
        }
        $Ataviches->update([
            'name'=>$validated['name'],
            'price'=>$validated['price'],
            'description'=>$validated['description'],
            'image'=>$filePath,
            'mime'=>$fileMime,
            'type'=>$validated['type'],


        ]);
        return redirect()->route('FastFoodAtavich',compact("Ataviches","discounts"));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(fastfoodAtavich $fastfoodAtavich,string $id)
    {
        $Ataviches=$fastfoodAtavich->FindOrFail($id);
        $Ataviches->delete();
        return redirect()->route('FastFoodAtavich');
    }
}
