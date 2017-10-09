@extends('layouts.app')

@section('content')
    <h1>Congratulation Foto Uploaded</h1>
    <a class="btn btn-link" href="{{ route('photos.create') }}">
        Add next Fotos.
    </a>
@endsection