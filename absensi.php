<!DOCTYPE html>
<html>
<head>
    <title>Absensi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');

.container
{
    padding: 45px;
    margin-left: auto;
    margin-right: auto;
    margin-top: 2px;
    border-radius: 20px;
}

h3
{
  font-size: 40px;
  text-align: center;
  margin-top: 20px;
  margin-bottom: 20px;
  font-family:'Montserrat',sans-serif;
  color: #ffffffff;
}

h4
{
  font-size: 20px;
  text-align: center;
  font-family:'Montserrat',sans-serif;
}

</style>


<body style="background-image: url(background3.jpg);">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand font-weight-bold" href="index.php">MyConverter</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="konversi.php">Convert</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="aksi_logout.php">Logout</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">°C °F</a>
            </li>
          </ul>
        </div>
      </nav> <br> <br>

      <!-- Tabel -->
      <div class="container">
      <h3>Daftar Mahasiswa</h3>
      <a href="tambah.php"> <h4>Tambah Mahasiswa</h4> </a>
      <table class="table table-striped table-dark" class="center">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nim</th>
      <th scope="col">Nama</th>
      <th scope="col">Gender</th>
      <th scope="col">Alamat</th>
      <th scope="col">Opsi</th>
    </tr>
  </thead>
  <!-- Menampilkan data mahasiswa -->
       <?php
        include_once 'koneksi.php';
          $no=1;
          $data=mysqli_query($koneksi, "select * from mahasiswa");
          while ($d=mysqli_fetch_array($data))
          {
            ?>
              <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $d['nim']; ?></td>
                  <td><?php echo $d['nama']; ?></td>
                  <td><?php echo $d['gender']; ?></td>
                  <td><?php echo $d['alamat']; ?></td>
                  <td>
                      <a href="edit.php ?nim=<?php echo $d['nim'];?>">Edit</a>
                      <a href="hapus.php ?nim=<?php echo $d['nim'];?>"> Hapus</a>
                  </td>
                  </td>
              </tr>

            <?php
          }
       ?>
    
  <!-- Menampilkan data mahasiswa -->
</table>
      </div>
      
</html>