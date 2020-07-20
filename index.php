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
  <div class="spoljasnji" id="spoljasnji">
    <div class="unutrasnjost">
      <?php include "poruke.php"; ?>
    </div>
  </div>
  <hr>
  <form action="" id="forma">
    <label for="poruka"><?php echo $_SESSION['username'];?></label>
    <input type="text" name="poruka" id="poruka">
    <input type="submit" value="Posalji" id="posalji">
  </form>

  <br><br>
  <form action="odjava.php">
    <input type="submit" value="Odjava">
  </form>

  <script>
    document.getElementById('posalji').addEventListener('click', (e) => {
      let xmlhttp = new XMLHttpRequest();
      let forma = document.getElementById('forma');
      let formData = new FormData(forma);
      xmlhttp.open("POST","dodavanje.php",true);
      xmlhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');
      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200){
          document.getElementById('unutrasnjost').innerHTML = this.responseText;
        }
      }
      xmlhttp.send(formData);
      e.preventDefault();
    });
  </script>
  <script>
    window.onload = function(){
      let objDiv = document.getElementById("spoljasnji");
      objDiv.scrollTop = objDiv.scrollHeight;
    }
  </script>
  

  <!-- <script type="text/javascript">
    // Automatsko osvjezavanje ako se nista ne unosi
    setTimeout(osvjezavanje, 5000);
    function osvjezavanje(){
      let unos = document.getElementById('poruka').value;
      if(unos.length == 0) location.reload(true);
    }
  </script> -->
</body>