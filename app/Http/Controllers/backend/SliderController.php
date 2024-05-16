<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use Illuminate\Support\Str;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allData = Slider::all();
        return view('backend.slider.index',compact('allData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Data= new Slider();
        $Data->heading= $request->heading;
        $Data->small_text= $request->small_text;
        $Data->button_text= $request->button_text;
        $Data->image= $request->image;

        if($request->hasFile('image')){
            $file= $request->file('image');
            $file_extension= $file->getClientOriginalExtension();
            $random_no= str::random(12);
            $file_name= $random_no.'.'.$file_extension;
            $destination_path= public_path().'/frontend/img/slide';
            $request->file('image')->move($destination_path,$file_name);

            $Data->image = $file_name;
        }

        $Data->save();
        return redirect()->route('slider.index');
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
        $editData= Slider::find($id);
        return view('backend.slider.edit',compact('editData'));
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
        $slider= Slider::find($id);
        $slider->heading = $request->heading;
        $slider->small_text = $request->small_text;
        $slider->button_text = $request->button_text;
        $slider->image= $request->image;

        if($request->hasFile('image')){
            $file= $request->file('image');
            $file_extension= $file->getClientOriginalExtension();
            $random_no= str::random(12);
            $file_name= $random_no.'.'.$file_extension;
            $destination_path= public_path().'/frontend/img/slide';
            $request->file('image')->move($destination_path,$file_name);

            $slider->image = $file_name;
        }
        $slider->save();
        return redirect()->route('slider.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $deleteData = Slider::find($id);
        $deleteData->delete();
        return redirect()->route('slider.index');
    }
}
