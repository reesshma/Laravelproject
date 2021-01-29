<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use App\Models\ProductModel ;


use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $Models = ProductModel::all();
        return view::make('formlist', ['users' => $Models]);
    }
    function create(Request $request){
        $form = new ProductModel;
        $form->name=$request->name;
        $form->age=$request->age;
        $form->phone_name=$request->phone_name;
        $form->email=$request->email;
        $form->save();
        return redirect()->route('first3')->with("Success","form have been submitted");
    }
    function store(){

    }
    function edit(){

    }
    function update(){

    }
    function show(){
        return view::make('formexample');
    }
    function destroy(){

    }
}
