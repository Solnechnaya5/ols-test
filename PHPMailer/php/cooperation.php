<?php

$token = '6260910755:AAFH5UtS8ku_uh2WFfkaHNpFXyf9cCCvlt4';
$chatid = '-1001931850053';
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['tel'];
$subj = $_POST['subject'];
$project_type = $_POST['project_type_text'];
$project_size = $_POST['project_size_text'];
$project_advantages = $_POST['project_advantages_text'];
$project_limitations = $_POST['project_limitations_text'];
$project_stages = $_POST['project_stages_text'];

$arr = array(
  "Name " => $name,
  "Email " => $email,
  "Phone " => $phone,
  "Subject" => $subj,
  "Project Type & Needs" => $project_type,
  "Project Size & Duration" => $project_size,
  "Advantages" => $project_advantages,
  "Limitations" => $project_limitations,
  "Project Stages" => $project_stages,

);

// Формуємо повідомлення
$message = "";
foreach ($arr as $key => $value) {
  $message .= "<b>" . $key . "</b>: " . $value . "\n";
}

// ініціалізація cURL
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot{$token}/sendMessage");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, array(
    'chat_id' => $chatid,
    'parse_mode' => 'html',
    'text' => $message // Відправляємо сформоване повідомлення
));

$response = curl_exec($ch);
if(curl_errno($ch)) {
  echo 'Curl error: ' . curl_error($ch);
} else {
  echo 'API response: ' . $response;  // Вивести відповідь сервера
}
curl_close($ch);


return true;
?>

