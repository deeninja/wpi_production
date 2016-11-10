@extends('layouts.admin')

@section('content')

    <h1>Create Post</h1>
    @include('includes.form_error')
    {!! Form::open(['method'=>'POST','action'=>'AdminPostsController@store','files'=>'true']) !!}

    <div class="form-group">
        {!! Form::label('title', 'Title') !!}
        {!! Form::text('title',null, ['class'=>'form-control']) !!}
    </div>

    {!! Form::hidden('user_id', Auth::user()->id) !!}

    <div class="form-group">
        {!! Form::label('photo_id','Cover Photo:', ['class'=>'file_upload']) !!}
        {!! Form::file('photo_id',null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('category_id', 'Category:') !!}
        {!! Form::select('category_id', $categories, null, ['placeholder'=>'Choose Category', 'class'=>'form-control'])
         !!}
    </div>

    <div class="form-group">
        {!! Form::label('date', 'Date') !!}
       {!! Form::date('date', \Carbon\Carbon::now(),['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('body','Body:') !!}
        {!! Form::textarea('body', null, ['class'=>'form-control','rows'=>'8','id'=>'tinymce']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Publish',['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

@endsection