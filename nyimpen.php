<?php

$inputanTxt = $_POST['inputan'];

if ($inputanTxt == "") {
	header('Location: /tryvelab/ceritaku');
	echo "Maaf, silahkan tuliskan sesuatu terlebih dahulu di kotak yang disediakan.";
} else {
	$filenya = fopen("output.txt", "a");
	fputs($filenya, $inputanTxt."\n");
	fputs($filenya, "-----------------------------------------------------\n");

	echo "Selamat, pesan anda sudah tersimpan.";
	include "index.php";
}

?>