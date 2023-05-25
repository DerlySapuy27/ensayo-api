<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;

class AttendanceController extends Controller
{
    public function courses(){
        $courses = Course::get();
        return response([
            'courses' => $courses
        ],200);
    }

    public function apprentices($id){
        $apprentices = Course::whith('apprentices')->where('id,$id')->get;
        return response([
            'apprentices' => $apprentices
        ],200);
    }
}
