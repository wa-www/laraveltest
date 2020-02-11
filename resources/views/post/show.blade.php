<ul class="content-view" style="width:800px; height:50px; background-color:gray; color:white;">
    <li> タイトル：{{$post->title}}</li>
    <li>内容：{{$post->content}}</li>
    {{-- <div class="btn"> --}}
    <a href="post/{{$post->id}}/edit" >編集</a> 
    <span><a href="post/{{$post->id}}/edit" >削除</a> </span>

  </ul>