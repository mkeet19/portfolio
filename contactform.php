<?php 
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];
    $mailTo = "malkeetkaur080592@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received E-Mail from ".$name.".\n\n".$message;
    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
}