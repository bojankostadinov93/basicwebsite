@extends('layouts.app')

@section('content')
<h1>Home </h1>

@endsection

@section('sidebar')
    @parent
<p>This is appended to this sidebar</p>

@endsection