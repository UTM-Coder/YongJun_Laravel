@extends('layout')

@section('title')
User
@endsection

@section('pre-content')
Hello <br>
@endsection

@section('content')
@include('user_profile', ['user' => $user])
@endsection