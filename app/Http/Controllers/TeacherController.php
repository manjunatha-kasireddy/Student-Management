<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Http\RedirectResponse;
use illuminate\Http\Response;
use App\Models\Teacher;
use App\Models\Batch;
use App\Models\Course;
use illuminate\view\view;


class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): view
    {
        $teachers = Teacher::all();
        return view('teachers.index')->with('teachers' , $teachers);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): view
    {
        $batches = Batch::pluck('name', 'id');
        $courses = Course::pluck('name','id');
        return view('teachers.create', compact('batches','courses'));

    //   return view('teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        
        $input = $request->all();
      
        Teacher::create($input);
       
        return redirect('teachers')->with('flash_message' , 'Teacher Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): view
    {
        $teachers = Teacher::find($id);
        return view('teachers.show')->with('teachers' , $teachers);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): view
    {
        $teachers = Teacher::find($id);
        return view('teachers.edit')->with('teachers' , $teachers);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $teachers = Teacher::find($id);
        $input = $request->all();
        $teachers -> update($input);
        return redirect('teachers')->with('flash_message' , 'teacher Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse

    {
        Teacher::destroy($id);
        return redirect('teachers')->with('flash_message', 'Teacher deleted!');
    }
    
}
