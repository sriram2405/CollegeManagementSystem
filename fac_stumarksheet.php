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
        <title>Submit Marksheet</title>
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

                #fac_profile {
                    top: 20px;
                    background-color: #4CAF50;
                }

                #fac_student {
                    top: 80px;
                    background-color: orange;
                }

                #fac_edit {
                    top: 140px;
                    background-color: #f44336;
                }

                #fac_stuattendance {
                    top: 200px;
                    background-color: whitesmoke;
                }
            </style>
    </head>
    <body>
        <div id="mySidenav" class="sidenav">
            <a href="facultyprofile.php" id="fac_profile">Faculty profile</a>
            <a href="fac_studetails.php" id="fac_student">Student edit</a>
            <a href="editfaculty.php" id="fac_edit">Faculty edit</a>
            <a style="color: black" href="fac_stuattendance.php" id="fac_stuattendance">Student attendance</a>
        </div>
        <h1 align='center' style="font-family: biggerlove;font-weight: bolder;text-decoration: underline" >Enter Marksheet</h1>
            <form method="post"> 
                <table border="1" style="border-style: double; border-color: white; width: 20%; height: 50%; margin-left:40%;margin-top: 5% ">
               
                    <tr>
                        <td>Rollno</td>
                        <td><input type="text" name="txtStudentRollno" ></td>
                    </tr>
                    <tr>
                        <td>Subject 1</td>
                        <td><input type="text" name="txtSubject1"></td>
                    </tr>
                        <tr>
                            <td>Subject 2</td>
                            <td><input type="text" name="txtSubject2"></td>
                        </tr>
                        <tr>
                            <td>CoreSubject1</td>
                            <td><input type="text" name="txtCoreSubject1"></td>
                        </tr>
                        <tr>
                            <td>CoreSubject2</td>
                            <td><input type="text" name="txtCoreSubject2"></td>
                        </tr>
                        <tr>
                            <td>CoreSubject3</td>
                            <td><input type="text" name="txtCoreSubject3"></td>
                        </tr>
                        <tr>
                            <td>Grade</td>
                            <td><input type="text" name="txtGrade" ></td>
                        </tr>
                </table>
        <br><button style="margin-left: 45%" name="submitbtn">Submit</button>
    </body>
</html>
<?php
require_once 'dbprocess.php';
if(isset($_POST["submitbtn"]))
{
    
$srno=$_POST["txtStudentRollno"];
$sm1=$_POST["txtSubject1"];
$sm2=$_POST["txtSubject2"];
$sm3=$_POST["txtCoreSubject1"];
$sm4=$_POST["txtCoreSubject2"];
$sm5=$_POST["txtCoreSubject3"];
$sgrade=$_POST["txtGrade"];
$stot=$sm1+$sm2+$sm3+$sm4+$sm5;
$savg=$stot/5;

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
    insert_markdetails($student_id,$sm1,$sm2,$sm3,$sm4,$sm5,$stot,$savg,$sgrade);
}
?>