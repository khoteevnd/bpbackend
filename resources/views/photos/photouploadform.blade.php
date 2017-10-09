@extends('layouts.app')

@section('content')
    <h1>Upload form image:</h1>
    <!-- Тип кодирования данных, enctype, ДОЛЖЕН БЫТЬ указан ИМЕННО так -->
    <form class="form-horizontal" enctype="multipart/form-data" action="{{  route('photos.store') }}" method="POST">
        {{ csrf_field() }}
    <!-- Поле MAX_FILE_SIZE должно быть указано до поля загрузки файла -->
        <div class="form-group">
            <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
        <!-- Название элемента input определяет имя в массиве $_FILES -->
            Відправити файл: <input name="avatar" type="file" />
            <input type="submit" value="Завантажити" />
        </div>
    </form>
@endsection