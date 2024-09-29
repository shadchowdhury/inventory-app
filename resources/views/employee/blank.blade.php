<script>
    //Update Employee
    jQuery(document).on("click", ".updateEmployee", function(e) {
        var id = jQuery(this).val();

        var updateUrl = '{{route("employees.update", ":id")}}';
        updateUrl = updateUrl.replace(":id", id);

        console.log(updateUrl);
    });


    var updateUrl = '{{route("employees.update", ":id")}}';
            updateUrl = updateUrl.replace(":id", id);

            console.log(updateUrl);
</script>
