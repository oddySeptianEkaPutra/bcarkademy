<!-- modal delete -->
    <div class="example-modal">
      <div id="delete_user<?php echo $fetch['id_name']; ?>" class="modal fade" role="dialog" style="display:none;">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title">Delete Data</h3>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
              <h5 align="center" >Hapus <?php echo $fetch['name'];?><strong><span class="grt"></span></strong> ?</h5>
            </div>
            <div class="modal-footer">
              <a href="function_user.php?act=delete_user&id=<?php echo $fetch['id_name']; ?>" class="btn btn-success">Delete</a>
              <button id="nodelete" type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cancel</button>
            </div>
          </div>
        </div>
      </div>
    </div>
<!-- End of modal delete -->