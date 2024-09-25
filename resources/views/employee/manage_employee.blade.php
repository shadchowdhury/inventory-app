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


<!-- Delete Modal -->
<div class="modal fade" id="deleteEmployeeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content bd-0">
            <div class="modal-header pd-y-20 pd-x-25">
                <h6 class="tx-18 mg-b-0 tx-inverse tx-bold">Confirmation</h6>
                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button> -->
            </div>
            <div class="modal-body pd-25">
                <h4 class="lh-4 mg-b-20 tx-inverse">Are you sure! Want to delete this Employee?</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="employeeDelete btn btn-danger tx-mont tx-medium tx-11 tx-uppercase pd-y-12 pd-x-25 tx-spacing-1" value="">Yes</button>
                <button type="button" class="btn btn-secondary tx-mont tx-medium tx-11 tx-uppercase pd-y-12 pd-x-25 tx-spacing-1" data-dismiss="modal">No</button>
            </div>
        </div>
    </div>
</div>


@endsection



@push('body-scripts')
<script>
    $(document).ready(function() {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

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

        //Employee Delete
        jQuery(document).on("click", ".deleteEmployee", function(e) {
            var id = jQuery(this).val();
            jQuery(".employeeDelete").val(id);
        });

        jQuery(document).on("click", ".employeeDelete", function(e) {
            var id = jQuery(this).val();

            var deleteUrl = '{{ route("employees.destroy", ":id") }}';
            deleteUrl = deleteUrl.replace(':id', id);

            // var baseUrl = `{{ url('/') }}`
            // var urlDelete = baseUrl + '/employees/' + id;
            // console.log(deleteUrl);
            // console.log(urlDelete);

            $.ajax({
                url: deleteUrl,
                type: "DELETE",
                dataType: "JSON",
                success: function(response) {
                    //console.log(response.employee);
                    if (response.status != "success") {
                        // table.ajax.reload();
                        $('.yajra-datatable').DataTable().ajax.reload();
                        jQuery("#deleteEmployeeModal").modal("hide");
                        swal({
                            title: "Oops!",
                            text: response.msg,
                            icon: "error",
                            timer: 2000,
                            button: false,
                        });
                    } else {
                        // table.ajax.reload();
                        $('.yajra-datatable').DataTable().ajax.reload();
                        jQuery("#deleteEmployeeModal").modal("hide");
                        swal({
                            title: "Success!",
                            text: response.msg,
                            icon: "warning",
                            timer: 2000,
                            button: false,
                        });
                    }
                }
            });
        });
    });
</script>
@endpush
