@extends('layout')

@section('title', 'Page Title')

@section('sidebar')
    @parent
    <p>principal papus.</p>
@endsection

@section('content')
    <p>la papu señal</p>
    <a href="{{route('pagina2')}}"> Links a pagina 2</a>
@endsection
