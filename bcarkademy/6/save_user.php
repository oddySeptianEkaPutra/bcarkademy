<?php
	
	require_once 'conn.php';
	
	if(isset($_POST['save'])){
		$nama	= trim($_POST['name']);
		$work	= trim($_POST['work']);
        $salary	= trim($_POST['salary']);
        
        $query= "INSERT INTO name (name,id_work,id_salary) VALUES('$nama','$work','$salary')";

        $sql = mysqli_query($conn, $query);
        
		if ($sql) {
			echo "<script>
					alert('Data berhasil ditambah')
					window.location='index.php';
				</script>";	
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	}

	mysqli_close($conn);

?>