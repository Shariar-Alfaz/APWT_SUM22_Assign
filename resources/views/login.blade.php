@extends('layouts.main')
@section('content')
<br>
<h1>Login</h1>
<form action="" method="post">
    {{@csrf_field()}}
    Email: <input type="email" name="email" value="{{old('email')}}"><br>
    @error('email')
        <span class="text-danger">{{$message}}</span><br>
    @enderror
    Password: <input type="password" name="password" value="{{old('password')}}"><br>
    @error('password')
        <span class="text-danger">{{$message}}</span><br>
    @enderror
    <input type="submit" value="Login">
</form>
@endsection