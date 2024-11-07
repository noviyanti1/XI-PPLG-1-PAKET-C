<?php
require 'koneksi.php';
$user=$_POST['username'];
$pass=$_POST['password'];
$sql=mysqli_query($conn,"select * from masyarakat where username='$user' and password='$pass' ");
$cek=mysql_num_rows($sql);

if ($cek>0)
{
    $data=mysqli_fetch_array($sql);
    session_start();
    $_SESSION['nama']=$user;
    $_SESSION['nik']=$data['nik'];
    ?>

    <?php
    header('location:masyarakat.php');
>
