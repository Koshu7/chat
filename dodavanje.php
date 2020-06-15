<?php

require_once "db.php";
session_start();
if(isset($_SESSION['username'])){
  $poruka = mysqli_real_escape_string($conn, $_POST['poruka']);
  $ip = $_SESSION['ip_adresa'];
  $autor = $_SESSION['username'];

  $query2 = mysqli_query($conn,"SELECT korisnik.id FROM korisnik WHERE korisnickoIme = '$autor';");
  $nikId = mysqli_fetch_assoc($query2)['id'];

  $query = mysqli_query($conn,"INSERT INTO poruka (autor,ip,sadrzaj,korisnikId) VALUES ('$autor','$ip','$poruka','$nikId'); ");
  
  header('Location: index.php');
} else {
  header('Location: prijava.html');
}





