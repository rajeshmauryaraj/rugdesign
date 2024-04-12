<?php 
 

//Client Message

$Messagee="Thank you ".$_POST['name']." ! for your inquiry regarding our services . I have been educated about your query, and I would be more than happy to answer any questions you have.
We are grateful that you’ve shown an interest in our services. <br> <br>
Regards,  <br> <br>
R.S Smart Web Ideas <br>
Mobile No. : - +91-8979415348 <br>
Email :- contact@rssmartwebideas.com";

$too = "".$_POST['email'].""; 

$ToSubjectt = "Message from RS Smart Web Ideas ";
$headerss  = "From: ".$_POST['frmmail']."\r\n"; 
$headerss .= "Content-type: text/html\r\n";
@mail($too,$ToSubjectt,$Messagee, $headerss);

//Owner Message

 $Message="Name: ".$_POST['name']."
 <br> Email ID : ".$_POST['email']."
 <br> Mobile No.: ".$_POST['phone']."
 <br> Service Type : ".$_POST['sevicetype']."";
 
 $to="contact@rssmartwebideas.com,rajeshsaxena842@gmail.com";
  
$ToSubject = "Query from RS Smart Web Ideas ";
$headers  = "From: ".$_POST['frmmail']."\r\n"; 
$headers .= "Content-type: text/html\r\n";
@mail($to,$ToSubject, $Message, $headers);

header("Location:thank-you.php");
 
?>