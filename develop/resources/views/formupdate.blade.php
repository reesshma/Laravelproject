<html>
    <head>
        <title>
            heloo
            </title>
    </head>
    <body>
        <form method="post" action="{{route('update',$model->id)}}" enctype="multipart/form-data">
        @csrf
        @method('put')
        
            <label for="">Name </label>
            <input type="text" name="name" value="{{$model['name']}}"/><br><br>
            <label for="">Age </label>
            <input type="number" name="age" value="{{$model['age']}}"/><br><br>
            <label for="">PhoneNumber </label>
            <input type="number" name="phone_number" value="{{$model['phone_number']}}"/><br><br>
            <label for="">Email </label>
            <input type="text" name="email" value="{{$model['email']}}"/><br><br>
            <label for="">submit </label>
            <input type="submit" value="submit">
        </form>    
    </body>
</html>  
@if(session("Success"))
    <p> {{session("Success")}} </p>
    @endif     
