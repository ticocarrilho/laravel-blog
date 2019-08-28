@extends('layout')

@section('pageTitle')
    Create Post
@endsection

@section('content')
    <div class="row justify-content-center p-3">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create New Post</div>
                    <div class="card-body">
                        @include('errors')
                        <form action="/post" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="postTitle">Post Title</label>
                                <input type="text" name="postTitle" id="postTitle" class="form-control" required>
                            </div>
                            <div class="form-group">
                              <label for="postText">Write your Post</label>
                              <textarea class="form-control" name="postText" id="postText" rows="3" required></textarea>
                            </div>
                            <div class="ml-auto">
                            <button class="btn btn-primary" type="submit">Send</button>
                            </div>
                        </form>
                </div>
            </div>

        </div>
    </div>
@endsection