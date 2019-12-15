<!--
Jean Riko Kurniawan Putra
WA/CALL/Telegram/SMS : 082386944596
Faceebook : https://www.facebook.com/Jean.Riko.K.P
Github : https://github.com/Yamiriko
Email : riko.kurniawan18@yahoo.co.id
-->
<html lang="id">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />    
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />
	<title>SMTP Email | Jean Riko Kurniawan Putra</title>
	
	<!-- Pakai jquery biar bisa tanpa ngeload halaman lainnya saat diproses -->
	<script src="asset/jquery-3.4.1.min.js"></script>
	
	<!-- Pakai Bootstrap Biar Lebih Ganteng -->
	<link rel="stylesheet" href="asset/bootstrap-3.4.0.min.css" />
	<script src="asset/bootstrap-3.4.0.min.js"></script>
	
	<!-- Coding Proses Jquerynya -->
	<script src="asset/coding_jquerynya.js"></script>
</head>
<body >
	<div class="container" style="margin-top:50px;">
		<div class="col-md-6">
			<div class="form-group">
				<label class="control-label">Kirim Ke</label>
				<input type="text" id="ke" class="form-control" placeholder="example@domain.com" autofocus required />
			</div>
			<div class="form-group">
				<label class="control-label">Subjek</label>
				<input type="text" id="subjek" class="form-control" placeholder="Testing SMTP Email" required />
			</div>
			<div class="form-group">
				<label class="control-label">ISI Email</label>
				<textarea type="text" id="isi" class="form-control" placeholder="Ya ini isinya text semuanya" required ></textarea>
			</div>
			<div class="form-group">
				<button type="button" id="btn_proses" class="btn btn-success" onClick='proses_kirim($("#ke").val(),$("#subjek").val(),$("#isi").val());' >Kirim</button>
				&nbsp;
				<button type="button" id="btn_reset" class="btn btn-warning" onClick='reset_inputan();' >Reset</button>
			</div>
			<div class="form-group">
				Status : <span id="status_pengiriman"></span>
			</div>
		</div>
	</div>
</body>
</html>