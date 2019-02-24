<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use DB;
use File;

class Topic extends Controller
{
    public function topic(){
    	$data = DB::table('ararka')->get();
        $dasaran = DB::table('dasaran_number')->get();
        $dasaran_category = DB::table('dasaran')->get();
        $classArr = array("dashboard" => "", "personnel" => "", "personnel_open" => "", "administrative" => "", "educational" => "", "educational_open" => "", "teachers" => "", "other" => "", "serving" => "", "topic" => "active", "council" => "", "council_open" => "", "parentCouncil" => "", "teacherCouncil" => "", "otherCouncil" => "", "classrooms" => "", "classrooms_open" => "", "add_classroom" => "", "classroom" => "", "classroom_open" => "", "classroom_type" => "");
        $title = "Առարկաներ";
        $action_url = "/topic/insert";
        $ajax_url = "/topic";
        $update_url = "/topic/update";
        $delete_url = "/topic/delete";
    	return view("admin.topic", ["data" => $data, "class" => $classArr, "title" => $title, "action_url" => $action_url, "ajax_url" => $ajax_url, "update_url" => $update_url, "delete_url" => $delete_url, "dasaran" => $dasaran, "dasaran_category" => $dasaran_category]);
    }

    public function insert(Request $req){
        $name = $req->input('name');
        $type = $req->input('type');
        
        $data=array("name"=>$name, "type"=>$type);
        DB::table("ararka")->insert($data);
        return back()->withInput();
    }

    public function edit(Request $req){
        $ararka = DB::select('select * from ararka where ID = ?', [$req->id]);
        print json_encode($ararka);
    }

    public function update(Request $req){
        $id = $req->id;
        $name = $req->name;
        $type = $req->type;
        

        $teacher_ides = DB::select('select * from dasatu_ararka where ararka_id = ?', [$id]);
        for($i=0; $i<count($teacher_ides); $i++){
           DB::table('dasatu')
            ->where('ID', $teacher_ides[$i]->dasatu_id)
            ->update(['pashton' => $name]);
        }

        DB::table('ararka')
            ->where('ID', $id)
            ->update(['name' => $name, 'type' => $type]);
        
        $ararka = DB::select('select * from ararka where ID = ?', [$id]);
        print json_encode($ararka);
        
    }

    public function delete(Request $req){
        $teacher_ides = DB::select('select * from dasatu_ararka where ararka_id = ?', [$req->id]);
        for($i=0; $i<count($teacher_ides); $i++){
           DB::table('dasatu')->where('ID', '=', $teacher_ides[$i]->dasatu_id)->delete();
        }
        DB::table('ararka')->where('ID', '=', $req->id)->delete();
        
    }
    
}
