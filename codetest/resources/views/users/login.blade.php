@extends('layouts.user')
@section('content')
    <form method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="email">邮箱：</label>
            <input type="text" name="email" class="form-control" value="">
        </div>

        <div class="form-group">
            <label for="password">密码：</label>
            <input type="password" name="password" class="form-control" value="{{ old('password') }}">
        </div>

        <button type="submit" class="btn btn-primary">登录</button>
    </form>
    <div class="checkbox">
        <label><input type="checkbox" name="remember"> 记住我</label>
    </div>

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