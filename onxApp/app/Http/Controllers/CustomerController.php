<?php

namespace App\Http\Controllers;

use App\Http\Resources\CustomerResource;
use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Notification;
use App\Notifications\NewCustomerNotification;


class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function getAllCustomers()
    {
        $customers = Customer::all();

        return response()->json([
            'customers' => $customers
        ]);
    }

    public function getCustomer($id)
    {
        $customer = Customer::findOrFail($id);

        return response()->json([
            'customer' => $customer
        ]);
    }


    public function index()
    {
        $customers = Customer::all();
        return view('customers.index', compact('customers'));

//        return CustomerResource::collection(Customer::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customers.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer = new Customer;
        $customer->name = $request->name;
        $customer->surname = $request->surname;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->address = $request->address;
        $customer->save();

        Notification::route('mail', 'to@example.com')->notify(new NewCustomerNotification($customer));

        return redirect()->route('customers.index')->with('success', 'Klient został dodany!');

//        return response()->json([
//            'customer' => $customer,
//            'message' => 'Klient zostal dodany!'
//        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer = Customer::find($id);
        return view('customers.show', compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::find($id);
        return view('customers.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $customer = Customer::find($id);
        $customer->name = $request->name;
        $customer->surname = $request->surname;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->address = $request->address;
        $customer->save();

        return redirect()->route('customers.index')->with('success', 'Klient został zaktualizowany!');

//        return response()->json([
//            'customer' => $customer,
//            'message' => 'Klient zostal zaktualizowany!'
//        ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */

//    public function destroy(Customer $customer)
    public function destroy(Customer $id)
    {

        $customer = Customer::find($id);
        $customer->delete();

        return redirect()->route('customers.index')->with('success', 'Klient został usunięty!');

//        return response()->json([
//            'message' => 'Klient zostal usunięty!'
//        ]);

    }

//    }
}
