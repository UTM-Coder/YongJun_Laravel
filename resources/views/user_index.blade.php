@extends('layout')

@section('title')
Index
@endsection

@section('pre-content')
Hello <br>
@endsection

@section('content')
<ul>
@foreach($users as $user)
    <li>@include('user_profile', ['user' => $user])</li>
@endforeach
</ul> 
@endsection