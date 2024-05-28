<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allData= User::all();
        return view('backend.user.index',compact('allData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $editData= User::findOrFail($id);
        return view('backend.user.edit',compact('editData'));
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
        $user= User::find($id);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->phone=$request->phone;
        $user->password=$request->password;
        $user->image=$request->image;

        if($request->hasFile('image')){
            $file= $request->file('image');
            $file_extension= $file->getClientOriginalExtension();
            $random_no= str::random(12);
            $file_name= $random_no.'.'.$file_extension;
            $destination_path= public_path().'/backend/img/user';
            $request->file('image')->move($destination_path,$file_name);

            $user->image = $file_name;
        }
        $user->save();
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $deleteData = User::findOrFail($id);
        $deleteData->delete();
        return redirect()->route('user.index');
    }
}
