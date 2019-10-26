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

        #registration{
            background-color: #32715f;
        }

        #registrationFrm{
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
            margin-bottom: 10px;
	    }

        .disableView{
            filter: opacity(60%);
        }

    </style>

    <script type="text/javascript">  

        function sendData(frm){
            var val = frm.value;
            if(val != ""){
                var data = {[frm.id] : val}
                if(frm.id == 'phone' || frm.id == 'email'){
                    jQuery.ajax({
                        async : false,
                        type : 'POST',
                        url : 'http://localhost/test/index.php/validate',
                        data : {'dataKey' : data},
                        success : function(response){
                            if(response == 'invalid'){
                                console.log(response);
                                window.alert(val + " is exist!");
                                frm.value = '';
                                frm.focus();
                            }

                            else
                                saveSession(data);
                        }
                    });
                }

                else
                    saveSession(data);
            }
        }

        function saveSession(data){
            jQuery.ajax({
                async : false,
                type : 'POST',
                url : 'http://localhost/test/index.php/session',
                data : {'dataKey' : data},
                success : function(response){
                    return response;
                }
            });
        }

        function validateForm(){
            var frm = document.getElementById('form1');
            for(var i=0; i<frm.elements.length; i++){
                if(frm.elements[i].value == '' && frm.elements[i].hasAttribute('required'))
                    return false;
            }

            return true;
        }

        function updateDb(){
            if(validateForm()){
                jQuery.ajax({
                    type : 'POST',
                    url :'http://localhost/test/index.php/update',
                    success : function(response){
                        console.log(response);
                    }
                });

                disableForm();
            }
        } 

        function disableForm(){
            $('#registration').attr('class', 'disableView');
            $('.form1 input').attr('disabled', true);
            $('#loginBtn').removeAttr('hidden');
        }

    </script>

</head>

<header>

</header>

<body>
    <div align="center" id="mainBody">
        <div id="registration">
            <h1>REGISTRATION FORM</h1>
            <div id="registrationFrm">
                <form id='form1' action="" align="left" onsubmit="return false">
                    <label>First Name</label><br>
                    <input type="text" id="fname" class="cstmForm" placeholder="First name" required onfocusout="sendData(this)"><br>
                    <label>Last Name</label><br>
                    <input type="text" id="lname" class="cstmForm" placeholder="Last Name" required onfocusout="sendData(this)"><br>
                    <label>Phone Number</label><br>
                    <input type="number" id="phone" class="cstmForm" placeholder="Phone Number" required onfocusout="sendData(this)"><br>
                    <label>Email Address</label><br>
                    <input type="email" id="email" class="cstmForm" placeholder="Email Address" required onfocusout="sendData(this)"><br>
                    <input type="radio" id="male" value="male" onfocusout="sendData(this)"> Male
                    <input type="radio" id="female" value="female" onfocusout="sendData(this)"> Female<br> <br>
                    Born Date <br>
                    <input type="date" id="date" class="cstmForm" onfocusout="sendData(this)">
                    <input type="submit" id="regBtn" class="btn btn-primary btn-sm cstmButton" value="REGISTER" onclick="updateDb()">
                </form>
            </div>
        </div>
        <div id="login">
            <br>
            <a href="http://localhost/test/index.php/login"><input type="button" id="loginBtn" class="btn btn-primary btn-sm" value="LOGIN" hidden></a>
        </div>
    </div>
</body>
</html>