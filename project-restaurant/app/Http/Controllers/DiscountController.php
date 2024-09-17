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
        return view('Discount.create');
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



    public function update(UpdatediscountRequest $request, Discount $discount, string $id)
    {

        $discountToUpdate = $discount::findOrFail($id);
        $validatedData = $request->validated();

        $discountToUpdate->update([
            'name' => $validatedData['name'],
            'percentage' => $validatedData['percentage'],
            'image' => $validatedData['image'],
            'start_date' => $validatedData['start_date'],
            'end_date' => $validatedData['end_date'],
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
