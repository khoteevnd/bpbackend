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
                <h2>{{__('profile.edit_password')}}</h2>
                <form id="update_password" class="update_password" enctype="text/plain" action="{{ route("update_password") }}" method="POST" role="form">
                    <div class="form-group">
                        <label>{{__('profile.enter_new_password')}}</label>
                        <input type="password" name="password" id="password" required placeholder="{{__('profile.enter_new_password')}}" form="update_password">
                    </div>
                    <div class="form-group">
                        <label>{{__('profile.confirm_new_password')}}</label>
                        <input type="password" name="confirm_password" id="confirm_password" required placeholder="{{__('profile.confirm_new_password')}}" size="40" form="update_password">
                    </div>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" form="update_password">
                    <input type="submit" name="submit2" class="pull-right btn btn-sm btn-primary" value="{{__('profile.submit')}}" form="update_password">
                </form>
            </div>
        </div>
    </div>
@endsection