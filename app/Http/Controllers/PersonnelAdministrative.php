<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use DB;
use File;

class PersonnelAdministrative extends Controller
{
    public function administrative(){
        $data = DB::table('varchakazm')->get();
        $dasaran = DB::table('dasaran_number')->get();
        $dasaran_category = DB::table('dasaran')->get();
        $classArr = array("dashboard" => "", "personnel" => "active", "personnel_open" => "menu-open", "administrative" => "active", "educational" => "", "educational_open" => "", "teachers" => "", "other" => "", "serving" => "", "topic" => "", "otherCouncil" => "", "council" => "", "council_open" => "", "parentCouncil" => "", "teacherCouncil" => "", "otherCouncil" => "", "classrooms" => "", "classrooms_open" => "", "add_classroom" => "", "classroom" => "", "classroom_open" => "", "classroom_type" => "");
        $title = "Վարչական Անձնակազմ";
        $action_url = "/administrative/insert";
        $ajax_url = "/administrative";
        $update_url = "/administrative/update";
        $delete_url = "/administrative/delete";
        $array = array("Տնօրեն","Տնօրենի տեղակալ ուս. աշխ. գծով","Տնօրենի տեղակալ մասն. կրթ. աջակց. գծով","Տնօրենի տեղակալ Վարչ. տնտ. աշխ. գծով");
    	return view("admin.personnel.administrative",["data"=>$data, "class" => $classArr, "title" => $title, "action_url" => $action_url, "data_position" => $array, "ajax_url" => $ajax_url, "update_url" => $update_url, "delete_url" => $delete_url, "dasaran" => $dasaran, "dasaran_category" => $dasaran_category]);
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
        DB::table("varchakazm")->insert($data);
        return back()->withInput();
    }



    public function edit(Request $req){
        $varchakazm = DB::select('select * from varchakazm where ID = ?', [$req->id]);
        print json_encode($varchakazm);
    }

    public function update(Request $req){
        $id = $req->id;
        $name = $req->name;
        $surname = $req->surname;
        $position = $req->position;
        $image = $req->image;
        
        DB::table('varchakazm')
            ->where('id', $id)
            ->update(['name' => $name, 'surname' => $surname, 'pashton' => $position, 'nkar' => $image]);

        $other = DB::select('select * from varchakazm where ID = ?', [$id]);
        print json_encode($other);
        
    }

    public function delete(Request $req){
        DB::table('varchakazm')->where('ID', '=', $req->id)->delete();
    }

    
}
