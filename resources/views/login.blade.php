@extends('layout')

@section('title')
    Log In
@endsection

@section('content')
    <form action="/login/store" method="POST">
        @csrf
        Email: <input type="text" name="email"><br>
        Password: <input type="text" name="password"><br>
        <input type="submit">
    </form>
@endsection