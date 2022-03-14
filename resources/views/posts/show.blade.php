@extends('layouts.layouts')

@section('title', 'Foodist ～おいしさを求めて～')

@section('content')

    @if (session('message'))
        {{ session('message') }}
    @endif

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <p class="card-text">{{ $post->content }}</p>

            <div class="d-flex" style="height: 36.4px;">
                
                <a href="/posts/{{ $post->id }}/edit" class="btn btn-outline-primary">編集する</a>
                <form action="/posts/{{ $post->id }}" method="POST" onsubmit="if(confirm('メッセージを削除しますか?')) { return true } else {return false };">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" class="btn btn-outline-danger">削除する</button>
                </form>
            </div>
        </div>
    </div>

    <a href="/posts/{{ $post->id }}/edit">編集する</a> | 
    <a href="/posts">ホームへ戻る</a>

@endsection