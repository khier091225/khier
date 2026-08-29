<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    private function courses(): array
    {
        return [
            [
                'code' => 'WEBDEV3',
                'title' => 'Web Framework Laravel Development',
                'units' => 5,
            ],
            [
                'code' => 'DBMS2',
                'title' => 'Advanced Database Systems',
                'units' => 3,
            ],
            [
                'code' => 'SE1',
                'title' => 'Software Engineering 1',
                'units' => 3,
            ],
        ];
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
