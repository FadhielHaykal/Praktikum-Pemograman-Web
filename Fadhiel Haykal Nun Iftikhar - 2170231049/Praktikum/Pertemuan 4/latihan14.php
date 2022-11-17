<?php
if (empty($_POST['nama'])) {
    header("Location:latihan15.php");
} else {
    echo "<center>Nama :".$_POST['nama']."</center><br>";
}
?>