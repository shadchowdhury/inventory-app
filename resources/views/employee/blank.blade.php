          <div class="bd bd-gray-300 rounded table-responsive">
            <table class="table mg-b-0">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Position</th>
                  <th>Salary</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Tiger Nixon</td>
                  <td>System Architect</td>
                  <td>$320,800</td>
                </tr>

              </tbody>
            </table>
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
