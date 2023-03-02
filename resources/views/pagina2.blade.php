@extends('layout')

@section('title', 'Page Title')

@section('sidebar')
    <p>hola papus.</p>
@endsection

@section('content')
    <a href="{{route('servidor2')}}">Links a pagina principal</a>
@endsection
