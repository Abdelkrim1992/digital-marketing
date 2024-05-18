<?php

namespace App\Http\Controllers\backend\sections;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Section\Testimonial;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allData = About::all();
        return view('backend.about.index',compact('allData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.about.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Data= new About();
        $Data->title= $request->title;
        $Data->big_title= $request->title;
        $Data->main_text= $request->main_text;
        $Data->button_text= $request->button_text;
        $Data->save();
        return redirect()->route('about.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        {
            $deleteData = About::find($id);
            $deleteData->delete();
            return redirect()->route('about.index');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editData= About::findOrFail($id);
        return view('backend.about.edit',compact('editData'));
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
        $page= About::findOrFail($id);;
        $page->title= $request->title;
        $page->big_title= $request->big_title;
        $page->main_text= $request->main_text;
        $page->button_text= $request->button_text;
        $page->save();
        return redirect()->route('about.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
}
