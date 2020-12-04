<?php
class BtcGateway {
	private $gateway;
	
	function randomHash($lenght = 7) {
		$random = substr(md5(rand()),0,$lenght);
		return $random;
	}
	
	function create_payment_box($amount) {
		global $gateway;
		if (session_status() == PHP_SESSION_NONE) {
			session_start();
		}
		$boxID = $this->randomHash(15);
		$_SESSION['btc_boxID'] = $boxID;
		$_SESSION['btc_address'] = $gateway['bitcoin_address'];
		$_SESSION['btc_amount'] = $amount;
		$address = $gateway['bitcoin_address'];
		$box = '<div class="panel panel-default" id="PaymentBox_'.$_SESSION[btc_boxID].'">
			<div class="panel-body">
				<div class="row">
					<div class="col-sm-12 col-md-12 col-lg-12">
						<h3><span class="text text-warning"><img src="assets/imgs/Bitcoin.png" width="32px" height="32px"></span> Bitcoin Payment Box</h3>
					</div>
					<div class="col-sm-4 col-md-4 col-lg-4">
						'.$this->QRCode().'
					</div>
					<div class="col-sm-8 col-md-8 col-lg-8" style="padding:10px;">
						Send <b>'.$amount.' BTC</b><br/><input type="text" id="address_'.$_SESSION[btc_boxID].'" class="form-control" value="'.$address.'">
						or scan QR Code with your mobile device<br/><br/>
						<small>Do not refresh page, payment status will be updated automatically.</small>
					</div>
					<div class="col-sm-12 col-md-12 col-lg-12">
						<center><span id="PaymentStatus_'.$_SESSION[btc_boxID].'"></span></center>
						<input type="hidden" id="payment_boxID" value="'.$_SESSION[btc_boxID].'">
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript">
		$("#address_'.$_SESSION[btc_boxID].'").focus(function() {
		   $(this).select();
		});
		function updatePaymentStatus() {
			btc_gateway_update_status("'.$_SESSION[btc_boxID].'");
		}
		setInterval(updatePaymentStatus,3000);
		</script>';
		return $box;
	}
	
	function QRCode() {
		global $gateway;
		$address = $_SESSION['btc_address'];
		$amount = $_SESSION['btc_amount']; 
		return '<img src="https://chart.googleapis.com/chart?chs=500x500&cht=qr&chl=bitcoin:'.$address.'?amount='.$amount.'&choe=UTF-8" class="img-responsive">';
	}
	
	function StdClass2array($class) {
		$array = array();

		foreach ($class as $key => $item)
		{
				if ($item instanceof StdClass) {
						$array[$key] = StdClass2array($item);
				} else {
						$array[$key] = $item;
				}
		}

		return $array;
	}
}

class LtcGateway {
	private $gateway;
	
	function randomHash($lenght = 7) {
		$random = substr(md5(rand()),0,$lenght);
		return $random;
	}
	
	function create_payment_box($amount) {
		global $gateway;
		if (session_status() == PHP_SESSION_NONE) {
			session_start();
		}
		$boxID = $this->randomHash(15);
		$_SESSION['ltc_boxID'] = $boxID;
		$_SESSION['ltc_address'] = $gateway['litecoin_address'];
		$_SESSION['ltc_amount'] = $amount;
		$address = $gateway['litecoin_address'];
		$box = '<div class="panel panel-default" id="PaymentBox_'.$_SESSION[ltc_boxID].'">
			<div class="panel-body">
				<div class="row">
					<div class="col-sm-12 col-md-12 col-lg-12">
						<h3><span class="text text-warning"><img src="assets/imgs/Litecoin.png" width="32px" height="32px"></span> Litecoin Payment Box</h3>
					</div>
					<div class="col-sm-4 col-md-4 col-lg-4">
						'.$this->QRCode().'
					</div>
					<div class="col-sm-8 col-md-8 col-lg-8" style="padding:10px;">
						Send <b>'.$amount.' LTC</b><br/><input type="text" id="address_'.$_SESSION[ltc_boxID].'" class="form-control" value="'.$address.'">
						or scan QR Code with your mobile device<br/><br/>
						<small>Do not refresh page, payment status will be updated automatically.</small>
					</div>
					<div class="col-sm-12 col-md-12 col-lg-12">
						<center><span id="PaymentStatus_'.$_SESSION[ltc_boxID].'"></span></center>
						<input type="hidden" id="payment_boxID" value="'.$_SESSION[ltc_boxID].'">
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript">
		$("#address_'.$_SESSION[ltc_boxID].'").focus(function() {
		   $(this).select();
		});
		function updatePaymentStatus() {
			ltc_gateway_update_status("'.$_SESSION[ltc_boxID].'");
		}
		setInterval(updatePaymentStatus,3000);
		</script>';
		return $box;
	}
	
