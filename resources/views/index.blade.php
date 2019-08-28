@extends('layout')

@section('pageTitle')
    Blog Index
@endsection

@section('content')
    @foreach ($posts as $post)
        <div class="row justify-content-center pt-3">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header"><a href="/post/{{$post->id}}">{{$post->postTitle}}</a></div>
                    <div class="card-body">
                        <p class="card-text">{{$post->postText}}</p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection