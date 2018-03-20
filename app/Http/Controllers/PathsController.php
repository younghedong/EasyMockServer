<?php

namespace App\Http\Controllers;

use App\Path;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PathsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paths = Path::all();
        return view('paths.index', ['paths' => $paths]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($project_id = null)
    {
        return view('paths.create', ['project_id' => $project_id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Auth::check()){
            $path = Path::create([
                'path' => $request->input('path'),
                'description' => $request->input('description'),
                'user_id' => Auth::user()->id,
                'project_id' => $request->input('project_id'),
            ]);

            if($path){
                return redirect()->route('paths.show', ['path' => $path->id])
                    ->with('success', 'Path create successfully');
            }
        }

        return back()->withInput()->with('error', 'Error creating new path');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Path  $path
     * @return \Illuminate\Http\Response
     */
    public function show(Path $path)
    {
        $path = Path::find($path->id);
        return view('paths.show', ['path' => $path]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Path  $path
     * @return \Illuminate\Http\Response
     */
    public function edit(Path $path)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Path  $path
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Path $path)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Path  $path
     * @return \Illuminate\Http\Response
     */
    public function destroy(Path $path)
    {
        //
    }
}
