<?php


// Отправляем

$message = "Регистрация на курс: " . $_REQUEST['course_name'] . "\n Имя: ";
$message .= $_REQUEST['first_name'];
$message .= "\n Фамилия: ";
$message .= $_REQUEST['last_name'];
$message .= "\n Название курса: ";
$message .= $_REQUEST['cource'];
$message .= "\n Телефон: ";
$message .= $_REQUEST['tel'];
$message .= "\n E-mail: ";
$message .= $_REQUEST['email'];


if(mail('info@svc.com.ua', 'SVC', $message)) {
	echo 'Message has been sent';
	echo $message;
} else {
    echo 'Message could not be sent.';
    echo 'Mailer Error';
}

?>