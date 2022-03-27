@extends('layout')

@section('title')
    ime na stranica
@endsection

@section('content')
    <form action="/register/store" method="POST">
        @csrf
        Email: <input type="text" name="email" value="{{ old('email') }}"><br>
        @error('email')
            <p class="text-danger">{{ $message }}</p>
        @enderror
        Name: <input type="text" name="name" value="{{ old('name') }}"><br>
        @error('name')
            <p class="text-danger">{{ $message }}</p>
        @enderror
        Password: <input type="text" name="password" value="{{ old('password') }}"><br>
        @error('password')
            <p class="text-danger">{{ $message }}</p>
        @enderror   
        <input type="submit">
    </form>
@endsection