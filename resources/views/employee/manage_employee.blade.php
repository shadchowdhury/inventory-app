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
                                <label class="col-sm-4 form-control-label">Fullname: <span
                                        class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="text" id="name" class="form-control" autofocus>
                                    <span class="tx-danger remove_error" id="error_name"></span>
                                </div>
                            </div>
                            <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Email: <span
                                        class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="email" id="email" class="form-control">
                                    <span class="tx-danger remove_error" id="error_email"></span>
                                </div>
                            </div>
                            <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Mobile No. <span
                                        class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="text" maxlength="13" id="phone" class="form-control">
                                    <span class="tx-danger remove_error" id="error_phone"></span>
                                </div>
                            </div>
                            <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Address: <span
                                        class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <textarea rows="2" id="address" class="form-control"></textarea>
                                    <span class="tx-danger remove_error" id="error_address"></span>
                                </div>
                            </div>
                            <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Experience</label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="text" id="experience" class="form-control">
                                    <span class="tx-danger remove_error" id="error_experience"></span>
                                </div>
                            </div>
                            <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">NID No.</label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="text" id="nid_no" class="form-control nid_no">
                                    <span class="tx-danger remove_error" id="error_nid_no"></span>
                                </div>
                            </div>
                            <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Salary <span
                                        class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="text" id="salary" class="form-control">
                                    <span class="tx-danger remove_error" id="error_salary"></span>
                                </div>
                            </div>
                            <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Vacation</label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="text" id="vacation" class="form-control">
                                    <span class="tx-danger remove_error" id="error_vacation"></span>
                                </div>
                            </div>
                            <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">City <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="text" id="city" class="form-control">
                                    <span class="tx-danger remove_error" id="error_city"></span>
                                </div>
                            </div>
                            <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Photo </label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <img id="previewImage" class="img-thumbnail" alt="Preview-image"
                                        style="width: 70px; height: 80px; margin-bottom: 5px; display: none;">
                                    <input type="file" id="image" class="form-control">
                                    <span class="tx-danger remove_error" id="error_image"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button"
                    class="updateEmployee btn btn-primary tx-mont tx-medium tx-11 tx-uppercase pd-y-12 pd-x-25 tx-spacing-1"
                    value="">Update Employee</button>
                <button type="button"
                    class="btn btn-secondary tx-mont tx-medium tx-11 tx-uppercase pd-y-12 pd-x-25 tx-spacing-1"
                    data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<!-- Delete Modal -->
<div class="modal fade" id="deleteEmployeeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
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
                <button type="button"
                    class="employeeDelete btn btn-danger tx-mont tx-medium tx-11 tx-uppercase pd-y-12 pd-x-25 tx-spacing-1"
                    value="">Yes</button>
                <button type="button"
                    class="btn btn-secondary tx-mont tx-medium tx-11 tx-uppercase pd-y-12 pd-x-25 tx-spacing-1"
                    data-dismiss="modal">No</button>
            </div>
        </div>
    </div>
</div>


