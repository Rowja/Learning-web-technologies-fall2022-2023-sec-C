<?php

session_start();

 

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
                <a href="home.php">Home</a>
                <p style="display: inline;">|</p>
                <a href="login.html">Login</a>
                <p style="display: inline;">|</p>
                <a href="registration.html">Registration</a>
            </td></tr></table>

            <table border="1" height="500px" width=100% >
                <td height ="500px">
                    <form action="registration.php" style="display: inline-block;" method="post">
                    <fieldset>
                        <legend><h3>Login</h3></legend>
                        <label for="user_name">User Name : </label>
                        <input type="text" name="user_name" id="user_name">
                        <br>
                        <br>
                        <label for="password">Password: </label>
                        <input type="password" name="password" id="password">
                        <br>
                        <br>
                        <hr>
                        <input type="radio" id="remember_me">
                        <label for="remember_me">Remember Me</label>
                        <br>
                        <br>
                        <button type="submit">Submit</button>
                        <a href="Forgot password.html">Forgot Password?</a>
                    </fieldset>
                </form>
                </td>
                
                <tr>
                    <td  height="25px">
                        <footer style="text-align: center;">Copyright © 2017</footer>
                    </td>
                </tr>
                </table>
                </body>
                </html>