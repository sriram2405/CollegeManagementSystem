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
    $qry1="select * from profile where id='".$profileid."'";
    $qry="select * from student where profile_id='".$profileid."'";
    $res1=mysqli_query($con,$qry1);
    $res=mysqli_query($con,$qry);

    while($row=mysqli_fetch_array($res1))
        {
            $rno=$row["username"]; 
        }
          while($row=mysqli_fetch_array($res))
            {
                $name=$row["name"];
                $sex=$row["sex"];
                $dob=$row["dob"];
                $bg=$row["bg"];
                $fn=$row["fn"];
                $dept=$row["dept"];
                $course=$row["course"];
                $phno=$row["phno"];
                $city=$row["city"];
                $address=$row["address"];
            }
    mysqli_close($con);

?>
<html>
    <head>
        <title>Student Profile</title>
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

                #stu_edit {
                    top: 20px;
                    background-color: orange;
                }

                #stu_attendance {
                    top: 80px;
                    background-color: whitesmoke;
                }

                #stu_marksheet {
                    top: 140px;
                    background-color: #f44336;
                }


            </style>
    </head>
    <body>
        <h1 align="center" style="color: black; font-family: biggerlove; text-decoration: underline">Student Profile</h1>
            <div id="mySidenav" class="sidenav">
                 <a href="editstudent.php" id="stu_edit">Edit Student</a>
                 <a style="color: black" href="studentattendance.php" id="stu_attendance">Student attendance</a>
                 <a href="studentmarksheet.php" id="stu_marksheet">Student marksheet</a>
            </div>
        <div id="studentprofile" style="margin-left:10%">
            <form>
                <fieldset>
                    <legend style="font-weight: bolder; font-size: 2em; margin-left: 1.5em;font-family: biggerlove">Profile</legend>
                    <div>
                    <div class='profile'>
                        <label>RollNo          : </label>
                        <label><?php echo $rno; ?></label> 
                    </div>
                    <div class='profile'>
                        <label>Name            : </label>
                        <label><?php echo $name; ?> </label>
                    </div>
                    <div class='profile'>
                        <label>Sex             : </label>
                        <label> 
                            <?php 
                            
                                echo $sex;
                            ?>
                        </label>       
                        
                    </div>
                    <div class='profile'>
                        <label>DOB   : </label>
                        <label><?php echo $dob; ?></label>
                    </div>
                    <div class='profile'>
                        <label>Blood Group     :</label>
                        <label><?php echo $bg; ?></label>
                        
                    </div>
                    <div class='profile'>
                        <label>Father's Name   : </label>
                        <label><?php echo $fn; ?></label>
                    </div>
                    <div class='profile'>
                        <label>Department      : </label>
                        <label><?php echo $dept; ?></label>                    
                    </div>
                    <div class='profile'>
                        <label>Course          : </label>
                        <label><?php echo $course; ?></label>
                    </div>
                    <div class='profile'>
                        <label>Phone Number    :</label>
                        <label><?php echo $phno; ?></label>
                    </div> 
                    <div class='profile'>
                        <label>City            :</label>
                        <label><?php echo $city; ?></label>
                     </div>
                    <div class='profile'>
                        <label>Address         :</label>
                        <label><?php echo $address;?></label>
                    </div>
                    
                    </div>
                </fieldset>
            </form>
            <div class='btn'>                        
                        <button onclick="window.location.href='editstudent.php'">Edit</button>
                        <button onclick="window.location.href='logout.php'">Logout</button>
                    </div>
        </div>    
    </body>
</html>

