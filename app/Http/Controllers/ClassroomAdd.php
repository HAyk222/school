<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use DB;
use File;

class ClassroomAdd extends Controller
{
    public function addClassroom(){
        $dasaran = DB::table('dasaran_number')->get();
        $dasaran_category = DB::table('dasaran')->get();
        $classArr = array("dashboard" => "", "personnel" => "", "personnel_open" => "", "administrative" => "", "educational" => "", "educational_open" => "", "teachers" => "", "other" => "", "serving" => "", "topic" => "", "council" => "", "council_open" => "", "parentCouncil" => "", "teacherCouncil" => "", "otherCouncil" => "", "classrooms" => "active", "classrooms_open" => "menue-open", "add_classroom" => "active", "classroom" => "", "classroom_open" => "", "classroom_type" => "");
        $title = "Ավելացնել Դասարան";
        $action_url = "/addClassroom/insert";
        $update_url = "/addClassroom/update";
        $delete_url = "/addClassroom/delete";
        $ajax_url = "/addClassroom";
    	return view("admin.classrooms.addClassroom", ["class" => $classArr, "title" => $title, "action_url" => $action_url, "dasaran" => $dasaran, "dasaran_category" => $dasaran_category, "update_url" => $update_url, "delete_url" => $delete_url, "ajax_url" => $ajax_url]);
    }

    public function insert(Request $req){
       $name = $req->input('name');
       $data=array("name"=>$name);
       DB::table("dasaran_number")->insert($data);
       return back()->withInput();
    }

    public function edit(Request $req){
      $dasaran_number = DB::select('select * from dasaran_number where ID = ?', [$req->id]);
      print json_encode($dasaran_number);
    }

    public function update(Request $req){
        $id = $req->update_id;
        $name = $req->input('name_update');
       
        
        DB::table('dasaran_number')
            ->where('ID', $id)
            ->update(['name' => $name]);

        return back()->withInput();
    }

    public function delete(Request $req){
        DB::table('dasaran_number')->where('ID', '=', $req->id)->delete();
    }
    
}
