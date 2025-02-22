<?php
$server = "localhost";
$server_name = "root";
$server_password = "";
$server_database = "educatethenextgen_db";

#connection to the db
$connection = mysqli_connect($server, $server_name, $server_password, $server_database) or die(mysqli_error($connection));

if (!$connection) {
    echo "
    <script>

    window.location.href = 'pages-error-404.php';
    
    </script>";
    die();
}
