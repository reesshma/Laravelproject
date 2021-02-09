<?php

namespace App\Http\Controllers;

use App\Models\Productmanagement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer = Productmanagement::all();
        return view::make('product.index', ['users' => $customer]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view::make('product.customer');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:6|max:15',
            'age' => 'required',
            'phone_number' => 'required',
            'email' => 'required|min:6|max:15',
            'password' => 'required|min:6|regex:/^.+@.+$/i|max:15',
            ],[
            'name.required' => 'Name is Required',
            'name.min' => 'Name should be atleast :min characters',
            'name.max' => 'Name should not be greater than :max characters',
            'age.required' => 'age is Required',
            'phone_number.required' => 'phone is Required',
            'email.required' => 'email is Required',
            'email.min' => 'email should be atleast :min characters',
            'email.max' => 'email should not be greater than :max characters',
            'password.required' => 'Password is required',
            'password.min' => 'Password should be atleast:min characters',
            'password.max' => 'Password should be atleast:max characters',
                ]);
        $customer = new Productmanagement;
        $customer->name = $request->name;
        $customer->age = $request->age;
        $customer->phone_number = $request->phone_number;
        $customer->email = $request->email;
        $customer->password = bcrypt($request->password);
        $customer->save();
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $customer = productlist :: all();
        return view::make('product.show',['users' => $customer]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Productmanagement::find($id);
        return view::make('product.update',['users' => $customer]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $request->validate([
            'name' => 'required|min:6|max:15',
            'age' => 'required',
            'phone_number' => 'required',
            'email' => 'required|min:6|max:15',
            'password' => 'required|min:6|regex:/^.+@.+$/i|max:15',
            ],[
            'name.required' => 'Name is Required',
            'name.min' => 'Name should be atleast :min characters',
            'name.max' => 'Name should not be greater than :max characters',
            'age.required' => 'age is Required',
            'phone_number.required' => 'phone is Required',
            'email.required' => 'email is Required',
            'email.min' => 'email should be atleast :min characters',
            'email.max' => 'email should not be greater than :max characters',
            'password.required' => 'Password is required',
            'password.min' => 'Password should be atleast:min characters',
            'password.max' => 'Password should be atleast:max characters',
                ]);
        $customer = Productmanagement :: find($request->id);
        $customer->name = $request->name;
        $customer->age = $request->age;
        $customer->phone_number = $request->phone_number;
        $customer->email = $request->email;
        $customer->password = bcrypt($request->password);
        $customer->update();
        return redirect()->route('products.create');
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = Productmanagement :: find($id);
        $customer->delete();
    }
}
