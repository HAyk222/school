<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use DB;
use File;

class ClassCategoryTeachers extends Controller
{
    public function CategoryTeachers($number, $id){
        $data = DB::table('dasatu')->get();
        $dasatu_ararka = DB::table('dasatu_ararka')->get();
        $dasaran = DB::table('dasaran_number')->get();
        $dasaran_category = DB::table('dasaran')->get();
        $dasatu_dasaran = DB::select('select * from dasatu_dasaran where dasaran_id = ?', [$id]);
        $dasaran_teachers =  array();
        $ararka_arr = array();
        $dasatu_dasaran_id_arr = array();
        foreach($dasatu_dasaran as $key=>$k) {
            $cat_dasatu = DB::select('select * from dasatu where ID = ?', [$k->dasatu_id]);
            $ararka_id = DB::select('select * from dasatu_ararka where ID = ?', [$k->dasatu_id]);
            $ararka = DB::select('select name from ararka where ID = ?', [$ararka_id[0]->ararka_id]);
            $dasaran_teachers[] = $cat_dasatu;
            $ararka_arr[] = $ararka;
            $dasatu_dasaran_id_arr[] = $k->ID;
        }
        $classArr = array("dashboard" => "", "personnel" => "", "personnel_open" => "", "administrative" => "", "educational" => "", "educational_open" => "", "teachers" => "", "other" => "", "serving" => "", "topic" => "", "council" => "", "council_open" => "", "parentCouncil" => "", "teacherCouncil" => "", "otherCouncil" => "", "classrooms" => "active", "classrooms_open" => "menue-open", "add_classroom" => "active", "classroom" => "", "classroom_open" => "", "classroom_type" => "", "classCat_open" => "menue-open", "classroom_teachers" => "active", "classroom_students" => "", "add_category" => "");
        $title = "Ուսուցիչներ";
        $action_url = "/CategoryTeachers/insert";
        $update_url = "/CategoryTeachers/update";
        $delete_url = "/CategoryTeachers/delete";
        $ajax_url = "/CategoryTeachers";
    	return view("admin.classrooms.category.classCategoryTeachers", ["data"=>$data, "dasatu_ararka" => $dasatu_ararka, "class" => $classArr, "title" => $title, "action_url" => $action_url, "dasaran" => $dasaran, "number" => $number, "dasaran_category" => $dasaran_category, "id" => $id, "dasaran_teachers" => $dasaran_teachers, "ararka_arr" => $ararka_arr, "dasatu_dasaran_id_arr" => $dasatu_dasaran_id_arr, "update_url" => $update_url, "delete_url" => $delete_url, "ajax_url" => $ajax_url]);
    }

    public function insert(Request $req){
        $teacher = $req->input('teacher');
        $dasaran_id = $req->input('dasaran_id');
        
        $data=array("dasatu_id"=>$teacher, "dasaran_id"=>$dasaran_id);
        DB::table("dasatu_dasaran")->insert($data);
        return back()->withInput();
    }

    public function edit(Request $req){
        $dasatu_dasaran = DB::select('select * from dasatu_dasaran where ID = ?', [$req->id]);
        print json_encode($dasatu_dasaran);
    }

    public function update(Request $req){
        $id = $req->update_id;
        $teacher = $req->input('teacher_update');

        DB::table('dasatu_dasaran')
            ->where('ID', $id)
            ->update(['dasatu_id' => $teacher]);

        return back()->withInput();
    }

    public function delete(Request $req){
        DB::table('dasatu_dasaran')->where('ID', '=', $req->id)->delete();
    }
    
}
