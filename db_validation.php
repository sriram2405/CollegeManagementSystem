  <?php
    session_start();

        require_once 'dbprocess.php';

            $uname=$_GET["userid"];
            $passw=$_GET["pwd"];

    check_details($uname, $passw);
?>
