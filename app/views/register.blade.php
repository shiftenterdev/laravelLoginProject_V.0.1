@extends('layout')

@section('content')
    <h2>Registration Page</h2>

    {{Form::open(['url'=>'register'])}}

        {{Form::label("email","Email")}}
        {{Form::text("email")}}
<br/>
        {{Form::label("username","Username")}}
        {{Form::text("username")}}
<br/>
        {{Form::label("password","Password")}}
        {{Form::text("password")}}
<br/>
        {{Form::submit("Sign Up")}}


    {{Form::close()}}

@stop