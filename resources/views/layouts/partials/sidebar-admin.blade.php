@role('admin')
@include('admin.partials.nav')
@endrole

@role('manager')
@include('semi-admin.partials.nav')
@endrole

@role('supervisor')
@include('supervisors.partials.nav')
@endrole



@role('customer')
@include('users.partials.nav')
@endrole
