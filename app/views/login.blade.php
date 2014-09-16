@extends('layout')

@section('content')
    <h2>Login Page</h2>

    {{Form::open(['url'=>'login'])}}

        {{Form::label("username","Username")}}
        {{Form::text("username")}}
<br/>
        {{Form::label("password","Password")}}
        {{Form::text("password")}}
<br/>
        {{Form::submit("Sign In")}}


    {{Form::close()}}

@stop