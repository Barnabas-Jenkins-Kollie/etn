<?php
session_start();

$error = null;

# CONNECTION
include_once("connection/connection.php");
# CONNECTION

# FUNCTION
include_once("function/function.php");
# FUNCTION

$admin_email = isset($_POST["admin_email"]) ? $_POST["admin_email"] : null;
$admin_password = isset($_POST["admin_password"]) ? $_POST["admin_password"] : null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $admin_email = mysqli_real_escape_string($connection, $_POST["admin_email"]);
    $admin_password = mysqli_real_escape_string($connection, $_POST["admin_password"]);

    if (empty($admin_password) || empty($admin_email)) {
        $error = input_empty();
    } else {
        $table = "SELECT * FROM `admin` WHERE admin_email = '$admin_email'";
        $result = mysqli_query($connection, $table) or die(mysqli_error($connection));
        $checking = mysqli_num_rows($result);

        if ($checking > 0) {
            $data = mysqli_fetch_assoc($result);
            $hashed_password = $data["admin_password"];

            if (password_verify($admin_password, $hashed_password)) {
                // Password is correct

                // Set session variables or perform any other actions for successful login
                $_SESSION["id"] = $data["id"];
                $_SESSION["email"] = $data["admin_email"];

                // Redirect to the dashboard or index page
                header("Location: index.php");
                exit();
            } else {
                // Password is incorrect
                $error = invalid_credentials();
            }
        } else {
            // Admin with the provided email doesn't exist
            $error = invalid_credentials();
        }
    }
}
?>
