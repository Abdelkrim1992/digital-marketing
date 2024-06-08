<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allData = User::all();
        $roles = Role::all();
        return view('backend.user.index',compact('allData','roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        return view('backend.user.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $allData = User::all();
        $roles = Role::all();
        $Data= new User();
        $Data->name= $request->name;
        $Data->email= $request->email;
        $Data->phone= $request->phone;
        $Data->address= $request->address;
        $Data->image= $request->image;
        $Data->role_id= $request->role_id;
        $Data->password= Hash::make($request->password);
        $Data->registration_date=now();

        if($request->hasFile('image')){
            $file= $request->file('image');
            $file_extension= $file->getClientOriginalExtension();
            $random_no= str::random(12);
            $file_name= $random_no.'.'.$file_extension;
            $destination_path= public_path().'/backend/img/user';
            $request->file('image')->move($destination_path,$file_name);

            $Data->image = $file_name;
        }

        $Data->save();

        return response()->json(['message' => 'User created successfully']);
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
        $roles = Role::all();
        return view('backend.user.edit',compact('editData','roles'));
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
        $user= User::findOrFail($id);
        $user->name= $request->name;
        $user->email= $request->email;
        $user->phone= $request->phone;
        $user->address= $request->address;
        $user->image= $request->image;
        $user->password= Hash::make($request->password);
        $user->role_id= $request->role_id;
        $user->registration_date=$request->registration_date;

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
    public function delete(Request $request, $id)
    {
        $deleteData = User::findOrFail($id);
        $deleteData->delete();
    }

    public function deleteUsers(Request $request)
    {

    $userIds = $request->input('userIds');
    User::whereIn('id', $userIds)->delete();
    return response()->json(['message' => 'Users deleted successfully'], 200);

    }
}
