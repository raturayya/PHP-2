<?php 
include 'koneksi.php';
?>
 
<h3>Cari Siswa</h3>
 
<form action="cari.php" method="get">
 <label>Cari :</label>
 <input type="text" name="cari">
 <input type="submit" value="Cari">
</form>
 
<?php 
if(isset($_GET['cari'])){
 $cari = $_GET['cari'];
 echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>
 
<table border="1">
 <tr>
  <th>ID Siswa</th>
  <th>NIS</th>
  <th>Nama Siswa</th>
  <th>Alamat</th>
  <th>Jenis Kelamin</th>
 </tr>
 <?php 
 if(isset($_GET['cari'])){
  $cari = $_GET['cari'];
  $data = mysqli_query($conn,"select * from buku where nama_siswa like '%".$cari."%'");    
 }else{
  $data = mysqli_query($conn,"select * from buku");  
 }
 $no = 1;
 while($d = mysqli_fetch_array($data)){
 ?>
 <tr>
  <td><?php echo $d['id_siswa']; ?></td>
  <td><?php echo $d['nis']; ?></td>
  <td><?php echo $d['nama_siswa']; ?></td>
  <td><?php echo $d['alamat']; ?></td>
  <td><?php echo $d['jenis_kelamin']; ?></td>
 </tr>
 <?php } ?>
</table>