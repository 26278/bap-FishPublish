@extends('layouts.master')

@section('title')
    {{--page title here--}}
    Detail per fish
@endsection

@section('header')
    <h1>{{$catch->species}} </h1>
    <a href="{{route('fish.list')}}">Back</a>
@endsection

@section('content')

    {{$catch->species}}<br>
    {{$catch->length}}<br>
    {{$catch->weight}}<br>
    {{$catch->description}}<br>

@endsection