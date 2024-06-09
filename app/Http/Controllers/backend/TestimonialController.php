<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Testimonial;

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
        $Data->client_image= $request->client_image;
        $Data->client_name= $request->client_name;
        $Data->main_text= $request->main_text;
        $Data->client_service= $request->client_service;

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
        $editData= Testimonial::findOrFail($id);
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
        $testimonial= Testimonial::findOrFail($id);
        $testimonial->client_image= $request->client_image;
        $testimonial->client_name= $request->client_name;
        $testimonial->main_text= $request->main_text;
        $testimonial->client_service= $request->client_service;

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
    public function delete(Request $request, $id)
    {
        $testimonial = Testimonial::find($id);
        // Delete the testimonial
        $testimonial->delete();

        return redirect()->route('testimonial.index');
    }

    // Method to delete multiple testimonials
    public function deleteMultiple(Request $request)
    {
        $testimonialIds = $request->input('testimonialIds');
        Testimonial::whereIn('id', $testimonialIds)->delete();

        return response()->json(['message' => 'Selected testimonials deleted successfully.'], 200);
    }

}
