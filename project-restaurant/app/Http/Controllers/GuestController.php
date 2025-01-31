<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGuestRequest;
use App\Models\contact;
use App\Models\product;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products=product::all();
        return view('Guest.pageGuest',['products'=>$products]);
    }

    public function search(Request $request)
    {
        $query = trim($request->input('query', ''));

        if (empty($query)) {
            return redirect()->route('guest.index')->with('error', 'لطفاً مقدار جستجو را وارد کنید.');
        }
        $products = Product::where('name', 'like', "%{$query}%")
            ->orWhere('description', 'like', "%{$query}%")
            ->get();

        return view('Guest.pageGuest', compact('products', 'query'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function store(StoreGuestRequest $request)
    {
        $validated=$request->validated();
        contact::create([
            'name'=>$validated['name'],
            'phone'=>$validated['phone'],
            'massages'=>$validated['massages'],
        ]);
        return redirect()->route('guest.index');
    }

    /**
     * Store a newly created resource in storage.
     */


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
