<?php

namespace App\Http\Controllers;

use App\Models\discount;
use App\Http\Requests\StorediscountRequest;
use App\Http\Requests\UpdatediscountRequest;

class DiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $discount= discount::all();
        return view('Discount.index',compact('discount'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Discount.create2');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorediscountRequest $request)
    {
        $fileMime=null;
        $filePath=null;
        $validated=$request->validated();
        if ($request->hasFile('image')) {
            $filePath=$request->file('image')->store('discounts','public');
//            $fileMime = $request->file('file')->getClientMimeType();
            $fileMime=$request->file('image')->getMimeType();
        }
       discount::create([
           'name'=>$validated['name'],
           'image'=>$filePath,
           'mime'=>$fileMime,
           'percentage'=>$validated ['percentage'],
           'start_date'=>$validated['start_date'],
           'end_date'=>$validated['end_date']
       ]);
       return redirect()->route('discount');

    }

    /**
     * Display the specified resource.
     */
    public function show(discount $discount)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(discount $discount,string $id)
    {
        $edit= discount::FindOrFail($id);
        return view('Discount.edit',compact('edit'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatediscountRequest $request, discount $discount,string $id)
    {
        $update=$discount::FindOrFail($id);
        $update=$request->validated();
        $update->update([
            'name'=>$update['name'],
            'percentage'=>$update['percentage'],
            'start_date'=>$update['start_date'],
            'end_date'=>$update['end_date']

        ]);
        return redirect()->route('discount');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(discount $discount,string $id)
    {
        $destroy=discount::FindOrFail($id);
        $destroy->delete();
        return redirect()->route('discount');

    }
}
