<?php
    require_once 'dbprocess.php';
    $sname=$_GET["txtname"];
    $sdob=$_GET["txtdob"];
    $sbg=$_GET["bloodgroup"];
    $sfn=$_GET["txtfn"];
    $sphno=$_GET["txtphno"];
    $scity=$_GET["txtcity"];
    $saddress=$_GET["txtaddress"];
    update_details($sname,$sdob,$sbg,$sfn,$sphno,$scity,$saddress);
?>