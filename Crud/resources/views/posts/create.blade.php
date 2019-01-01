@extends('layouts.app')
@section('content')
    <link href="{{asset('css/create.css')}}" rel="stylesheet" type="text/css" >
    <div class="h2">
        <h2> Create a user</h2>
    </div>
    <br>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            {{ Form::open(['route'=>'posts.store', 'method'=>'POST']) }}
            @include('posts.form_master')
            {{ Form::close() }}
        </div>
    </div>
@endsection