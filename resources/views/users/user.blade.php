@extends('layouts.app')

@section('content')

    <h2>Usuários</h2>

    @foreach ($users as $user)
        <p>{{ $user['name'] }} ({{ $user['email'] }})</p>
    @endforeach

@endsection