<?php
error_reporting(0);
require("config.php");
require("classes/block_io.php");
require("classes/gateway.php");
?>
<html>
	<head>
		<title>Bitcoin Gateway Example</title>
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="assets/css/gateway.css" rel="stylesheet" type="text/css">
		<script src="assets/js/jquery-2.1.1.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/gateway.js"></script>
	</head>
	<body>
		<div class="container" style="margin:0 auto;padding:20px;">
			<div class="row">
				<div class="col-sm-3 col-md-3 col-lg-3"></div>
				<div class="col-sm-6 col-md-6 col-lg-6">
				<?php
				$box = new BtcGateway();
				echo $box->create_payment_box("0.00012");
				?>
				</div>
				<div class="col-sm-3 col-md-3 col-lg-3"></div>
			</div>
		</div>
	</body>
</html>