@extends('layouts.helloapp')

@section('title', 'Person.index')

@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
  <table>
    <tr><th>Data</th></tr>
    @foreach ($items as $item)
      <tr>
        <td>{{$item->getData()}}</td>
        <td>
          @if($item->board != null)
            {{$item->getData()}}
          @endif
        </td>
      </tr>
    @endforeach
  </table>
@endsection

@section('footer')
copyright 2017 tuyano.
@endsection