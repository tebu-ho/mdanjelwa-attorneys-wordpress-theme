<?php
  /* Set e-mail recipient */
  $myemail = "help@pamattorneys.co.za";

  /* Check all form inputs using check_input function*/
  $name = check_input($_POST['name']);
  $email = check_input($_POST['email']);
  $phone = check_input($_POST['phone']);
  $message = check_input($_POST['message']);
  $type = "Message from www.pamattorneys.co.za";

  /* If e-mail is not valid show error message */
  if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email)) {
      show_error("Ikhona into erongo nge email address yakho. Please double check it.");
  }

  /* Message for the e-mail */
  $message = "Hi,

  Unomyalezo ongenileyo kwi website yenu:

  Usuka ku $name
  Email yakhe ithi $email
  Nantsi ne phone number yakhe: $phone
  
  Uthi:
  $message
  

  End of message
  ";

  /* Send the message using mail() function */
  mail($myemail, $name, $message);

  /* Redirect visitor to the thank you page */
  header('Location: ../../thank_you');
  exit();
               
  /* Used functions */
  function check_input($data, $problem='') {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      if ($problem && strlen($data) == 0) {
          show_error($problem);
      }
      return $data;
  }

  function show_error($myError) {
?>
<html>
  <body>
  <b>Please correct the following error:</b><br />
  <?php echo $myError; ?>
  </body>
</html>
<?php
  exit();
}
?>