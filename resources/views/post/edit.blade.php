<table>
    <form action="/post" method="post">
      {{csrf_field()}}
        <input type="hidden" name="user_id" value=1>
        <tr><th>title:</th><td><input type="text" name="title" value="{{$form->title}}"></td></tr>
        <tr><th>content:</th><td><input type="text" name="content" value="{{$form->content}}"></td></tr>
  
      <input type="submit" class="button" value="OK">
    </form>
  </table>