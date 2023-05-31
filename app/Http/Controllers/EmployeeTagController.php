<?php

namespace App\Http\Controllers;

use App\Models\EmployeeTag;
use Illuminate\Http\Request;

class EmployeeTagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'test';
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
     * @param  \App\Models\EmployeeTag  $employeeTag
     * @return \Illuminate\Http\Response
     */
    public function show(EmployeeTag $employeeTag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EmployeeTag  $employeeTag
     * @return \Illuminate\Http\Response
     */
    public function edit(EmployeeTag $employeeTag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EmployeeTag  $employeeTag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EmployeeTag $employeeTag)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EmployeeTag  $employeeTag
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmployeeTag $employeeTag)
    {
        //
    }
}
