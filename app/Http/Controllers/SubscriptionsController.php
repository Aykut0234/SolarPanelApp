<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscription;
use App\Models\Customer;

use App\Models\Panel;

class SubscriptionsController extends Controller
{
    public function index()
    {
        $subscriptions = Subscription::with('customer')->get();
        return view('subscriptions.index', compact('subscriptions'));
    }

    public function show(Subscription $subscription)
    {
        return view('subscriptions.show', compact('subscription'));
    }

    public function create()
    {
        return view('subscriptions.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'customer_name' => 'required|string',
            'customer_email' => 'required|email',
            'customer_address' => 'required|string',
            'customer_phone' => 'required|string',
            'customer_zip' => 'required|string',
            'customer_city' => 'required|string',
            'solar_panel_system_id' => 'required|integer',
            'panel_quantity' => 'required|integer|min:1',
        ]);
    
        // Create a new customer
        $customer = Customer::create([
            'name' => $request->input('customer_name'),
            'email' => $request->input('customer_email'),
            'address' => $request->input('customer_address'),
            'phone' => $request->input('customer_phone'),
            'zip' => $request->input('customer_zip'),
            'city' => $request->input('customer_city'),
        ]);
    
        // Create a subscription for the customer
        $subscription = new Subscription();
        $subscription->customer_id = $customer->id;
        $subscription->solar_panel_system_id = $request->input('solar_panel_system_id');
        $subscription->save();
    
        // Add panels to the subscription
        for ($i = 0; $i < $request->input('panel_quantity'); $i++) {
            $panel = new Panel();
            $panel->solar_panel_system_id = $request->input('solar_panel_system_id');
            $panel->subscription_id = $subscription->id;
            $panel->serial_number = 'Generated Serial Number'; // You can generate a serial number here
            $panel->save();
        }
    
        return redirect()->route('subscriptions.index')->with('success', 'Subscription created successfully');
    }
    
}
