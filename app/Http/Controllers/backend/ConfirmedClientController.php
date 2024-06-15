<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ConfirmedClient;
use App\Models\Service;

class ConfirmedClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allData = ConfirmedClient::all();
        $service = Service::all();
        return view('backend.confirmed_clients.index', compact('allData','service'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $service = Service::all();
        return view('backend.confirmed_clients.create',compact('service'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $confirmed_client = new ConfirmedClient;
        $confirmed_client->client_name = $request->client_name;
        $confirmed_client->client_email = $request->client_email;
        $confirmed_client->client_phone = $request->client_phone;
        $confirmed_client->choosed_service = $request->choosed_service;

        $confirmed_client->save();

        return response()->json(['message' => 'Form has been successfully submitted!']);
    
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
        $editData = ConfirmedClient::findOrFail($id);
        $service = Service::all();
        return view('backend.confirmed_clients.edit', compact('editData','service'));
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
        $confirmed_client = ConfirmedClient::findOrFail($id);
        $confirmed_client->client_name = $request->client_name;
        $confirmed_client->client_email = $request->client_email;
        $confirmed_client->client_phone = $request->client_phone;
        $confirmed_client->choosed_service = $request->choosed_service;
        $confirmed_client->message = $request->message;
        $confirmed_client->save();

        return redirect()->route('confirmed-clients.index');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
{
    $client = ConfirmedClient::findOrFail($id);
    $client->delete();

    return redirect()->route('confirmed-clients.index');
}

public function deleteMultiple(Request $request)
{
    $clientIds = $request->input('client_ids');
    ConfirmedClient::whereIn('id', $clientIds)->delete();

    return response()->json(['message' => 'Selected clients deleted successfully.']);
}

}
