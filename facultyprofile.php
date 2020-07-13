<?php
session_start();
if(!($_SESSION["designation"]=="faculty"))
    {
      header("location:login.php"); 
    }
    require_once 'db_connection.php';
    $con=getConnection();
    mysqli_select_db($con,"cms");
    $profileid=$_SESSION["profile_id"];
    $qry1="select * from profile where id='".$profileid."'";
    $qry="select * from faculty where profile_id='".$profileid."'";
    $res1=mysqli_query($con,$qry1);
    $res=mysqli_query($con,$qry);

    while($row=mysqli_fetch_array($res1))
        {
           $eno=$row["username"]; 
        }
    
    while($row=mysqli_fetch_array($res))
        {
            $name=$row["name"];
            $sex=$row["sex"];
            $bg=$row["bg"];
            $dept=$row["dept"];
            $phno=$row["phno"];
            $city=$row["city"];
            $address=$row["address"];

        }
    mysqli_close($con);
?>
<html>
    <head>
        <title>Faculty Profile</title>
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
                    .fprofile{ margin-bottom: 25px;  }
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

                #fac_edit {
                    top: 20px;
                    background-color: #4CAF50;
                }

                #fac_student {
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
    <body>
        <div id="logoutbtn">
            <button style="margin-left: 90%; margin-top: 3%"onclick="window.location.href='logout.php'">Logout</button>
        </div>
        <h1 align="center" style="color: black; font-family: biggerlove; text-decoration: underline">Faculty Profile</h1>
        <div id="mySidenav" class="sidenav">
            <a href="editfaculty.php" id="fac_edit">Faculty edit</a>
            <a href="fac_studetails.php" id="fac_student">Student edit</a>
            <a href="fac_stumarksheet.php" id="fac_stumarksheet">Student marksheet</a>
            <a style="color: black" href="fac_stuattendance.php" id="fac_stuattendance">Student attendance</a>
        </div>
        <div id="Facultyprofile" style="margin-left: 10%">
            <form>
                <fieldset>
                    <legend style="font-weight: bolder; font-size: 2em; margin-left: 1.5em;font-family: biggerlove">Profile</legend>
                    <div>
                    <div class='fprofile'>
                        <label>EmployeeId          : </label>
                        <label><?php echo $eno; ?></label>
                    </div>
                    <div class='fprofile'>
                        <label>Name            : </label>
                        <label><?php echo $name; ?> </label>
                    </div>
                    <div class='fprofile'>
                        <label>Sex             : </label>
                        <label> 
                            <?php 
                            
                                echo $sex;
                            ?>
                        </label>       
                    </div>
                    
                    <div class='fprofile'>
                        <label>Blood Group     :</label>
                        <label><?php echo $bg; ?></label>
                        
                    </div>
                    
                    <div class='fprofile'>
                        <label>Department      : </label>
                        <label><?php echo $dept; ?></label> 
                    
                    </div>
                   
                    <div class='fprofile'>
                        <label>Phone Number    :</label>
                        <label><?php echo $phno; ?></label>
                    </div> 
                    <div class='fprofile'>
                        <label>City            :</label>
                         <label><?php echo $city; ?></label>
                     </div>
                    <div class='fprofile'>
                        <label>Address         :</label>
                        <label><?php echo $address;?></label>    
                    </div>
                    
                    </div>
                </fieldset>
            </form>
            <div class='btn'>
                        <button onclick="window.location.href='editfaculty.php'">Edit</button>
                        <button onclick="window.location.href='logout.php'">Logout</button>
                    </div>
        </div>    
    </body>
</html>
