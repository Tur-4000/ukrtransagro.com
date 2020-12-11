<?php
function mime_header_encode($str, $data_charset, $send_charset)
{ // функция преобразования заголовков в верную кодировку
    if ($data_charset != $send_charset) {
        $str = iconv($data_charset, $send_charset . '//IGNORE', $str);
    }
    return ('=?' . $send_charset . '?B?' . base64_encode($str) . '?=');
}

/* супер класс для отправки письма в нужной кодировке */

class TEmail
{
    public $from_email;
    public $from_name;
    public $to_email;
    public $to_name;
    public $data_charset = 'UTF-8';
    public $send_charset = 'windows-1251';
    public $subject;
    public $body = '';
    public $type = 'text/plain';

    function send()
    {
        $dc = $this->data_charset;
        $sc = $this->send_charset;
        $enc_to = mime_header_encode($this->to_name, $dc, $sc) . ' <' . $this->to_email . '>';
        $enc_subject = mime_header_encode($this->subject, $dc, $sc);
        $enc_from = mime_header_encode($this->from_name, $dc, $sc) . ' <' . $this->from_email . '>';
        $enc_body = $dc == $sc ? $this->body : iconv($dc, $sc . '//IGNORE', $this->body);
        $headers = '';
        $headers .= "Mime-Version: 1.0\r\n";
        $headers .= "Content-type: " . $this->type . "; charset=" . $sc . "\r\n";
        $headers .= "From: " . $enc_from . "\r\n";
        return mail($enc_to, $enc_subject, $enc_body, $headers);
    }
}

if ($_POST) { // если передан массив POST
    if ($_POST["name"]) {
        $name = htmlspecialchars($_POST["name"]);
    } // пишем данные в переменные и экранируем спецсимволы
    if ($_POST["mail"]) {
        $email = htmlspecialchars($_POST["mail"]);
    } else {
        $email = 'не указан';
    }
    if ($_POST["subject"]) {
        $subject = htmlspecialchars($_POST["subject"]);
    } else {
        $subject = 'Компания не указана';
    }
    if ($_POST["message"]) {
        $message = htmlspecialchars($_POST["message"]);
    } else {
        $message = 'отсутствует';
    }

    $sendtime = date('H:i:s');
    $json = array();

    $mail = <<<MAIL
 ЗАПРОС С САЙТА УкрТрансАгро
+----------------------------------------------------------------------------------------------------------+
 Отправлен в: $sendtime
+----------------------------------------------------------------------------------------------------------+
 Имя: $name
 Компания: $subject
 E-mail: $email
+----------------------------------------------------------------------------------------------------------+
 Cообщение: $message
MAIL;

    $emailgo = new TEmail; // инициализируем супер класс отправки
    $emailgo->from_email = $email; // от кого
    $emailgo->from_name = 'Запрос от:';
    $emailgo->to_name = 'Ltd. UkrTransAgro';
    $emailgo->subject = 'Запрос с сайта УкрТрансАгро.'; // тема
    $emailgo->body = $mail; // сообщение
    $emailgo->to_email = 'webmaster@ukmig.com.ua'; // кому
    $emailgo->send(); // отправляем

    $json['error'] = 0; // ошибок не было

    echo json_encode($json); // выводим массив ответа

    unset($_POST);
} else { // если массив POST не был передан
    echo 'GET LOST!';
}
