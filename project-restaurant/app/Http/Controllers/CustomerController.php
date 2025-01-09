<?php

namespace App\Http\Controllers;

use App\Http\Resources\CustomerCollection;
use App\Http\Resources\CustomerResource;
use App\Http\Resources\UserCollection;
use App\Models\Customer;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers=Customer::all();
        return  CustomerResource::collection(Customer::paginate(1));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customers.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCustomerRequest $request)
    {
        $validated = $request->validated();
        Customer::create([
            'name'=>$validated['name'],
            'email'=>$validated['email'],
            'phone'=>$validated['phone'],
            'address'=>$validated['address'],
            'birthday'=>$validated['birthday'],
            'password'=>bcrypt($validated['password']),
        ]);

        return  redirect()->route('index');
    }

    /**
     * Display the specified resource.
     */

    public function show(Customer $customer)
    {
        return response()->json($customer);

    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
//    public function update(UpdateCustomerRequest $request,Customer $customer,string $id)
//    {
////        $customers=Customer::FindOrFail($customer);
//        $validated=$request->validated();
//        $customers->update([
//            'name'=>$validated['name'],
//            'email'=>$validated['email'],
//            'phone'=>$validated['phone'],
//            'address'=>$validated['address'],
//            'birthday'=>$validated['birthday'],
//            'password'=>bcrypt($validated['password']),
//        ]);
//        return response()->json(new CustomerResource($customers));
//
//    }
    public function update(UpdateCustomerRequest $request, Customer $customer)
    {
        $validated = $request->validated();

        // به‌روزرسانی مشتری
        $customer->update([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'address' => $validated['address'],
            'birthday' => $validated['birthday'],
            // فقط اگر پاسورد جدیدی وجود داشته باشد، آن را هش می‌کنیم
            'password' => $validated['password'] ? bcrypt($validated['password']) : $customer->password,
        ]);

        return response()->json($customer); // بازگشت پاسخ به‌روز شده
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(Customer $customer)
    {
        $customer->delete(); // حذف مشتری

        return response()->json(null, 204); // بازگشت پاسخ با کد 204
    }
}
