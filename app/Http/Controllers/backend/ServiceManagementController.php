<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Service;


class ServiceManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allData = Service::all();
        return view('backend.service.index',compact('allData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Data= new Service();
        $Data->service_heading= $request->service_heading;
        $Data->service_description= $request->service_description;
        $Data->button_text= $request->button_text;
        $Data->service_icon= $request->service_icon;

        if($request->hasFile('service_icon')){
            $file= $request->file('service_icon');
            $file_extension= $file->getClientOriginalExtension();
            $random_no= str::random(12);
            $file_name= $random_no.'.'.$file_extension;
            $destination_path= public_path().'/frontend/img/service';
            $request->file('service_icon')->move($destination_path,$file_name);

            $Data->service_icon = $file_name;
        }

        $Data->save();
        return redirect()->route('service.index');
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
        $editData= Service::findOrFail($id);
        return view('backend.service.edit',compact('editData'));
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
        $service= Service::findOrFail($id);
        $service->service_heading= $request->service_heading;
        $service->service_description= $request->service_description;
        $service->button_text= $request->button_text;
        $service->service_icon= $request->service_icon;

        if($request->hasFile('service_icon')){
            $file= $request->file('service_icon');
            $file_extension= $file->getClientOriginalExtension();
            $random_no= str::random(12);
            $file_name= $random_no.'.'.$file_extension;
            $destination_path= public_path().'/frontend/img/service';
            $request->file('service_icon')->move($destination_path,$file_name);

            $service->service_icon = $file_name;
        }
        $service->save();
        return redirect()->route('service.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $deleteData = Service::findOrFail($id);
        $deleteData->delete();
        return redirect()->route('service.index');
    }
}
