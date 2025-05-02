<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Http\Requests\CustomerRequest;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
    /**
     * Display a listing of the customers.
     */
    public function index()
    {
        $customers = Customer::all();
        return response()->json($customers);
    }

    /**
     * Store a newly created customer.
     */
    public function store(CustomerRequest $request)
    {
        // validate and store customer
        $validated = $request->validated();
        $customer = Customer::create($validated);
        return response()->json($customer, Response::HTTP_CREATED);
    }

    /**
     * Display the specified customer.
     */
    public function show(Customer $customer)
    {
        return response()->json($customer);
    }

    /**
     * Update the specified customer.
     */
    public function update(CustomerRequest $request, Customer $customer)
    {
        // validate and update customer 
        $validated = $request->validated();
        $customer->update($validated);
        return response()->json($customer);
    }

    /**
     * Remove the specified customer.
     */
    public function destroy(Customer $customer)
    {
        //delete customer
        $customer->delete();
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
