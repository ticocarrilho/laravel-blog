@if ($errors->any())
     @foreach ($errors->all() as $error)
        <b>{{$error}}</b>
    @endforeach
@endif