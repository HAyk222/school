<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use DB;

class PersonnelTeachers extends Controller
{
    public function  teachers(){
        $data = DB::table('dasatu')->get();
        $dasaran = DB::table('dasaran_number')->get();
        $dasaran_category = DB::table('dasaran')->get();

        $classArr = array("dashboard" => "", "personnel" => "active", "personnel_open" => "menu-open", "administrative" => "", "educational" => "active", "educational_open" => "menu-open", "teachers" => "active", "other" => "", "serving" => "", "topic" => "", "council" => "", "council_open" => "", "parentCouncil" => "", "teacherCouncil" => "", "otherCouncil" => "", "classrooms" => "", "classrooms_open" => "", "add_classroom" => "", "classroom" => "", "classroom_open" => "", "classroom_type" => "", "dasaran_category" => array());
        $title = "Ուսուցիչներ";
        $action_url = "/teachers/insert";
        $ajax_url = "/teachers";
        $update_url = "/teachers/update";
        $delete_url = "/teachers/delete";
        $array = DB::table('ararka')->get();
        $dasatu_ararka = DB::table('dasatu_ararka')->get();
    	return view("admin.personnel.educational.teachers",["data"=>$data, "class" => $classArr, "title" => $title, "action_url" => $action_url, "ajax_url" => $ajax_url, "update_url" => $update_url, "delete_url" => $delete_url, "data_position" => $array, "dasatu_ararka" => $dasatu_ararka, "dasaran" => $dasaran, "dasaran_category" => $dasaran_category]);
    }

    public function insert(Request $req){
        $name = $req->input('name');
        $surname = $req->input('surname');
       
        if($req->hasFile('image')){
            $image = $req->file('image');
            $input['imagename'] = time() . "." . $image->getClientOriginalExtension();
            $destinationPath = public_path("/upload");
            $image->move($destinationPath, $input['imagename']);
        }else{
             $input['imagename'] = "";
        }
        
        
        $data=array("name"=>$name, "surname"=>$surname, "nkar"=>$input['imagename']);
        DB::table("dasatu")->insert($data);

        $topic = $req->input('topic');
        
        $dasatu_id = DB::select('select ID from dasatu order by ID desc limit 1');
        $ararka_id = DB::select('select ID from ararka where name = ?', [$topic]);

        $data_dasatu_ararka=array("dasatu_id"=>$dasatu_id[0]->ID, "ararka_id"=>$ararka_id[0]->ID);
        DB::table("dasatu_ararka")->insert($data_dasatu_ararka);

        return back()->withInput();
    }

    public function edit(Request $req){
        $dasatu = DB::select('select * from dasatu where ID = ?', [$req->id]);
        $array = array();
        $array[] = $dasatu;
        $ararka_id = DB::select('select ararka_id from dasatu_ararka where dasatu_id = ?', [$req->id]);
        $ararka_name = DB::select('select name from ararka where ID = ?', [$ararka_id[0]->ararka_id]);
        $array[] = $ararka_name;
        print json_encode($array);
    }

    public function update(Request $req){
        $id = $req->id;
        $name = $req->name;
        $surname = $req->surname;
        $image = $req->image;
        
        DB::table('dasatu')
            ->where('id', $id)
            ->update(['name' => $name, 'surname' => $surname, 'nkar' => $image]);
        $ararka_id = DB::select('select ID from ararka where name = ?', [$req->position]);
        DB::table('dasatu_ararka')
            ->where('dasatu_id', $id)
            ->update(['ararka_id' => $ararka_id[0]->ID]);

        $teacher = DB::select('select * from dasatu where ID = ?', [$id]);
        $array = array();
        $array[] = $teacher;
        $idInArarka = DB::select('select ararka_id from dasatu_ararka where dasatu_id = ?', [$req->id]);
        $ararka_name = DB::select('select name from ararka where ID = ?', [$idInArarka[0]->ararka_id]);
        $array[] = $ararka_name;
        print json_encode($array);
    }

    public function delete(Request $req){
        DB::table('dasatu')->where('ID', '=', $req->id)->delete();
    }
    
}
