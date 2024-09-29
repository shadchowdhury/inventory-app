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
                                    <input type="text" id="emname" class="form-control name" autofocus>
                                    <span class="tx-danger remove_error" id="error_name"></span>
                                </div>
                            </div>
                            <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Email: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="email" id="ememail" class="form-control email">
                                    <span class="tx-danger remove_error" id="error_email"></span>
                                </div>
                            </div>
                            <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Mobile No. <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="text" id="emphone" class="form-control phone">
                                    <span class="tx-danger remove_error" id="error_phone"></span>
                                </div>
                            </div>
                            <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Address: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <textarea rows="2" id="emaddress" class="form-control address"></textarea>
                                    <span class="tx-danger remove_error" id="error_address"></span>
                                </div>
                            </div>
                            <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Experience</label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="text" id="emexperience" class="form-control experience">
                                    <span class="tx-danger remove_error" id="error_experience"></span>
                                </div>
                            </div>
                            <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">NID No.</label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="text" id="emnid_no" class="form-control nid_no">
                                    <span class="tx-danger remove_error" id="error_nid_no"></span>
                                </div>
                            </div>
                            <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Salary <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="text" id="emsalary" class="form-control salary">
                                    <span class="tx-danger remove_error" id="error_salary"></span>
                                </div>
                            </div>
                            <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Vacation</label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="text" id="emvacation" class="form-control vacation">
                                    <span class="tx-danger remove_error" id="error_vacation"></span>
                                </div>
                            </div>
                            <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">City <span class="tx-danger">*</span></label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="text" id="emcity" class="form-control city">
                                    <span class="tx-danger remove_error" id="error_city"></span>
                                </div>
                            </div>
                            <div class="row mg-t-20">
                                <label class="col-sm-4 form-control-label">Photo </label>
                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <img id="previewImage" class="img-thumbnail" alt="Preview-image" style="width: 70px; height: 80px; margin-bottom: 5px; display: none;">
                                    <input type="file" id="emimage" class="form-control image">
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
                        jQuery("#emname").val(response.employee.name);
                        jQuery("#ememail").val(response.employee.email);
                        jQuery("#emphone").val(response.employee.phone);
                        jQuery("#emaddress").val(response.employee.address);
                        jQuery("#emexperience").val(response.employee.experience);
                        jQuery("#emnid_no").val(response.employee.nid_no);
                        jQuery("#emsalary").val(response.employee.salary);
                        jQuery("#emvacation").val(response.employee.vacation);
                        jQuery("#emcity").val(response.employee.city);
                        if (response.image_url) {
                            jQuery('#previewImage').attr('src', response.image_url).show();
                        }
                    }
                }
            });
        });

        //Update Employee
        jQuery(document).on("click", ".updateEmployee", function(e) {
            var id = jQuery(this).val();

            jQuery(".remove_error").text("");

            // let name = jQuery(".name").val();
            // let email = jQuery(".email").val();
            // let phone = jQuery(".phone").val();
            // let address = jQuery(".address").val();
            // let experience = jQuery(".experience").val();
            // let nid_no = jQuery(".nid_no").val();
            // let salary = jQuery(".salary").val();
            // let vacation = jQuery(".vacation").val();
            // let city = jQuery(".city").val();
            let fileInput = $('.image')[0];
            let file = fileInput.files[0];

            // let formData = new FormData();

            // formData.append('name', name);
            // formData.append('email', email);
            // formData.append('phone', phone);
            // formData.append('address', address);
            // formData.append('experience', experience);
            // formData.append('nid_no', nid_no);
            // formData.append('salary', salary);
            // formData.append('vacation', vacation);
            // formData.append('city', city);
            // if (file) {
            //     formData.append('image', file);
            // }

            var updateUrl = '{{route("employees.update", ":id")}}';
            updateUrl = updateUrl.replace(":id", id);

            //console.log(updateUrl);
            // for (let [key, value] of formData.entries()) {
            //     console.log(key, value);
            // }

            $.ajax({
                url: updateUrl,
                type: "PUT",
                dataType: "JSON",
                data: {
                    'name' : jQuery(".name").val()
                },
                processData: false,
                contentType: false,
                success: function(response) {
                    // jQuery("#error_name").text("");
                    // jQuery("#error_email").text("");
                    // jQuery("#error_phone").text("");
                    // jQuery("#error_address").text("");
                    // jQuery("#error_experience").text("");
                    // jQuery("#error_nid_no").text("");
                    // jQuery("#error_salary").text("");
                    // jQuery("#error_vacation").text("");
                    // jQuery("#error_city").text("");
                    // jQuery("#error_image").text("");

                    jQuery("#emname").val("");
                    jQuery("#ememail").val("");
                    jQuery("#emphone").val("");
                    jQuery("#emaddress").val("");
                    jQuery("#emexperience").val("");
                    jQuery("#emnid_no").val("");
                    jQuery("#emsalary").val("");
                    jQuery("#emvacation").val("");
                    jQuery("#emcity").val("");
                    jQuery("#emimage").val("");
                    // //console.log(response.name);
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
                        //console.log(error.responseJSON.errors);
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

    });
</script>
@endpush
