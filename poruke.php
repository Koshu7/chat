<?php
if(!isset($_SESSION['username'])){
  header('Location: prijava.html');
}
require_once "db.php";

$query = mysqli_query($conn,"SELECT * FROM poruka");


while ($rezultat = mysqli_fetch_assoc($query)){
  $vrijeme = $rezultat['vrijeme'];
  $sadrzaj = $rezultat['sadrzaj'];
  $autor = $rezultat['autor'];
  ?>
  <p><b><?php echo $autor;?></b> [<?php echo $vrijeme;?>]: <?php echo $sadrzaj;?></p>
<?php }?>