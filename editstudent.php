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
        <title>Edit MyProfile</title>
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

                #stu_profile 
                    {
                        top: 20px;
                        background-color: orange;
                    }

                #stu_attendance 
                    {
                        top: 80px;
                        background-color: whitesmoke;
                    }

                #stu_marksheet 
                    {
                        top: 140px;
                        background-color: #f44336;
                    }
            </style>
    </head>
    <body>
        <h1 align="center" style="color: black; font-family: biggerlove; text-decoration: underline">Student Profile</h1>
            <div id="mySidenav" class="sidenav">
                <a href="studentprofile.php" id="stu_profile">Student profile</a>
                <a style="color: black" href="studentattendance.php" id="stu_attendance">Student attendance</a>
                <a href="studentmarksheet.php" id="stu_marksheet">Student marksheet</a>
            </div>
            <div id="studentprofile" style="margin-left: 10%">
                <form action="stu_updation.php">
                    <fieldset>
                        <legend style="font-weight: bolder; font-size: 2em; margin-left: 1.5em;font-family: biggerlove">Profile</legend>
                            <div class='profile'><label>Name            : </label><input type="text" name="txtname" value="<?php echo $name; ?>"></div>
                            <div class='profile'><label>DOB   : </label><input type=date name="txtdob" value="<?php echo $dob; ?>"></div>
                            <div class='profile'><label>Blood Group     :</label>

                                <select name="bloodgroup">
                                    <option value="-1">select..</option>
                                    <option value="A+ve"
                                        <?php 
                                    if($bg=="A+ve")
                                    {
                                        echo "selected";
                                    }
                                        ?>       
                                    >A+ve</option>
                                    <option value="B+ve"
                                            <?php 
                                                if($bg=="B+ve")
                                                    {
                                                        echo "selected";
                                                    }
                                            ?>
                                    >B+ve</option>
                                    <option value="AB+ve"
                                            <?php 
                                                if($bg=="AB+ve")
                                                    {
                                                        echo "selected";
                                                    }
                                            ?>
                                            >AB+ve</option>
                                    <option value="O+ve"
                                            <?php 
                                                if($bg=="O+ve")
                                                    {
                                                        echo "selected";
                                                    }
                                            ?>
                                            >O+ve</option>
                                    <option value="A-ve"
                                            <?php 
                                                if($bg=="A-ve")
                                                    {
                                                        echo "selected";
                                                    }
                                            ?>
                                            >A-ve</option>
                                    <option value="B-ve"
                                            <?php 
                                                if($bg=="B-ve")
                                                    {
                                                        echo "selected";
                                                    }
                                            ?>
                                            >B-ve</option>
                                    <option value="AB-ve"
                                            <?php 
                                                if($bg=="AB-ve")
                                                    {
                                                        echo "selected";
                                                    }
                                            ?>
                                            >AB-ve</option>
                                    <option value="O-ve"
                                            <?php 
                                                if($bg=="O-ve")
                                                    {
                                                        echo "selected";
                                                    }
                                            ?>
                                            >O-ve</option>
                                </select>
                            </div>
                            <div class='profile'><label>Father's Name   : </label><input type="text" name="txtfn" value="<?php echo $fn; ?>"></div>
                            <div class='profile'><label>Phone Number    :</label><input type="text" name="txtphno" value="<?php echo $phno; ?>"></div> 
                            <div class='profile'><label>City            :</label>
                                <select name="txtcity" >
                                    <option value="-1">select..</option>
                                    <option value="Coimbatore"
                                             <?php 
                                                if($city=="Coimbatore")
                                                    {
                                                        echo "selected";
                                                    }
                                            ?>
                                            >Coimbatore</option>
                                    <option value="Chennai"
                                            <?php 
                                                if($city=="Chennai")
                                                    {
                                                        echo "selected";
                                                    }
                                            ?>
                                            >Chennai</option>
                                    <option value="Karur"
                                            <?php 
                                                if($city=="Karur")
                                                    {
                                                        echo "selected";
                                                    }
                                            ?>
                                            >Karur</option>
                                    <option value="Tirupur"
                                            <?php 
                                                if($city=="Tirupur")
                                                    {
                                                        echo "selected";
                                                    }
                                            ?>
                                            >Tirupur</option>
                                    <option value="Erode"
                                            <?php 
                                                if($city=="Erode")
                                                    {
                                                        echo "selected";
                                                    }
                                            ?>
                                            >Erode</option>
                                    <option value="Trichy"
                                            <?php 
                                                if($city=="Trichy")
                                                    {
                                                        echo "selected";
                                                    }
                                            ?>
                                            >Trichy</option>
                                </select>
                            </div>
                            <div class='profile'><label>Address         :</label><textarea name="txtaddress" ><?php echo $address;?></textarea></div>
                            <div class='btn'>
                                <button>Submit</button>

                                <button>Cancel</button>
                            </div>
           
                    </fieldset>
                </form>
            </div>    
    </body>
</html>
