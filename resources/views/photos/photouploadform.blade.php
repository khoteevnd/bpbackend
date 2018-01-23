@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <h2>Завантажити зображення:</h2>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <form class="form-horizontal" enctype="multipart/form-data" action="{{  route('photos.store') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
                        Відправити файл: <input name="avatar" type="file" />
                        <input type="submit" value="Завантажити" />
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection