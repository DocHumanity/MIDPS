<?php
$conectare = mysqli_connect('localhost','root','','autentificare');
if (!$conectare) {
    printf("Conectarea la baza de date nu a reusit: %s\n", mysqli_connect_error());
    exit();
}
printf("Conectare reusita");
?>