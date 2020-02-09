
<html>
  <head>
    <title>@yield('title')</title>
  </head>

  <body>
    @section('menu')
    <h2 class="menulist">メニュー</h2>
    <ul>
      <li>@show</li>
    </ul>

    <h1 class="board">掲示板サイトです</h1>
      {{-- @section('create')
      @show --}}


      @yield('content')
      <p class="keisyo">こkに内容のテンプレートの継承します</p>
        @include('post.create')
  </body>
</html>
