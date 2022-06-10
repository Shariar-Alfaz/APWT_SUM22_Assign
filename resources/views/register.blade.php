@extends('layouts.main')
@section('content')
<br>
<h1>User form</h1>
<br><br>
<form method="post" action="">
    {{@csrf_field()}}
    Name: <input type="name" name="name" value="{{old('name')}}"><br>
    @error('name')
        <span class="text-danger">{{$message}}</span><br>
    @enderror
    Email: <input type="email" name="email" value="{{old('email')}}"><br>
    @error('email')
        <span class="text-danger">{{$message}}</span><br>
    @enderror
    Password: <input type="password" name="password" value="{{old('password')}}"><br>
    @error('password')
        <span class="text-danger">{{$message}}</span><br>
    @enderror
    Comfirm password: <input type="password" name="con" value="{{old('con')}}"><br>
    @error('con')
        <span class="text-danger">{{$message}}</span><br>
    @enderror
    <input type="submit" value="Submit">
</form>
@endsection