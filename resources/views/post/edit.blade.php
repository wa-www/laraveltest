<table>
    <form action="/post/{{$post->id}}" method="post">
      {{csrf_field()}}
        <input type="hidden" name="user_id" value=1>
        <tr><th>title:</th><td><input type="text" name="title" value="{{$post->title}}"></td></tr>
        <tr><th>content:</th><td><input type="text" name="content" value="{{$post->content}}"></td></tr>
      <input type="hidden" name="_method" value="PUT">
  
      <input type="submit" class="button" value="OK">
    </form>
  </table>