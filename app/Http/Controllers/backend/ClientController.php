<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\ConfirmedClient;
use App\Models\Setting;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allData = Client::all();
        return view('backend.clients.index',compact('allData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Log CSRF token for debugging
        \Log::info('CSRF Token: ' . $request->input('_token'));
        \Log::info('Session Token: ' . session('_token'));

        // Validate the request
        $request->validate([
            'client_name' => 'required|string|max:255',
            'client_email' => 'required|string|max:255',
            'client_phone' => 'required|string|max:255',
            'choosed_service' => 'required|string|max:255',
            'message' => 'required|string|max:1000',
        ]);
    
        // Store the data in the database
        $client = new Client;
        $client->client_name = $request->client_name;
        $client->client_email = $request->client_email;
        $client->client_phone = $request->client_phone;
        $client->choosed_service = $request->choosed_service;
        $client->message = $request->message;

        $client->save();
    
        // Return a JSON response
        return response()->json(['message' => 'Thank you for submitting your information!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $deleteData = Client::find($id);
        $deleteData->delete();
        return redirect()->route('client.index');
    }

    public function acceptClient($id)
    {
        // Retrieve the client request by ID
        $client = Client::findOrFail($id);

        // Create a new ConfirmedClient instance
        $confirmed_client = new ConfirmedClient;
        $confirmed_client->client_name = $client->client_name;
        $confirmed_client->client_email = $client->client_email;
        $confirmed_client->client_phone = $client->client_phone;
        $confirmed_client->choosed_service = $client->choosed_service;
        $confirmed_client->message = $client->message;
        // Other client details...

        // Save the confirmed client
        $confirmed_client->save();

        // Delete the accepted client request
        $client->delete();

        // Redirect back with a success message or any desired response
        return redirect()->back()->with('success', 'Client request has been accepted and added to confirmed clients.');
    }
}
