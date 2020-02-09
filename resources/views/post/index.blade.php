@extends('layouts.app') {{-- 親の継承 --}}

@section('title','Index')

@section('menu')
  @parent
  インデックスページ
  l
@endsection

{{-- @section('create')
   --}}

@section('content')
  コンテントです
  部品入れます
@endsection