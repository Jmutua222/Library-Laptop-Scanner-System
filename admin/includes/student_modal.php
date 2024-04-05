<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Add New Student</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="student_add.php">
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Name</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="adm" class="col-sm-3 control-label">Admission</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="adm" name="adm" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="course" class="col-sm-3 control-label">Course</label>

                    <div class="col-sm-9">
                      <select class="form-control" id="course" name="course" required>
                        <option value="" selected>- Select -</option>
                        <?php
                          $sql = "SELECT * FROM course";
                          $query = $conn->query($sql);
                          while($row = $query->fetch_array()){
                            echo "
                              <option value='".$row['id']."'>".$row['code']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="model" class="col-sm-3 control-label">Laptop Model</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="model" name="model" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="barcode" class="col-sm-3 control-label">Laptop Barcode</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="barcode" name="barcode" required>
                    </div>
                </div>
                <!--
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Photo</label>

                    <div class="col-sm-9">
                      <input type="file" id="photo" name="photo">
                    </div>
                </div>
                        -->
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Save</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit -->
<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title"><b>Edit Student</b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="student_edit.php">
                    <input type="hidden" class="studid" name="id">
                    <div class="form-group">
                        <label for="edit_name" class="col-sm-3 control-label">Full Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_name" name="name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="edit_adm" class="col-sm-3 control-label">Admission</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_adm" name="adm">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="edit_model" class="col-sm-3 control-label">Laptop Model</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_model" name="model">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="edit_barcode" class="col-sm-3 control-label">Laptop Barcode</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_barcode" name="barcode">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="course" class="col-sm-3 control-label">Course</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="course" name="course" required>
                                <option value="" selected disabled>Select Course</option>
                                <?php
                                $sql = "SELECT * FROM course";
                                $query = $conn->query($sql);
                                while($row = $query->fetch_array()){
                                    echo "<option value='".$row['id']."'>".$row['code']."</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal">
                            <i class="fa fa-close"></i> Close
                        </button>
                        <button type="submit" class="btn btn-success btn-flat" name="edit">
                            <i class="fa fa-check-square-o"></i> Update
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<!-- Delete -->
<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Deleting...</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="student_delete.php">
                <input type="hidden" class="studid" name="id">
                <div class="text-center">
                    <p>DELETE STUDENT</p>
                    <h2 class="del_stu bold"></h2>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i> Delete</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Update Photo -->
<div class="modal fade" id="edit_photo">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b><span class="del_stu"></span></b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="student_edit_photo.php" enctype="multipart/form-data">
                <input type="hidden" class="studid" name="id">
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Photo</label>

                    <div class="col-sm-9">
                      <input type="file" id="photo" name="photo" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="upload"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>


     