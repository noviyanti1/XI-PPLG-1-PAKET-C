<?php
require 'koneksi.php';
$nik=$_POST['nik'];
$nama=$_POST['nama'];
$user=$_POST['username'];
$pass=$_POST['password'];
$telp=$_POST['telp'];

$sql=mysqli_query("insert info masyarakat values('$nik' ,'$nama','$user','$pass','$telp')"); 
if ($sql)
{
    ?>
    <script type="text/javascript">
        alert ('Data Berhasil Disimpan, Silakan Gunakan Untuk Login');
        window.location="index.php";
        </script>
        <?php
}
?>

 
