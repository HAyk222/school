<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use DB;

class PersonnelServing extends Controller
{
    public function serving(){
        $data = DB::table('spasarkox_anznakazm')->get();
        $dasaran = DB::table('dasaran_number')->get();
        $dasaran_category = DB::table('dasaran')->get();

        $classArr = array("dashboard" => "", "personnel" => "active", "personnel_open" => "menu-open", "administrative" => "", "educational" => "", "educational_open" => "", "teachers" => "", "other" => "", "serving" => "active", "topic" => "", "council" => "", "council_open" => "", "parentCouncil" => "", "teacherCouncil" => "", "otherCouncil" => "", "classrooms" => "", "classrooms_open" => "", "add_classroom" => "", "classroom" => "", "classroom_open" => "", "classroom_type" => "", "dasaran_category" => array(), "dasaran_category" => array());
        $title = "Սպասարկող Անձնակազմ";
        $action_url = "/serving/insert";
        $ajax_url = "/serving";
        $update_url = "/serving/update";
        $delete_url = "/serving/delete";
        $array = array("Գլխավոր հաշվապահ", "Հաշվետար", "Գրադարանի վարիչ", "Գրադարանավար", "Լաբորանտ", "Օպերատոր-տեխնիկ", "Քաղ. պաշտ. շտաբի պետ", "Գործավար", "Ընթացիկ նորոգման բանվոր", "Դռնապան", "Պահակ", "Հավաքարար", "Հնոցապան");
    	return view("admin.personnel.serving",["data"=>$data, "class" => $classArr, "title" => $title, "action_url" => $action_url, "ajax_url" => $ajax_url, "update_url" => $update_url, "delete_url" => $delete_url, "data_position" => $array, "dasaran" => $dasaran, "dasaran_category" => $dasaran_category]);
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
        DB::table("spasarkox_anznakazm")->insert($data);
        return back()->withInput();
    }

    public function edit(Request $req){
        $other = DB::select('select * from spasarkox_anznakazm where ID = ?', [$req->id]);
        print json_encode($other);
    }

    public function update(Request $req){
        $id = $req->id;
        $name = $req->name;
        $surname = $req->surname;
        $position = $req->position;
        $image = $req->image;
        
        DB::table('spasarkox_anznakazm')
            ->where('id', $id)
            ->update(['name' => $name, 'surname' => $surname, 'pashton' => $position, 'nkar' => $image]);

        $other = DB::select('select * from spasarkox_anznakazm where ID = ?', [$id]);
        print json_encode($other);
        
    }

    public function delete(Request $req){
        DB::table('spasarkox_anznakazm')->where('ID', '=', $req->id)->delete();
    }
    
}
