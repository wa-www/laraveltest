<ul class="content-view" style="width:800px; height:50px; background-color:gray; color:white;">
    <li> タイトル：{{$post->title}}</li>
    <li>内容：{{$post->content}}</li>
    {{-- <div class="btn"> --}}
    <a href="{{$post->id}}/edit" >編集</a> 
    <span>
      <form action="/post/{{$post->id}}" method="post">
        {{csrf_field()}}
      <input type="hidden" name="_method" value="DELETE">
      <input type="submit" class="delete" value="削除">
      </form>
    </span>
      

  </ul>