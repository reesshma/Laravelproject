<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use App\Models\Product ;
use App\Models\File ;
use Carbon\Carbon ;


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
        /*$request->validate([
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
        return redirect()->route('detail')->with("Success","form have been submitted");*/
        
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
    public function file(){
        return View::make('file');
    }
    public function stores(Request $request){
        //dd($request->all());
        $request->validate([
            'file_name' => 'required|image|mimes:jpg,png,gif,svg,jpeg',
        ],[
            'file_name.required' => 'Please upload your File',
            'file_name.max' => 'File should be max:2048mb', 
            'file_name.min' => 'File should be min:1024mb',
            'file_name.mimes' => 'supported mimes:jpg,png,gif,svg,jpeg',
        ]);
        $timeStamp = Carbon::now()->format('Y_m_d_H_i_s');
        
        //dd($file);
        $fileExtension = $request->file_name->extension();
        $fileName = $timeStamp.'.'.$fileExtension;
        //dd($fileName);
        $request->file_name->storeAs('images', $fileName);
        $form = new File;
        $form->file_name = $fileName;
        $form->save();
        
    }
    public function assest(){
        dd(asset('storage/images'));
    }
}
