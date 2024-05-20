<?php

namespace App\Http\Controllers\backend\sections;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Section\Testimonial;
use Illuminate\Support\Str;


class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allData = Testimonial::all();
        return view('backend.testimonial.index',compact('allData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.testimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Data= new Testimonial();
        $Data->main_text= $request->main_text;
        $Data->client_name= $request->client_name;
        $Data->client_service= $request->client_service;
        $Data->client_image= $request->client_image;

        if($request->hasFile('client_image')){
            $file= $request->file('client_image');
            $file_extension= $file->getClientOriginalExtension();
            $random_no= str::random(12);
            $file_name= $random_no.'.'.$file_extension;
            $destination_path= public_path().'/frontend/img/testimonial';
            $request->file('client_image')->move($destination_path,$file_name);

            $Data->client_image = $file_name;
        }

        $Data->save();
        return redirect()->route('testimonial.index');
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
        $editData= Testimonial::find($id);
        return view('backend.testimonial.edit',compact('editData'));
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
        $testimonial= Testimonial::find($id);
        $testimonial->main_text = $request->main_text;
        $testimonial->client_name = $request->client_name;
        $testimonial->client_service = $request->client_service;
        $testimonial->client_image= $request->client_image;

        if($request->hasFile('client_image')){
            $file= $request->file('client_image');
            $file_extension= $file->getClientOriginalExtension();
            $random_no= str::random(12);
            $file_name= $random_no.'.'.$file_extension;
            $destination_path= public_path().'/frontend/img/testimonial';
            $request->file('client_image')->move($destination_path,$file_name);

            $testimonial->client_image = $file_name;
        }
        $testimonial->save();
        return redirect()->route('testimonial.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $deleteData = Testimonial::find($id);
        $deleteData->delete();
        return redirect()->route('testimonial.index');
    }
}
