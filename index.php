<?php

session_start();
if(!isset($_SESSION['username'])){
  header('Location: prijava.html');
}
?>

<style>
  <?php include "style.css"; ?> 
</style>

<body onload="document.getElementById('poruka').focus();">
  <form action="dodavanje.php" method="POST">
    <div contenteditable="true"><?php include_once "poruke.php";?></div>
    <hr>
    <label for="poruka"><?php echo $_SESSION['username'];?></label>
    <input type="text" name="poruka" id="poruka">
    <input type="submit" value="Posalji">
  </form>

  <br><br>
  <form action="odjava.php">
    <input type="submit" value="Odjava">
  </form>
</body>