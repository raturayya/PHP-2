<?php
    include './koneksi.php';

    $id_siswa = $_GET['id_siswa'];

    $sql = "DELETE FROM BUKU WHERE id_siswa='$id_siswa'";

    if($conn->query($sql) === TRUE){
        echo "data berhasil dihapus<br>";
        echo "<a href='tampil.php'>Kembali</a><br>";
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

?>