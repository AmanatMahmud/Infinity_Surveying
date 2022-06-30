<?php
if (isset($_POST['Submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $mess = $_POST['mess'];
    if (empty($name) || empty($email) || empty($subject) || empty($mess)) {
        header('location:contact.php?error');
    } else {
        $to = "c201055@ugrad.iiuc.ac.bd";
        if (mail($to, $subject, $mess, $email)) {
            header('location:contact.php?success');
        }
    }
}
else{
    header('location:contact.php');
}
