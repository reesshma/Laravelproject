<html>
<body>
<form  method="post" action="{{route('stores')}}" enctype="multipart/form-data">
@csrf
<label>file</label>
  <input type="file" id="myFile" name="file_name"/>
@if($errors->has('file_name')) {{ $errors->first('file_name') }} @endif
  <input type="submit" value="submit">
</form>
</body>
</html>