	function QRCode() {
		global $gateway;
		$address = $_SESSION['ltc_address'];
		$amount = $_SESSION['ltc_amount']; 
		return '<img src="https://chart.googleapis.com/chart?chs=500x500&cht=qr&chl=litecoin:'.$address.'?amount='.$amount.'&choe=UTF-8" class="img-responsive">';
	}
	
	function StdClass2array($class) {
		$array = array();

		foreach ($class as $key => $item)
		{
				if ($item instanceof StdClass) {
						$array[$key] = StdClass2array($item);
				} else {
						$array[$key] = $item;
				}
		}

		return $array;
	}
}

class DogeGateway {
	private $gateway;
	
	function randomHash($lenght = 7) {
		$random = substr(md5(rand()),0,$lenght);
		return $random;
	}
	
	function create_payment_box($amount) {
		global $gateway;
		if (session_status() == PHP_SESSION_NONE) {
			session_start();
		}
		$boxID = $this->randomHash(15);
		$_SESSION['doge_boxID'] = $boxID;
		$_SESSION['doge_address'] = $gateway['litecoin_address'];
		$_SESSION['doge_amount'] = $amount;
		$address = $gateway['dogecoin_address'];
		$box = '<div class="panel panel-default" id="PaymentBox_'.$_SESSION[doge_boxID].'">
			<div class="panel-body">
				<div class="row">
					<div class="col-sm-12 col-md-12 col-lg-12">
						<h3><span class="text text-warning"><img src="assets/imgs/Dogecoin.png" width="32px" height="32px"></span> Dogecoin Payment Box</h3>
					</div>
					<div class="col-sm-4 col-md-4 col-lg-4">
						'.$this->QRCode().'
					</div>
					<div class="col-sm-8 col-md-8 col-lg-8" style="padding:10px;">
						Send <b>'.$amount.' DOGE</b><br/><input type="text" id="address_'.$_SESSION[doge_boxID].'" class="form-control" value="'.$address.'">
						or scan QR Code with your mobile device<br/><br/>
						<small>Do not refresh page, payment status will be updated automatically.</small>
					</div>
					<div class="col-sm-12 col-md-12 col-lg-12">
						<center><span id="PaymentStatus_'.$_SESSION[doge_boxID].'"></span></center>
						<input type="hidden" id="payment_boxID" value="'.$_SESSION[doge_boxID].'">
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript">
		$("#address_'.$_SESSION[doge_boxID].'").focus(function() {
		   $(this).select();
		});
		function updatePaymentStatus() {
			doge_gateway_update_status("'.$_SESSION[doge_boxID].'");
		}
		setInterval(updatePaymentStatus,3000);
		</script>';
		return $box;
	}
	
	function QRCode() {
		global $gateway;
		$address = $_SESSION['ltc_address'];
		$amount = $_SESSION['ltc_amount']; 
		return '<img src="https://chart.googleapis.com/chart?chs=500x500&cht=qr&chl=dogecoin:'.$address.'?amount='.$amount.'&choe=UTF-8" class="img-responsive">';
	}
	
	function StdClass2array($class) {
		$array = array();

		foreach ($class as $key => $item)
		{
				if ($item instanceof StdClass) {
						$array[$key] = StdClass2array($item);
				} else {
						$array[$key] = $item;
				}
		}

		return $array;
	}
}

function StdClass2array($class) {
    $array = array();

    foreach ($class as $key => $item)
    {
            if ($item instanceof StdClass) {
                    $array[$key] = StdClass2array($item);
            } else {
                    $array[$key] = $item;
            }
    }

    return $array;
}
?>