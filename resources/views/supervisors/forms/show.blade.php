@extends('layouts.master.master-admin')
@section('header')
    <style>
        .kt-badge--success {
            background: #1BB580 !important;
        }
    </style>
@stop
@section('content')

    <div class="container">
        <h2>Detail</h2>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>PROFILE PIC</th>
                <th>DATE</th>
                <th>T.L NAME</th>
                <th>AGENT NAME</th>
                <th>CUSTOMER NAME</th>
                <th>COMPANY NAME</th>
                <th>CELL PHONE</th>
                <th>HOME PHONE</th>
                <th>CUSTOMER EMAIL</th>
                <th>SERVICE TYPE</th>
                <th>BILLING AC</th>
                <th>REFERENCE</th>
                <th>SSN</th>
                <th>DOB</th>
                <th>PER MONTH</th>
                <th>TOTAL TO PAY</th>
                <th>RECEIVABLE</th>
                <th>COMMENT</th>
                <th>ADDRESS</th>
                <th>CITY</th>
                <th>STATE</th>
                <th>ZIP CODE</th>
            </tr>
            </thead>
            <tbody>
            @forelse($forms as $key => $form)
                <tr style="font-size: 10px">
                <td>{{ $key +1 }}</td>
                <td>{{ $form->profile_pic }}</td>
                <td>{{ $form->date }}</td>
                <td>{{ $form->tl_name }}</td>
                <td>{{ $form->agent_name }}</td>
                <td>{{ $form->customer_name }}</td>
                <td>{{ $form->cell_phone }}</td>
                <td>{{ $form->home_phone }}</td>
                <td>{{ $form->customer_email }}</td>
                <td>{{ $form->service_type }}</td>
                <td>{{ $form->billing_ac_number }}</td>
                <td>{{ $form->reference }}</td>
                <td>{{ $form->ssn }}</td>
                <td>{{ $form->dob }}</td>
                <td>{{ $form->per_month }}</td>
                <td>{{ $form->total_to_pay }}</td>
                <td>{{ $form->receivable }}</td>
                <td>{{ $form->comment }}</td>
                <td>{{ $form->complete_address }}</td>
                <td>{{ $form->city }}</td>
                <td>{{ $form->state }}</td>
                <td>{{ $form->zip_code }}</td>

            </tr>
            @empty
            @endforelse
            </tbody>
        </table>
    </div>



@endsection
