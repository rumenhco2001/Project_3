<link rel="stylesheet" href="style.css" type="text/css">
<?php
if (!empty($_POST)) {
	$text = $_POST['text'];
$R = substr("$text", -6, 2 );
$G = substr("$text", -4, 2);
$B = substr("$text",  4 );
$R_hex=hexdec($R);
	echo '<p>' . "R = " . $R_hex . '</p>';
$G_hex=hexdec($G);
	echo '<p>' . "G = " . $G_hex . '</p>';
$B_hex=hexdec($B);
	echo '<p>' . "B = " . $B_hex . '</p>';
if ($G_hex>$R_hex && $G_hex>$B_hex) {
	echo '<h2>' . "Диана, тази рокля е за теб, защото тя е повече зелена, отколкото червена или синя! =) " . '</h2>' ;
	?>
			<html>
	 	<img src='happy.png' alt='Happy emoji' />
			 </html>
	 <?php
}
else{
	echo '<h2>' . "Диана, за съжаление - тази рокля не е за теб, защото тя съдържа повече червено и синьо, отколкото зелено! :( " . '</h2>' ;
	?>
			<html>
		 <img src='sad.png' alt='Sad emoji' />
			 </html>
	 <?php
	}
?>
			<html>
	<h3> <a href="form.html"> Начало </a> </h3>
			</html>
<?php
}
?>