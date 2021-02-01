<h1> USER LIST </h1>
<table border="2">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Age</td>
        <td>PhoneNumber</td>
        <td>Email</td>
        <td>Operation</td>
        <td>Operation</td>
    </tr>    


@forelse($users as $model)
<tr>
            <td>{{$model->id}}</td>
            <td>{{$model->name}}</td>
            <td>{{$model->age}}</td>
            <td>{{$model->phone_number}}</td>
            <td>{{$model->email}}</td>
            <td><a href ="{{route('edit',$model->id)}}">Edit</a></td>
            <td>
            <form method="post" action="{{route('destroy',$model->id)}}" >
            @csrf
            @method('DELETE')
            <input type="submit" value="delete"></td>
            </form>

        
            @empty
            <p> success </p>
            @endforelse
            </tr>
</table>
    