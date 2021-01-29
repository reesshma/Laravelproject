<p> student list </p>
<a href="{{route('student_details1')}}">add </a>
<table border="1">
    <tr>
        <td> Name </td>
        <td> Address </td>
        <td> pincode </td>
    </tr>    


@forelse($users as $Models)
<tr>
            <td>{{ $Models->Name }}</td>
            <td>{{ $Models->Address }}</td>
            <td>{{$Models->pincode }}</td>
            @empty
            <p> success </p>
            @endforelse
            {{$users->links()}}
            </tr>
</table>
    