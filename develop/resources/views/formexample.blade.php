<html>
    <head>
        <title>
            heloo
            </title>
    </head>
    <body>
        <form method="post" action="{{route('first1')}}" enctype="multipart/form-data">
        @csrf
            <label for="">Name </label>
            <input type="text" name="name" value=""/><br><br>
            <label for="">Age </label>
            <input type="number" name="age" value=""/><br><br>
            <label for="">PhoneNumber </label>
            <input type="number" name="phone_name" value=""/><br><br>
            <label for="">Email </label>
            <input type="text" name="email" value=""/><br><br>
            <label for="">submit </label>
            <input type="submit" value="submit">
        </form>    
    </body>
</html>  
@if(session("Success"))
    <p> {{session("Success")}} </p>
    @endif     
