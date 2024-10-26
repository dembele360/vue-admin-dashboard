<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use App\Http\Resources\v1\CustomerResource;
use App\Http\Resources\v1\CustomerCollection;
use App\Services\v1\CustomerQuery;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CustomerController extends Controller
{
    public function index(Request $request)
    {
        $filter = new CustomerQuery();
        $results = $filter->transform($request);
        // $results = Customer::where('name', 'LIKE', '%' . $request->input('name') . '%')->get();

        if (count($results) == 0) {
            return new CustomerCollection(Customer::paginate());
        } else {
            return new CustomerCollection(Customer::where($results)->paginate());
        }
    }

    public function show(Customer $customer)
    {
        return new CustomerResource($customer);
    }


    public function store(Request $request)
    {
        try {
            $results = Customer::create([
                'name' => $request->input('name'),
                'postal_code' => $request->input('postalcode'),
                'state' => $request->input('state'),
                'email' => $request->input('email'),
                'city' => $request->input('city'),
                'type' => $request->input('type'),
                'address' => $request->input('address')

            ]);

            return response()->json(new CustomerResource($request), Response::HTTP_CREATED);

        } catch (\Exception $e) {
            Log::channel('customer')->error('Error in CustomerController index: ' . $e->getMessage());
        }

    }
}
