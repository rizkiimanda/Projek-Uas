<!DOCTYPE html>
<html>
<head>
    <title>Absensi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<style>
 @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');
        .center{
            margin-left: auto;
            margin-right: auto;
            margin-top: 130px;
        }
        .box{
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 20px;
        }
        h1,td{
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
</style>

<body style="background-image: url(background3.jpg);">
    <form action="tambah_proses.php" method="post">
        <table class="center box">
            <tr>
                <td>
                    <h1>Absensi</h1>
                </td>
            </tr>            
            <tr>
                <td>
                    <label>Nim</label><br>
                    <input type="number" name="nim" required class="round"><br>
            </tr>
            <tr>
                <td>
                    <label>Nama</label><br>
                    <input type="text" name="nama" required class="round">
                </td> 
            </tr>
            <tr>
                <td>
                    <label>Gender</label><br>
                    <select name="gender" required>
                        <option>-Pilih-</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Alamat</label><br>
                    <input type="text" name="alamat" required class="round">
                </td>
            </tr>
            <tr>
                <td><input class="warna" type="submit" name="tambah" value="Tambah"> </td>
            </tr>
        </table>
    </form>        
</body>

</html>