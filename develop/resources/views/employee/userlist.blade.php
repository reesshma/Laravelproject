<h1> EMPLOYEE LIST </h1>
<a href="{{route('employees.create')}}" >Add</a>
<table border="2">
    <tr>
        <td>ID</td>
        <td>FirstName</td>
        <td>LastName</td>
        <td>Gender</td>
        <td>City</td>
        <td>Age</td>
        <td>State</td>
        <td>Country</td>
        <td>PhoneNumber</td>
        <td>pincode</td>
        <td>DOB</td>
        <td>Email</td>
        <td>Operation</td>
        <td>Operation</td>
    </tr>    


@forelse($users as $employee)
<tr>
            <td>{{$employee->id}}</td>
            <td>{{$employee->first_name}}</td>
            <td>{{$employee->last_name}}</td>
            <td>{{$employee->gender}}</td>
            <td>{{$employee->city}}</td>
            <td>{{$employee->age}}</td>
            <td>{{$employee->state}}</td>
            <td>{{$employee->country}}</td>
            <td>{{$employee->phone_number}}</td>
            <td>{{$employee->pincode}}</td>
            <td>{{$employee->dob}}</td>
            <td>{{$employee->email}}</td>
            <td><a href ="{{route('employees.edit',$employee->id)}}">Edit</a></td>
            <td>
            <form method="post" action="{{route('employees.destroy',$employee->id)}}" >
            @csrf
            @method('DELETE')
            <input type="submit" value="delete"></td>
            </form>
            @empty
            @endforelse
            {{$users->links()}} 
            </tr>
</table>
    