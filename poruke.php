<?php
if(!isset($_SESSION['username'])){
  header('Location: prijava.html');
}
require_once "db.php";

$query = mysqli_query($conn,"SELECT * FROM (SELECT * FROM poruka ORDER BY id DESC LIMIT 20) poruka ORDER BY id;");


while ($rezultat = mysqli_fetch_assoc($query)){
  $vrijeme = $rezultat['vrijeme'];
  $sadrzaj = $rezultat['sadrzaj'];
  $autor = $rezultat['autor'];
  ?>
  <p><b><?php echo $autor;?></b> [<?php echo $vrijeme;?>]: <?php echo $sadrzaj;?></p>
<?php }?>