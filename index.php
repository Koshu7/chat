<?php

session_start();
if(!isset($_SESSION['username'])){
  header('Location: prijava.html');
}

echo $_SERVER['REMOTE_ADDR'];
?>

<style>
  <?php include "style.css"; ?> 
</style>

<body onload="document.getElementById('poruka').focus();">
  <form action="dodavanje.php" method="POST">
    <div contenteditable="true" class="spoljasnji"><div class="unutrasnjost"><?php include_once "poruke.php";?></div></div>
    <hr>
    <label for="poruka"><?php echo $_SESSION['username'];?></label>
    <input type="text" name="poruka" id="poruka">
    <input type="submit" value="Posalji">
  </form>

  <br><br>
  <form action="odjava.php">
    <input type="submit" value="Odjava">
  </form>

  <!-- <script type="text/javascript">
    // Automatsko osvjezavanje ako se nista ne unosi
    setTimeout(osvjezavanje, 5000);
    function osvjezavanje(){
      let unos = document.getElementById('poruka').value;
      if(unos.length == 0) location.reload(true);
    }
  </script> -->
</body>