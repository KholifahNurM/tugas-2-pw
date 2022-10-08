<!DOCTYPE html>
<html>
    <head>
        <title>From Pendaftaran Anggota</title>
</head>
<body>
    <div class="container";
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
            echo "<div class='alert alert-danger'>Data Gagal Update.</div>";

        }
    }
    ?>
        <h3>Update Data</h3>
     
        <div class="form-group">
            <label>No.</label>
            <input type="text" name="No." class="form-control" placeholder="Masukan No" required/>;
        </div>

        <div class="form-group">
            <label>NIM</label>
            <input type="text" name="NIM" class="form-control" placeholder="Masukan NIM" required/>;
        </div>

        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="Nama" class="form-control" placeholder="Masukan Nama"require/>;
        </div>


        <div class="form-group">
            <label>Email</label>
            <input type="text" name="Email" class="form-control" placeholder="Masukan Email"require/>;
        </div>

        <div class="form-group">
            <label>Jurusan</label>
            <input type="text" name="Jurusan" class="form-control" placeholder="Masukan Jurusan"require>;
        </div>
        
        <div class="form-group">
            <label>Fakultas</label>
            <input type="text" name="Fakultas" class="form-control" placeholder="Masukan Fakultas"require/>;
        </div>

        <div class="form-group">
            <label>Gambar</label>
            <input type="<img src="" width="50">" name="Gambar" class="form-control" placeholder="Masukan Gambar" require/>;
        </div>
        <button type="submit" name="Submit" class="btn btn-primary">Submit</button>
    </from>
    </div>
    </body>
    </html> 
