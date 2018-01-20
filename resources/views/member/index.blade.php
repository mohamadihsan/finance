@extends('layout.app')

@section('title')
    Member
@stop

@section('body')
    <h1>Member</h1>
    <table>
        <tr>
            <th>Nama</th>
        </tr>
        @if(count($member) > 0)
            @foreach($member as $m)
                <tr>
                    <td>{{ $m['nama'] }}</td>
                </tr>
            @endforeach
        @endif        
    </table>
@stop