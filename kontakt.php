<!DOCTYPE html>
<html>
<head>
	<title>American Experience</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "american_experience";

    $konekcija = mysqli_connect($servername, $username, $password, $dbname);

    IF(ISSET($_POST['POSALJI'])){
        $insert_query = "INSERT INTO kontakt (ime, prezime, email, telefon, textarea)
        VALUES ('".$_POST['IME']."', '".$_POST['PREZIME']."','".$_POST['EMAIL']."','".$_POST['TELEFON']."','".$_POST['TEXTAREA']."')";
        $rezultat_insert = mysqli_query($konekcija, $insert_query);
    }
?>
	<div class="menu">
		<ul>
			<li><a href="index.html"> Home </a></li>
			<li><a href="about.html"> About </a></li>
			<li><a href="gallery.html"> Gallery </a></li>
			<li><a href="kontakt.php"> Contact </a></li>
			<li><a href="profile.html"> Profile </a></li>
		</ul>
	</div>

	<div class="forma">
		<form method="post" action="kontakt.php">	
			<p class="contact-text"> Feel free to contact us </p>
			<input type="text" placeholder="Name" name="IME">
			<input type="text" placeholder="Lastname" name="PREZIME">
			<input type="email" placeholder="E-mail" name="EMAIL">
			<input type="text" placeholder="Phone Number" name="TELEFON">

			<textarea name="TEXTAREA" placeholder="Please leave your message here:"></textarea> <br>

			<input type="submit" value="SEND" name="POSALJI" onclick="alert(a)"> 
		</form>
	</div>
	<script>
		'use strict';

		let a = "Form has been sent to us.";
	</script>
</body>
</html>