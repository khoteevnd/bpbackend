@extends('layouts.app')

@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <img src="{{ \Illuminate\Support\Facades\Storage::url("avatar/".$user->avatar) }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
                <h2>{{__('profile.profile')}} {{ $user->name }}</h2>
                <form id="update_avata" class="update_avatar" enctype="multipart/form-data" action="{{ route("update_avatar") }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>{{__('profile.label')}}</label>
                        <input type="file" name="avatar">
                        <input type="submit"  name="submit1" class="pull-right btn btn-sm btn-primary" value="{{__('profile.submit')}}">
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <a href="{{ route('edit_password') }}" target="_blank">Змінити пароль</a>
        </div>
    </div>
@endsection