<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Team;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allData = Team::all();
        return view('backend.team.index',compact('allData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.team.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Data= new Team();
        $Data->member_image= $request->member_image;
        $Data->member_name= $request->member_name;
        $Data->email= $request->email;
        $Data->phone= $request->phone;
        $Data->member_speciality= $request->member_speciality;
        $Data->facebook= $request->facebook;
        $Data->instagram= $request->instagram;

        if($request->hasFile('member_image')){
            $file= $request->file('member_image');
            $file_extension= $file->getClientOriginalExtension();
            $random_no= str::random(12);
            $file_name= $random_no.'.'.$file_extension;
            $destination_path= public_path().'/frontend/img/team';
            $request->file('member_image')->move($destination_path,$file_name);

            $Data->member_image = $file_name;
        }

        $Data->save();
        return response()->json(['message' => 'Member added successfully.'],200);
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
        $editData= Team::findOrFail($id);
        return view('backend.team.edit',compact('editData'));
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
        $team= Team::findOrFail($id);
        $team->member_name= $request->member_name;
        $team->member_speciality= $request->member_speciality;
        $team->email= $request->email;
        $team->phone= $request->phone;
        $team->facebook= $request->facebook;
        $team->instagram= $request->instagram;
        $team->member_image= $request->member_image;

        if($request->hasFile('member_image')){
            $file= $request->file('member_image');
            $file_extension= $file->getClientOriginalExtension();
            $random_no= str::random(12);
            $file_name= $random_no.'.'.$file_extension;
            $destination_path= public_path().'/frontend/img/team';
            $request->file('member_image')->move($destination_path,$file_name);

            $team->member_image = $file_name;
        }
        $team->save();
        return redirect()->route('team.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
{
        $member = Team::findOrFail($id);
        $member->delete();
        
        return redirect()->route('team.index');
   
}

    public function deleteSelected(Request $request)
{
        $ids = $request->ids;
        Team::whereIn('id', $ids)->delete();

        return response()->json(['message' => 'Selected members deleted successfully.']);
}

}
