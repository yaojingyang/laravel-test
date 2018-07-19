@extends('layouts.user')
@section('title','用户界面')
@section('content')
<form action="{{route('users.create')}}" method="get">
    <button>注册</button>
</form>
@endsection
@section('content_login')
<form action="{{route('login')}}" method="get">
    <button>登录</button>
</form>
@endsection