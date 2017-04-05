@if(count($errors) > 0)
    <div class="alert alert-danger">
        <p>{{$errors->all()[0]}}</p>
    </div>
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{$error}}</p>
        @endforeach
    </div>
@endif
