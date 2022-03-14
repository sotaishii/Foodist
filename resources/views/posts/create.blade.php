@extends("layouts.layouts")

@section("title", "Foodist ～おいしさを求めて～")

@section("content")
 
<h1>新しくつぶやく</h1>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error  }}</li>
        @endforeach
    </ul>
</div>
@endif

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
    <button type="submit" class="btn btn-outline-primary">再投稿する</button>
    
</form>

<a href="/posts">戻る</a>

@endsection
