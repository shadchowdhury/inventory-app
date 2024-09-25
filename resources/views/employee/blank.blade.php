<script>
    $.ajax({
        url: urlDelete,
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
</script>
