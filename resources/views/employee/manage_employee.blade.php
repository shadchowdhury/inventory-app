@extends('layouts.master')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h5 class="mb-2">Employee List</h5>
                    <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="align-middle me-1" data-feather="plus-circle"></i> <span class="align-middle">New Employee</span></button>
                </div>

                <table class="table table-striped table-bordered yajra-datatable mt-2">
                    <thead>
                        <tr>
                            <th>#Sl</th>
                            <th>Name</th>
                            <th>Product Description</th>
                            <th width="150px">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!--Edit Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="modal-title"></h5>
            </div>

            <div class="modal-body">
                <input id="name" type="text" class="form-control" placeholder="Employee's Name">
                <span class="text-danger " id="error_name"></span>

                <input id="email" type="text" class="mt-3 form-control" placeholder="Employee's Email">
                <span class="text-danger " id="error_email"></span>

                <input id="phone" type="text" class="mt-3 form-control" placeholder="Employee's Phone Number">
                <span class="text-danger " id="error_phone"></span>

                <input id="address" type="text" class="mt-3 form-control" placeholder="Employee's Address">
                <span class="text-danger " id="error_address"></span>

                <input id="experience" type="text" class="mt-3 form-control" placeholder="Previous Experience">
                <span class="text-danger " id="error_experience"></span>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">Close</button>
                <button value="" type="button" class="btn btn-sm btn-success" id="btn-save"></button>
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
