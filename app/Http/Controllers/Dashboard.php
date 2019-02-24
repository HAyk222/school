<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use DB;
use File;

class Dashboard extends Controller
{
    public function dashboard(){
    	$dasaran = DB::table('dasaran_number')->get();
    	$dasaran_category = DB::table('dasaran')->get();
        $classArr = array("dashboard" => "active", "personnel" => "", "personnel_open" => "", "administrative" => "", "educational" => "", "educational_open" => "", "teachers" => "", "other" => "", "serving" => "", "topic" => "", "council" => "", "council_open" => "", "parentCouncil" => "", "teacherCouncil" => "", "otherCouncil" => "", "classrooms" => "", "classrooms_open" => "", "add_classroom" => "", "classroom" => "", "classroom_open" => "", "classroom_type" => "");
    	return view("admin.dashboard", ["class" => $classArr, "dasaran" => $dasaran, "dasaran_category" => $dasaran_category]);
    }
    
}
