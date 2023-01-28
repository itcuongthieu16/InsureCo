<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_agent']))
{
    $agent_id = mysqli_real_escape_string($con, $_POST['delete_agent']);

    $query = "DELETE FROM agent WHERE AGENT_CODE='$agent_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Agent Deleted Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Agent Not Deleted";
        header("Location: index.php");
        exit(0);
    }
}

if(isset($_POST['update_agent']))
{
    $agent_code = mysqli_real_escape_string($con, $_POST['AGENT_CODE']);
    $agent_lname = mysqli_real_escape_string($con, $_POST['AGENT_LNAME']);
    $agent_fname = mysqli_real_escape_string($con, $_POST['AGENT_FNAME']);
    $agent_initial = mysqli_real_escape_string($con, $_POST['AGENT_INITIAL']);
    $agent_areacode = mysqli_real_escape_string($con, $_POST['AGENT_AREACODE']);
    $agent_phone = mysqli_real_escape_string($con, $_POST['AGENT_PHONE']);
    $agent_address = mysqli_real_escape_string($con, $_POST['AGENT_ADDRESS']);
    $agent_city = mysqli_real_escape_string($con, $_POST['AGENT_STATE']);
    $agent_state = mysqli_real_escape_string($con, $_POST['AGENT_CITY']);
    $agent_zip = mysqli_real_escape_string($con, $_POST['AGENT_ZIP']);
    $agent_date_hired = mysqli_real_escape_string($con, $_POST['AGENT_DATE_HIRED']);
    $agent_ytd_pay = mysqli_real_escape_string($con, $_POST['AGENT_YTD_PAY']);
    $agent_ytd_fit = mysqli_real_escape_string($con, $_POST['AGENT_YTD_FIT']);
    $agent_ytd_sls = mysqli_real_escape_string($con, $_POST['AGENT_YTD_SLS']);
    $agent_ytd_fica = mysqli_real_escape_string($con, $_POST['AGENT_YTD_FICA']);
    $agent_dep = mysqli_real_escape_string($con, $_POST['AGENT_DEP']);



    $query = "UPDATE agent SET AGENT_CODE='$agent_code', AGENT_LNAME='$agent_lname', AGENT_FNAME='$agent_fname', AGENT_INITIAL='$agent_initial', AGENT_AREACODE='$agent_areacode', AGENT_PHONE='$agent_phone', AGENT_ADDRESS='$agent_address', AGENT_CITY='$agent_city', AGENT_STATE='$agent_state', AGENT_ZIP='$agent_zip', AGENT_DATE_HIRED='$agent_date_hired', AGENT_YTD_PAY='$agent_ytd_pay', AGENT_YTD_FIT='$agent_ytd_fit', AGENT_YTD_SLS='$agent_ytd_sls', AGENT_YTD_FICA='$agent_ytd_fica', AGENT_DEP='$agent_dep' WHERE AGENT_CODE='$agent_code' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Agent Updated Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Agent Not Updated";
        header("Location: index.php");
        exit(0);
    }

}


if (isset($_POST['save_agent'])) {
    $agent_code = mysqli_real_escape_string($con, $_POST['AGENT_CODE']);
    $agent_lname = mysqli_real_escape_string($con, $_POST['AGENT_LNAME']);
    $agent_fname = mysqli_real_escape_string($con, $_POST['AGENT_FNAME']);
    $agent_initial = mysqli_real_escape_string($con, $_POST['AGENT_INITIAL']);
    $agent_areacode = mysqli_real_escape_string($con, $_POST['AGENT_AREACODE']);
    $agent_phone = mysqli_real_escape_string($con, $_POST['AGENT_PHONE']);
    $agent_address = mysqli_real_escape_string($con, $_POST['AGENT_ADDRESS']);
    $agent_city = mysqli_real_escape_string($con, $_POST['AGENT_STATE']);
    $agent_state = mysqli_real_escape_string($con, $_POST['AGENT_CITY']);
    $agent_zip = mysqli_real_escape_string($con, $_POST['AGENT_ZIP']);
    $agent_date_hired = mysqli_real_escape_string($con, $_POST['AGENT_DATE_HIRED']);
    $agent_ytd_pay = mysqli_real_escape_string($con, $_POST['AGENT_YTD_PAY']);
    $agent_ytd_fit = mysqli_real_escape_string($con, $_POST['AGENT_YTD_FIT']);
    $agent_ytd_fica = mysqli_real_escape_string($con, $_POST['AGENT_YTD_FICA']);
    $agent_ytd_sls = mysqli_real_escape_string($con, $_POST['AGENT_YTD_SLS']);
    $agent_dep = mysqli_real_escape_string($con, $_POST['AGENT_DEP']);

    $query = "INSERT INTO agent (AGENT_CODE, AGENT_LNAME, AGENT_FNAME, AGENT_INITIAL, AGENT_AREACODE, AGENT_PHONE, AGENT_ADDRESS, AGENT_STATE, AGENT_CITY, AGENT_ZIP, AGENT_DATE_HIRED, AGENT_YTD_PAY, AGENT_YTD_FIT, AGENT_YTD_SLS, AGENT_YTD_FICA, AGENT_DEP) 
    VALUES ('$agent_code','$agent_lname','$agent_fname','$agent_initial', '$agent_areacode', '$agent_phone', '$agent_address', '$agent_city', '$agent_state', '$agent_zip', '$agent_date_hired', '$agent_ytd_pay', '$agent_ytd_fit', '$agent_ytd_sls', '$agent_ytd_fica', '$agent_dep')";

    $query_run = mysqli_query($con, $query);
    if ($query_run) {
        $_SESSION['message'] = "Ctudent Created Successfully";
        header("Location: agent-create.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Customer Not Created";
        header("Location: agent-create.php");
        exit(0);
    }
}