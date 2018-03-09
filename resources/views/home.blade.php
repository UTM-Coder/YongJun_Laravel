@extends('layout')

@section('title')
@parent
Article
@endsection

@section('style')
<style>
    body{
        background: black;
        color: white;
    }
</style>
@endsection

@section('content')
<h2>{{$article['title']}}</h2>

User: @include('user_profile', ['user' => $user])
<h2>
@forelse()
@empty
@endforelse
</h2>

@endsection