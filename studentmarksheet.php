<?php
    session_start();
    if(!($_SESSION["designation"]=="student"))
        {
         header("location:login.php"); 
        }

    require_once 'db_connection.php';
    $con=getConnection();
    mysqli_select_db($con,"cms");
    $profileid=$_SESSION["profile_id"];
    $rollno=$_SESSION["rno"];
    $qry="select * from student where profile_id='".$profileid."'";
    $res=mysqli_query($con,$qry);

        while($row=mysqli_fetch_array($res))
            {
                $stu_id=$row["id"];
                $stu_name=$row["name"];
                $qry1="select * from stu_marksheet where student_id='".$stu_id."'";
                $res1=mysqli_query($con,$qry1);
            while($row=mysqli_fetch_array($res1))
                {
                    $m1=$row["m1"];
                    $m2=$row["m2"];
                    $m3=$row["m3"];
                    $m4=$row["m4"];
                    $m5=$row["m5"];
                    $tot=$row["total"];
                    $avg=$row["avg"];
                    $grade=$row["grade"];
                }

            }
    
    mysqli_close($con);
?>
<html>
    <head>
        <title>StudentMarksheet</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="image/logo-preview-1aff644a-4eba-4f31-8e35-036f06cc6fe5.jpg" type="image/png" sizes="20x20">
        <style type="text/css">
                    body
                        {
                            background: linear-gradient(105deg, #0288d1 0%, #26c6da 100%);
                        }
                    @font-face { font-family: lemonade; src: url('font/lemonade.ttf'); }
                    @font-face { font-family: biggerlove; src: url('font/BiggerLove-DEMO.ttf'); }
                    @font-face { font-family: gum; src: url('font/Gumption-lite.ttf'); }
                    
        </style>
        <style>
            #mySidenav a {
                position: absolute;
                left: -160px;
                transition: 0.3s;
                padding: 15px;
                width: 200px;
                text-decoration: none;
                font-size: 20px;
                color: white;
                border-radius: 0 5px 5px 0;
            }

            #mySidenav a:hover {
                left: 0;
            }

            #stu_profile {
                top: 20px;
                background-color: orange;
            }

            #stu_edit {
                top: 80px;
                background-color: whitesmoke;
            }

            #stu_attendance {
                top: 140px;
                background-color: #f44336;
            }

        </style>
        <script type="text/javascript">
            function showReport()
                {
                    var marksheet = document.getElementById("marksheetReport");
                    marksheet.style.display="block";
                }     
        </script>
    </head>
    <body>
        <h1 align='center' style="font-family: biggerlove;font-weight: bolder;text-decoration: underline" >Marksheet</h1>
            <div id="mySidenav" class="sidenav">
                <a href="studentprofile.php" id="stu_profile">Student profile</a>
                <a style="color: black" href="editstudent.php" id="stu_edit">Edit Student</a>
                <a href="studentattendance.php" id="stu_attendance">Student attendance</a>
            </div>
            <div style="margin-left: 10%">
                <fieldset style="width:600px">
                    <legend><b>Student Result:</b></legend>
                        Rollno:<input type="text" name="txtrollno" value="<?php echo "$rollno"; ?>" readonly="readonly">
                 <br/><br/>
                <br/><br/>
                <input type="button" value="Get Result" onclick="showReport()">
                <button onclick="window.location.href='logout.php'">Logout</button>
                </fieldset>
            <div id="marksheetReport" style="display: none">
                <h2>Report Card</h2>
                    <table border="1" style="border-style: double; border-color: white; width: 20%; height: 50%">
                        <tr>
                            <td>Name</td>
                            <td><label><?php echo "$stu_name"; ?></label></td>
                        </tr>
                        <tr>
                            <td>Rollno</td>
                            <td><label><?php echo "$rollno"; ?></label></td>
                        </tr>
                        <tr>
                            <td>Subject 1</td>
                            <td><label><?php echo "$m1"; ?></label></td>
                        </tr>
                        <tr>
                            <td>Subject 2</td>
                            <td><label><?php echo "$m2"; ?></label></td>
                        </tr>
                        <tr>
                            <td>CoreSubject1</td>
                            <td><label><?php echo "$m3"; ?></label></td>
                        </tr>
                        <tr>
                            <td>CoreSubject2</td>
                            <td><label><?php echo "$m4"; ?></label></td>
                        </tr>
                        <tr>
                            <td>CoreSubject3</td>
                            <td><label><?php echo "$m5"; ?></label></td>
                        </tr>
                        <tr>
                            <td>Total Marks</td>
                            <td><label><?php echo "$tot"; ?></label></td>
                        </tr>
                        <tr>
                            <td>Average Marks</td>
                            <td><label><?php echo "$avg"; ?></label></td>
                        </tr>
                        <tr>
                            <td>Grade</td>
                            <td><label><?php echo "$grade"; ?></label></td>
                        </tr>

                    </table>
            </div>
            </div>
        </body>
</html>
