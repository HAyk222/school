<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use DB;
use File;

class CouncilTeacher extends Controller
{
    public function teacherCouncil(){
        $data = DB::table('us_xorhurd')->get();
        $dasaran = DB::table('dasaran_number')->get();
        $dasaran_category = DB::table('dasaran')->get();

        $classArr = array("dashboard" => "", "personnel" => "", "personnel_open" => "", "administrative" => "", "educational" => "", "educational_open" => "", "teachers" => "", "other" => "", "serving" => "", "topic" => "", "council" => "active", "council_open" => "menu-open", "parentCouncil" => "", "teacherCouncil" => "active", "otherCouncil" => "", "classrooms" => "", "classrooms_open" => "", "add_classroom" => "", "classroom" => "", "classroom_open" => "", "classroom_type" => "");
        $title = "Ուսուցչական Խորհուրդ";
        $action_url = "/teacherCouncil/insert";
        $ajax_url = "/teacherCouncil";
        $update_url = "/teacherCouncil/update";
        $delete_url = "/teacherCouncil/delete";
        $array = array("Տնօրեն","Տնօրենի տեղակալ ուս. աշխ. գծով","Տնօրենի տեղակալ մասն. կրթ. աջակց. գծով","Տնօրենի տեղակալ Վարչ. տնտ. աշխ. գծով");
    	return view("admin.council.teacherCouncil",["data"=>$data, "class" => $classArr, "title" => $title, "action_url" => $action_url, "data_position" => $array, "ajax_url" => $ajax_url, "update_url" => $update_url, "delete_url" => $delete_url, "dasaran" => $dasaran, "dasaran_category" => $dasaran_category]);
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
        DB::table("us_xorhurd")->insert($data);
        return back()->withInput();
    }



    public function edit(Request $req){
        $us_xorhurd = DB::select('select * from us_xorhurd where ID = ?', [$req->id]);
        print json_encode($us_xorhurd);
    }

    public function update(Request $req){
        $id = $req->id;
        $name = $req->name;
        $surname = $req->surname;
        $position = $req->position;
        $image = $req->image;
        
        DB::table('us_xorhurd')
            ->where('id', $id)
            ->update(['name' => $name, 'surname' => $surname, 'pashton' => $position, 'nkar' => $image]);

        $other = DB::select('select * from us_xorhurd where ID = ?', [$id]);
        print json_encode($other);
        
    }

    public function delete(Request $req){
        DB::table('us_xorhurd')->where('ID', '=', $req->id)->delete();
    }

    
}
