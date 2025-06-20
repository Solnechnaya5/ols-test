<?php
$token = '6260910755:AAFH5UtS8ku_uh2WFfkaHNpFXyf9cCCvlt4';
$chatid = '-1001931850053';
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['tel'];
$subj = $_POST['subject'];
$content = $_POST['message'];
$arr = array(
  "Name " => $name,
  "email " => $email,
  "Phone " => $phone,
  "Subject" => $subj,
  "Message " => $content
);
foreach ($arr as $key => $value) {
  echo $key;
  echo $value;
  $message .= "<b>" . $key . "</b>: " . $value . "%0A";
}
$response;
// now execute it:
$result = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chatid}&parse_mode=html&text={$message}", "r");

return true;
