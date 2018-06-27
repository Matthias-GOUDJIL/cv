<?php 
$errors = [];

if(!array_key_exists('lastname',$_POST) || $_POST['lastname'] == ''){
    $errors['lastname'] = "Vous n'avez pas renseigné votre nom";
}
if(!array_key_exists('firstname',$_POST) || $_POST['firstname'] == ''){
    $errors['firstname'] = "Vous n'avez pas renseigné votre prénom";
}
if(!array_key_exists('email',$_POST) || $_POST['email'] == '' || !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
    $errors['email'] = "Vous n'avez pas renseigné un email valide";
}
if(!array_key_exists('subject',$_POST) || $_POST['subject'] == ''){
    $errors['subject'] = "quel est le sujet de votre message?";
}
if(!array_key_exists('message',$_POST) || $_POST['message'] == ''){
    $errors['message'] = "Vous n'avez pas renseigné votre message";
}

session_start();

if (!empty($errors)) {
    $_SESSION['errors'] = $errors;
    $_SESSION['inputs'] = $_POST;
    header('Location: index.php#contact');
}else{
    $_SESSION['success'] = 1;
    $message = $_POST['message'];
    $email = $_POST['email'];
    $headers = 'FROM: '.$_POST['email'];
    $subject = $_POST['subject'];
    mail('matthias.goudjil@gmail.com', $subject, $message, $headers);
    header('Location: index.php#contact');
}

