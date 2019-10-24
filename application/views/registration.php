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
            background-color: #32715f;
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

        #registration{
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
            background-color: #043125;
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
            <h1>REGISTRATION FORM</h1>
            <div id="registration">
                <form action="" align="left">
                    <label>First Name</label><br>
                    <input type="text" id="fnameInpt" class="cstmForm" placeholder="First name"><br>
                    <label>Last Name</label><br>
                    <input type="text" id="lnameInpt" class="cstmForm" placeholder="Last Name"><br>
                    <label>Phone Number</label><br>
                    <input type="text" id="phInpt" class="cstmForm" placeholder="Phone Number"><br>
                    <label>Email Address</label><br>
                    <input type="text" id="emailInpt" class="cstmForm" placeholder="Email Address"><br>
                    <input type="submit" id="regBtn" class="btn btn-primary btn-sm" value="REGISTER" onclick="">
                </form>
            </div>
    </div>
    <div id="info">
    </div>
</body>
</html>