<?php

namespace App\Http\Controllers;

// He añadido un metodo para listar los cursos

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('courses.index', compact('courses'));
    }
}
