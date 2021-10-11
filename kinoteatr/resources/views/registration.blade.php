@extends('layout.main')


<h1> Регистрация </h1>

<form method="POST" action="{{ route('user.registration') }}">
    @csrf
{{--    <div class="form-group">--}}
{{--        <label for="name">Email Name</label>--}}
{{--        <input class="form-control" type="text" id="name" name="name" value="" placeholder="Enter name">--}}
{{--        @error('name')--}}
{{--        <div class="alert alert-danger">{{ $message }} </div>--}}
{{--        @enderror--}}
{{--    </div>--}}
    <div class="form-group">
        <label for="email">Email address</label>
        <input class="form-control" type="text" id="email" name="email" value="" placeholder="Enter email">
        @error('email')
        <div class="alert alert-danger">{{ $message }} </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input class="form-control" type="password" id="password" name="password" placeholder="Password">
        @error('password')
        <div class="alert alert-danger">{{ $message }} </div>
        @enderror
    </div>
    {{--    <div class="form-check">--}}
    {{--        <input type="checkbox" class="form-check-input" id="exampleCheck1">--}}
    {{--        <label class="form-check-label" for="exampleCheck1">Check me out</label>--}}
    {{--    </div>--}}
    <button type="submit" class="btn btn-primary" name="sendMe">Submit</button>
</form>
