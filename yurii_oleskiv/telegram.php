<?php

/* https://api.telegram.org/bot1149330200:AAGakaszYLvoAli_0oL97cYdu3cpyilIxfo/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$fomrID = "Yurii_Oleskiv";
$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
// $email = $_POST['user_email'];

$token = "1149330200:AAGakaszYLvoAli_0oL97cYdu3cpyilIxfo";
$chat_id = "-489784439";
$arr = array(
  'Form ID: ' => $fomrID,
  'Імя користувача: ' => $name,
  'Телефон: ' => $phone,
  // 'Email' => $email
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thank-you.html');
} else {
  echo "Error";
}
?>
