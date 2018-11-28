<?php
if (!$_POST) die('приветик'); // если глобальный массив POST не передан значит приветик
// иначе продолжаем





$response = array(); // сюда будем писать то что будем возвращать скрипту

// $field1 = isset($_POST['field1']) ? $_POST['field1'] : false; // сунем каждое поле в отдельную переменную
// $field2 = isset($_POST['field2']) ? $_POST['field2'] : false;
// $field3 = isset($_POST['field3']) ? $_POST['field3'] : false;
// $field4 = isset($_POST['field4']) ? $_POST['field4'] : false;
// $field5 = isset($_POST['field5']) ? $_POST['field5'] : false;
// $field6 = isset($_POST['field6']) ? $_POST['field6'] : false;
// $field7 = isset($_POST['field7']) ? $_POST['field7'] : false;

$field1 = (isset($_POST['field1']) && !empty( $_POST['field1'] )) ? $_POST['field1'] : null; 
$field2 = (isset($_POST['field2']) && !empty( $_POST['field2'] )) ? $_POST['field2'] : null; 
$field3 = (isset($_POST['field3']) && !empty( $_POST['field3'] )) ? $_POST['field3'] : null; 
$field4 = (isset($_POST['field4']) && !empty( $_POST['field4'] )) ? $_POST['field4'] : null; 
$field5 = (isset($_POST['field5']) && !empty( $_POST['field5'] )) ? $_POST['field5'] : null; 
$field6 = (isset($_POST['field6']) && !empty( $_POST['field6'] )) ? $_POST['field6'] : null; 
$field7 = (isset($_POST['field7']) && !empty( $_POST['field7'] )) ? $_POST['field7'] : null; 
$field8 = (isset($_POST['field8']) && !empty( $_POST['field8'] )) ? $_POST['field8'] : null; 
$field9 = (isset($_POST['field9']) && !empty( $_POST['field9'] )) ? $_POST['field9'] : null; 

$utm_source = $_POST['utm_source']; //полученное из формы name=utm_source
$utm_medium = $_POST['utm_medium']; //полученное из формы name=utm_medium
$utm_campaign = $_POST['utm_campaign']; //полученное из формы name=utm_campaign
$utm_content = $_POST['utm_content']; //полученное из формы name=utm_content
$utm_term = $_POST['utm_term']; //полученное из формы name=utm_term

$fieldip = 'ЖС: ' . $field8 . ' р., ' . 'ПВ: ' . $field9 . ' р.'; // объединяем две переменные

// сюда можно положить всякие проверки полей и капчу например
if (!$field6 || strlen($field6) != 17) { // в моем случае надо чтобы поле тклефон не были пустыми
    $response['ok'] = 0; // пишем что все плохо
    //$response['message'] = '<p class="error">Не заполнен телефон</p>'; // пишем ответ
    $response['bord'] = 'border:1px solid #ea1d0b;color:#ea1d0b;'; // пишем ответ
    $response['icon'] = 'color:#ea1d0b'; // пишем ответ

    // if (strlen($field6) < 17) {
    //     $response['notphone'] = 'border:1px solid blue';
    // }

    die(json_encode($response)); //выводим массив в json формате и умираем
    
}

// to Telegram

/* https://api.telegram.org/botXXXXXXXXXXXXXXXXXXXXXXX/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$token = "670412593:AAFlcbcZn3jGDv7DuXxvudyilL6wII7GVtg";
$chat_id = "-264346117";
$arr = array(
  'Landing Page: ' => 'Матрёшкин Двор',
  'Тип формы: ' => $field2,
  'Расположение формы: ' => $field3,
  'Инфо квартиры (если Забронировать): ' => $field4,
  'Ваше имя: ' => $field5,
  'Ваш телефон: ' => $field6,
  'E-mail: ' => $field7,
  'Ипотека: ' => $fieldip,
  '' => '',
  'utm_source' => $utm_source,
  'utm_medium' => $utm_medium,
  'utm_campaign' => $utm_campaign,
  'utm_content' => $utm_content,
  'utm_term' => $utm_term
);
foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};
// $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
$sendToTelegram = file_get_contents("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}&amp;parse_mode=HTML&amp;disable_web_page_preview=false&amp;disable_notification=false");


// to email

/* Устанавливаем e-mail Кому и от Кого будут приходить письма */    
    $to = "novostr@sasn.ru"; // Здесь нужно написать e-mail, куда будут приходить письма  
    $from = "cu19643@vh64.timeweb.ru"; // Здесь нужно написать e-mail, от кого будут приходить письма, например no-reply@epicblog.net

