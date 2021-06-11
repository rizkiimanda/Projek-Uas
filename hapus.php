<!DOCTYPE html>
<html>
<head>
    <title>Absensi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

    <?php
        if(isset($_GET['nim'])){
            include('koneksi.php');
            $nim    = $_GET['nim'];
            $cek    = mysqli_query($koneksi, "select nim from mahasiswa
            where nim = '$nim'") or die(mysqli_error());

            if(mysqli_num_rows($cek)==0)
            {
                echo "<script>window.history.back()</script>";
            }
            else
            {
                $del = mysqli_query($koneksi, "delete from mahasiswa where nim = '$nim'");
                if ($del)
                {
                    echo "<h3>data mahasiswa berhasil dihapus</h2>";
                    echo "<script>window.location = 'absensi.php';</script>";
                }
                else
                {
                    echo "<h2>gagal menghapus data</h2>";
                    echo "<a href = 'absensi.php'>kembali </a>";
                }
            }

        }
        else
        {
            echo "<script>window.history.back()</script>";
        }
    ?>

<body>

</body>

</html> 