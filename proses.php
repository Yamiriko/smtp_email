<?php
//masukkan fungsi pengiriman emailnya
require "smtpnya/pengirim_email.php";

//Menangkap inputannya
$ke = (isset($_POST['ke']))? $_POST['ke'] : null;
$subjek = (isset($_POST['subjek']))? $_POST['subjek'] : null;
$isi = (isset($_POST['isi']))? $_POST['isi'] : null;

if ((!empty($ke)) AND (!empty($subjek)) AND (!empty($isi))){
	$pengirim = "Riko Software";
	echo kirimemail_satu($subjek,$ke,$pengirim,$isi);
}
else {
	echo "Inputannya kosong.";
}
?>