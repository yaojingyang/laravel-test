@extends('layouts.user')
@section('content')
    <form method="POST" action="{{ route('users.store') }}">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="name">名称：</label>
            <input type="text" name="name" class="form-control" value="">
        </div>

        <div class="form-group">
            <label for="email">邮箱：</label>
            <input type="text" name="email" class="form-control" value="">
        </div>

        <div class="form-group">
            <label for="password">密码：</label>
            <input type="password" name="password" class="form-control" value="{{ old('password') }}">
        </div>

        <div class="form-group">
            <label for="password_confirmation">确认密码：</label>
            <input type="password" name="password_confirmation" class="form-control" value="{{ old('password_confirmation') }}">
        </div>

        <button type="submit" class="btn btn-primary">注册</button>
    </form>
@endsection
@if(count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error )
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif