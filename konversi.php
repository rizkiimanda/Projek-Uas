<!DOCTYPE html>
<html>
<head>
    <title>Convert</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<script src="script.js"></script>
<style>
     @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');

        button{
            margin-bottom: 20%;
            margin-top: 5px;
            padding: 7px 14px;
            background-color: rgb(0, 77, 128);
            border: none;
        }
        h1{
            font-size: 40px;
            text-align: center;
            margin-top: 20px;
            margin-bottom: 20px;
        }
        label, h1, a, button, footer
        {
            color: #ffffffff;
            font-family:'Montserrat',sans-serif;
        }
        table{
            padding: 20px;
        }
        input
        {
            padding: 7px 7px;
            margin-bottom: 10px;
            font-family:'Montserrat',sans-serif;
        }
        .container
        {
            width: fit-content;
            margin-left: auto;
            margin-right: auto;
            margin-top: 100px;
            margin-bottom: 100px;
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 20px;
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
      </nav>
    <div class="container">
        <table class="center box">
            <tr>
                <td>
                    <h1>MyConverter</h1>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Celcius</label><br>
                    <input type="text" class="form-control" id="celcius" placeholder="Input here">
                    <button type="button" class="btn btn-primary mt-3" onclick="fah()"> Convert</button><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Fahrenheit</label><br>
                    <input type="text" class="form-control" id="fahrenheit" placeholder="Input here">
                    <button type="button" class="btn btn-success mt-3" onclick="cel()"> Convert</button><br>
                </td>
            </tr>
        </table>
    </div>
</body>