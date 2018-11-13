<!DOCTYPE html>
  <head>
  <title>Sample PHP mail script</title>
  <meta http-equiv="Content-type"
        content="text/html; charset=utf-8"/>
 </head>
 <body>
  <?php
  //3 lines of code to retrieve the form data sent via the "post" method
    $name=$_POST['uName'];
    $email=$_POST['email'];
    $comment=$_POST['comment'];

/*creation of the $msg variable and
 supplementally adding more details to it.*/
    $msg="EMAIL SENT FROM WEBSITE:\r\n " ;
    $msg.="Senders Name: $name \r\n ";
    $msg.="Senders E-mail: $email\r\n ";
    $msg.="Comment:    $comment ";


    $to="leongaul@yahoo.co.uk";   //where is the email to be sent
    $subject="web Site Feedback";   //what subject should the email display
    $mailheaders="From: $email\r\n";  //what email  will display for the sender


    $formsent=mail($to, $subject, $msg, $mailheaders); //send the email
    if ($formsent)
     {
      echo "<p> Comment sent successfully!</p>";
     }
     else
     {
      echo "<p> There is a problem. The form has not been sent !</p>";
     }
     ?>


    <p>Here are the details from your completed form!<br />
       <?php
       echo  $msg;
       ?>

       </p>
   <p><a href="../pages/contact.html">go back</a></p>

 </body>
</html>
