<!DOCTYPE>
    <html>
    <head>
        <script src="<?= base_url('assets/javascript/login_signup.js') ?>"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>  
            
    <style>

            *{
                margin:0;
                padding:0;
                box-sizing: border-box;
            }
            .modal{
                position:fixed;
                padding-top:70px;
                width:100%;
                height:100%;
                margin:auto;
                border:2px solid red;
                background-color: rgb(0,0,0);
                background-color: rgba(0,0,0,.6);
                display:none;
                z-index: 1;
                top:0;
                left: 0;
                
            }

            .modal-content{
                width:25%;
                height:460px;
                margin:auto;
                background-color: white;
                border:1px solid black;
                border-radius: 5px;
                top:-100px;
                animation: drop 650ms ease forwards;
                
            }
            @keyframes drop{
                0%{ opacity:0; }
                70%{transform:translateY(20px);}
                100%{ transform:translateY(20px); opacity: 1;}
            }


            .close{
                float:right;
                cursor:pointer;
                font-size: 30px;
                font-weight: 800;
                margin-right: 15px;
            }
            #btn{
                width:100px;
                height:50px;
            }
            .modal-content h2{
                font-family: sans-serif;
                font-size: 18px;
                color:darkslategray;
                text-align: center;
                margin-top: 40px;
            }
            form{
                margin-top:30px;
                text-align: center;
            }
            .textfields{
                width:75%;
                height:33px;
                margin-top:8px;
                margin-top:5px;
                padding:2px 10px;
                font-family: sans-serif;
                font-size: 14px;
                border:1px solid gray;
                border-radius: 3px;
            }
            #myForm p{
                text-align: left;
                margin-left: 50px;
                font-size: 11px;
            }
            .signup{
                width:75%;
                height:30px;
                margin:10px 0 0 0;
                background-color: darkslategray;
                border:none;
                color:white;
                cursor: pointer;
                border:1px solid black;
                border-radius: 3px;
            }
            .modal-content p{
                font-family: sans-serif;
                font-size: 13px;
                color:darkslategray;
            }
            .modal-content a{

                font-family: sans-serif;
                font-size: 14px;
                color:#609cec;
                text-decoration: none;
                transition-duration: 0.4s;
            }
            .modal-content a:hover{
                text-decoration: underline;
                text-decoration-color: #609cec
            }

        </style>
        </head>
        <body>

            <div id="myModal" class="modal">
                
                <div class="modal-content">
                    <span class="close">&times;</span>
                    
                    <h2>Create an account</h2>
                    <form id="myForm" role="form"  method="post" >
                        <input type="text" class="textfield" id="names" name="name" placeholder="Name" maxlength="30">
                        <p id="err_name">a</p>
                        <input type="email" class="textfield" id="emails" name="email" placeholder="Email">
                        <p id="err_email" class="err" >a</p>
                        <input type="password" class="textfield" id="passwords" name="password" placeholder="Password">
                        <p id="err_password">a</p>
                        <input type="text" class="textfield" id="phones" name="phone" placeholder="Phone" maxlength="10" minlength="10" >
                        <p id="err_phone">a</p>
                        <button type="submit" class="signup" id="signUp_button" name="submit" >SIGN UP</button>
                    </form>
                    <p style="text-align:center; margin-top:20px;">Already have an account? <a  href="#" onclick="logindisp()">LOG IN</a></p>
                </div>
                 
            </div>
        </body>
                <!-- <script>

                      $(document).ready(function (){
                        $("#myForm").submit(function (e){
                            e.preventDefault();
                            var dataString = $("#myForm").serialize();
                        $.ajax({
                        type: "post",
                        url: "<?php //echo base_url();?>"+"index.php/Signup/add",
                        data: dataString,
                        success: function(){
                           alert('Successfull!');
                        }
                     });
                        e.stopImmediatePropagation();
                        return false;  //stop the actual form post !important!
                     
                          });
                       });
                    </script>  -->

                    <script>
                        $("#phones").keydown(function (e) {
                            // Allow: backspace, delete, tab, escape, enter
                            if ($.inArray(e.keyCode, [46, 8, 9, 27, 13]) !== -1 ||
                                 // Allow: Ctrl+A
                                (e.keyCode == 65 && e.ctrlKey === true) || 
                                 // Allow: home, end, left, right
                                (e.keyCode >= 35 && e.keyCode <= 39)) {
                                     // let it happen, don't do anything
                                     return;
                            }
                            // Ensure that it is a number and stop the keypress
                            if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                                e.preventDefault();
                            }
                        });
                // ***************************************form validation********************************
                    $(function () {
                        
                        $("#err_name").css('color', 'white');
                        $("#err_email").css('color', 'white');
                        $("#err_password").css('color', 'white');
                        $("#err_phone").css('color', 'white');

                        var err_name = false;
                        var err_email = false;
                        var err_password = false
                        var err_phone = false

                        $("#names").focusout(function() {
                            check_name();
                        });

                        $("#emails").focusout(function() {
                            check_email();
                            if(err_email == false) {
                                var ee = check();
                            }
                        });

                        $("#passwords").focusout(function() {
                            check_password();
                        });

                        $("#phones").focusout(function() {
                            check_phone();
                        });

                        function check_name()
                        {
                            var name_length = $("#names").val().length;
                            if(name_length < 4 || name_length > 20) {
                                $("#err_name").html("Name must be in between 4 to 20 character");
                                $("#err_name").css('color', 'red');
                                err_name = true;
                            }
                            else {
                                 $("#err_name").css('color', 'white');
                            }
                        }
                        function check_email()
                        {
                            var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{3,4}$/i);
                            if(pattern.test($("#emails").val())) {
                                $("#err_email").css('color', 'white');
                                err_email = false;
                            }
                            else {
                                 
                                $("#err_email").html("Please enter valid email address");
                                $("#err_email").css('color', 'red');
                                err_email = true;
                            }

                             
                        }

                        function check_password()
                        {
                            var name_email = $("#passwords").val().length;
                            if(name_email < 6) {
                                $("#err_password").html("Password shuld be at least 6 character");
                                $("#err_password").css('color', 'red');
                                err_password = true;
                            }
                            else {
                                 $("#err_password").css('color', 'white');
                            }
                        }

                        function check_phone()
                        {
                            var name_email = $("#phones").val().length;
                            if(name_email < 10) {
                                $("#err_phone").html("Please enter valid phone number");
                                $("#err_phone").css('color', 'red');
                                err_phone = true;
                            }
                            else {
                                 $("#err_phone").css('color', 'white');
                            }
                        }

                        // $("#emails").focusout(function (e) {
                        function check() {
                            var user_email  = $("#emails").val();
                            // alert(user_email);
                            var err = "lll";
                            $.ajax({
                                type:"POST",
                                dataType:"text",
                                url:"<?php echo base_url();?>"+"Test/check_email_existance",
                                data: {
                                    'email':user_email
                                },
                                success:function(res) {
                                    // alert(res);
                                    if(res != 0) {
                                        $("#err_email").css('color', 'red');
                                        $("#err_email").html("This email id is already registered");
                                        err_email = true;
                                        
                                        err = false;
                                        // alert("yes");
                                    }
                                    else
                                    {
                                        // $("#err_email").css('color', 'white');
                                        err_email = false;
                                         // alert("no");
                                    }

                                }
                            });
                            // alert("err_email out = " + err_email);
                            // return err;
                        }
                        //     e.stopImmediatePropagation();
                        //     return false; 
                        // });

                        //***************************************form validation end********************************

                        $(function (){
                            $("#myForm").submit(function (e){
                                e.preventDefault();

                                err_name = false;
                                err_email = false;
                                err_password = false
                                err_phone = false

                                check_name();
                                check_email();
                                check_password();
                                check_phone();
                                // var err = check();
                                // alert(err);
                                // var z = $("err_email").val();
                                // alert("z = " + z);
                            if(err_name == false && err_email == false && err_password == false && err_phone == false ) {  
                                var dataString = $("#myForm").serialize();
                                $.ajax({
                                type: "post",
                                url: "<?php echo base_url();?>"+"Signup/add",
                                data: dataString,
                                success: function(data){
                                    if(data == 1) {
                                        alert("Register Successfull. Login to Continue ");
                                        logindisp();
                                    }
                                    else
                                    {
                                        $("#err_email").css('color', 'red');
                                        $("#err_email").html("This email id is already registered");
                                    }  
                                }
                                });
                            }
                            else{
                                return false;
                            }
                            e.stopImmediatePropagation();
                            return false;  //stop the actual form post !important!
                         
                              });
                        });

                    });
                    </script> 
 
    </html>
        
        
            