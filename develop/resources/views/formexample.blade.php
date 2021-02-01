<html>
    <head>
        <title>
            heloo
            </title>
    </head>
    <body>
        <form method="post" action="{{route('details')}}" enctype="multipart/form-data">
        @csrf
            <label for="">Name </label>
            <input type="text" name="name" value=""/><br>
            @if($errors->has('name'))
                {{ $errors->first('name') }}
            @endif<br>
            <label for="">Age </label>
            <input type="number" name="age" value=""/><br>
            @if($errors->has('age'))
                {{ $errors->first('age') }}
            @endif<br>
            <label for="">PhoneNumber </label>
            <input type="number" name="phone_number" value=""/><br>
            @if($errors->has('phone_number'))
                {{ $errors->first('phone_number') }}
            @endif<br>
            <label for="">Email </label>
            <input type="text" name="email" value=""/><br>
            @if($errors->has('email'))
                {{ $errors->first('email') }}
            @endif<br>
            <label for="">submit </label>
            <input type="submit" value="submit">
        </form>    
    </body>
</html>  
@if(session("Success"))
    <p> {{session("Success")}} </p>
    @endif     
