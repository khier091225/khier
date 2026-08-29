<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{

    private function courses(): array {
        return [
            [
                'code' => 'WEBDEB3',
                'title' => 'Web Framework Laravel Development',
                'units' => '5'
            ],
            [
                'code' => 'MOBDEV2',
                'title' => 'Cross platforms Mobile Development',
                'units' => '3'
            ],
            [
                'code' => 'USRDSGN',
                'title' => 'UI/UX Designing',
                'units' => '3'
            ]
        ];
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = $this->courses();
        return view('courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('courses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return 'store() — coming in a future lesson';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $course)
    {
        $selectedCourse = collect($this->courses())->firstWhere('code', $course);

        abort_if($selectedCourse === null, 404);

        return view('courses.show', [
            'code' => $selectedCourse['code'],
            'title' => $selectedCourse['title'],
            'units' => $selectedCourse['units'],
        ]);
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
