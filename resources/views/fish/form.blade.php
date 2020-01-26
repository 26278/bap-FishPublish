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
        <h2>Specie</h2>
        @error('specie')
        <div class="form__error-message">
            {{$message}}
        </div>
        @enderror
        <input type="text" class="@error('specie') form__error-message @enderror" name="specie" value="{{old('specie')}}">
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
        @error('pub_date')
        <div class="form__error-message">
            {{$message}}
        </div>
        @enderror
        <input type="date" class="@error('pub_date ') form__error-message @enderror" name="pub_date" value="{{old('pub_date')}}">
        <button type="submit">Send!</button>
    </form>
@endsection