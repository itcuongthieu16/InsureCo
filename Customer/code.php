<?php
session_start();
require 'dbcon.php';

if (isset($_POST['delete_customer'])) {
    $customer_id = mysqli_real_escape_string($con, $_POST['delete_customer']);

    $query = "DELETE FROM customer WHERE CUS_CODE='$customer_id' ";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Customer Deleted Successfully";
        header("Location: index.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Customer Not Deleted";
        header("Location: index.php");
        exit(0);
    }
}

if (isset($_POST['update_customer'])) {
    // $customer_id = mysqli_real_escape_string($con, $_POST['CUS_CODE']);

    $cus_code = mysqli_real_escape_string($con, $_POST['CUS_CODE']);
    $cus_lname = mysqli_real_escape_string($con, $_POST['CUS_LNAME']);
    $cus_fname = mysqli_real_escape_string($con, $_POST['CUS_FNAME']);
    $cus_initial = mysqli_real_escape_string($con, $_POST['CUS_INITIAL']);
    $cus_areacode = mysqli_real_escape_string($con, $_POST['CUS_AREACODE']);
    $cus_phone = mysqli_real_escape_string($con, $_POST['CUS_PHONE']);
    $cus_insure_amt = mysqli_real_escape_string($con, $_POST['CUS_INSURE_AMT']);


    $query = "UPDATE customer SET CUS_CODE='$cus_code', CUS_LNAME='$cus_lname', CUS_FNAME='$cus_fname', CUS_INITIAL='$cus_initial', CUS_AREACODE='$cus_areacode', CUS_PHONE='$cus_phone', CUS_INSURE_AMT='$cus_insure_amt' WHERE CUS_CODE='$cus_code' ";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Customer Updated Successfully";
        header("Location: index.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Customer Not Updated";
        header("Location: index.php");
        exit(0);
    }
}


if (isset($_POST['save_customer'])) {
    $cus_code = mysqli_real_escape_string($con, $_POST['CUS_CODE']);
    $cus_lname = mysqli_real_escape_string($con, $_POST['CUS_LNAME']);
    $cus_fname = mysqli_real_escape_string($con, $_POST['CUS_FNAME']);
    $cus_initial = mysqli_real_escape_string($con, $_POST['CUS_INITIAL']);
    $cus_areacode = mysqli_real_escape_string($con, $_POST['CUS_AREACODE']);
    $cus_phone = mysqli_real_escape_string($con, $_POST['CUS_PHONE']);
    $cus_insure_amt = mysqli_real_escape_string($con, $_POST['CUS_INSURE_AMT']);

    $query = "INSERT INTO customer (CUS_CODE, CUS_LNAME, CUS_FNAME, CUS_INITIAL, CUS_AREACODE, CUS_PHONE, CUS_INSURE_AMT) 
    VALUES ('$cus_code','$cus_lname','$cus_fname','$cus_initial', '$cus_areacode', '$cus_phone', '$cus_insure_amt')";

    $query_run = mysqli_query($con, $query);
    if ($query_run) {
        $_SESSION['message'] = "Customer Created Successfully";
        header("Location: customer-create.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Customer Not Created";
        header("Location: customer-create.php");
        exit(0);
    }
}