@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Ссылки:</h3>
        <hr>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>id</th>
                <th>Текст</th>
                <th>href</th>
                <th>Свойства</th>
            </tr>
            </thead>
            <tbody>
            @foreach($links as $link)
                <tr>
                    <td>{{$link->id}}</td>
                    <td>{{$link->text}}</td>
                    <td>{{$link->href}}</td>
                    <td>
                        <a class="btn btn-small btn-success" href="{{ URL::to('links/' . $link->id) }}">Show this Link</a>
                        <a class="btn btn-small btn-info" href="{{ URL::to('links/' . $link->id . '/edit') }}">Edit this Link</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection