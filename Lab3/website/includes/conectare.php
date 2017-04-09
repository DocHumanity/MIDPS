<?php
$conectare = mysqli_connect('localhost','root','','autentificare');
if($conectare->connect_error)
{
	die("Conectarea la baza de date nu a reusit" . $conectare->connect_error);
}
echo "Conectare reusita";	
?>