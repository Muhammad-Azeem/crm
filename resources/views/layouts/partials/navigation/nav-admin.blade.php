
@role('admin')
 @include('admin.partials.sidebar')
@endrole

@role('manager')
@include('semi-admin.partials.sidebar')
@endrole


@role('supervisor')
@include('supervisors.partials.sidebar')
@endrole

@role('customer')
@include('users.partials.sidebar')
@endrole
