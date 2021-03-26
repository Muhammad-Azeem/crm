@if(Session::has('Error'))
    <div class="alert alert-danger ">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times</a>
        {{ Session::get('Error') }}
    </div>
@endif
@if(Session::has('Success'))
    <div class="alert alert-success ">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times</a>
        {{ Session::get('Success') }}
    </div>
@endif
