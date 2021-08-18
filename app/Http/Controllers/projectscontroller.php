<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\projects;

class projectscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $projects=projects::all();
        
        
    

        return view('cont.all_projects',[
            'projects'=>$projects,
            'count'=>projects::all()->count()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $value=0;
        return view('cont.create_projects',[
            'value'=>$value
        ]);
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
        $project=projects::create([

            'project_name'=>$request->input('project_name'),
            'address'=>$request->input('address'),
            'land_area'=>$request->input('land_area'),
            'project_status'=>$request->input('project_status')

        ]);

        return redirect('/projects');
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
        
        $project=projects::find($id);
        return view('cont.details',[
            'project'=>$project,
            'id'=>$id
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        
        $editrow=projects::find($id);
        
        return view('cont.edit_projects')->with('editrow',$editrow);

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
        //
        $project=projects::where('id',$id)->update([
            'project_name'=>$request->input('project_name'),
            'address'=>$request->input('address'),
            'land_area'=>$request->input('land_area')
        ]);

        return redirect('/projects');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // 
        $deleterow=projects::find($id);

        $deleterow->delete();

        return redirect('/projects');
    }
}
