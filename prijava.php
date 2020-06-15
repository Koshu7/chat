<?php

require_once "db.php";

$korisnickoIme = mysqli_real_escape_string($conn, $_POST['korisnicko_ime']);

$query = mysqli_query($conn, "SELECT * FROM korisnik WHERE korisnickoIme='$korisnickoIme';");


if (mysqli_fetch_assoc($query)){
  session_start();
  $_SESSION['username'] = $korisnickoIme;
  $_SESSION['ip_adresa'] = '192.168.0.12';
  header('Location: index.php');
} else {
  ?><script>
    alert('Korisnik <?php echo $korisnickoIme; ?> ne postoji.');
    window.location.assign('prijava.html');  
  </script><?php
}


