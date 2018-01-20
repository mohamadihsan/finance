@extends('layout.app')

@section('title')
    User
@stop

@section('body')
    <a href="{{ route('user.create') }}">Add User</a>
    <h1>Index User</h1>
    <table border="1">
        <thead>
            <tr>
                <td>No</td>
                <td>Username</td>
                <td>Password</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @if(count($users) > 0)
                @foreach($users as $user)
                <tr>
                    <td>{{ $user['id'] }}</td>
                    <td>{{ $user['username'] }}</td>
                    <td>{{ $user['password'] }}</td>
                    <td>
                        <a href="{{ route('user.show', $user['id']) }}">Detail</a>
                        <a href="{{ route('user.edit', $user['id']) }}">Edit</a>
                        <a href="{{ route('user.destroy', $user['id']) }}">Delete</a>
                    </td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="4">Data tidak tersedia</td>    
                </tr>
            @endif
        </tbody>
    </table>
@stop