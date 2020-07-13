<?php
session_start();

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
                   $rno=$row["username"]; 
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
        <title>Edit Faculty </title>
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

                #fac_stuattendance 
                    {
                        top: 200px;
                        background-color: white;
                    }
            </style>
    </head>
    <body>
        
        <h1 align="center" style="color: black; font-family: biggerlove; text-decoration: underline">Edit Faculty</h1>
            <div id="mySidenav" class="sidenav">
                <a href="facultyprofile.php" id="fac_profile">Faculty profile</a>
                <a href="fac_studetails.php" id="fac_student">Student edit</a>
                <a href="fac_stumarksheet.php" id="fac_stumarksheet">Student marksheet</a>
                <a style="color: black" href="fac_stuattendance.php" id="fac_stuattendance">Student attendance</a>
            </div>
            <div id="Facultyprofile" style="margin-left: 10%">
                <form action="fac_updation.php">
                    <fieldset>
                        <legend style="font-weight: bolder; font-size: 2em; margin-left: 1.5em;font-family: biggerlove">Profile</legend>
                            <div>
                    
                                <div class='fprofile'><label>Name            : </label><input type="text" name="txtname" value="<?php echo $name; ?>"></div>
                    
                    
                                <div class='fprofile'><label>Blood Group     :</label>
                        
                                    <select name="Bloodgroup">
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
                                <div class='fprofile'><label>Phone Number    :</label><input type="text" name="txtphno" value="<?php echo $phno; ?>"></div> 
                                <div class='fprofile'><label>City            :</label>
                                    <select name="txtcity">
                                        <option value="-1" selected>select..</option>
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
                                <div class='fprofile'><label>Address         :</label><textarea name="txtaddress" ><?php echo $address;?></textarea></div>
                                <div class='btn'>
                                    <button>Submit</button>
                                    <button>Cancel</button>
                                </div>
                            </div>
                    </fieldset>
                </form>
            </div>    
    </body>
</html>

