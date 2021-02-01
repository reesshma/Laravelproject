<h1> EMPLOYEE LIST </h1>
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
            <td>{{$employee->name}}</td>
            <td>{{$employee->age}}</td>
            <td>{{$employee->phone_number}}</td>
            <td>{{$employee->email}}</td>
            <td><a href ="">Edit</a></td>

        
            @empty
            <p> success </p>
            @endforelse
            </tr>
</table>
    