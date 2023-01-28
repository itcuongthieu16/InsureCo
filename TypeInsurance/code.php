<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_type_insurance']))
{
    $type_insu_id = mysqli_real_escape_string($con, $_POST['delete_type_insurance']);

    $query = "DELETE FROM type_insurance WHERE TYPE_INSU_CODE='$type_insu_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Type Insurance Deleted Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Type Insurance Not Deleted";
        header("Location: index.php");
        exit(0);
    }
}

if(isset($_POST['update_type_insurance']))
{
    $type_insu_code = mysqli_real_escape_string($con, $_POST['TYPE_INSU_CODE']);
    $type_insu_name = mysqli_real_escape_string($con, $_POST['TYPE_INSU_NAME']);

    $query = "UPDATE type_insurance SET TYPE_INSU_CODE='$type_insu_code', TYPE_INSU_NAME='$type_insu_name' WHERE TYPE_INSU_CODE='$type_insu_code' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Type Insurance Updated Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Type Insurance Not Updated";
        header("Location: index.php");
        exit(0);
    }

}


if (isset($_POST['save_type_insurance'])) {
    $type_insu_code = mysqli_real_escape_string($con, $_POST['TYPE_INSU_CODE']);
    $type_insu_name = mysqli_real_escape_string($con, $_POST['TYPE_INSU_NAME']);

    $query = "INSERT INTO type_insurance (TYPE_INSU_CODE, TYPE_INSU_NAME) 
    VALUES ('$type_insu_code','$type_insu_name')";

    $query_run = mysqli_query($con, $query);
    if ($query_run) {
        $_SESSION['message'] = "Type Insurance Created Successfully";
        header("Location: type_insurance-create.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Type Insurance Not Created";
        header("Location: type_insurance-create.php");
        exit(0);
    }
}