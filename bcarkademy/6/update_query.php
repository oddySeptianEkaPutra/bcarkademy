<?php

	require_once 'conn.php';
	
	if(ISSET($_POST['update'])){
		$id_nama = $_POST['id_name'];
		$nama = $_POST['name'];
		$work = $_POST['work'];
		$salary = $_POST['salary'];
		
		$query = mysqli_query($conn, "UPDATE `name` SET `name` = '$nama', `id_work` = '$work', `id_salary` = '$salary' WHERE `id_name` = '$id_nama'") or die(mysqli_error($conn));

		if ($query) {
			echo "<script>
					alert('Data  Berhasil Diupdate')
					window.location='index.php';
				</script>";	
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	}

	mysqli_close($conn);

?>