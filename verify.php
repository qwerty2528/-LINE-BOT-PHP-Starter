<?php
$access_token = 'yjOQ5avDBMQ6xsh9N0zlRvQldTgmfkbDJ9rb2qNC9y0GMUJf1tZnzk3ueQ6IiNMc9DHMKLVSVoZMYdAWrCGM8WeP1tTYM8SqqXqGagzvNbgmTb/LaRFJPmkZZ3epgDS6gp2gbvYNA6Rew/IFuhpBCAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
