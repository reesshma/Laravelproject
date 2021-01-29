<html>
    <head>
        <title>
            heloo
            </title>
    </head>
    <body>
        <form method="post" action="{{route('student_details2')}}" enctype="multipart/form-data">
        @csrf
            <label for="">Name </label>
            <input type="text" name="name" value=""/><br><br>
            <label for="">Address </label>
            <input type="text" name="address" value=""/><br><br>
            <label for="">Pincode </label>
            <input type="number" name="pincode" value=""/>
            <input type="number" name="pincode1" value=""/><br><br>
            <label for="">submit </label>
            <input type="submit" value="submit">
        </form>    
    </body>
</html>   
@if(session("Success"))
    <p> {{session("Success")}} </p>
    @endif     
