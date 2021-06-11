<!DOCTYPE html>
<html>
<head>
    <title>Absensi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<style>
     @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');
        .center{
            padding: 100px;
            margin-left: auto;
            margin-right: auto;
            margin-top: 130px;
        }
        .box{
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 20px;
        }
        .round{
            border-radius: 5px;
            border: none;
        }
        .warna{
            margin-bottom: 20px;
            margin-top: 10px;
            background-color: rgb(0, 77, 128);
            border: none;
            color: #ffffffff;
            font-family:'Montserrat',sans-serif;
        }
        input{
            padding: 5px 5px;
            margin-bottom: 10px;
            margin-left: 50px;
            margin-right: 50px;
            font-family:'Montserrat',sans-serif;
        }
        label,select{
            margin-left: 50px;
        }
        h1,label{
            color: #ffffffff;
            font-family:'Montserrat',sans-serif;
        }
        input, select{
            margin-bottom: 5px;
            font-family:'Montserrat',sans-serif;
        }
        h1{
            font-size: 40px;
            text-align: center;
            margin-top: 10px;
        }

</style>
<body style="background-image: url(background3.jpg);">
    <!-- edit data mahasiswa -->
        <?php
            include('koneksi.php');
            $nim = $_GET['nim'];
            $show = mysqli_query($koneksi, "select * from mahasiswa where nim = '$nim'");
            if(mysqli_num_rows($show) == 0)
            {
                echo '<script>window.history.back()</script>';
            }
            else
            {
                $d = mysqli_fetch_assoc($show);
            }
        ?>
    <!-- edit data mahasiswa -->
        <form action="edit_proses.php" method="post">
            <input type="hidden" name="nim" value="<?php echo $nim; ?>">
            <table class="center box">
                <tr>
                    <td>
                        <h1>Edit Data</h1>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Nama Lengkap</label><br>
                        <input class="round" type="text" name="nama" size="33" value="<?php echo $d['nama']; ?>" required>
                    </td> 
                </tr>
                <tr>
                    <td>
                        <label>Gender</label><br>
                        <select name="gender" required>
                            <option value="">Pilih</option>
                            <option value="Laki-laki"><?php if($d['gender'] == 'Laki-laki') ?>Laki-laki</option>
                            <option value="Perempuan"><?php if($d['gender'] == 'Perempuan') ?>Perempuan</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Alamat</label><br>
                        <input class="round" type="text" name="alamat" size="33" value="<?php echo $d['alamat'];?>" required>
                    </td> 
                </tr>
                <tr>
                    <td><input class="warna" type="submit" name="simpan" value="Simpan"></td>
                </tr>
            </table>
</body>
</html>
