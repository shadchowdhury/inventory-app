@extends('layouts.master')

@section('content')
<div class="br-pagetitle">
    <i class="icon ion-person-add"></i>
    <div>
        <h4>Add New Employee</h4>
    </div>
</div>

'name','email','phone','address','experience','photo','nid_no','salary,'vacation','city'

<div class="br-pagebody">
    <div class="br-section-wrapper">
        <div class="row">
            <div class="col-xl-10 offset-1">
                <div class="form-layout form-layout-4">
                    <div class="row">
                        <label class="col-sm-4 form-control-label">Full Name: <span class="tx-danger">*</span></label>
                        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                            <input type="text" name="name" id="name" class="form-control" required autofocus autocomplete="name" placeholder="Enter full name">
                        </div>
                    </div>
                    <div class="row mg-t-20">
                        <label class="col-sm-4 form-control-label">Email: <span class="tx-danger">*</span></label>
                        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                            <input type="text" class="form-control" required autocomplete="email" placeholder="Enter email address">
                        </div>
                    </div>
                    <div class="row mg-t-20">
                        <label class="col-sm-4 form-control-label">Lastname: <span class="tx-danger">*</span></label>
                        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                            <input type="text" class="form-control" required autofocus autocomplete="name" placeholder="Enter lastname">
                        </div>
                    </div>
                    <div class="row mg-t-20">
                        <label class="col-sm-4 form-control-label">Address: <span class="tx-danger">*</span></label>
                        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                            <textarea rows="2" class="form-control" placeholder="Enter your address"></textarea>
                        </div>
                    </div>
                    <div class="row mg-t-20">
                        <label class="col-sm-4 form-control-label">Lastname: <span class="tx-danger">*</span></label>
                        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                            <input type="text" class="form-control" placeholder="Enter lastname">
                        </div>
                    </div>
                    <div class="row mg-t-20">
                        <label class="col-sm-4 form-control-label">Email: <span class="tx-danger">*</span></label>
                        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                            <input type="text" class="form-control" placeholder="Enter email address">
                        </div>
                    </div>
                    <div class="row mg-t-20">
                        <label class="col-sm-4 form-control-label">Address: <span class="tx-danger">*</span></label>
                        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                            <textarea rows="2" class="form-control" placeholder="Enter your address"></textarea>
                        </div>
                    </div>
                    <div class="row mg-t-30">
                        <div class="col-sm-8 mg-l-auto">
                            <div class="form-layout-footer">
                                <button class="btn btn-info">Submit</button>
                            </div>
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
        // $('#exampleModal').modal('show');
        // $('#modal-title').html('Add New Employee');
        // $('#btn-save').html('Save');
        //alert("Ok");
    });
</script>
@endpush
