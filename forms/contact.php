<?php
session_start();

# dbcon
include "../connection/dbcon.php";
# dbcon


// admin_name	admin_password	admin_code	admin_email	

// $fullname = isset($_POST["fullname"]) ? $_POST["fullname"] : null;
// $email = isset($_POST["email"]) ? $_POST["email"] : null;
// $subject = isset($_POST["subject"]) ? $_POST["subject"] : null;
// $message = isset($_POST["message"]) ? $_POST["message"] : null;

if (isset($_POST["submit"])) {
  $fullname = isset($_POST["fullname"]) ? $_POST["fullname"] : null;
  $email = isset($_POST["email"]) ? $_POST["email"] : null;
  $subject = isset($_POST["subject"]) ? $_POST["subject"] : null;
  $message = isset($_POST["message"]) ? $_POST["message"] : null;
  // $fullname = mysqli_real_escape_string($dbcon, $_POST['fullname']);
  // $email = mysqli_real_escape_string($dbcon, $_POST['email']);
  // $subject = mysqli_real_escape_string($dbcon, $_POST['subject']);
  // $message = mysqli_real_escape_string($dbcon, $_POST['message']);



  if (empty($fullname) && empty($email) && empty($subject) && empty($message)) {
    echo '<script>alert("please fill all the fields")</script>';
    exit();
  } else {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo '<script>alert("invalid email")</script>';
      return;
    } else {
      // Check if email is already taken
      $stmt = $dbcon->prepare("SELECT * FROM `contacts` WHERE email = ?");
      $stmt->bind_param("s", $email);
      $stmt->execute();
      $result = $stmt->get_result();
      $checking = $result->num_rows;
      $stmt->close();

      if ($checking > 0) {
        echo '<script>alert("email already exist")</script>';

      } else {
        // Insert user using prepared statement
        $stmt = $dbcon->prepare("INSERT INTO `contacts` (fullname,email,subject,message) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $fullname, $email, $subject, $message);
        $stmt->execute();
        $stmt->close();

        echo "<script>alert('message send successfully')</script>";
        echo "<script>location.href = 'contact.php'</script>";
      }
    }
  }
}
