<?php
session_start();
?>
<html>
    <head>
        <title>Signup page</title>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
                body{
                        background: linear-gradient(105deg, #0288d1 0%, #26c6da 100%);
                    }  
                    table{width: 25em;height: 20em}
                    .signup{background-color: whitesmoke;height:50%;width:32%;margin-left: 25%;margin-top: 7%;padding-left: 10%}
                    @font-face { font-family: biggerlove; src: url('font/BiggerLove-DEMO.ttf'); }    
    </style>
    </head>
    <body>
        <form method="post" action="">
        <div class="signup">
            <table>
                <caption style="font-weight: bolder;font-family: biggerlove;font-size: 2em; text-decoration: underline; margin-right: 5em">Signup Form</caption>
                <tr>
                    <td>Name:</td>
                    <td><input type="text" ></td>
                </tr>
                <tr>
                    <td>DOB:</td>
                    <td><input type="date" ></td>
                </tr>
                <tr>
                <td>Designation:</td>
                <td><input type="text" ></td>
            </tr>
            <tr>
                <td>Username:</td>
                <td><input type="text" ></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password"></td>
            </tr>
            <tr>
                <td>Re-Enter Password:</td>
                <td><input type="password"></td>
            </tr>
            <tr>
                <td><input type="submit" value="SIGNUP"></td>
                <td><button value="cancel">Cancel</button></td>
            </tr>
            </table>
        </div>
       </form>
    </body>
</html>
