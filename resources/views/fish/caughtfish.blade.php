@extends('layouts.master')

@section('title')
    {{--page title here--}}
    Detail per fish
@endsection

@section('header')
    <h1>{{$catch->name}} </h1>
    <a href="{{route('fish.list')}}">Back</a>
@endsection

@section('content')

    {{$catch->address}}<br>
    {{$catch->zipcode}}<br>
    {{$catch->city}}<br>
    {{$catch->country}}<br>

@endsection