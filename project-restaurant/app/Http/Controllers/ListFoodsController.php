<?php

namespace App\Http\Controllers;

use App\Models\ListFoods;
use App\Http\Requests\StoreListFoodsRequest;
use App\Http\Requests\UpdateListFoodsRequest;

class ListFoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

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
    public function store(StoreListFoodsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ListFoods $listFoods)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ListFoods $listFoods)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateListFoodsRequest $request, ListFoods $listFoods)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ListFoods $listFoods)
    {
        //
    }
}
