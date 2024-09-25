<?php

namespace App\Http\Controllers;

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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePizzaHivaRequest $request)
    {
        //
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
    public function edit(PizzaHiva $pizzaHiva)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePizzaHivaRequest $request, PizzaHiva $pizzaHiva)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PizzaHiva $pizzaHiva)
    {
        //
    }
}
