<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReservationRequest;
use App\Models\Reserve;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function store(StoreReservationRequest $request)
    {

        $validated = $request->validated([]);


        Reserve::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'date' => $validated['date'],
            'number' => $validated['number'],
        ]);

        // بازگشت به صفحه اصلی
        return redirect('/');
    }
}