// /* Указываем переменные, в которые будет записываться информация с формы */

     $subject = "Заявка с LandingPage ЖК Матрёшкин Двор";//Фиксированная тема письма
    
// /* Проверка правильного написания e-mail адреса */
// if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
// {
// show_error("<br /> Е-mail адрес не существует");
// }
    
/* Переменная, которая будет отправлена на почту со значениями, вводимых в поля */
$mail_to_myemail = 
"Landing Page: Матрёшкин Двор
Тип формы: $field2
Расположение формы: $field3
Инфо квартиры (если Забронировать): $field4
Ваше имя: $field5
Ваш телефон: $field6
E-mail: $field7
Ипотека: $fieldip

utm_source: $utm_source
utm_medium: $utm_medium
utm_campaign: $utm_campaign
utm_content: $utm_content
utm_term: $utm_term"; 
    
$headers = "From: $from \r\n";
    
/* Отправка сообщения, с помощью функции mail() */
    mail($to, $subject, $mail_to_myemail, $headers . 'Content-type: text/plain; charset=utf-8');
    




// to Googlesheets

// теперь подготовим данные для отправки в гугл форму
$url = 'https://docs.google.com/forms/d/e/1FAIpQLScuMRT2rG8tBB_WBeBdGdpesqcuxzcWuwN0OXwBu9n5OIPIJg/formResponse'; // куда слать, это атрибут action у гугл формы 
$data = array(); // массив для отправки в гугл форм
$data['entry.349942968'] = 'Матрёшкин Двор';  // Landing Page
$data['entry.42396809'] = $field2;         // Тип формы
$data['entry.1995932799'] = $field3;       // Расположение формы
$data['entry.762884152'] = $field4;        // Инфо квартиры (если Забронировать)
$data['entry.1296332857'] = $field5;        // Ваше имя
$data['entry.1659901189'] = $field6;        // Ваш телефон
$data['entry.1991734574'] = $field7;        // E-mail
$data['entry.533853410'] = $fieldip;         // Ипотека

$data['entry.1632746095'] = $utm_source;        // полученное из формы name=utm_source
$data['entry.358943092'] = $utm_medium;        // полученное из формы name=utm_medium
$data['entry.360361698'] = $utm_campaign;        // полученное из формы name=utm_campaign
$data['entry.1025813687'] = $utm_content;        // полученное из формы name=utm_content
$data['entry.1267318560'] = $utm_term;        // полученное из формы name=utm_term 


$data = http_build_query($data); // теперь сериализуем массив данных в строку для отправки
// foreach ($field4 as $key => $value) { // если у нас есть элементы с нескольки значениями (например чекбоксы), надо пройтись по каждому и заменить кое что в отправляемой строке
//     $data = str_replace('entry.1217837295%5B'.$key.'%5D', 'entry.1217837295', $data); // а именно выпилить [0], [1], [2].. из ключей, иначе в гугл форму это поле с несколькими значениями не запишется
// }

$options = array( // задаем параметры запроса
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => $data,
    ),
);
$context  = stream_context_create($options); // создаем контекст отправки
$result = file_get_contents($url, false, $context); // отправляем

if (!$result) { // если что-то не так
    $response['ok'] = 0; // пишем что все плохо
    $response['message'] = '<p class="error">Что-то пошло не так, попробуйте отправить позже.</p>'; // пишем ответ
    die(json_encode($response)); //выводим массив в json формате и умираем
}

$response['ok'] = 1; // если дошло до сюда, значит все ок
$response['message'] = '<p class="">Все ок, отправилось.</p>'; // пишем ответ
die(json_encode($response)); //выводим массив в json формате и умираем


// /* You can edit the templates below to customize reservation emails. Remember to change $mail_address to your email address. */
//     $mail_subject = "Заявка c Landing Page ЖК Ясный Берег";
//     $mail_content = "Новая заявка!\r\n \r\nLanding Page: ЖК Ясный Берег\r\nИмя: ".$field2."\r\nEmail: ".$field3."\r\nChosen type: ".$field5."\r\nTel: ".$field6."\r\nDate: ".$field7."\r\n";
//     $mail_address = "novostr@sasn.ru";   /*  Your email **/

//     $mail_content = wordwrap($mail_content, 70, "\r\n");
//     $headers = 'X-Mailer: PHP/'.phpversion();
//     mail($mail_address, $mail_subject, $mail_content, $headers);
    



?>