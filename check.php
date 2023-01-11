<?php
session_start();
include('cgmdbconnection.php');

if (isset($_POST['submit'])) {
    $chapter = $_POST['cgmchapter'];

    header("Location: appointmentform.php?chapter=$chapter");
}
?>