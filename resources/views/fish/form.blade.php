@extends('layouts.master')

@section('title')
    {{--page title here--}}
    Publish
@endsection

@section('header')
    <h1>Register your catch</h1>
@endsection

@section('content')

    @if ($errors->any())
        <div>
            <p>Je verneukt 't weer.</p>
        </div>
    @endif


    <form action="{{ route('fish.store') }}" method="POST">
        @csrf
        {{-- Cross Site Request Forgery --}}
        <h2>Species</h2>
        @error('species')
        <div class="form__error-message">
            {{$message}}
        </div>
        @enderror
        <input type="text" class="@error('species') form__error-message @enderror" name="species" value="{{old('species')}}">
        <h2>Length</h2>
        @error('length')
        <div class="form__error-message">
            {{$message}}
        </div>
        @enderror
        <input type="text" class="@error('length') form__error-message @enderror" name="length" value="{{old('length')}}">
        <h2>Weight</h2>
        <input type="text" class="" name="weight" value="{{old('weight')}}">
        <h2>Description</h2>
        @error('description')
        <div class="form__error-message">
            {{$message}}
        </div>
        @enderror
        <textarea class="@error('description')  form__error-message @enderror" name="description">{{old('description')}}</textarea>
        <h2>Publification date</h2>
        <button type="submit">Send!</button>
    </form>
@endsection