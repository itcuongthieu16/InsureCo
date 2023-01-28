<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_insurance']))
{
    $insurance_id = mysqli_real_escape_string($con, $_POST['delete_insurance']);

    $query = "DELETE FROM insurance WHERE INSU_CODE='$insurance_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Insurance Deleted Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Insurance Not Deleted";
        header("Location: index.php");
        exit(0);
    }
}

if(isset($_POST['update_insurance']))
{
    $insu_code = mysqli_real_escape_string($con, $_POST['INSU_CODE']);
    $insu_name = mysqli_real_escape_string($con, $_POST['INSU_NAME']);
    $insu_duration = mysqli_real_escape_string($con, $_POST['INSU_DURATION']);
    $insu_value = mysqli_real_escape_string($con, $_POST['INSU_VALUE']);
    $type_insu_code = mysqli_real_escape_string($con, $_POST['TYPE_INSU_CODE']);


    $query = "UPDATE insurance SET INSU_CODE='$insu_code', INSU_NAME='$insu_name', INSU_DURATION='$insu_duration', INSU_VALUE='$insu_value', TYPE_INSU_CODE='$type_insu_code' WHERE INSU_CODE='$insu_code' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Insurance Updated Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Insurance Not Updated";
        header("Location: index.php");
        exit(0);
    }

}


if(isset($_POST['save_insurance']))
{
    $insu_code = mysqli_real_escape_string($con, $_POST['INSU_CODE']);
    $insu_name = mysqli_real_escape_string($con, $_POST['INSU_NAME']);
    $insu_duration = mysqli_real_escape_string($con, $_POST['INSU_DURATION']);
    $insu_value = mysqli_real_escape_string($con, $_POST['INSU_VALUE']);
    $type_insu_code = mysqli_real_escape_string($con, $_POST['TYPE_INSU_CODE']);

    $query = "INSERT INTO insurance (INSU_CODE, INSU_NAME, INSU_DURATION, INSU_VALUE, TYPE_INSU_CODE) 
    VALUES ('$insu_code','$insu_name','$insu_duration','$insu_value', '$type_insu_code')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Insurance Created Successfully";
        header("Location: insurance-create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Insurance Not Created";
        header("Location: insurance-create.php");
        exit(0);
    }
}