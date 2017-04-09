<?php
require 'conectare.php';
if(!empty($_POST['Nume'])  && !empty($_POST['Prenume']) && !empty($_POST['Username']) && !empty($_POST['Password']) 
	&& isset($_POST['Nume'])&& isset($_POST['Prenume']) && isset($_POST['Username']) && isset($_POST['Password']))
{
$nume= $_POST['Nume'];
$prenume= $_POST['Prenume'];
$username= $_POST['Username'];
$password= $_POST['Password'];
$result = mysqli_query($conectare,$sql);
$check=mysqli_num_rows($result);	
$sql = "INSERT INTO users (Nume,Prenume,Username,Password) VALUES ('$Nume','$Prenume','$Username','$Password')";
$result=mysqli_query($conectare,$sql);
}
 
?>