@extends('layouts.helloapp')

@section('title', 'index')

@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
@if (Auth::check())
  <p>USER: {{$user->name . ' (' . $user->email . ')'}}</p>
@else
  <p>*ログインしていません。(<a href="/login">ログイン</a>|<a href="/regster">登録</a>)</p>
@endif
  <table>
    <tr><th>Name</th><th>Mail</th><th>Age</th></tr>
    @foreach($items as $item)
      <tr>
        <td>{{$item->name}}</td>
        <td>{{$item->mail}}</td>
        <td>{{$item->age}}</td>
        <td>{{$item->age}}</td>
      </tr>
    @endforeach
  </table>
@endsection

@section('footer')
copyright 2017 tuyano.
@endsection