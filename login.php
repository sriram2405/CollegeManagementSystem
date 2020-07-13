<?php
session_start();
error_reporting(0);
if(($_SESSION["designation"] && $_SESSION["designation"]=="student"))
{
  
     header("location:studentprofile.php"); 
  
}
else if(($_SESSION["designation"] && $_SESSION["designation"]=="faculty"))
{
  
     header("location:facultyprofile.php"); 
  
}

?>
<html>
    <head>
        <title>Login Page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="image/logo-preview-1aff644a-4eba-4f31-8e35-036f06cc6fe5.jpg" type="image/png" sizes="20x20">
            <style type="text/css">
                body
                    {
                        background-image: url('image/03-Stationary-3.jpg');
                    }
                    #loginpg
                    {
                        background-color: #001d804f ;margin-top: 5%;margin-left: 35%;height:40%;width:30%
                    }
            </style>
    </head>
    <body>
        <div id="loginpg" >
            <form name="loginForm" action="db_validation.php">
            
                <table  align="center" style=" font-weight: bolder; height: 80%;width:80% ">

                    <tr>
                        <td colspan=2 style="color: powderblue; font-size: 1.5em"><center>CMS Login</center></td>
                    </tr>

                    <tr>
                    <td>Username:</td>
                    <td><input type="text" size=25 name="userid"></td>
                    </tr>

                    <tr>
                    <td>Password:</td>
                    <td><input type="Password" size=25 name="pwd"></td>
                    </tr>

                    <tr>
                        <td><input style="background-color: darkgrey" type="button" value="Back" onclick="window.location.href='home.php'"></td>    
                    <td ><input style="background-color: darkgrey;margin-left: 30%" type="Reset" value="Clear"></td>
                    <td><input style="background-color: darkgrey" type="submit" value="Login"></td>
                    </tr>

                </table>
            </form>
        </div>
        
    </body>
</html>
