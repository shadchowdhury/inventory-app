@extends('layouts.master')

@section('content')

<div class="br-pagetitle">
    <i class="icon ion-person-add"></i>
    <div>
        <h4>Add New Employee</h4>
    </div>
</div>

<div class="br-pagebody">
    <div class="br-section-wrapper">
        <div class="row">
            <div class="col-xl-10 offset-1">
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
                            <img id="previewImage" class="img-thumbnail" alt="Preview-image" style="width: 70px; height: 80px; margin-bottom: 5px; display: none;">
                            <input type="file" id="image" class="form-control">
                            <span class="tx-danger remove_error" id="error_image"></span>
                        </div>
                    </div>

                    <div class="row mg-t-30">
                        <div class="col-sm-8 mg-l-auto">
                            <div class="form-layout-footer">
                                <button class="btn btn-info" id="btnSave">Save</button>
                            </div>
                        </div>
                    </div>

                </div>
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

        //Employee Store
        jQuery("#btnSave").click(function() {

            jQuery(".remove_error").text("");

            let name = jQuery("#name").val();
            let email = jQuery("#email").val();
            let phone = jQuery("#phone").val();
            let address = jQuery("#address").val();
            let experience = jQuery("#experience").val();
            let nid_no = jQuery("#nid_no").val();
            let salary = jQuery("#salary").val();
            let vacation = jQuery("#vacation").val();
            let city = jQuery("#city").val();
            let fileInput = $('#image')[0];
            let file = fileInput.files[0];

            let formData = new FormData();
            formData.append('name', name);
            formData.append('email', email);
            formData.append('phone', phone);
            formData.append('address', address);
            formData.append('experience', experience);
            formData.append('nid_no', nid_no);
            formData.append('salary', salary);
            formData.append('vacation', vacation);
            formData.append('city', city);
            if (file) {
                formData.append('image', file);
            }

            $.ajax({
                url: "{{ Route('employees.store') }}",
                type: "POST",
                dataType: "JSON",
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    jQuery("#error_name").text("");
                    jQuery("#error_email").text("");
                    jQuery("#error_phone").text("");
                    jQuery("#error_address").text("");
                    jQuery("#error_experience").text("");
                    jQuery("#error_nid_no").text("");
                    jQuery("#error_salary").text("");
                    jQuery("#error_vacation").text("");
                    jQuery("#error_city").text("");
                    jQuery("#error_image").text("");

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
                    //console.log(response.name);
                    swal({
                        title: "Success!",
                        text: response.status,
                        icon: "success",
                        timer: 2000,
                        button: false,
                    });
                },
                error: function(error) {
                    if (error) {
                        //console.log(error.responseJSON.errors.name);
                        jQuery("#error_name").text(error.responseJSON.errors.name);
                        jQuery("#error_email").text(error.responseJSON.errors.email);
                        jQuery("#error_phone").text(error.responseJSON.errors.phone);
                        jQuery("#error_address").text(error.responseJSON.errors.address);
                        jQuery("#error_experience").text(error.responseJSON.errors.experirnce);
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
