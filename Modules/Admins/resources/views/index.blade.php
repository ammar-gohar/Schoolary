@extends('layouts.app')

@section('content')
    <h1>Hello World</h1>

    <p>Module: {!! config('admins.name') !!}</p>
@endsection
