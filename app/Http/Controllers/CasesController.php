<?php

namespace App\Http\Controllers;

use App\_Case;
use Illuminate\Http\Request;

class CasesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cases = _Case::all();
        return view('cases.index', ['cases' => $cases]);
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
     * @param  \App\_Case  $_Case
     * @return \Illuminate\Http\Response
     */
    public function show(_Case $_Case)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\_Case  $_Case
     * @return \Illuminate\Http\Response
     */
    public function edit(_Case $_Case)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\_Case  $_Case
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, _Case $_Case)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\_Case  $_Case
     * @return \Illuminate\Http\Response
     */
    public function destroy(_Case $_Case)
    {
        //
    }
}