<!-- show Modal -->
<div class="modal fade" id="showEmployeeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content bd-0">
            <div class="modal-header pd-y-20 pd-x-25">
                <h6 class="tx-18 mg-b-0 tx-inverse tx-bold">Employee Details</h6>
            </div>
            <div class="modal-body pd-25">
                <div class="row">
                    <div class="col-xl-10 offset-1 border pd-5">
                        <div class="text-center mb-3">
                            <img src="" id="showImage" alt="Employee Image" class="img-fluid rounded-circle" style="width: 120px; height: 130px;">
                        </div>

                        <div class="row">
                            <div class="col-xl-4 text-center">
                                <p><strong>Name</strong></p>
                            </div>
                            <div class="col-xl-1  text-center">
                                <p><strong>:</strong></p>
                            </div>
                            <div class="col-xl-7 text-left">
                                <p id="emName"></p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-4 text-center">
                                <p><strong>Email</strong></p>
                            </div>
                            <div class="col-xl-1 text-center">
                                <p><strong>:</strong></p>
                            </div>
                            <div class="col-xl-7 text-left">
                                <p id="emEmail"></p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-4 text-center">
                                <p><strong>Mobile No.</strong></p>
                            </div>
                            <div class="col-xl-1 text-center">
                                <p><strong>:</strong></p>
                            </div>
                            <div class="col-xl-7 text-left">
                                <p id="emPhone"></p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-4 text-center">
                                <p><strong>Address</strong></p>
                            </div>
                            <div class="col-xl-1 text-center">
                                <p><strong>:</strong></p>
                            </div>
                            <div class="col-xl-7 text-left">
                                <p id="emAddress"></p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-4 text-center">
                                <p><strong>Experience</strong></p>
                            </div>
                            <div class="col-xl-1 text-center">
                                <p><strong>:</strong></p>
                            </div>
                            <div class="col-xl-7 text-left">
                                <p id="emExperience"></p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-4 text-center">
                                <p><strong>NID No.</strong></p>
                            </div>
                            <div class="col-xl-1 text-center">
                                <p><strong>:</strong></p>
                            </div>
                            <div class="col-xl-7 text-left">
                                <p id="emNid_no"></p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-4 text-center">
                                <p><strong>Salary</strong></p>
                            </div>
                            <div class="col-xl-1 text-center">
                                <p><strong>:</strong></p>
                            </div>
                            <div class="col-xl-7 text-left">
                                <p id="emSalary"></p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-4 text-center">
                                <p><strong>Vacation</strong></p>
                            </div>
                            <div class="col-xl-1 text-center">
                                <p><strong>:</strong></p>
                            </div>
                            <div class="col-xl-7 text-left">
                                <p id="emVacation"></p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-4 text-center">
                                <p><strong>City</strong></p>
                            </div>
                            <div class="col-xl-1 text-center">
                                <p><strong>:</strong></p>
                            </div>
                            <div class="col-xl-7 text-left">
                                <p id="emCity"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">

                <button type="button"
                    class="btn btn-secondary tx-mont tx-medium tx-11 tx-uppercase pd-y-12 pd-x-25 tx-spacing-1"
                    data-dismiss="modal">Close</button>
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

        //Preview Image
        jQuery('#image').on('change', function() {
            //jQuery('#previewImage').show();
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    $('#previewImage').attr('src', e.target.result).show();
                }
                reader.readAsDataURL(file);
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

        //Delete Employee
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

        //Edit Employee
        jQuery(document).on("click", ".editEmployee", function(e) {
            var id = jQuery(this).val();
            jQuery(".updateEmployee").val(id);

            var editUrl = '{{ route("employees.edit", ":id") }}';
            editUrl = editUrl.replace(':id', id);

            $.ajax({
                url: editUrl,
                type: "GET",
                dataType: "JSON",
                success: function(response) {
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
                        if (response.image_url) {
                            jQuery('#previewImage').attr('src', response.image_url).show();
                        }
                    }
                }
            });
        });

        //Update Employee
        jQuery(document).on("click", ".updateEmployee", function(e) {
            //e.preventDefault();
            var id = jQuery(this).val();

            jQuery(".remove_error").text("");

            let fileInput = $('#image')[0];
            let file = fileInput.files[0];

            var updateUrl = '{{ route("employees.update", ":id") }}';
            updateUrl = updateUrl.replace(":id", id);

            // Create a new FormData object
            var formData = new FormData();

            formData.append('_method', 'PUT');

            formData.append('name', $('#name').val());
            formData.append('email', $('#email').val());
            formData.append('phone', $('#phone').val());
            formData.append('address', $('#address').val());
            formData.append('experience', $('#experience').val());
            formData.append('nid_no', $('#nid_no').val());
            formData.append('salary', $('#salary').val());
            formData.append('vacation', $('#vacation').val());
            formData.append('city', $('#city').val());

            // Check if file exists before appending
            if (file) {
                formData.append('image', file);
            }

            $.ajax({
                url: updateUrl,
                type: "POST", // Laravel's method spoofing (via hidden _method) will convert this to PUT
                dataType: "JSON",
                data: formData,
                processData: false, // Do not process data
                contentType: false, // Do not set contentType
                success: function(response) {
                    //Reload DataTable
                    table.ajax.reload();

                    // Clear form fields
                    jQuery("#name").val("");
                    jQuery("#email").val("");
                    jQuery("#phone").val("");
                    jQuery("#address").val("");
                    jQuery("#experience").val("");
                    jQuery("#nid_no").val("");
                    jQuery("#salary").val("");
                    jQuery("#vacation").val("");
                    jQuery("#city").val("");
                    jQuery("#image").val("");
                    jQuery('#previewImage').hide();
                    jQuery("#editEmployeeModal").modal("hide");

                    // Display success message
                    swal({
                        title: "Success!",
                        text: response.status,
                        icon: "info",
                        timer: 2000,
                        button: false,
                    });
                },
                error: function(error) {
                    if (error) {
                        // Display errors
                        jQuery("#error_name").text(error.responseJSON.errors.name);
                        jQuery("#error_email").text(error.responseJSON.errors.email);
                        jQuery("#error_phone").text(error.responseJSON.errors.phone);
                        jQuery("#error_address").text(error.responseJSON.errors.address);
                        jQuery("#error_experience").text(error.responseJSON.errors.experience);
                        jQuery("#error_nid_no").text(error.responseJSON.errors.nid_no);
                        jQuery("#error_salary").text(error.responseJSON.errors.salary);
                        jQuery("#error_vacation").text(error.responseJSON.errors.vacation);
                        jQuery("#error_city").text(error.responseJSON.errors.city);
                        jQuery("#error_image").text(error.responseJSON.errors.image);
                    }
                }
            });
        });

        //Show Employee Details
        jQuery(document).on("click", ".viewEmployee", function(e) {
            var id = jQuery(this).val();

            var showUrl = '{{ route("employees.show", ":id") }}';
            showUrl = showUrl.replace(':id', id);

            $.ajax({
                url: showUrl,
                type: "GET",
                dataType: "JSON",
                success: function(response) {
                    if (response.status == "success") {
                        console.log(response.employee.name);
                        jQuery("#emName").text(response.employee.name);
                        jQuery("#emEmail").text(response.employee.email);
                        jQuery("#emPhone").text(response.employee.phone);
                        jQuery("#emAddress").text(response.employee.address);
                        jQuery("#emExperience").text(response.employee.experience);
                        jQuery("#emNid_no").text(response.employee.nid_no);
                        jQuery("#emSalary").text(response.employee.salary);
                        jQuery("#emVacation").text(response.employee.vacation);
                        jQuery("#emCity").text(response.employee.city);
                        if (response.image_url) {
                            jQuery('#showImage').attr('src', response.image_url);
                        }
                    }
                }
            });
        });
    });
</script>
@endpush
