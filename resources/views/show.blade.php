@extends('layout')

@section('pageTitle')
    Blog Index
@endsection

@section('content')
    <div class="row justify-content-center pt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{$post->postTitle}}</div>
                <div class="card-body">
                    <p class="card-text">{{$post->postText}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection