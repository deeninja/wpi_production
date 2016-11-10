@extends('layouts.admin')

@section('content')

    <h1>Create User</h1>
    @include('includes.form_error')

    <!-- form -->
    {!! Form::open(['method' => 'POST', 'action'=> 'AdminUsersController@store', 'files'=>'true']) !!}

    <!-- left column -->
    <div class="col-md-6">

        <div class="form-group">
            {!! Form::label('first_name', 'First Name:') !!}
            {!! Form::text('first_name', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('last_name', 'Last Name:') !!}
            {!! Form::text('last_name', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('email', 'Email:') !!}
            {!! Form::text('email', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('password', 'Password:') !!}
            {!! Form::password('password', ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('password', 'Password:') !!}
            {!! Form::password('password', ['class'=>'form-control']) !!}
        </div>


        <div class="form-group">
            {!! Form::label('plays','Plays:') !!}
            {!! Form::textarea('plays', null, ['class'=>'form-control','rows'=>'6']) !!}
        </div>

    </div>
    <!-- /.left column -->

    <!-- right column  -->
    <div class="col-md-6">

        <div class="form-group">
            {!! Form::label('role_id', 'Role') !!}
            {!! Form::select('role_id', $roles, null, ['placeholder'=>'Choose a role', 'class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('country_id', 'Country:') !!}
            {!! Form::select('country_id', $countries, null, ['placeholder'=>'Choose a country', 'class'=>'form-control'])
             !!}
        </div>

        <div class="form-group">
            {!! Form::label('website', 'Website:') !!}
            {!! Form::text('website', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('status', 'Status:') !!}
            {!! Form::select('status', ['Active'=>'Active','Inactive'=>'Inactive'], null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('photo_id', 'Photo:', ['class'=>'file_upload']) !!}
            {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
        </div>

    </div>
    <!-- /.right column -->

    <!-- biography -->
    <div class="col-md-12">

        <div class="form-group">
            {!! Form::label('bio','Biography:') !!}
            {!! Form::textarea('bio', null, ['class'=>'form-control','rows'=>'8']) !!}
        </div>
        <!-- /.biography -->

        <div class="form-group">
            {!! Form::submit('Create User', ['class'=>'btn btn-primary']) !!}
        </div>

    </div>

    {!! Form::close() !!}
    <!-- /.form -->

@endsection