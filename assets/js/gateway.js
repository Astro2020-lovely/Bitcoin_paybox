function btc_gateway_update_status(boxID) {
	var payment_div = $("#PaymentStatus_"+boxID);
	var data_url = "bitcoin_ipn.php";
	$.ajax({
		type: "GET",
		url: data_url,
		dataType: "html",
		success: function (data) {
			payment_div.html(data);
		}
	});
}

function ltc_gateway_update_status(boxID) {
	var payment_div = $("#PaymentStatus_"+boxID);
	var data_url = "litecoin_ipn.php";
	$.ajax({
		type: "GET",
		url: data_url,
		dataType: "html",
		success: function (data) {
			payment_div.html(data);
		}
	});
}

function doge_gateway_update_status(boxID) {
	var payment_div = $("#PaymentStatus_"+boxID);
	var data_url = "dogecoin_ipn.php";
	$.ajax({
		type: "GET",
		url: data_url,
		dataType: "html",
		success: function (data) {
			payment_div.html(data);
		}
	});
}