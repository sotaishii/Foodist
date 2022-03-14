@extends("layouts.layouts")

@section("title", "Foodist ～おいしさを求めて～")

@section("content")

@if (session("message"))
    {{ session("message") }}
@endif

<br>

<!--<a href="/posts/create">新しくつぶやく</a>-->
<form method="POST" action="/posts">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="exampleInputEmail">タイトル</label>
        <input type="text" class="form-control" aria-describedby="emailHelp" name="title" value="{{old("title")}}">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">メッセージ内容</label>
        <textarea class="form-control" name="content">{{old("content")}}</textarea>
    </div>
    <button type="submit" class="btn btn-outline-primary">投稿する</button>
    
</form>

@foreach($posts as $post)


        <div class="card">
            <div class="card-body">
         <h5 class="card-title">{{ $post->title }}</h5>
         <p class="card-text">{{ $post->content }}</p>
        <div class="d-flex" style="height: 36.4px;">
        

<a href="/posts/{{ $post->id }}/edit" class="btn btn-outline-primary">編集する</a>

<form action="/posts/{{ $post->id }}" method="POST" onsubmit="if(confirm('つぶやきを削除しますか？')) { return true } else {return false };">
    
 <input type="hidden" name="_method" value="DELETE">
 <input type="hidden" name="_token" value="{{ csrf_token() }}">
 <button type="submit" class="btn btn-outline-danger">削除する</button>
                    </form>
        </div>
    </div>
</div>
@endforeach



@endsection