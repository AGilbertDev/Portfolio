<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Checks if this page was accessed legitimately (via the contact form).
if ($_SERVER['REQUEST_METHOD'] != 'POST')
{
    header('Location: ../index.php');
    die();
}

// Saves the values of the form fields to variables.
$fromName = htmlspecialchars($_POST['fromName']);
$fromCompany = htmlspecialchars($_POST['fromCompany']);
$fromEmail = htmlspecialchars($_POST['fromEmail']);
$subject = htmlspecialchars($_POST['subject']);
$message = htmlspecialchars($_POST['message']);

// Verifies user input formatting.
function validateForm()
{
    global $fromName, $fromEmail, $subject, $message;
    $errors = [];

    if ($fromName == '')
    {
        $errors['nameErr'] = "Veuillez entrer votre nom.";
    }
    if ($fromEmail == '')
    {
        $errors['emailErr'] = "Veuillez entrer une adresse courriel.";
    }
    else if (!validateEmail($fromEmail))
    {
        $errors['emailErr'] = "Veuillez entrer une adresse courriel valide.";
    }
    if ($subject == '')
    {
        $errors['subjectErr'] = "Veuillez entrer le titre du message.";
    }
    if ($message == '')
    {
        $errors['messageErr'] = "Veuillez entrer un message.";
    }

    if (!empty($errors))
    {
        return $errors;
    }
    else
    {
        $status = sendMEssage();
        return $status;
    }
}

function validateEmail($fromEmail)
{
    return filter_var($fromEmail, FILTER_VALIDATE_EMAIL);
}

// Sends the email to my mailbox via Gmail SMTP.
function sendMEssage()
{
    require 'SMTP_Account.php';

    global $fromName, $fromCompany, $fromEmail, $subject, $message;

    $status = [];

    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'STARTTLS';
    $mail->Username = $recipientEmail;
    $mail->Password = $pwd;
    $mail->Port = 587;
    $mail->CharSet = 'UTF-8';

    $mail->setFrom(htmlspecialchars_decode($fromEmail), htmlspecialchars_decode($fromName) . " via CONTACT FORM");
    $mail->addReplyTo(htmlspecialchars_decode($fromEmail), htmlspecialchars_decode($fromName));
    $mail->addAddress($recipientEmail, $recipientName);

    $mail->Subject = htmlspecialchars_decode($subject);
    $mail->Body = "Expéditeur: " . htmlspecialchars_decode($fromName) . " <" . htmlspecialchars_decode($fromEmail) . ">\nCompagnie: " . htmlspecialchars_decode($fromCompany) . "\n\nTitre: " .  htmlspecialchars_decode($subject) . "\n\nMessage:\n\n" . htmlspecialchars_decode($message);

    if (!$mail->send())
    {
        $status['error'] = "Le message n'a pas pu être envoyé en raison d'une erreur du système.";
    }
    else
    {
        $status['success'] = "Votre message a été envoyé!";
    }
    return $status;
}
