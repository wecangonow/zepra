<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LessonController extends Controller
{
    //
    public function index()
    {
        return Lesson::all(); //bad
    }


    public function show($id)
    {
        $lesson = Lesson::findOrFail($id);
        return $lesson;
    }
}
