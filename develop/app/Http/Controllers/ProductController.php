<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use App\Models\Product ;


use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $model = Product::all();
        return view::make('formlist', ['users' => $model]);
    }
    public function create(){
        return view::make('formexample');
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required|min:6|max:10',
            'age' => 'required',
            'phone_number' => 'required',
            'email' => 'required|min:6|max:10'
            ],[
            'name.required' => 'Name is Required',
            'name.min' => 'Name should be atleast :min characters',
            'name.max' => 'Name should not be greater than :max characters',
            'age' => 'required',
            'age.required' => 'age is Required',
            'phone_number.required' => 'phone is Required',
            'email.required' => 'email is Required',
            'email.min' => 'email should be atleast :min characters',
            'email.max' => 'email should not be greater than :max characters',
                ]);
        //dd($request->all());
        $form = new Product;
        $form->name = $request->name;
        $form->age = $request->age;
        $form->phone_number = $request->phone_number;
        $form->email = $request->email;
        $form->save();
        return redirect()->route('detail')->with("Success","form have been submitted");
    }
    public function edit($id){
        $model = Product::find($id);
        return view::make('formupdate',['model' => $model]);
    }
    public function update($id,Request $request){
        $model = Product::find($request->id);
        $model->name = $request->name;
        $model->age = $request->age;
        $model->phone_number = $request->phone_number;
        $model->email = $request->email;
        $model->update();
        return redirect()->route('detail')->with("Success","form have been submitted");
    }
    public function show(){
        
    }
    public function destroy($id){
        $model = Product::find($id);
        $model->delete();
        //return view::make('formlist', ['users' => $model]);
    }
}
