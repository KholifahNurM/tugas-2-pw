<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class ="container">
        
        <h4>Daftar Mahasiswa</h4>
        <?php
        
        include "koneksi.php";

        if(isset($_GET['id_anggota'])){
            $id_anggota=htmlspecialchars($_Get["id_anggota"]);
            $sql="delete from anggota where id_anggota='$id_anggota'";
            $hasil=mysqli_query($kon,$sql);

            if ($hasil){
                header("location:index.php");
            }
            else {
                echo "<div class='alert alert-danger'>Data Gagal Dihapus.</div>";

            }
        }
        ?>
     <table border="1" cellpadding="10" cellspacing="0">
            
            <thead>
                <tr>
                    <th>No.</th>
                    <th>NIM</th>
                    <th>Nama.</th>
                    <th>Email</th>
                    <th>Jurusan</th>
                    <th>Fakultas</th>
                    <th>Gambar</th>

    </tr>
    <tr>
            <td>1</td>
   
        <td>701210218</td>
        <td>Kholifah Nur Munawaroh</td>
        <td>kholifahnurm@gmail.com</td>
        <td>Sistem Informasi</td>
        <td>Sains dan Teknologi</td>
        <td><img src="img/kholifah.jpg" width="50"></td>
</tr>
<tr>
        <td>2</td>
        <td>701210222</td>
        <td>Kemal Maulana</td>
        <td>kemal@gmail.com</td>
        <td>Teknik Pertambangan</td>
        <td>Sains dan Teknologi</td>
        <td><img src="img/kemal.jpg" width="50"></td>
</tr>
<tr>
        <td>3</td>
        <td>701210223</td>
        <td>Hermalinda Putri</td>
        <td>hermalinda@gmail.com</td>
        <td>Sistem Informasi</td>
        <td>Sains dan Teknologi</td>
        <td><img src="img/hermalinda.jpg" width="50"></td>
</tr>
<tr>
        <td>4</td>
        <td>701210225</td>
        <td>Jefran</td>
        <td>jepran@gmail.com</td>
        <td>Teknik Pertambangan</td>
        <td>Sains dan Teknologi</td>
        <td><img src="img/jepran.jpg" width="50"></td>
</tr>
<tr>
        <td>5</td>
        <td>701210227</td>
        <td>Alertia Mahesa</td>
        <td>alertia@gmail.com</td>
        <td>Sistem Informasi</td>
        <td>Sains dan Teknologi</td>
        <td><img src="img/alertia.jpg" width="50"></td>
</tr>
    </thead>

</table>
<a href="create.php" class="btn btn-primary" role="button">Tambah Data</a>
</div>
</body>
<html>
                    
