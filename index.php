<?php

session_start();
if(!isset($_SESSION['username'])){
  header('Location: prijava.html');
}
?>

<body>
  <form action="dodavanje.php" method="POST">
    <textarea name="sadrzaj" id="sadrzaj" cols="50" rows="10"></textarea>
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