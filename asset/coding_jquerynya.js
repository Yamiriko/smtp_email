var reset_inputan = function(){
	$("#ke").val(null);
	$("#subjek").val(null);
	$("#isi").val(null);
	$("#ke").focus();
}

var proses_kirim = function(ke,subjek,isi){
	var urlbro = "proses.php";
	if ((ke != '') && (subjek != '') && (isi != '')){
		var fd = new FormData();
		fd.append("ke", ke);
		fd.append("subjek", subjek);
		fd.append("isi", isi);
		$.ajax({
			type: "POST",
			url: urlbro,
			processData: false,
			contentType: false,
			mimeType: "multipart/form-data",
			data: fd,
			beforeSend:function(){
				{
					$("#status_pengiriman").html("<strong><mark>Mohon Ditunggu...</mark></strong>");
					$("#btn_proses").attr("disabled",true);
					$("#btn_reset").attr("disabled",true);
				}
			},
			error: function(jqXHR, textStatus, errorThrown) {
				{
					$("#status_pengiriman").html(null);
					$("#btn_proses").attr("disabled",false);
					$("#btn_reset").attr("disabled",false);
					
					console.log(fd + "\n" + urlbro + "\n" + jqXHR.status);
					alert("Error Program: " + jqXHR.responseText);
				};
			},
			success: function(response, textStatus, jqXHR) {
				{
					$("#status_pengiriman").html(null);
					$("#btn_proses").attr("disabled",false);
					$("#btn_reset").attr("disabled",false);
					$("#status_pengiriman").html(response);
				};
			}
		});
	}
	else {
		alert("Masih ada inputan yang kosong!.");
	}
}