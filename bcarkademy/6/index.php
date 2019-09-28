<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="icon" href="images/logo.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <title>Bootcamp Arkademy</title>
</head>

<body>
    <!-- Top Navbar -->
    <div class="d-flex align-items-center" style="box-shadow: 0 0 10px 3px;">
        <a href="#" class="navbar-brand">
            <img src="images/logo.png" alt="" width="120">
        </a>

        <p class="font-weight-bold mt-3 ml-3" style="font-size: 25px; font-family: Helvetica;">Arkademy Bootcamp</p>

        <div class="ml-auto p-2 ">
            <button type="button" class="btn btn-warning font-weight-bold" data-toggle="modal" data-target="#add_data">ADD</button>
        </div>
    </div>
    <!-- End of Top Navbar -->

    <!-- Table Contained -->
    <div class="container-fluid mt-5">
        <div class="row justify-content-center">
            <div class="col-sm-6 bg-light py-4" style="border-radius: 10px;">
                <table class="table table-bordered">
                    <thead style="font-family: Helvetica; background-color: lightgray;">
                        <tr>
                            <th class="text-center">Name</th>
                            <th class="text-center">Work</th>
                            <th class="text-center">Salary</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody style="background-color: #fff;">
				<?php
					require 'conn.php';
					$query = mysqli_query($conn, "SELECT * FROM work JOIN name  ON work.id_work=name.id_work JOIN category ON name.id_salary=category.id_salary ORDER BY id_name") or die(mysqli_error($conn));
					while($fetch = mysqli_fetch_array($query)){
				?>
				<tr>
					<td><?php echo $fetch['name']?></td>
					<td class="text-center"><?php echo $fetch['name_work']?></td>
					<td class="text-center"><?php echo $fetch['salary']?></td>
					<td class="text-center">
					<a class="btn btn-danger btn-flat btn-xs" data-toggle="modal" data-target="#delete_user<?php echo $fetch['id_name']?>"><i class="fa fa-trash"></i></a>
					<a class="btn btn-primary btn-flat btn-xs" data-toggle="modal" data-target="#update_modal<?php echo $fetch['id_name']?>"><i class="fa fa-edit"></i></a>
					
				</tr>
				<?php
					include 'delete_user.php';
					include 'update_user.php';
					
					}
				?>
			</tbody>
		</table>
	</div>

	<!-- Modal Add Data -->
	<div class="modal fade" id="add_data" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<form method="POST" action="save_user.php">
					<div class="modal-header">
						<h3 class="modal-title">Add Data</h3>
					</div>
					<div class="modal-body">
						<div class="col-md-12">
							<div class="form-group">
								<label>Nama</label>
								<input type="text" name="name" class="form-control" required="required"/>
							</div>
							<div class="form-group">
								<label for="work">work</label>
								<select name="work" class="form-control">
									<?php
									$sql_work = mysqli_query($conn, "SELECT * FROM work") or die (mysqli_error($conn));
									while ($work = mysqli_fetch_array($sql_work)) {
										echo '<option value="'.$work['id_work'].'">'.$work['name_work'].'</option>';
									}
									?>
								</select>
							</div>
							<div class="form-group">
								<label>Salary</label>
								<select name="salary" class="form-control">
									<?php
										$sql_kategori = mysqli_query($conn, "SELECT * FROM category") or die (mysqli_error($conn));
										while ($kategori = mysqli_fetch_array($sql_kategori)) {
											echo '<option value="'.$kategori['id_salary'].'">'.$kategori['salary'].'</option>';
										}
										?>
								</select>
							</div>
					</div>
					<div style="clear:both;"></div>
					<div class="modal-footer">
						<button name="save" class="btn btn-success"><span class="glyphicon glyphicon-save"></span> Save</button>
						<button class="btn btn-danger" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
					</div>
					</div>
				</form>
			</div>
		</div>
	</div>	
	<!-- End of Modal Add User  -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js'></script>
<script>  
</body>	
</html>