<?php
    require_once 'db_connection.php';

        function check_details($uname,$passw)
                {

                    $con=getConnection();
                    mysqli_select_db($con,"cms");

                        $qry="select * from profile where username='".$uname."' and password='".$passw."'";

                            $res=mysqli_query($con,$qry);

                                while($row=mysqli_fetch_array($res))
                                    {
                                        $_SESSION["profile_id"]=$row["id"];
                                        $_SESSION["rno"]=$row["username"];
                                        $_SESSION["designation"]=$row["designation"];
                                        $des=$row["designation"];
                                            if($des=="student")
                                                {
                                                    header("Location:studentprofile.php");
                                                }
                                            else 
                                                {
                                                    header("location:facultyprofile.php");    
                                                }
                                    }

    
                        mysqli_close($con);
                }
                
    function update_details($sname,$sdob,$sbg,$sfn,$sphno,$scity,$saddress)
        {
            $con=getConnection();
            mysqli_select_db($con,"cms");
            $profileid=$_SESSION["profile_id"];
            $ss="update student set name='$sname',dob='$sdob',bg='$sbg',fn='$sfn',phno='$sphno',city='$scity',address='$saddress' where profile_id='".$profileid."'";

                if(mysqli_query($con,$ss))
                    {
                        echo header("Location:studentprofile.php");
                    }
                else
                    {
                        die(mysql_error());
                    }
            mysql_close($con);

    
        }
        
    function update_facdetails($fname,$fbg,$fphno,$fcity,$faddress)
        {
            $con=getConnection();
            mysqli_select_db($con,"cms");
            $profileid=$_SESSION["profile_id"];
            $ss="update faculty set name='$fname',bg='$fbg',phno='$fphno',city='$fcity',address='$faddress' where profile_id='".$profileid."'";

                if(mysqli_query($con,$ss))
                    {
                        echo header("Location:facultyprofile.php");
                    }
                else
                    {
                        die(mysql_error());
                    }
            mysql_close($con);

        }
        
    function insert_details($student_id,$stotw,$sabs,$sperc)
        {
            $con=getConnection();
            mysqli_select_db($con,"cms");
            $ss="insert into stu_attendance (student_id,totw,absent,percent) values ($student_id,$stotw,$sabs,$sperc)";

                if(mysqli_query($con,$ss))
                    {
                        echo"<script>alert('Inserted successfully')</script>";
                    }
                else
                    {
                        die(mysql_error());
                    }
            mysqli_close($con);
        }

    function insert_markdetails($student_id,$sm1,$sm2,$sm3,$sm4,$sm5,$stot,$savg,$sgrade)
        {
            $con=getConnection();
            mysqli_select_db($con,"cms");
            $ss="insert into stu_marksheet (student_id,m1,m2,m3,m4,m5,total,avg,grade) values ($student_id,$sm1,$sm2,$sm3,$sm4,$sm5,$stot,$savg,'$sgrade')";

                if(mysqli_query($con,$ss))
                    {
                        echo"<script>alert('Inserted successfully')</script>";
                    }
                else
                    {
                        die(mysql_error());
                    }
            mysqli_close($con);
        }

?>

