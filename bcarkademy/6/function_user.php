<?php
    include 'conn.php';
    
    $id = $_GET['id'];

    $query = "DELETE FROM name WHERE id_name = '$id'"; // query hapus data

    if(mysqli_query($conn, $query)){
        echo "<script>
                alert('Data Berhasil Dihapus')
                window.location='index.php';
            </script>";	
    }else{
        echo "Hapus data gagal";
    }
?>