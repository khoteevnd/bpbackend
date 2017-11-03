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
                <form id="update_avata" class="update_avatar" enctype="multipart/form-data" action="{{ route("update_avatar") }}" method="POST" role="form">
                    <div class="form-group">
                        <label>{{__('profile.label')}}</label>
                        <input type="file" name="avatar">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="submit"  name="submit1" class="pull-right btn btn-sm btn-primary" value="{{__('profile.submit')}}">
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h2>{{__('profile.edit_password')}}</h2>
                <form id="update_password" class="update_password" enctype="text/plain" action="{{ route("edit_password") }}" method="POST" role="form">
                    <div class="form-group">
                        <label>{{__('profile.enter_new_password')}}</label>
                        <input type="password" name="password" id="password" required placeholder="{{__('profile.enter_new_password')}}">
                    </div>
                    <div class="form-group">
                        <label>{{__('profile.confirm_new_password')}}</label>
                        <input type="password" name="confirm_password" id="confirm_password" required placeholder="{{__('profile.confirm_new_password')}}" size="40">
                    </div>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit" name="submit2" class="pull-right btn btn-sm btn-primary" value="{{__('profile.submit')}}">
                </form>
            </div>
        </div>
    </div>
@endsection