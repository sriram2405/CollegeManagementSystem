
<?php

    function getConnection()
        {

            $con = mysqli_connect("localhost", "root", "");
                if(!$con)
                    {
                         die("Error in connection  ".mysql_error());
                    }
            return $con;
        }
?>

