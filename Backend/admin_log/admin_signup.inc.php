<?php
session_start();
$error = null;

# CONNECTION
include_once("connection/connection.php");
# CONNECTION

# function
include_once("function/function.php");
# function
// admin_name	admin_password	admin_code	admin_email	

$admin_name = isset($_POST["admin_name"]) ? $_POST["admin_name"] : null;
$admin_email = isset($_POST["admin_email"]) ? $_POST["admin_email"] : null;
$admin_code = isset($_POST["admin_code"]) ? $_POST["admin_code"] : null;
$admin_password = isset($_POST["admin_password"]) ? $_POST["admin_password"] : null;
$confirm_password = isset($_POST["confirm_password"]) ? $_POST["confirm_password"] : null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $admin_email = mysqli_real_escape_string($connection, $_POST['admin_email']);
    $admin_name = mysqli_real_escape_string($connection, $_POST['admin_name']);
    $admin_code = mysqli_real_escape_string($connection, $_POST['admin_code']);
    $admin = mysqli_real_escape_string($connection, $_POST['admin']);
    $admin_password = mysqli_real_escape_string($connection, $_POST['admin_password']);
    $confirm_password = mysqli_real_escape_string($connection, $_POST['confirm_password']);
   

    if (empty($admin_name) || empty($admin_email) || empty($admin_code) || empty($admin_password) || empty($confirm_password)){
        $error = input_empty();
        return;
    } else {
        if (!filter_var($admin_email, FILTER_VALIDATE_EMAIL)) {
            $error = invalid_email();
            return;
        } else {
            // Check if email is already taken
            $stmt = $connection->prepare("SELECT * FROM `admin` WHERE admin_email = ?");
            $stmt->bind_param("s", $admin_email);
            $stmt->execute();
            $result = $stmt->get_result();
            $checking = $result->num_rows;
            $stmt->close();

            if ($checking > 0) {
                $error = email_taken();
               
            } else {
              
                    if ($admin_password != $confirm_password) {
                        $error = password_match();
                        return;
                    } else {
                        // Insert user using prepared statement
                        $hashed_password = password_hash($admin_password, PASSWORD_DEFAULT);

                        $stmt = $connection->prepare("INSERT INTO `admin` (admin_name,admin_password,admin_code,admin_email,admin) VALUES (?, ?, ?, ?, ?)");
                        $stmt->bind_param("sssss", $admin_name,$hashed_password,$admin_code,$admin_email,$admin);
                        $stmt->execute();
                        $stmt->close();

                        echo "<script>window.location.href = 'page-admin.php' </script>";
                    }
                }
            }
        }
    }

?>
