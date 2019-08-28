@extends('layout')

@section('content')
    <div class="row justify-content-center p-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Login</div>
                    <div class="card-body">
                        <form action="/login" method="post">
                            @csrf
                            @include('errors')
                            <div class="form-group">
                                <label for="email" type="email">Email</label>
                                <input type="email" name="email" class="form-control @if($errors->has('email')||$errors->has('password')) is-invalid @endif" id="email" required autofocus @error('email') is-invalid @enderror>
                                
                            </div>
                            <div class="form-group">
                              <label for="password">Password</label>
                              <input type="password" name="password" id="password" class="form-control @if($errors->has('email')||$errors->has('password')) is-invalid @endif" aria-describedby="passwordHelp">
                              <small id="passwordHelp" class="text-muted"><a href="">Forgot your password?</a></small>
                            </div>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="remember" id="remember">
                                Remember Me
                              </label>
                            </div>
                            <div class="offset-5 pt-2">
                            <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
@endsection
