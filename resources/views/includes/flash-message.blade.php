@if(Session::has('message')))
<div class="alert alert-{{ Session::get('class')}}" role="alert">
    <div class="alert-text">{{ Session::get('message') }}</div>
</div>
@endif
