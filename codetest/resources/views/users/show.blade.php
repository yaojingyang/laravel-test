@extends('layouts.user')
@section('title',$user->name)
@section('content')
    用户名：{{$user->name}}<br>
    邮箱：{{$user->email}}<br>
    密码：{{$user->password}}
    @endsection
@section('content_login')
    <form action="{{route('logout')}}" method="post" >
        {{csrf_field()}}
        <input type="hidden" name="_method" value="delete">

        <button>退出</button>
    </form>
@endsection
