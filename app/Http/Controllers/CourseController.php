<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function index() {
        $courses = Course::all();

        if (sizeof($courses) == 0) {
            return response()->json([
                'error' => true,
                'message' => 'no courses', 
            ], 422);
        } else {
            return response()->json([
                'error' => false,
                'data' => $courses,
            ], 200);
        }

    }

    public function show($id) {
        $course = Course::find($id);

        if ($course == null) {
            return response()->json([
                'error' => true,
                'message' => 'no course',
            ], 422);
        } else {
            return response()->json([
                'error' => false,
                'data' => $course,
            ], 200);
        }
    }
}
