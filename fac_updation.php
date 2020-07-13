<?php
    require_once 'dbprocess.php';
    $fname=$_GET["txtname"];
    $fbg=$_GET["Bloodgroup"];
    $fphno=$_GET["txtphno"];
    $fcity=$_GET["txtcity"];
    $faddress=$_GET["txtaddress"];
    update_facdetails($fname,$fbg,$fphno,$fcity,$faddress);
?>