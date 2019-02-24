<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use DB;
use File;

class ClassroomAddCategory extends Controller
{
    public function addClassroomCategory($number){
        $dasaran = DB::table('dasaran_number')->get();
        $dasaran_category = DB::table('dasaran')->get();
        $classArr = array("dashboard" => "", "personnel" => "", "personnel_open" => "", "administrative" => "", "educational" => "", "educational_open" => "", "teachers" => "", "other" => "", "serving" => "", "topic" => "", "council" => "", "council_open" => "", "parentCouncil" => "", "teacherCouncil" => "", "otherCouncil" => "", "classrooms" => "active", "classrooms_open" => "menue-open", "add_classroom" => "active", "classroom" => "", "classroom_open" => "", "classroom_type" => "", "add_category" => "active");
        $title = "Ավելացնել Կատեգորիա";
        $action_url = "/addClassroomCategory/insert";
        $update_url = "/addClassroomCategory/update";
        $delete_url = "/addClassroomCategory/delete";
        $ajax_url = "/addClassroomCategory";
    	return view("admin.classrooms.addClassroomCategory", ["class" => $classArr, "title" => $title, "action_url" => $action_url, "dasaran" => $dasaran, "number" => $number, "dasaran_category" => $dasaran_category, "update_url" => $update_url, "delete_url" => $delete_url, "ajax_url" => $ajax_url]);
    }

    public function insert(Request $req){
        $category = $req->input('category');
        $name_dasxek = $req->input('name_dasxek');
        $name_cnox = $req->input('name_cnox');
        $classroom_number = $req->input('classroom_number');
        if($req->hasFile('image_dasxek')){
            $image_dasxek = $req->file('image_dasxek');
            $input['imagename'] = time() . "." . $image_dasxek->getClientOriginalExtension();
            $destinationPath = public_path("/upload");
            $image_dasxek->move($destinationPath, $input['imagename']);
        }else{
             $input['imagename'] = "";
        }
        
        
        $data=array("name"=>$category, "dasxek"=>$name_dasxek, "dasxek_nkar"=>$input['imagename'], "cnox_komite"=>$name_cnox, "cnox_komite_nkar"=>"", "number_id"=>$classroom_number);
        DB::table("dasaran")->insert($data);
        return back()->withInput();
    }

    public function edit(Request $req){
        $dasaran = DB::select('select * from dasaran where ID = ?', [$req->id]);
        print json_encode($dasaran);
    }

    public function update(Request $req){
        $id = $req->update_id;
        $category = $req->input('category_update');
        $name_dasxek = $req->input('name_dasxek_update');
        $name_cnox = $req->input('name_cnox_update');
        $up_image = $req->input('upload_image');
        if($req->hasFile('image_dasxek_update')){
            $image_dasxek_update = $req->file('image_dasxek_update');
            $input['imagename'] = time() . "." . $image_dasxek_update->getClientOriginalExtension();
            $destinationPath = public_path("/upload");
            $image_dasxek_update->move($destinationPath, $input['imagename']);
        }else{
             $input['imagename'] = $up_image;
        }
        
        DB::table('dasaran')
            ->where('ID', $id)
            ->update(['name' => $category, "dasxek"=>$name_dasxek, "dasxek_nkar"=>$input['imagename'], "cnox_komite"=>$name_cnox]);

        return back()->withInput();
    }

    public function delete(Request $req){
        DB::table('dasaran')->where('ID', '=', $req->id)->delete();
    }
    
}
