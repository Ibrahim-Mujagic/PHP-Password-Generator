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
    $letters_psw = $psw_data[rand(0, strlen($psw_data) - 1)];
    if (empty($_GET['repeat'])) {
      if (strpos($psw_string, $letters_psw) === false) {
        $psw_string .= $letters_psw;
      }
    }else{
      $psw_string .= $letters_psw;
    }  
  }
  $_SESSION['generated_psw'] = $psw_string;
  return $psw_string;
}

function getSpecialString(){
  $userChoiceChar = isset($_GET['chars']) ? $_GET['chars'] : [];
  
  $letters='abcdefghilmnopqrstuezABCDEFGHILMNOPQRSTUEZ';
  $numbers = '0123456789';
  $symbols = '!?&%$<>^+-*/()[]{}@#_=';
  
  $special_string ='';
  
  if (in_array('0',$userChoiceChar)) {
    $special_string .= $letters;
  }
  if (in_array('1',$userChoiceChar)) {
    $special_string .= $numbers;
  }
  if (in_array('2',$userChoiceChar)) {
    $special_string .= $symbols;
  }
  if (empty($special_string)) {
    $special_string .= $letters . $numbers . $symbols;
  }

  return $special_string;
}