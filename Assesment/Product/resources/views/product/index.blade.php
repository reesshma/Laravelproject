@extends('backend.layouts.dashboard')
@section('content')
<h1> CUSTOMERS LIST </h1>
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


    @forelse($users as $customer)
        <tr>
            <td>{{$customer->id}}</td>
            <td>{{$customer->name}}</td>
            <td>{{$customer->age}}</td>
            <td>{{$customer->phone_number}}</td>
            <td>{{$customer->email}}</td>
            <td><a href ="{{route('products.edit',$customer->id)}}">Edit</a></td>
            <td>
            <form method="post" action="{{route('products.destroy',$customer->id)}}" >
            @csrf
            @method('DELETE')
            <input type="submit" value="delete"></td>
            </form>
            @empty
            @endforelse
        </tr>
</table>
@endsection