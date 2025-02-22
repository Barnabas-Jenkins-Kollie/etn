<?php

if(isset($_POST["logout"])){
    session_destroy();
    echo "
    <script>window.location.href = 'pages-login.php'</script>
    ";
}
