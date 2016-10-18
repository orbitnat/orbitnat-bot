<?php
$access_token = 'UAhYdrVHXiF3ty6SN91LksqzF7wORp0l/Xb/g+7Z7qNsd7ufndKbEuck4HFB2lRnCuDmoLi3HLCfd6xa4DURGbktEwCpA7Z+IYftqtIDbkpUSVcgJjT7AkJhXYfrgvxlbqPUNZ8dSKJnfo/4noK3zwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;