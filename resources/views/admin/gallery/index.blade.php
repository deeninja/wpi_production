@extends('layouts.admin')

@section('content')

    <h1>View All Galleries</h1>

    <!-- notifications -->
    @if(Session::has('gallery_linked'))
        <div class="alert alert-success fade in">
            <a href="#" class="close" aria-label="close" data-dismiss="alert">&times;</a>
            {{session('gallery_linked')}}
        </div>
    @endif
    @if(Session::has('gallery_deleted'))
        <div class="alert alert-danger fade in">
            <a href="#" class="close" aria-label="close" data-dismiss="alert">&times;</a>
            {{session('gallery_deleted')}}
        </div>
    @endif
    <!-- /.notifications -->


    <div class="col-md-12">

        <!-- table -->
        <div class="table-responsive">
            <table class="table table-striped table-responsive table-hover">

                <!-- table headers -->
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Cover</th>
                    <th>Gallery Name</th>
                    <th>Photos</th>
                    <th>Conference ID</th>
                    <th>Created By</th>
                    <th>Updated At</th>
                    <th>Created At</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>

                </tr>
                </thead>
                <!-- /.table headers -->

                <!-- table content -->
                <tbody>
                @foreach($galleries as $gallery)
                    <tr>
                        <td>{{$gallery->id}}</td>
                        <td>{{url('/gallery/images' . $gallery->cover_image)}}</td>
                        <td>{{$gallery->name}}</td>
                        @if (count($gallery->photos) > 0)
                            <td>{{count($gallery->photos)}}</td>
                        @elseif(count($gallery->photos) === 0)
                            <td><a class="btn btn-success" href="{{route('galleries.show',$gallery->id)}}">Add Photos</a>
                            </td>
                        @endif

                        @if(count($gallery->conference) > 0)

                            <td><a href="{{route('conference.show',$gallery->conference->id)}}">{{$gallery->conference->title}}</a></td>

                            @elseif( count($gallery->conference) === 0 )

                                <td><a class="btn btn-success" href="{{route('galleries.link', $gallery->id)
                                }}">Assign to conference</a></td>
                            
                            @endif
                        <td>{{$gallery->created_by}}</td>
                        <td>{{$gallery->updated_at}}</td>
                        <td>{{$gallery->created_at}}</td>
                        <td><a href="{{route('galleries.show', $gallery->id)}}" class="btn
                        btn-primary">View</a></td>
                        <td><a href="{{route('galleries.edit', $gallery->id)}}" class="btn
                        btn-success">Edit</a></td>

                    </tr>
                @endforeach
                </tbody>
                <!-- /.table content -->

            </table>
        </div>
        <!-- /.table -->

    </div>

    <!-- quick create -->
    <div class="col-md-4">

        <!-- form -->
        {!! Form::open(['method'=>'POST','action'=>'GalleriesController@store_gallery','files'=>'true']) !!}

        <div class="form-group">
            {!! Form::text('name', null, ['id'=>'name', 'placeholder'=>'Name of Gallery',
            'class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('cover_image', 'Cover Photo:', ['class'=>'file_upload']) !!}
            {!! Form::file('cover_image', null, ['class'=>'form-control']) !!}
            <span id="helpBlock" class="help-block">A cover photo for the gallery.</span>
        </div>

        <div class="form-group">
            {!! Form::submit('Quick Create', ['class'=>'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}
        {!! Form::close() !!}
        <!-- /.form -->

        <!-- errors -->
       @include('includes.form_error')
    </div>
    <!-- /.quick create -->

@endsection