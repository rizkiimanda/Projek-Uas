<?php
    session_start();
    session_destroy();
    echo"<script> alert('Terima Kasih dan Sampai Jumpa Lagi'); location='login.php'</script>";
?>