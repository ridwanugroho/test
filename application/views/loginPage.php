<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>

<html>
<head>
    <title>REGISTRATION FORM</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <style type="text/css">
        #mainBody{
            font-family: Arial, Helvetica, sans-serif;
            padding: 10px;
            display: block;
            min-width: 260px;
            max-width: 550px;
            
            color: white;
            position: absolute;
            margin-top: 50px;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: auto;
            left: 0;
            right: 0;
            top: 0;

        }

        .cstmForm{
            width: 100%;
            min-width: 200px;
            max-width: 500px;
        }

        #login{
            background-color: #32715f;
        }

        #loginFrm{
            max-width: 500px;
        }

        .cstmForm {
            box-sizing : border-box;
            width: 100%;
            padding: 5px;
            font-size: 12pt;
            margin-bottom: 20px;
        }

        .cstmButton {
            background-color: #0e3e30;
            border-color: #5f8c7f;
            border: none;
            color: white;
            padding: 5px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
	    }

    </style>


</head>

<header>

</header>

<body>
    <div align="center" id="mainBody">
        <div id="login">
            <h1>LOGIN</h1>
            <div id="loginFrm">
                <form id='form1' action="" align="left" onsubmit="return false">
                    <label>Email</label><br>
                    <input type="text" id="email" class="cstmForm" placeholder="Email" required><br>
                    <label>Password</label><br>
                    <input type="text" id="passwd" class="cstmForm" placeholder="Password" required><br>
                    <input type="submit" id="regBtn" class="btn btn-primary btn-sm cstmButton" value="LOGIN">
                </form>
            </div>
        </div>
    </div>
</body>
</html>