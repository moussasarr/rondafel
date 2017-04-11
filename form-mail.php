<?php

$EmailFrom = "Rondafel Website";
$EmailTo = "clynton.kakai@gmail.com";
$Subject = "Web Inquiry";
$FirstName = Trim(stripslashes($_POST['FirstName']));  
$LastName = Trim(stripslashes($_POST['LastName']));  
$Email = Trim(stripslashes($_POST['Email'])); 
$Feedback = Trim(stripslashes($_POST['Feedback']));  

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.html\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "FirstName: ";
$Body .= $FirstName;
$Body .= "\n";
$Body .= "LastName: ";
$Body .= $LastName;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Feedback: ";
$Body .= $Feedback;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=contactthanks.php\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.html\">";
}
?>