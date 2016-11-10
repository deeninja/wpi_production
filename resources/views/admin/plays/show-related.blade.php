@extends('layouts.admin')

@section('content')

    <h1>{{$conference->title}} | <small>Plays</small></h1>

    <div class="table-responsive">
        <table class="table table-hover table-responsive table-striped">
            <thead>
            <tr>
                <th>Cover</th>
                <th>#</th>
                <th>Title</th>
                <th>Abstract</th>
                <th>Author1</th>
                <th>URL</th>
                <th>&nbsp;</th>
            </tr>
            </thead>
            <tbody>

            @foreach($conference_plays as $play)
                <tr>
                    <td><img class="img-rounded img-responsive" width="100" src="{{$play->photo->path ? url('/images/plays/' . $play->photo->path) : ''}}"></td>
                    <td>{{$play->id}}</td>
                    <td>{{$play->title}}</td>
                    <td>{{str_limit($play->abstract,120)}}</td>
                    <td>{{$play->author1}}</td>
                    <td><a href="{{$play->url}}">{{$play->url}}</a></td>
                    <td><a href="{{route('plays.show',$play->id) }}" class="btn btn-primary">View</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <a href="{{URL::previous() }}" class="btn btn-primary">Back</a>
    </div>
  


@endsection