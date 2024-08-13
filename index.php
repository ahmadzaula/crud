<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'skincare');

$query = mysqli_query($koneksi, "select * from product");
while($data = mysqli_fetch_array($query)){
    
    echo $data["nama"] . "<br />";
    echo $data["id_kategori"];
    echo "<br />";
?>

<a href="hapus.php?id=<?= $data['id']?>">hapus</a>
<?php
echo "<br />";
}
?>