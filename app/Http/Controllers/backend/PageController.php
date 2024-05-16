<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allData = Page::all();
        return view('backend.page.index',compact('allData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.page.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Data= new Page();
        $Data->title= $request->title;
        $Data->type= $request->type;
        $Data->description= $request->description; 
        $Data->save();
        return redirect()->route('page.index');
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
            $deleteData = Page::find($id);
            $deleteData->delete();
            return redirect()->route('page.index');
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
        $editData= Page::findOrFail($id);
        return view('backend.page.edit',compact('editData'));
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
        $page= Page::findOrFail($id);;
        $page->title= $request->title;
        $page->type= $request->type;
        $page->description= $request->description;
        $page->save();
        return redirect()->route('page.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    public function upload(Request $request)
    {
        if($request->hasFile('upload')){
            $originName= $request->file('upload')->getClientOriginalExtension();
            $file_name= pathinfo($originName,PATHINFO_FILENAME);
            $extension= $request->file('upload')->getClientOriginalExtension();
            $file_name= $file_name.'_'.time().'.'.extension;
            $destination_path= public_path().'/frontend/img/page';
            $request->file('upload')->move($destination_path,$file_name);

            return response()->json(['file_name'=>$file_name, 'upload'=>1, 'url'=>$url]);
        }
    }
}
