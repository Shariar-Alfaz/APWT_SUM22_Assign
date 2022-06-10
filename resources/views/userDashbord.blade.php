@extends('layouts.main')
@section('content')
<br>
<h1>User dashbord</h1>
<table border="1">
    <tr>
        <th>Name</th>
        <th>Email</th>
    </tr>
    @foreach ($users as $user)
        <tr>
            <td><a href="{{route('details',['id'=>$user->id])}}">{{$user->name}}</a></td>
            <td>{{$user->email}}</td>
        </tr>
    @endforeach
</table>
@endsection