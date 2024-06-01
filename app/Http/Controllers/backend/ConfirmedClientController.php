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
        $allData= ConfirmedClient::all();
        return view('backend.ConfirmedClients.index',compact('allData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $service= Service::all();
        return view('backend.ConfirmedClients.create',compact('service'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Data = new ConfirmedClient();
        $Data->client_name = $request->client_name;
        $Data->client_email = $request->client_email;
        $Data->client_phone = $request->client_phone;
        $Data->choosed_service = $request->choosed_service;
        $Data->project_description = $request->project_description;

        $Data->save();
        return redirect()->route('confirmed_client_index');
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
        $editData= ConfirmedClient::findOrFail($id);
        return view('backend.ConfirmedClients.edit',compact('editData'));
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
        $confirmed_client->project_description = $request->project_description;

        $confirmed_client->save();

        return redirect()->route('confirmed_client_index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $deleteData = ConfirmedClient::findOrFail($id);
        $deleteData->delete();
        return redirect()->route('confirmed_client_index');
    }
}
