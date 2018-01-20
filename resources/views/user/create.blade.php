@extends('layout.app')

@section('title')
    Form Create
@stop

@section('body')
    <h1>Form Create</h1>
    <form action="{{ route('user.store') }}" method="post">
        {{ csrf_field() }}
        <label for="">Username</label><br>
        <input type="text" name="username" id="username">
        <br>
        <label for="">Password</label><br>
        <input type="password" name="password" id="password">
        <br>
        <button type="submit">Submit</button>
    </form>
@stop