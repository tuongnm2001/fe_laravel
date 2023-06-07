<div class="modal fade" tabindex="-1" id="deleteModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ url('users/delete') }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h3 class="modal-title">Delete User</h3>

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                    <!--end::Close-->
                </div>

                <div class="modal-body">
                    <input hidden name="user_delete_id" id="user_id"> 
                    <p>Are you sure want to delete?</p>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>          
            </form>
        </div>
    </div>
</div>