<?php

session_start();

if(!isset($_COOKIE['status'])){
  header('location: login.php?err=bad_request');
}

?>

<html>
<head>
    <title>LAB5.2</title>
</head>
<body>
    <table border="1" width="100%">
        <tr height="50px">
            
             <td style="text-align: right;">
                <h1 style ="text-align: left;">Company</h1>
                <p><a href="Bob.html">Logged in as Bob</a></p>
                <p style="display: inline;">|</p>
                <a href="logout.html">Log out</a>
            </td></tr></table>

        </table>
        <table border="1" cellspacing="0" height="250px" width="100%">
        <tr>
            <td width="250px">
                <h1>Account</h1><hr>
                <ul>
                    <li>
                        <a href="Dashboard.html">Dashboard</a>
                    </li>
                    <li>
                        <a href="View profile.html">View Profile</a>
                    </li>
                    <li>
                        <a href="Edit profile.html">Edit Profile</a>
                    </li>
                    <li>
                        <a href="Profile picture.html">Profile Picture</a>
                    </li>
                    <li>
                        <a href="Change password.html">Change Password</a>
                    </li>
                    <li>
                        <a href="Logout.html">Logout</a>
                    </li>
                </ul>
            </td>
            <td>
                <fieldset>
                    <legend>
                        <h3> Profile Picture</h3></legend>
                        <img src="pic.jpg" width="100"height="100"> 
                        <label for="img">Select image:</label>
  <input type="file" id="img" name="img" accept="image/*"><br><br>
  <input type="submit">
  </fieldset>
  </td>
  </tr>
  </table>
  <table border="1" cellspacing="0" height="25px" width="100%">
    <tr>
        <td>
            <footer style="text-align: center;">Copyright © 2017</footer>
        </td>
    </tr>
    </table>
    </body>
    </html>



