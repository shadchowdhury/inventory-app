<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('employee.manage_employee');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employee.add_employee');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.Employee::class],
            'phone' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'experience' => ['string', 'max:255'],
            'nid_no' => ['string', 'max:255'],
            'salary' => ['required', 'string', 'max:255'],
            'vacation' => ['string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'image' => ['image', 'mimes:jpeg,png,jpg', 'max:2048']
        ]);

        // Employee::create([
        //     'name' => $request->name,
        //     'email' => $request->description
        // ]);

        // return response()->json([
        //     "status" => "Product Saved Successfully"
        // ], 201);
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
