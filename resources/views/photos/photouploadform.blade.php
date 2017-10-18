@extends('layouts.app')

@section('content')
    <h1>Завантажити зображення:</h1>
    <form class="form-horizontal" enctype="multipart/form-data" action="{{  route('photos.store') }}" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
            Відправити файл: <input name="avatar" type="file" />
            <input type="submit" value="Завантажити" />
        </div>
    </form>
@endsection