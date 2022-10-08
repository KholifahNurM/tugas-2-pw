<!DOCTYPE html>
<html>
    <head>
        <title> DAFTAR MAHASISWA</title>
</head>
<body>
    <div class="container">
        <?php 
        function input($data){
            $data= trim($data);
            $data=stripslashes($data);
            $data=htmlspecialchars($data);
            return $data;
        }
        if($_SERVER["REQUEST_METHOD"]=="POSH"){
            
            $no=input($_POST["No"]);
            $NIM=input($POST["NIM"]);
            $Nama=input($POST["Nama"]);
            $Email=input($Post["Email"]);
            $Jurusan=input($Post["Jurusan"]);
            $Fakultas=input($POST["Fakultas"]);

            $sql="insert into anggota(No,NIM,Nama,Email,Jurusan,Fakultas) values
            ('$No,$NIM,$Nama,$Email,$Jurusan,$Fakultas')";
            $hasil=mysqli_query($kon,$sql);
            if($hasil){
                header("location:index.php");
            }
            else{
                echo"<div class='alert alert-danger'> Data Gagal Disimpan.</div>";
            }
        }
        ?>
        <h2>Input Data</h2>

        <form action="<?php echo $_SERVER["PHP_SELF"];?>"method="Post">
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

        <button type="submit" name="Submit" class="btn btn-primary">Submit</button>
    </from>
    </div>
    </body>
    </html>