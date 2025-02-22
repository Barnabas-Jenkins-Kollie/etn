<?php 

$row_number = isset($_POST['roll_number']) ? $_POST['roll_number'] : NULL;
$full_name = isset($_POST['name'])? $_POST['name']: NULL;
$module_1_exam = isset($_POST['module_1_exam'])? $_POST['module_1_exam']: NULL;
$module_2_exam = isset($_POST['module_2_exam'])? $_POST['module_2_exam']: NULL;
$module_3_exam = isset($_POST['module_3_exam'])? $_POST['module_3_exam']: NULL;


if(isset($_POST["sem3_btn_networking"])){
    $row_number = mysqli_real_escape_string($connection, $row_number);
    $full_name = mysqli_real_escape_string($connection, $full_name);
    $module_1_exam = mysqli_real_escape_string($connection, $module_1_exam);
    $module_2_exam = mysqli_real_escape_string($connection, $module_2_exam);
    $module_3_exam = mysqli_real_escape_string($connection, $module_3_exam);

    //VALIDATING EMPTY
    if(empty($row_number) || empty($full_name)){
        echo "<script> alert('Please add rollnumber and username ')</script>";
    } 
    else{
        $table = "INSERT INTO networking_sem_3 (ROLL_NUMBER,STUDENT_NAME,MODULE_1, MODULE_2,MODULE_3) VALUES ('$row_number','$full_name','$module_1_exam','$module_2_exam','$module_3_exam')";\
        mysqli_query($connection, $table) or die(mysqli_error($connection));
        echo "<script> window.alert('Student added successfuly')</script>";
    }
    
}

