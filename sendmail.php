<?php
$name=$_REQUEST['Name'];
$email=$_REQUEST['email'];
$contact=$_REQUEST['cnumber'];
$date=$_REQUEST['date'];
$from=$_REQUEST['from'];
$to=$_REQUEST['to'];

$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
$message = '<html><body>';
$message .= '<h1>you Got an enquiry!!!!</h1>';
$message .= '<table rules="all" style="border-color: black;" cellpadding="10">';
$message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" .$name. "</td></tr>";
$message .= "<tr style='background: #eee;'><td><strong>Email:</strong> </td><td>" .$email. "</td></tr>";
$message .= "<tr style='background: #eee;'><td><strong>Contact:</strong> </td><td>" .$contact. "</td></tr>";
$message .= "<tr style='background: #eee;'><td><strong>date:</strong> </td><td>" .$date. "</td></tr>";
$message .= "<tr style='background: #eee;'><td><strong>From:</strong> </td><td>" .$from. "</td></tr>";
$message .= "<tr style='background: #eee;'><td><strong>To:</strong> </td><td>" .$to. "</td></tr>";
$message .= "</table>";
$message .= '</body></html>';
mail("Firstpackers2008@gmail.com","Contact Form Results",$message,$headers);
header("Location:thankyou.html ");
?>