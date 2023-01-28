<?php

$con = mysqli_connect("localhost","root","","insureco_db");

if(!$con){
    die('Connection Failed'. mysqli_connect_error());
}
