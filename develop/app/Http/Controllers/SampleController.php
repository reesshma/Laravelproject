<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use App\Models\NewName ;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class SampleController extends Controller
{
    function sam () {
        //return view('greeting', ['name' => 'reeshu']);
        return View::make('greeting', ['name' => 'reesh','age' => '23']);
        
    }
    function myfunction () {
        return view::make('form1');
        
    }
    function myfunction1 (Request $request) {
        dd($request->all());
     echo "helooo ressh";
     
     echo "<pre>";
     print_r($_POST);
      $pincode = $_POST['pincode'];
      $pincode1 = $_POST['pincode1'];
     if($pincode % 2 == 0)
        echo "even";
    else
        echo "odd";
     echo "</pre>";
     for($value = $pincode;$value<=$pincode1;$value++){
         echo($value)."<br>";
     }
     $id = DB::table('new_names')->insert([
        'Name' => $_POST['name'],
        'Address' => $_POST['address'],
        'pincode' => $_POST['pincode']
    ]);
    return redirect()->route('list');
    DB::table('new_names')->insertOrIgnore([
        ['Name' => 'rhonini', 'Address' => 'chennai', 'pincode' => '737388'],
        ['Name' => 'sanjivi', 'Address' => 'thirunelvi', 'pincode' => '737324'],
    ]);
    }
    function list(){
        
        /*$users = DB::table('new_names')->get();
        $use = DB::table('new_names')
                        //->where('name', 'ragavi')
                        ->orderBy('pincode','desc')
                        ->get();
        $use = DB::table('new_names')
                        ->max('pincode');
        $us = DB::table('new_names')
                        ->min('pincode');
        $log = DB::table('new_names')->avg('pincode');
        $blog = DB::table('new_names')->count('pincode');
                        
                  echo "$use.<br>";
                  echo "$blog.<br>"; 
                  echo "$us.<br>";
                  echo "$log.<br>"; */
        //$Models = NewName::all();
        //$Models = NewName::orderBy("pincode","desc")->take(10)->get();
        //dd($Models);
        $Models = NewName::orderBy("pincode","desc")->paginate(10);
    return view::make('student.studentlist', ['users' => $Models]);
    
           }
    function myfun () {
        //return view::make('sample.samp');
        echo "hi";
    }
    function namimg(){
        return view::make('sample.switch');
    }
    function nam(){
        return view::make('sample.for');
    }
    function nam1(){
        return view::make('sample.foreach');
    }
    function nam2(){
        return view::make('sample.while');
    }
    function insertData(Request $request){
        $obj = new NewName;
        $obj->Name=$request->name;
        $obj->Address=$request->address;
        $obj->pincode=$request->pincode;
        $obj->save();
    }
    function insertvalues(Request $request){
        $obj = new NewName;
        $obj->Name=$request->name;
        $obj->Address=$request->address;
        $obj->pincode=$request->pincode;
        $obj->save();
        return redirect()->route('student_details1')->with("Success","form have been submitted");
    }

}

 
