<?php

include('cgmdbconnection.php');

    if (isset($_GET['delete'])){
        $id = $_GET['delete'];
        $query_run=mysqli_query($con,"DELETE FROM prayer WHERE id=$id") or die ($con->error());
    }

    header("location:viewprayer.php");

?>