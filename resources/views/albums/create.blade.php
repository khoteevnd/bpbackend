@extends('layouts.albums')

@section('content')
    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h3>{{ __('albums.create_album') }}</h3>
    {!! Form::open(['action' => 'AlbumsController@store', 'method' => 'post', 'enctype' => 'multipart/form-date']) !!}
        {{Form::text('name', '', ['placeholder' => __('albums.album_name')])}}
        {{Form::textarea('description', '', ['placeholder' => __('albums.album_description')])}}
        {{Form::file('cover_image')}}
        {{Form::submit(__('albums.submit'))}}
    {!! Form::close() !!}
@endsection
