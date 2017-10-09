@extends('layouts.app')

@section('content')
    <h1>Upload form image:</h1>
    <form class="form-horizontal" method="POST" action="{{  route('photos.store') }}">
        {{ csrf_field() }}
        <div class="form-group">
            <div class="col-md-8 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    Загрузить фото
                </button>
            </div>
        </div>
    </form>
@endsection