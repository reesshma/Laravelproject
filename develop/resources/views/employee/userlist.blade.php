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
        <td>Employee Roles</td>
        <td>Filename</td>
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
        <td>{{$employee->emp_roles}}</td>
        <td>{{$employee->file_name}}
        @if (strpos($employee->file_name,'.pdf') !== false || strpos($employee->file_name, '.docx') !== false || strpos($employee->file_name, '.xlsx') !== false || strpos($employee->file_name, '.xls') !== false)
            <a target="_blank" href="{{ asset('storage/images/'.$employee->file_name) }}">Download</a> 
        
        @elseif (strpos($employee->file_name, '.jpg') !== false || strpos($employee->file_name, '.png') !== false || strpos($employee->file_name, '.gif') !== false || strpos($employee->file_name, '.svg') !== false || strpos($employee->file_name, '.jpeg') !== false)
            <img  src="{{asset('storage/images/'.$employee->file_name)}}"  style="width: 80px;height: 80px"/>
        @endif 
        </td>
            <td><a href ="{{route('employees.edit',$employee->id)}}">Edit</a></td> 
        <td>
            <form method="post" action="{{route('employees.destroy',$employee->id)}}" >
                @csrf
                @method('DELETE')
                <input type="submit" value="delete">
            </form>
        </td>
            @empty
            @endforelse
            {{$users->links()}} 
    </tr>
</table>