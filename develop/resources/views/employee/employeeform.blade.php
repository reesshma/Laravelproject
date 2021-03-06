<html>
    <head>
        <title>Practical</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        
    </head>
    <body>
        <header>
            <div class="container">
                <div class="menu-section">
                    <nav class="navbar navbar-expand-lg bg-warning navbar-dark">
                        <h3 class="text-white" style="margin-left:400px">EMPLOYEE MANAGEMENT</h3>
                    </nav>
                </div>
            </div>
        </header>
        <div>
            <form method="post" action="{{route('employees.store')}}" style="margin-left:300px" enctype="multipart/form-data">
                @csrf
                <h2 style="margin-left:200px">Registration Form</h2>
                <div class="row">
                    <div class="col-6 ">
                        <label for="first_name">FirstName </label>
                    </div>
                    <div class="col-6 mb-4"> 
                        <input type="text" name="first_name" id="first_name" value="{{ old('first_name') }}"/>
                        <div class="text-danger">
                        @if($errors->has('first_name'))
                        {{ $errors->first('first_name') }}
                        @endif
                        </div>
                    </div>
                    <div class="col-6">
                        <label for="last_name">LastName </label>
                    </div>
                    <div class="col-6 mb-4"> 
                        <input type="text" name="last_name" id="last_name" value="{{ old('last_name') }}"/>
                        <div class="text-danger">
                        @if($errors->has('last_name'))
                        {{ $errors->first('last_name') }}
                        @endif
                        </div>
                    </div>
                    <div class="col-6">
                        <label for="gender">Gender </label>
                    </div>
                    <div class="col-6 mb-4"> 
                        <input type="radio" name="gender" id="gender" value="female" ("female" @if(old('gender')=="female") checked @endif/>Female
                        <input type="radio" name="gender" id="gender" value="male" ("male" @if(old('gender')=="male") checked @endif/>Male
                        <div class="text-danger">
                        @if($errors->has('gender'))
                        {{ $errors->first('gender') }}
                        @endif
                        </div>
                    </div>
                    <div class="col-6">
                        <label for="city">City </label>
                    </div>
                    <div class="col-6 mb-4"> 
                        <input type="text" name="city" id="city" value="{{ old('city') }}"/>
                        <div class="text-danger">
                        @if($errors->has('city'))
                        {{ $errors->first('city') }}
                        @endif
                        </div>
                    </div>
                    <div class="col-6">
                        <label for="age">Select your Age</label>
                    </div>
                    <div class="col-6 mb-4"> 
                        <select name="age" id="age" value="{{ old('age') }}">
                            <option name="age" value="{{ old('age') }}">Select Age</option>
                            @foreach($age as $key => $value)
                            <option name="age" value="{{$key}}" ("$key" @if(old('age')=="$key") selected @endif>{{$value}}</option>
                            @endforeach
                        </select>
                        <div class="text-danger"> 
                            @if($errors->has('age'))
                            {{ $errors->first('age') }}
                            @endif
                        </div>      
                    </div>
                    <div class="col-6">
                        <label for="state">Select your State</label>
                    </div>
                    <div class="col-6 mb-4"> 
                        <select name="state" id="state" value="{{ old('state') }}">
                            <option name="state" value="{{ old('state') }}">Select your state</option>
                            @foreach($state as $key => $value)
                            <option name="state" value="{{$key}}" ("$key" @if(old('state')=="$key") selected @endif>{{$value}}</option>
                            @endforeach 
                        </select>
                        <div class="text-danger">
                            @if($errors->has('state'))
                            {{ $errors->first('state') }}
                            @endif
                            </div> 
                    </div>
                    <div class="col-6">
                        <label for="country">Select your Country </label>
                    </div>
                    <div class="col-6 mb-4"> 
                        <select name="country" id="country" value="{{ old('country') }}">
                            <option name="country" value="{{ old('country') }}">Select your Country</option>
                            @foreach($country as $key => $value)
                            <option name="country" value="{{$key}}" ("$key" @if(old('country')=="$key") selected @endif>{{$value}}</option>
                            @endforeach
                        </select> 
                        <div class="text-danger">
                            @if($errors->has('country'))
                            {{ $errors->first('country') }}
                            @endif 
                            </div>  
                    </div>
                    <div class="col-6">
                        <label for="phone_number">PhoneNumber </label>
                    </div>
                    <div class="col-6 mb-4"> 
                        <input type="tel" name="phone_number" id="phone_number" value="{{ old('phone_number') }}"/>
                        <div class="text-danger">
                        @if($errors->has('phone_number'))
                        {{ $errors->first('phone_number') }}
                        @endif
                        </div>
                    </div>
                    <div class="col-6">
                        <label for="pincode">Pincode </label>
                    </div>
                    <div class="col-6 mb-4"> 
                        <input type="number" name="pincode" id="pincode" value="{{ old('pincode') }}"/>
                        <div class="text-danger">
                        @if($errors->has('pincode'))
                        {{ $errors->first('pincode') }}
                        @endif
                        </div>
                    </div>
                    <div class="col-6">
                        <label for="dob">DOB </label>
                    </div>
                    <div class="col-6 mb-4"> 
                        <input type="date" name="dob" id="dob" value="{{ old('dob') }}"/>
                        <div class="text-danger">
                        @if($errors->has('dob'))
                        {{ $errors->first('dob') }}
                        @endif
                        </div>
                    </div>
                    <div class="col-6">
                        <label for="email">Email </label>
                    </div>
                    <div class="col-6 mb-4"> 
                        <input type="text" name="email" id="email" value="{{ old('email') }}"/> <br>
                        <div class="text-danger">
                        @if($errors->has('email'))
                        {{ $errors->first('email') }}
                        @endif
                        </div>
                    </div>
                    <div class="col-6">
                        <label for="password">Password </label>
                    </div>
                    <div class="col-6 mb-4"> 
                        <input type="password" name="password" id="password" value="{{ old('password') }}"/>
                        <div class="text-danger">
                        @if($errors->has('password'))
                        {{ $errors->first('password') }}
                        @endif
                        </div>
                    </div>
                    <div class="col-6">
                        <label for="cpassword">Confirm Password </label>
                    </div>
                    <div class="col-6 mb-4"> 
                        <input type="password" name="cpassword" id="cpassword" value="{{ old('password') }}"/>
                        <div class="text-danger">
                        @if($errors->has('cpassword'))
                        {{ $errors->first('cpassword') }}
                        @endif
                        </div>
                    </div>
                    <div class="col-6">
                        <label for="">Employee Role</label>
                    </div>
                    <div class="col-6 mb-4">
                        <input type="checkbox" id="webdeveloper" name="emp_roles[]" value="webdeveloper" {{ (is_array(old('emp_roles')) && in_array('webdeveloper', old('emp_roles'))) ? 'checked' : '' }}>webdeveloper
                        <input type="checkbox" id="androiddeveloper" name="emp_roles[]" value="anddroiddeveloper" {{ (is_array(old('emp_roles')) && in_array('anddroiddeveloper', old('emp_roles'))) ? 'checked' : '' }}>Androiddeveloper
                        <input type="checkbox" id="tester" name="emp_roles[]" value="tester" {{ (is_array(old('emp_roles')) && in_array('tester', old('emp_roles'))) ? 'checked' : '' }}>Tester
                            <div class ="text-danger">
                                @if($errors->has('emp_roles'))
                                {{ $errors->first('emp_roles') }}
                                @endif
                            </div>    
                    </div>
                    <div class="col-6">
                        <label>File</label>
                    </div>
                    <div class="col-6 mb-4">    
                        <input type="file" id="myFile" name="file_name"/>
                            <div class="text-danger">
                                @if($errors->has('file_name'))
                                {{ $errors->first('file_name') }}
                                @endif
                            </div>
                    </div>           
                    <div class="col-12">        
                            <button type="submit" style="align-center" class="btn btn-success">submit</button>
                    </div>
                </div>
            </form>    
        </body> 
        </html>           