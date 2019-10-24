<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>

<html>
<head>
    <title>REGISTRATION FORM</title>
    <style type="text/css">
        #mainBody{
            font-family: Arial, Helvetica, sans-serif;
            padding: 10px;
            display: block;
            min-width: 260px;
            max-width: 550px;
            margin: 100px 200px 50px 200px;
            background-color: #ffdbdb;

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
		background-color: #ff5791;
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
            <!-- <h1>REGISTRATION FORM</h1> -->
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
                    <input type="submit" id="regBtn" class="cstmButton" value="REGISTER">
                </form>
            </div>
    </div>
</body>
</html>