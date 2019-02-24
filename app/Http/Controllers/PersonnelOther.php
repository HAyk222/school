<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use DB;

class PersonnelOther extends Controller
{
    public function  other(){
        $data = DB::table('ayl_anznakazm')->get();
        $dasaran = DB::table('dasaran_number')->get();
        $dasaran_category = DB::table('dasaran')->get();

        $classArr = array("dashboard" => "", "personnel" => "active", "personnel_open" => "menu-open", "administrative" => "", "educational" => "active", "educational_open" => "menu-open", "teachers" => "", "other" => "active", "serving" => "", "topic" => "", "council" => "", "council_open" => "", "parentCouncil" => "", "teacherCouncil" => "", "otherCouncil" => "", "classrooms" => "", "classrooms_open" => "", "add_classroom" => "", "classroom" => "", "classroom_open" => "", "classroom_type" => "", "dasaran" => $dasaran, "dasaran_category" => array());
        $title = "Այլ Անձնակազմ";
        $action_url = "/other/insert";
        $ajax_url = "/other";
        $update_url = "/other/update";
        $delete_url = "/other/delete";
        $array = array("Սով. հետ դաստ. աշխ. կազմ-իչ", "Հոգեբան", "Լոգոպեդ", "Հատուկ մանկավարժ", "Սոց մանկավարժ", "Զինղեկ", "Դաստիարակ", "Երկարօրյաի Դաստիարակ", "Ուսուցիչներ");
    	return view("admin.personnel.educational.other",["data"=>$data, "class" => $classArr, "title" => $title, "action_url" => $action_url, "ajax_url" => $ajax_url, "update_url" => $update_url, "delete_url" => $delete_url, "data_position" => $array, "dasaran" => $dasaran, "dasaran_category" => $dasaran_category]);
    }

    public function insert(Request $req){
        $name = $req->input('name');
        $surname = $req->input('surname');
        $position = $req->input('position');
        if($req->hasFile('image')){
            $image = $req->file('image');
            $input['imagename'] = time() . "." . $image->getClientOriginalExtension();
            $destinationPath = public_path("/upload");
            $image->move($destinationPath, $input['imagename']);
        }else{
             $input['imagename'] = "";
        }
        
        
        $data=array("name"=>$name, "surname"=>$surname, "pashton"=>$position, "nkar"=>$input['imagename']);
        DB::table("ayl_anznakazm")->insert($data);
        return back()->withInput();
    }

    public function edit(Request $req){
        $other = DB::select('select * from ayl_anznakazm where ID = ?', [$req->id]);
        print json_encode($other);
    }

    public function update(Request $req){
        $id = $req->id;
        $name = $req->name;
        $surname = $req->surname;
        $position = $req->position;
        $image = $req->image;
        
        DB::table('ayl_anznakazm')
            ->where('id', $id)
            ->update(['name' => $name, 'surname' => $surname, 'pashton' => $position, 'nkar' => $image]);

        $other = DB::select('select * from ayl_anznakazm where ID = ?', [$id]);
        print json_encode($other);
        
    }

    public function delete(Request $req){
        DB::table('ayl_anznakazm')->where('ID', '=', $req->id)->delete();
    }

}
