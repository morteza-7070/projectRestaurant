<?php

namespace App\Http\Controllers;

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
        return view('Ataviches.create');
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
    public function edit(fastfoodAtavich $fastfoodAtavich)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatefastfoodAtavichRequest $request, fastfoodAtavich $fastfoodAtavich)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(fastfoodAtavich $fastfoodAtavich)
    {
        //
    }
}
