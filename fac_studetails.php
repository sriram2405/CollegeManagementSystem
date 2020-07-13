<?php
 session_start();
 if(!($_SESSION["designation"]=="faculty"))
    {

         header("location:login.php");

    }

require_once 'db_connection.php';
$con=getConnection();
mysqli_select_db($con,"cms");
?>
<html>
    <head>
        <title>Submit Student</title>
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
                .profile{ margin-bottom: 25px;  }
                label { display: inline-block; width: 120px;}
                button{margin-right: 30px}

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

                #fac_profile {
                    top: 20px;
                    background-color: #4CAF50;
                }

                #fac_edit {
                    top: 80px;
                    background-color: orange;
                }

                #fac_stumarksheet {
                    top: 140px;
                    background-color: #f44336;
                }

                #fac_stuattendance {
                    top: 200px;
                    background-color: whitesmoke;
                }
            </style>
    </head>
    <body
        <div id="mySidenav" class="sidenav">
            <a href="facultyprofile.php" id="fac_profile">Faculty profile</a>
            <a href="editfaculty.php" id="fac_edit">Faculty edit</a>
            <a href="fac_stumarksheet.php" id="fac_stumarksheet">Student marksheet</a>
            <a style="color: black" href="fac_stuattendance.php" id="fac_stuattendance">Student attendance</a>
        </div>
        <h1 align="center" style="color: black; font-family: biggerlove; text-decoration: underline"> Enter Student</h1>
        <div id="studentprofile" style="margin-left: 10%">
            <form method="post">
                <fieldset>
                    <legend style="font-weight: bolder; font-size: 2em; margin-left: 1.5em;font-family: biggerlove">Profile</legend>

                    <div class='profile'>
                        <label>RollNo          : </label>
                        <input type="text" name="txtrno">
                    </div>
                    <div class='profile'>
                        <label>Name            : </label>
                        <input type="text" name="txtname">
                    </div>
                    <div class='profile'>
                        <label>Sex             : </label>
                        <input type="radio" name="sex" value="male" >Male
                        <input type="radio" name="sex" value="Female">Female
                    </div>
                    <div class='profile'>
                        <label>DOB   : </label>
                        <input type=date name="txtdob">
                    </div>
                    <div class='profile'>
                        <label>Department      : </label>
                    <select name="department">
                            <option value="-1" selected>select..</option>
                            <option>Mechanical</option>
                            <option>Civil</option>
                            <option>CSc</option>
                            <option>EEE</option>
                            <option>ECE</option>

                         </select>
                    </div>
                    <div class='profile'>
                        <label>Course          : </label>
                        <input type="text" name="txtcourse">
                    </div>
                    <div class='profile'>
                        <input type="submit" value="Sumbit" name="Submitbtn">

                    </div>

                </fieldset>
            </form>

        </div>
    </body>
</html>
<?php
require_once 'dbprocess.php';
    if(isset($_POST["Submitbtn"]))
        {
            $s_rno=$_POST["txtrno"];
            $s_name=$_POST["txtname"];
            $s_sex=$_POST["sex"];
            $s_dob=$_POST["department"];
            $s_course=$_POST["txtcourse"];


            $qry="select * from profile where username='".$s_rno."'";
            $res=mysqli_query($con,$qry);
            while($row=mysqli_fetch_array($res))
                {
                   $p_id=$row["id"];
                }

            $qry1="select * from student where profile_id='".$p_id."'";
            $res1=mysqli_query($con,$qry1);

            while($row=mysqli_fetch_array($res1))
                {
                   $student_id=$row["id"];
                }
            insert_details($student_id,$stotw,$sabs,$sperc);
        }
?>
