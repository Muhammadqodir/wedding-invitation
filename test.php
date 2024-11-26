<?php

$test = json_decode(file_get_contents("guests.json"));

function generateRandomString($length = 10) {
  $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $charactersLength = strlen($characters);
  $randomString = '';
  for ($i = 0; $i < $length; $i++) {
      $randomString .= $characters[random_int(0, $charactersLength - 1)];
  }
  return $randomString;
}

$res = [];

foreach ($test as $key => $value) {
  echo $value;
  $res[generateRandomString(5)] = $value;
}


file_put_contents("guests_hash.json", json_encode($res));