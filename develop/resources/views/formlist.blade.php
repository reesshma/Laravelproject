<h1> USER LIST </h1>
<table border="2">
    <tr>
        <td> Name </td>
        <td> Age </td>
        <td> PhoneNumber </td>
        <td> Email </td>
        <td> Operation </td>
    </tr>    


@forelse($users as $Models)
<tr>
            <td>{{ $Models->name }}</td>
            <td>{{ $Models->age }}</td>
            <td>{{ $Models->phone_name }}</td>
            <td>{{ $Models->email }}</td>
            <td>
            @empty
            <p> success </p>
            @endforelse
            </tr>
</table>
    