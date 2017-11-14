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
            </tr>
            </thead>
            <tbody>
            @foreach($links as $link)
                <tr>
                    <td>{{$link->id}}</td>
                    <td>{{$link->text}}</td>
                    <td>{{$link->href}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <form method="post" action="{{url('links')}}">
            {{csrf_field()}}
            <div class="form-group row">
                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Текст:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Текст" name="text">
                </div>
            </div>
            <div class="form-group row">
                <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">href:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="href" name="href">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md"></div>
                <input type="submit" class="btn btn-primary">
            </div>
        </form>
    </div>
@endsection