<div class="modal fade" id="update_modal<?php echo $fetch['id_name']?>" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" action="update_query.php">
				<div class="modal-header">
					<h3 class="modal-title">Update Data</h3>
				</div>
				<div class="modal-body">
					<!-- <div class="col-md-2"></div> -->
					<div class="col-md-12">
						<div class="form-group">
							<label>Nama</label>
							<input type="hidden" name="id_name" value="<?php echo $fetch['id_name']?>"/>
							<input type="text" name="name" value="<?php echo $fetch['name']?>" class="form-control" required="required"/>
						</div>
						<div class="form-group">
						<label>Work</label>
							<select name="work" class="form-control">
                            <?php
                                $sql_work = mysqli_query($conn, "SELECT * FROM work") or die (mysqli_error($conn));
                                while ($data_work = mysqli_fetch_array($sql_work)) {
                                    echo '<option value="'.$data_work['id_work'].'" '.($data_work['id_work'] == $data['name_work'] ? " selected" : "").'>'.$data_work['name_work'].'</option>';
                                }
                                ?>
                        </select>
						</div>
						<div class="form-group">
							<label>Salary</label>
							<select name="salary" class="form-control">
                        <?php
                                $sql_salary = mysqli_query($conn, "SELECT * FROM category") or die (mysqli_error($conn));
                                while ($data_salary = mysqli_fetch_array($sql_salary)) {
                                    echo '<option value="'.$data_salary['id_salary'].'" '.($data_salary['id_salary'] == $data['salary'] ? " selected" : "").'>'.$data_salary['salary'].'</option>';
                                }
                                ?>
                        </select>
						</div>
					</div>
				</div>
				<div style="clear:both;"></div>
				<div class="modal-footer">
					<button name="update" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-edit"></span>Save</button>
					<button class="btn btn-danger btn-xs" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>Cancel</button>
				</div>
				</div>
			</form>
		</div>
	</div>
</div>