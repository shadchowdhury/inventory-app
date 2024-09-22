@extends('layouts.master')

@section('content')

<div class="br-pagetitle">
    <i class="icon ion-person-stalker"></i>
    <div>
        <h4>List Of Employees</h4>
    </div>
</div>

<div class="br-pagebody">
    <div class="br-section-wrapper" style="padding: 20px!important;">
        <div class="bd bd-gray-300 rounded table-responsive">
            <table class="table table-striped table-bordered mg-b-0 yajra-datatable">
                <thead>
                    <tr>
                        <th>#Sl</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Salary</th>
                        <th>Image</th>
                        <th width="150px">Action</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection



@push('body-scripts')
<script>
    $(document).ready(function() {

        //Show Employee List with Yajra Datatable
        var table = $('.yajra-datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ Route('employees.index') }}",
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex'
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'phone',
                    name: 'phone'
                },
                {
                    data: 'email',
                    name: 'email'
                },
                {
                    data: 'address',
                    name: 'address'
                },
                {
                    data: 'salary',
                    name: 'salary'
                },
                {
                    data: 'image',
                    name: 'image'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                },
            ],
            columnDefs: [{
                targets: '_all', // Apply to all columns
                className: 'text-center' // Add the class to the header cells
            }]
        });
    });
</script>
@endpush
