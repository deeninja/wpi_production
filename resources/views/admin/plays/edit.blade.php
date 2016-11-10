@extends('layouts.admin')

@section('content')

    <h1>Edit Play |
        <small>{{$play->title}}</small>
    </h1>
    @include('includes.form_error')

    <div class="panel panel-body">
        <h3>Cover Photo:</h3>
        <img width="250" class="img-responsive" src="{{$play->photo->path ? url('/images/plays/' . $play->photo->path) :
        ''}}">
    </div>

    <div class="panel panel-body">
        {!! Form::model($play,['method'=>'PATCH','action'=>['PlaysController@update',$play->id], 'files'=>'true']) !!}

        <div class="form-group">
            {!! Form::label('photo_id', 'Choose Photo:', ['class'=>'file_upload']) !!}
            {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('title','Title:') !!}
            {!! Form::text('title',null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('abstract','Abstract:') !!}
            {!! Form::textarea('abstract',null,['class'=>'form-control','id'=>'tinymce']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('url','Link:') !!}
            {!! Form::text('url',null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('conference_id','Conference:') !!}
            {!! Form::select('conference_id', $conferences, null, ['class'=>'form-control','placeholder'=>'Choose a
            Conference']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('author1','Author 1:') !!}
            {!! Form::text('author1',null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('author2','Author 2:') !!}
            {!! Form::text('author2',null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('author3','Author 3:') !!}
            {!! Form::text('author3',null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('author4','Author 4:') !!}
            {!! Form::text('author4',null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Update Play',['class'=>'btn btn-success']) !!}
        </div>


    </div>
@endsection