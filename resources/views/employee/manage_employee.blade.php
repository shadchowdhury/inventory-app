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

<!-- Edit Modal -->
<div class="modal fade" id="editEmployeeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content bd-0">
            <div class="modal-header pd-y-20 pd-x-25">
                <h6 class="tx-18 mg-b-0 tx-inverse tx-bold">Edit Employee's Information</h6>
            </div>
            <div class="modal-body pd-5">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="form-layout form-layout-4">
                            <div class="row">
                                <label class="col-sm-4 form-control-label">Fullname: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="text" id="name" class="form-control" value="{{ old('name') }}" autofocus autocomplete="name" placeholder="Enter employee's fullname">
                                    <span class="tx-danger remove_error" id="error_name"></span>
                                </div>
                            </div>
                            <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Email: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="email" id="email" class="form-control" value="{{ old('email') }}" autocomplete="email" placeholder="Enter employee's email address">
                                    <span class="tx-danger remove_error" id="error_email"></span>
                                </div>
                            </div>
                            <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Mobile No. <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="text" id="phone" class="form-control" value="{{ old('phone') }}" autocomplete="phone" placeholder="Enter employee's mobile number">
                                    <span class="tx-danger remove_error" id="error_phone"></span>
                                </div>
                            </div>
                            <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Address: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <textarea rows="2" id="address" class="form-control" value="{{ old('address') }}" autocomplete="address" placeholder="Enter employee's address"></textarea>
                                    <span class="tx-danger remove_error" id="error_address"></span>
                                </div>
                            </div>
                            <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Experience</label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="text" id="experience" class="form-control" value="{{ old('experience') }}" autocomplete="experience" placeholder="Enter employee's experience">
                                    <span class="tx-danger remove_error" id="error_experience"></span>
                                </div>
                            </div>
                            <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">NID No.</label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="text" id="nid_no" class="form-control" value="{{ old('nid_no') }}" autocomplete="nid_no" placeholder="Enter employee's NID No.">
                                    <span class="tx-danger remove_error" id="error_nid_no"></span>
                                </div>
                            </div>
                            <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Salary <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="text" id="salary" class="form-control" value="{{ old('salary') }}" autocomplete="salary" placeholder="Enter employee's salary">
                                    <span class="tx-danger remove_error" id="error_salary"></span>
                                </div>
                            </div>
                            <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Vacation</label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="text" id="vacation" class="form-control" value="{{ old('vacation') }}" autocomplete="vacation" placeholder="Enter employee's vacation">
                                    <span class="tx-danger remove_error" id="error_vacation"></span>
                                </div>
                            </div>
                            <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">City <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="text" id="city" class="form-control" autocomplete="city" value="{{ old('city') }}" autocomplete="city" placeholder="Enter employee's city">
                                    <span class="tx-danger remove_error" id="error_city"></span>
                                </div>
                            </div>
                            <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Photo </label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="file" id="image" class="form-control">
                                    <span class="tx-danger remove_error" id="error_image"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="updateEmployee btn btn-primary tx-mont tx-medium tx-11 tx-uppercase pd-y-12 pd-x-25 tx-spacing-1" value="">Update Employee</button>
                <button type="button" class="btn btn-secondary tx-mont tx-medium tx-11 tx-uppercase pd-y-12 pd-x-25 tx-spacing-1" data-dismiss="modal">Close</button>
            </div>
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
                    if (response.status != "success") {
                        table.ajax.reload();
                        jQuery("#deleteEmployeeModal").modal("hide");
                        swal({
                            title: "Oops!",
                            text: response.msg,
                            icon: "error",
                            timer: 2000,
                            button: false,
                        });
                    } else {
                        table.ajax.reload();
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

        //Employee Edit
        jQuery(document).on("click", ".editEmployee", function(e){
            var id = jQuery(this).val();
            jQuery(".updateEmployee").val(id);

            var editUrl = '{{ route("employees.edit", ":id") }}';
            editUrl = editUrl.replace(':id', id);

            $.ajax({
                url: editUrl,
                type: "GET",
                dataType: "JSON",
                success: function(response){
                    if (response.status == "success") {
                        jQuery("#name").val(response.employee.name);
                        jQuery("#email").val(response.employee.email);
                        jQuery("#phone").val(response.employee.phone);
                        jQuery("#address").val(response.employee.address);
                        jQuery("#experience").val(response.employee.experience);
                        jQuery("#nid_no").val(response.employee.nid_no);
                        jQuery("#salary").val(response.employee.salary);
                        jQuery("#vacation").val(response.employee.vacation);
                        jQuery("#city").val(response.employee.city);
                        jQuery("#image").val(response.employee.image);
                    }
                }
            });
        });
    });
</script>
@endpush
