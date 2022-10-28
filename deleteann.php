<?php

    $con=new mysqli('localhost','root','','cgm');

    if (isset($_GET['delete'])){
        $id = $_GET['delete'];
        $query_run=mysqli_query($con,"DELETE FROM announcement WHERE id=$id") or die ($con->error());
    }

    header("location:editAnnounce.php");

?>