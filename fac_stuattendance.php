
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
        <title>Submit Attendance</title>
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
                #mySidenav a 
                    {
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

                #mySidenav a:hover 
                    {
                        left: 0;
                    }

                #fac_profile 
                    {
                        top: 20px;
                        background-color: #4CAF50;
                    }

                #fac_student 
                    {
                        top: 80px;
                        background-color: orange;
                    }

                #fac_stumarksheet 
                    {
                        top: 140px;
                        background-color: #f44336;
                    }

                #fac_edit 
                    {
                    top: 200px;
                    background-color: whitesmoke;
                    }
            </style>
    </head>
    <body>
        <div id="mySidenav" class="sidenav">
        <a href="facultyprofile.php" id="fac_profile">Faculty profile</a>
        <a href="fac_studetails.php" id="fac_student">Student edit</a>
        <a href="fac_stumarksheet.php" id="fac_stumarksheet">Student marksheet</a>
        <a style="color: black" href="editfaculty.php" id="fac_edit">Faculty edit</a>
        </div>
        <h1 align='center' style="font-family: biggerlove;font-weight: bolder;text-decoration: underline" >Enter Attendance</h1>
            <form method="post">  
                <table border="1" style="border-style: double; border-color: white; width: 25%; height: 27%;margin-left: 40%;margin-top: 10%">
                    <tr>
                        <td>Rollno</td>
                        <td><input type="text" name="txtStudentRollno" ></td>
                    </tr>
                
                    <tr>
                        <td>Total Working Days</td>
                        <td><input type="text" name="txtTotalWorking" ></td>
                    </tr>
                    <tr>
                        <td>Absent</td>
                        <td><input type="text" name="txtabsent" ></td>
                    </tr>

                </table>
            <input type="submit" value="Sumbit" name="Submitbtn" style="margin-left: 49%;margin-top: 5%">
            </form>
        
    </body>
</html>
<?php
    require_once 'dbprocess.php';
        if(isset($_POST["Submitbtn"]))
            {
                $srno=$_POST["txtStudentRollno"];
                $stotw=$_POST["txtTotalWorking"];
                $sabs=$_POST["txtabsent"];
                $sperc=100.0-$sabs/$stotw*100.0;
                $qry="select * from profile where username='".$srno."'";
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