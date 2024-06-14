<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Project;
use App\Models\ProjectStatus;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allData = Project::all();
        $status = ProjectStatus::all();
        return view('backend.projects.index',compact('allData','status'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $status = ProjectStatus::all();
        return view('backend.projects.create',compact('status'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Data= new Project();
        $Data->project_name= $request->project_name;
        $Data->client_name= $request->client_name;
        $Data->project_icon= $request->project_icon;
        $Data->project_description= $request->project_description;
        $Data->short_description= $request->short_description;
        $Data->status_id= $request->status_id;
        $Data->budget = floatval($request['budget']);
        $Data->due_date= $request->due_date;

        if($request->hasFile('project_icon')){
            $file= $request->file('project_icon');
            $file_extension= $file->getClientOriginalExtension();
            $random_no= str::random(12);
            $file_name= $random_no.'.'.$file_extension;
            $destination_path= public_path().'/backend/img/project';
            $request->file('project_icon')->move($destination_path,$file_name);

            $Data->project_icon = $file_name;
        }

        $Data->save();

        return redirect()->route('projects.index');
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
        $editData= Project::findOrFail($id);
        $status = ProjectStatus::all();
        return view('backend.projects.edit',compact('editData','status'));
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
        $project= Project::findOrFail($id);
        $project->project_name= $request->project_name;
        $project->client_name= $request->client_name;
        $project->project_icon= $request->project_icon;
        $project->project_description= $request->project_description;
        $project->status_id= $request->status_id;
        $project->short_description= $request->short_description;
        $project->budget = floatval($request['budget']);
        $project->due_date= $request->due_date;

        if($request->hasFile('project_icon')){
            $file= $request->file('project_icon');
            $file_extension= $file->getClientOriginalExtension();
            $random_no= str::random(12);
            $file_name= $random_no.'.'.$file_extension;
            $destination_path= public_path().'/backend/img/project';
            $request->file('project_icon')->move($destination_path,$file_name);

            $project->project_icon = $file_name;
        }
        $project->save();
        
        return redirect()->route('projects.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request, $id)
    {
        $project = Project::findorFail($id);
        // Delete the testimonial
        $project->delete();

        return redirect()->route('projects.index');
    }
}
