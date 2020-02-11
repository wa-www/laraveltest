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

{{-- <p class="keisyo">こkに内容のテンプレートの継承します</p>
@include('post.create') --}}