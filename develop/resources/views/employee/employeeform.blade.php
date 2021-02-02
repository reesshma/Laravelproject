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
                        <input type="text" name="last_name" id="last_name" value=""/>
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
                        <input type="radio" name="gender" id="gender" value="female"/>Female
                        <input type="radio" name="gender" id="gender" value="male"/>Male
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
                        <input type="text" name="city" id="city" value=""/>
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
                        <select name="age" id="age" value="">
                            <option name="age" value="">Select Age</option>
                            @foreach($age as $key => $value)
                            <option name="age" value="{{$key}}">{{$value}}</option>
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
                        <select name="state" id="state" value="">
                            <option name="state" value="">Select your state</option>
                            @foreach($state as $key => $value)
                            <option name="state" value="{{$key}}">{{$value}}</option>
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
                        <select name="country" id="country" value="">
                            <option name="country" value="">Select your Country</option>
                            @foreach($country as $key => $value)
                            <option name="country" value="{{$key}}">{{$value}}</option>
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
                        <input type="tel" name="phone_number" id="phone_number" value=""/>
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
                        <input type="number" name="pincode" id="pincode" value=""/>
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
                        <input type="date" name="dob" id="dob" value=""/>
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
                        <input type="text" name="email" id="email" value=""/> <br>
                        <div class="text-danger">
                        @if($errors->has('email'))
                        {{ $errors->first('email') }}
                        @endif
                        </div>
                    </div>
                    <div class="col-6">
                        <label for="password">Password </label>
                    </div>
                    <div class="col-6 mb-3"> 
                        <input type="password" name="password" id="password" value=""/>
                        <div class="text-danger">
                        @if($errors->has('password'))
                        {{ $errors->first('password') }}
                        @endif
                        </div>
                    </div>
                    <div class="col-6">
                        <label for="cpassword">Confrim Password </label>
                    </div>
                    <div class="col-6 mb-4"> 
                        <input type="password" name="cpassword" id="cpassword" value=""/>
                    </div>
                    <div class="col-12">        
                            <button type="submit" style="align-center" class="btn btn-success">submit</button>
                    </div>
                </div>
            </form>    
        </body> 
        </html>           