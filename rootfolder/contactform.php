<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $errorEmpty = false;
  $errorEmail = false;

  if (empty($name) || empty($email) || empty($subject) || empty($message)) {
    echo "<span class='form-error'>Please fill in all fields.</span>";
    $errorEmpty = true;
  }
  elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<span class='form-error'>Please write a valid e-mail address. </span>";
    $errorEmail = true;
  }
  else {
    mail("colin@elizabethjpeakart.com");
    header("Location: http://elizabethjpeakart.com/contact.php?mailsend");
    echo "<span class='form-success'>Thank You! Your message has been sent.</span>";
  }
}

?>

<script>
  $("#mail-name, #mail-email, #mail-subject, #mail-message").removeClass("input-error");

  var errorEmpty = "<?php echo $errorEmpty; ?>";
  var errorEmail = "<?php echo $errorEmail; ?>";

  if (errorEmpty == true) {
    $("#mail-name, #mail-email, #mail-subject, #mail-message").addClass("input-error");
  }
  if (errorEmail == true) {
    $("#mail-email").addClass("input-error");
  }
  if (errorEmpty == false && errorEmail == false) {
    $("#mail-name, #mail-email, #mail-subject, #mail-message").val("");
  }
</script>
