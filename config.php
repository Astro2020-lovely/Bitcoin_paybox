<?php
$gateway = array();
// Enter here API Key for Bitcoin Network from your https://block.io account
$gateway['bitcoin_api_key'] = 'a02c-9a25-b2a7-c44d';
$gateway['litecoin_api_key'] = '9b36-b125-d33e-fb3b';
$gateway['dogecoin_api_key'] = 'c9ab-733c-9132-1d7c';

// Enter here address where to receive Bitcoin/Litecoin/Dogecoin, address must be from your Block.io account
$gateway['bitcoin_address'] = '3EPub3YCwK43fKrQNS6RwyodxTRcDq4JG5';
$gateway['litecoin_address'] = '3Ag75JYtWUE1AMiDYbspS2zJVwsyui1Mic';
$gateway['dogecoin_address'] = 'A4zXw5wroWK3dh1JuXE9XtjpobPMNSFyeQ';

// Enter here your Secret PIN of your https://block.io account, need to confirm transactions
$gateway['secret'] = '12jshda62';

// Enter here how many confirmations need to verify payment
$gateway['bitcoin_confirmations'] = '2';
$gateway['litecoin_confirmations'] = '2';
$gateway['dogecoin_confirmations'] = '2';
?>