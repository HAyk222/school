<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use DB;
use File;

class ClassCategoryStudents extends Controller
{
    public function CategoryStudents($number, $id){
        $dasaran = DB::table('dasaran_number')->get();
        $dasaran_category = DB::table('dasaran')->get();
        $classArr = array("dashboard" => "", "personnel" => "", "personnel_open" => "", "administrative" => "", "educational" => "", "educational_open" => "", "teachers" => "", "other" => "", "serving" => "", "topic" => "", "council" => "", "council_open" => "", "parentCouncil" => "", "teacherCouncil" => "", "otherCouncil" => "", "classrooms" => "active", "classrooms_open" => "menue-open", "add_classroom" => "active", "classroom" => "", "classroom_open" => "", "classroom_type" => "", "classCat_open" => "menue-open", "classroom_teachers" => "", "classroom_students" => "active", "add_category" => "");
        $ashakertner = DB::select('select * from ashakert where dasaran_id = ?', [$id]);
        $title = "Աշակերտներ";
        $action_url = "/CategoryStudents/insert";
        $update_url = "/CategoryStudents/update";
        $delete_url = "/CategoryStudents/delete";
        $ajax_url = "/CategoryStudents";
    	return view("admin.classrooms.category.classCategoryStudents", ["class" => $classArr, "title" => $title, "action_url" => $action_url, "dasaran" => $dasaran, "number" => $number, "id" => $id, "dasaran_category" => $dasaran_category, "ashakertner" => $ashakertner, "update_url" => $update_url, "delete_url" => $delete_url, "ajax_url" => $ajax_url]);
    }

    public function insert(Request $req){
        $name = $req->name;
        $surname = $req->surname;
        $dasaran_id = $req->dasaran_id;

        if($req->hasFile('image')){
            $image = $req->file('image');
            $input['imagename'] = time() . "." . $image->getClientOriginalExtension();
            $destinationPath = public_path("/upload");
            $image->move($destinationPath, $input['imagename']);
        }else{
             $input['imagename'] = "";
        }
        
        $data=array("name"=>$name, "surname"=>$surname, "dasaran_id" => $dasaran_id, "nkar"=>$input['imagename']);
        DB::table("ashakert")->insert($data);

        return back()->withInput();
    }

    public function edit(Request $req){
        $ashakert = DB::select('select * from ashakert where ID = ?', [$req->id]);
        print json_encode($ashakert);
    }
    
    public function update(Request $req){
        $id = $req->update_id;
        $name = $req->name_update;
        $surname = $req->surname_update;
        $image = $req->upload_image;
        if($req->hasFile('image_up')){
            $img = $req->file('image_up');
            $input['imagename'] = time() . "." . $img->getClientOriginalExtension();
            $destinationPath = public_path("/upload");
            $img->move($destinationPath, $input['imagename']);
        }else{
             $input['imagename'] = $image;
        }
        
        DB::table('ashakert')
            ->where('ID', $id)
            ->update(['name' => $name, 'surname' => $surname, 'nkar' => $input['imagename']]);

        return back()->withInput();
    }

    public function delete(Request $req){
        DB::table('ashakert')->where('ID', '=', $req->id)->delete();
    }
}
