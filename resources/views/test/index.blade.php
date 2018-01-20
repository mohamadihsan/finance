@extends('layout.app')

@section('title')
    Test
@stop

@section('body')
    <h1>Index Page</h1>
    <table>
        <thead>
            <tr>
                <th>ID Member</th>
                <th>Nama</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @if (count($member)>0)
                @foreach ($member as $m)
                    <tr>
                        <td>{{ $m['id'] }}</td>
                        <td>{{ $m['nama'] }}</td>
                        <td>{{ $m['email'] }}</td>
                    </tr>
                @endforeach    
            @else
                <tr>
                    <td colspan="3">Data tidak tersedia</td>
                </tr>
            @endif
            
        </tbody>
    </table>
@stop