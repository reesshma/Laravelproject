<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Employee ;

class EmployeeController extends Controller
{
    public function index(){
        $employee = Employee::all();
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
        $employee->password = $request->password;
        $employee->save();
        //return redirect()->route('employees.store');
    }
    public function show(){

    }
    public function edit(){

    }
    public function update(){

    }
    public function destroy(){

    }
}
