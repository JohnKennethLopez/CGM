<?php
session_start();
include('cgmdbconnection.php');
$dibconfig = mysqli_select_db($con,'cgm');


if(isset($_POST['delete_btn_set']))
{
    $del_id = $_POST['delete_id'];

    $query = "DELETE FROM appointment WHERE id='$del_id'";
    $query_run = mysqli_query($con, $query);
}

if(isset($_POST['confirm_btn_set']))
{
    $con_id = $_POST['confirm_id'];


        $update = "UPDATE appointment SET status = 'Confirmed' WHERE id = '$con_id'";
        $update_run = mysqli_query($con, $update);
}

?>
