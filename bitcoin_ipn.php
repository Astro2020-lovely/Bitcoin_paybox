<?php
error_reporting(0);
session_start();
require("config.php");
require("classes/block_io.php");
require("classes/gateway.php");

$apiKey = $gateway['bitcoin_api_key'];
$pin = $gateway['secret'];
$version = 2; // the API version
$block_io = new BlockIo($apiKey, $pin, $version);
$received = $block_io->get_transactions(array('type' => 'received', 'addresses' => $gateway['bitcoin_address']));
$payment_status="0";
	if($received->status == "success") {	
			$data = $received->data->txs;
			$dt = StdClass2array($data);
			foreach($dt as $k=>$v) {
				$txid = $v['txid'];
				$time = $v['time'];
				$amounts = $v['amounts_received'];
				$amounts = StdClass2array($amounts);
				foreach($amounts as $a => $b) {
					$recipient = $b['recipient'];
					$amount = $b['amount'];
				} 
				$senders = $v['senders'];
				$senders = StdClass2array($senders);
				foreach($senders as $c => $d) {
					$sender = $d;
				}
				$confirmations = $v['confirmations'];
				if($time+600 > time()) {
					if($gateway['bitcoin_confirmations'] > $confirmations) {
						if($amount == $_SESSION['btc_amount']) {
							$payment_status = "completed";
						}
					}
				}
	}
}
		
if($payment_status == "completed") {
	// RUN YOUR CODE HERE TO PROCESS ORDER OR CHANGE STATUS
	echo '<span class="text text-success"><i class="fa fa-check"></i> Payment was received! Your order was processed.</span>';
} else {
	echo '<span class="text text-info"><i class="fa fa-spin fa-spinner"></i> Awaiting payment...';
}
?>