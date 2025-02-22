<?php 
session_start();
include("logout.php");
include("connection/connection.php");
#networking rout start
include("network_students/add_network_stu.sm_1.php");
include("network_students/add_network_stu.sm_2.php");
include("network_students/add_network_stu.sm_3.php");
include("network_students/add_network_stu.sm_4.php");
#networking rout end


#for search  backend dir
include_once("search.php");
#for search  backend dir



# software route start
include("software_students/add_software_stu.sm_1.php");
include("software_students/add_software_stu.sm_2.php");
include("software_students/add_software_stu.sm_3.php");
include("software_students/add_software_stu.sm_4.php");
#software route end

#if not login
if(!isset($_SESSION["id"])){
echo " <script>window.location.href = 'pages-login.php'</script>";
exit();
}
#if not login