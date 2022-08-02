<?php

$dbh = new PDO('mysql:host=localhost;dbname=sekolah', 'root', '');
$query = $dbh->query("select * from tbl_siswa");


?>
<h1>Data Siswa</h1>
<?php while($result = $query->fetch()){ ?>
        <p><?= $result['Nama_Siswa'];?>
<?php  } ?>