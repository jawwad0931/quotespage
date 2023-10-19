<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\stdmodel;

class stdcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('studentData.index',['stdview' => stdmodel::get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('studentData.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $stddata = new stdmodel;
        $stddata->Message = $request->msg;
        $stddata->save();
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = stdmodel::where('id',$id)->first();
        return view('studentData.edit',['student' => $student]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $stddata = stdmodel::where('id',$id)->first();
        $stddata->Message = $request->msg;
        $stddata->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $stddata = stdmodel::where('id',$id)->first();
        $stddata->delete();
        return back();
    }
}
