@extends('layouts.master')

@section('title')
    {{--page title here--}}
    Overview
@endsection

@section('header')
    <h1>All catches </h1>
@endsection

@section('content')
    Hier  komen de bedrijven <br>

    @foreach($catches as $catch)
        <a href="{{route('fish.details', ['id' => $catch->id])}}">{{$catch->name}}</a><br>
    @endforeach
@endsection