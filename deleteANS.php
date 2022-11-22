<?php
session_start();
include('cgmdbconnection.php');
$dibconfig = mysqli_select_db($con,'cgm');


if(isset($_POST['delete_btn_set']))
{
    $del_id = $_POST['delete_id'];

    $query = "DELETE FROM answer WHERE id='$del_id'";
    $query_run = mysqli_query($con, $query);
}

?>