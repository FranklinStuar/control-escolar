@if(Session::has('success'))
    <div class="alert alert-success margin-h-20" role="alert"><span class="center">{{Session::get('success')}}</span></div>
@endif
@if(Session::has('error'))
    <div class="alert alert-danger margin-h-20" role="alert"><span class="center">{{Session::get('error')}}</span></div>
@endif
@if(Session::has('errors'))
    <div class="alert alert-danger margin-h-20" role="alert">
        <ul>
            @foreach(Session::get('errors') as $error)
                <li>{!!$error!!}</li>
            @endforeach
        </ul>
    </div>
@endif