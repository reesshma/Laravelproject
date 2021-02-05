<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Employee ;
use Carbon\Carbon ;

class EmployeeController extends Controller
{
    public function index(){
        $employee = Employee::OrderBy('id','desc')->paginate(4);
        return view::make('employee.userlist', ['users' => $employee]);
    }
    public function create(){
        $age=[];
        for($ages=18; $ages<70; $ages++){
            $age[] = $ages;
        }
        $state=['TamilNadu','AndhraPradesh','Kerala','Maharastra','Uttarpradesh'];
        $country=['India','UK'];
        return view::make('employee.employeeform',['age' => $age,'state' => $state,'country' => $country]);
    }
    public function store(Request $request){
        $request->validate([
            'first_name' => 'required|min:6|max:20',
            'last_name' => 'required|min:4|max:10',
            'gender' => 'required|in:male,female',
            'city' => 'required',
            'age' => 'required',
            'state' => 'required',
            'country' => 'required',
            'phone_number' => 'required',
            'pincode' => 'required',
            'dob' => 'required',
            'email' => 'required|min:6|max:20',
            'password' => 'required|min:6|regex:/^.+@.+$/i|max:15',
            'emp_roles' => 'required',
            'file_name' => 'required|mimes:pdf, docx, xlsx, xls, jpg, png, gif, svg, jpeg',
        ],[
            'first_name.required' => 'Enter your FirstName',
            'first_name.min' => 'FirstName should be atleast :min characters',
            'first_name.max' => 'FirstName should not be greater than :max characters',
            'last_name.required' => 'Enter your LastName',
            'last_name.min' => 'LastName should be atleast :min characters',
            'last_name.max' => 'LastName should not be greater than :max characters',
            'gender.required' => 'Select your Gender',
            'city.required' => 'City is required',
            'age.required' => 'Select your Age',
            'state.required' => 'Select your State',
            'country.required' => 'Select your Country',
            'phone_number.required' => 'Enter your phone number',
            'pincode.required' => 'Enter your pincode',
            'dob.required' => 'Fill your DOB',
            'email.required' => 'We need your email address',
            'password.required' => 'Please fill your password',
            'emp_roles.required' => 'Please Select your Employee Role',
            'file_name.required' =>'Please upload your File',
            'file_name.mimes' => 'supported files are pdf, docx, xlsx, xls,jpg, png, gif, svg, jpeg',
        ]);
        $timeStamp = Carbon::now()->format('Y_m_d_H_i_s');
        $fileExtension = $request->file_name->extension();
        $fileName = $timeStamp.'.'.$fileExtension;
        $request->file_name->storeAs('public/images', $fileName);
        $employee = new Employee;
        $employee->first_name = $request->first_name;
        $employee->last_name = $request->last_name;
        $employee->gender = $request->gender;
        $employee->city = $request->city;
        $employee->age = $request->age;
        $employee->state = $request->state;
        $employee->country = $request->country;
        $employee->phone_number = $request->phone_number;
        $employee->pincode = $request->pincode;
        $employee->dob = $request->dob;
        $employee->email = $request->email;
        $employee->password = bcrypt($request->password);
        $employee->emp_roles = implode(',',$request->emp_roles);
        $employee->file_name = $fileName;
        $employee->save();
        return redirect()->route('employees.index');
    }
    public function show(){

    }
    public function edit($id){
        $age=[];
        for($ages=18; $ages<70; $ages++){
            $age[] = $ages;
        }
        $employee = Employee::find($id);
        $state=['TamilNadu','AndhraPradesh','Kerala','Maharastra','Uttarpradesh'];
        $country=['India','UK'];
        return view::make('employee.employeeupdate',['users' => $employee, 'age' => $age, 'country' => $country, 'state' => $state]);
    }
    public function update($id,Request $request){
        $request->validate([
            'first_name' => 'required|min:6|max:20',
            'last_name' => 'required|min:4|max:10',
            'gender' => 'required|in:male,female',
            'city' => 'required',
            'age' => 'required',
            'state' => 'required',
            'country' => 'required',
            'phone_number' => 'required',
            'pincode' => 'required',
            'dob' => 'required',
            'email' => 'required|min:6|max:20',
            'password' => 'required|min:6|regex:/^.+@.+$/i|max:15',
            'emp_roles' => 'required',
            'file_name' => 'required|mimes:pdf, docx, xlsx, xls, jpg, png, gif, svg, jpeg',
        ],[
            'first_name.required' => 'Enter your FirstName',
            'first_name.min' => 'FirstName should be atleast :min characters',
            'first_name.max' => 'FirstName should not be greater than :max characters',
            'last_name.required' => 'Enter your LastName',
            'last_name.min' => 'LastName should be atleast :min characters',
            'last_name.max' => 'LastName should not be greater than :max characters',
            'gender.required' => 'Select your Gender',
            'city.required' => 'City is required',
            'age.required' => 'Select your Age',
            'state.required' => 'Select your State',
            'country.required' => 'Select your Country',
            'phone_number.required' => 'Enter your phone number',
            'pincode.required' => 'Enter your pincode',
            'dob.required' => 'Fill your DOB',
            'email.required' => 'We need your email address',
            'password.required' => 'Please fill your password',
            'emp_roles.required' => 'Please Select your Employee Role',
            'file_name.required' =>'Please upload your File',
            'file_name.mimes' => 'supported files are pdf, docx, xlsx, xls,jpg, png, gif, svg, jpeg',
        ]);
        $timeStamp = Carbon::now()->format('Y_m_d_H_i_s');
        $fileExtension = $request->file_name->extension();
        $fileName = $timeStamp.'.'.$fileExtension;
        $request->file_name->storeAs('public/images', $fileName);
        $employee = Employee::find($request->id);
        $employee->first_name = $request->first_name;
        $employee->last_name = $request->last_name;
        $employee->gender = $request->gender;
        $employee->city = $request->city;
        $employee->age = $request->age;
        $employee->state = $request->state;
        $employee->country = $request->country;
        $employee->phone_number = $request->phone_number;
        $employee->pincode = $request->pincode;
        $employee->dob = $request->dob;
        $employee->email = $request->email;
        $employee->password = bcrypt($request->password);
        $employee->emp_roles = implode(',', $request->emp_roles);
        $employee->file_name = $request->file_name;
        $employee->file_name = $fileName;
        $employee->update();
        return redirect()->route('employees.index');
    }
    public function destroy($id){
        $employee = Employee::find($id);
        $employee->delete();
        return redirect()->route('employees.index');
    }
}
