<?php
    include './koneksi.php';

    $nis = $_POST['nis'];
    $nama_siswa = $_POST['nama_siswa'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $id_jurusan = $_POST['id_jurusan'];
    
    $sql = "INSERT INTO buku (nis, nama_siswa,jenis_kelamin,alamat,id_jurusan) VALUES ('$nis','$nama_siswa','$jenis_kelamin','$alamat','$id_jurusan')";
    if($conn->query($sql) === TRUE){
        echo "simpan berhasil <br>";
        echo "<a href='formulir.php'>Kembali</a><br>";
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

?>