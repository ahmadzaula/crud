<?php
$id =  $_GET['id'];
$koneksi = mysqli_connect('localhost', 'root', '', 'skincare');

$query = mysqli_query($koneksi, "delete from product where id=$id");
header("Location:index.php");
    
?>