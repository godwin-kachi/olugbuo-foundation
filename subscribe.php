<?php

if (isset($_POST['submit'])){
    $user_email = $_POST['email'];
    $destination = fopen("email.txt", "a");
    fwrite($destination, $user_email . PHP_EOL);
    fclose($destination);
    
}
if (isset($_POST)) {
    session_start();
    $_SESSION['message']="Thank you for your interest in our newsletter, expect our announcement in your inbox";
    header('Location: index.php');
}

?>