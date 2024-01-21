<?php
session_start();
$isError = false;

if (!empty($_GET['psw_length'])) {
  $psw_length = $_GET['psw_length'];
  checkPsw($psw_length,$isError);
}

function checkPsw($psw_length,&$isError){
  $psw_length = intval($psw_length);

  if ($psw_length >= 8 && $psw_length <= 32) {  
    generatePsw($psw_length);
    header('Location:./output.php');
  }else{
    writeError();
    $isError = true;
  }
}

function writeError(){
  return 'La password deve essere di lunghezza compresa tra 8 e 32';
}

function generatePsw($psw_length){
  $psw_string = '';
  $psw_data = getSpecialString();

  while(strlen($psw_string) < $psw_length){
    $psw_string .= $psw_data[rand(0,(strlen($psw_data)-1))];
  }
  $_SESSION['generated_psw'] = $psw_string;
  return $psw_string;
}

function getSpecialString(){
  $letters='abcdefghilmnopqrstuezABCDEFGHILMNOPQRSTUEZ';
  $numbers = '0123456789';
  $simbols = '!?&%$<>^+-*/()[]{}@#_=';
  $special_string = $letters.$numbers.$simbols;

  return $special_string;
}