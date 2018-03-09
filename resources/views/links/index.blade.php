@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Посилання:</h3>
        <hr>
        <table class="table table-striped">
            <thead>
            <tr>
                @foreach($links as $link)
                    <th></th>
                @endforeach
                <th>id</th>
                <th>Текст</th>
                <th>href</th>
                <th>order</th>
                <th>Свойства</th>
            </tr>
            </thead>
            <tbody>
            @foreach($links as $link)
                <tr>
                    <td>{{$link->id}}</td>
                    <td>{{$link->text}}</td>
                    <td>{{$link->href}}</td>
                    <td>{{$link->order}}</td>
                    <td>
                        <div class="row">
                            <div class="col-xs-3">
                                <a class="btn btn-small btn-success" href="{{ route('links.show', $link->id) }}">Показати</a>
                            </div>
                            <div class="col-xs-3">
                                <a class="btn btn-small btn-info" href="{{ route('links.edit', $link->id) }}">Редагувати</a>
                            </div>
                            <div class="col-xs-3">
                                <form class="form-inline" method="post" action="{{ route('links.destroy', $link->id) }}">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <input type="submit" class="btn btn-small btn-danger" value="Видалити">
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection