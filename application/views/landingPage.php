<!DOCTYPE html>
    <html>
        <head>
            <title>Pre-exams</title>
            <?= link_tag('assets/css/mainPage.css'); ?>
           
            <meta  name="viewport" content="width=device-width, initial-scale=1.0"/>
            
              <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
            <!-- For font -->
            <link href='https://fonts.googleapis.com/css?family=Courgette' rel='stylesheet'>
            <!-- For Icons -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
           
            <!-- For font -->
            <link href='https://fonts.googleapis.com/css?family=Courgette' rel='stylesheet'>

            <!-- For Icons -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


 <style type="text/css">
.modal{
                position:fixed;
                padding-top:70px;
                width:100%;
                height:100%;
                margin:auto;
                /*border:2px solid red;*/
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
             .loginmodal{
                position:fixed;
                padding-top:70px;
                width:100%;
                height:100%;
                margin:auto;
                /*border:2px solid red;*/

                background-color: rgb(0,0,0);
                background-color: rgba(0,0,0,.6);
                display:none;
                z-index: 1;
                top:0;
                left: 0;
                
            }


            .loginmodal-content{
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


            .closeLogin{
                float:right;
                cursor:pointer;
                font-size: 30px;
                font-weight: 800;
                margin-right: 15px;
            }
           
            .loginmodal-content h2{
                font-family: sans-serif;
                font-size: 18px;
                color:darkslategray;
                text-align: center;
                margin-top: 40px;
            }
            form{
                margin-top:11px;
                text-align: center;
            }
            #lg_form p{
                text-align: left;
                margin-left: 50px;
                font-size: 11px;
            }
            .textfield{
                width:75%;
                height:33px;
                margin-top:11px;
                padding:2px 10px;
                font-family: sans-serif;
                font-size: 14px;
                border:1px solid gray;
                border-radius: 3px;
            }
            .login{
                width:75%;
                height:30px;
                margin:12px 0;
                background-color: darkslategray;
                border:none;
                color:white;
                cursor: pointer;
                border:1px solid black;
                border-radius: 3px;
            }
            .loginmodal-content p{
                font-family: sans-serif;
                font-size: 13px;
                color:darkslategray;
            }
            .loginmodal-content a{

                font-family: sans-serif;
                font-size: 14px;
                color:#609cec;
                text-decoration: none;
            }
            .loginmodal-content a:hover{
                text-decoration: underline;
                text-decoration-color: #609cec
            }
            #forgot-password{
                text-decoration: none; 
                font-family: sans-serif;
                font-size: 10px;
            }
            #forgot-password:hover{
                text-decoration: underline;
            }  

            #login_error{
                text-align: center;
                margin-top:10px;
                font-family: calibri;
                font-size: 14px;
                color:red;
                /*transition-duration: 5s;*/
            } 

</style>

        </head>

        <body>

        <?php include('signup.php') ;?> 
        <?php include('login.php'); ?>
      
         
            
            <div id="main_container" style=" border-top: 0.1px solid white; box-sizing:border-box;" >   
            <!-- Arrow up icon start-->
                <div id="up-arrow" style="width:45px;height:45px; border-radius:40px; padding:10px 0 0 12px;background-color: cornflowerblue; right:3%; bottom: 7%; position: fixed; display: none;" >
                    <a href=""><i class="fa fa-arrow-up" style="font-size: 25px;color:white; text-align: center;"></i></a>
                </div>
                <!-- Arrow up icon end -->
                <div id="header">

                        <div id="logo_container">
                            <a href="<?= base_url(''); ?>"><img src="<?= base_url('assets/images/logo1.png') ?> " alt="logo" style="width:150px; height:27px; margin:12px 0 0 20px;"></a>
                            Beta

                        </div>
                        <div id="navbar">
                            <ul id="nav">
                                <!-- <li><?= anchor('Main','Home');?></a></li> -->
                                <li><a id="ho" href="<?= base_url();?>" style="color: cornflowerblue; border-bottom: 2px solid cornflowerblue;">Home</a></li>
                                <li><a id="feat" href="">Features</a></li>
                                <li><a id="cour" href="">Course</a></li>
                                <li><a id="con" href="">Contact</a></li>
                                <li><a id="login" onclick="logindisp()" style="cursor: pointer;">login</a></li>
                                <li><a  id="signupNow" onclick="disp()" style="cursor: pointer;">SignUp</a></li>
                            </ul>
                        </div>

                    </div>
                    <!-- <?php //include('navbar1.php'); ?> -->
                    <div id="container" >

                        <div id="sub_container" style="margin-top:50px;" >

                        <div id="banner1_and_features">

                            <div id="banner1">

                                <div class="banner-left-side">
                                    <h2 id="top-heading" style="">ACE YOUR EXAM</h2>
                                    
                                    <p style="font-family: Calibri; font-size: 20px; color:darkslategray; text-align: left; margin-top:50px;line-height: 
                                    ">
                                        Join the most comprehensive online preparation portal for Banking and Government exams. Explore a range of mock<br> tests and study material.
                                    </p>

                                    <button id="signupNow" class="tp-button" onclick="disp()">GET STARTED</button>
                                </div>

                                <div id="image">
                                    <img src= "<?=base_url('assets/images/main1.png') ?>" alt=" " style="width:100%; height:100%;">
                                </div>

                            </div>

                            <div id="features_list" style="text-align: center; ">
                                <div id="feature_heading" style="">
                                    <h2 >Features</h2>
                                    <div id="bbbb" style=""></div>
                                </div>
                                
                                <div class="feature" >

                                    <div class="features">
                                        <i class="fa fa-book" style="font-size:45px; float:left; margin:30px 10px 0 0px; color:#FF7F50;"></i><h2 class="feature-head">Up-to-date Exam Content</h2>
                                            <p class="feature-text">Created by Exam Toppers, Experts and Top Faculty across the country. Comprehensive course material updated with latest exam patterns. </p>
                                    </div>
                                    <div class="features">
                                    <i class="fa fa-book" style="font-size:45px; float:left; margin:30px 15px 0 0px; color:#FF7F50;"></i><h2 class="feature-head">Unlimited Practice For Free</h2>
                                            <p class="feature-text">Unlimited practice for unlimited times, without any cost, it's totaly free for you.Just Resister yourself and get started. </p>
                                    </div>
                                    <div class="features">
                                        <i class="fa fa-book" style="font-size:45px; float:left; margin:30px 0px 0 0px; color:#FF7F50;"></i><h2 class="feature-head">Extensive Online Test Series</h2>
                                            <p class="feature-text">Extensive range of high quality mock tests with thousands of questions and their solutions, as per latest exam pattern. Complete set of practice tests needed for all exams</p>
                                    </div>
                                    <div class="features">
                                        <i class="fa fa-book" style="font-size:45px; float:left; margin:30px 0px 0 0px; color:#FF7F50;"></i><h2 class="feature-head">Huge Database of Questions</h2>
                                            <p class="feature-text">Huge Database of Questions for Bank PO, Bank SO, Bank Clerk, RRB, Railway, SSC and all other Competitive Exams.</p>
                                    </div>
                                    <div class="features">
                                        <i class="fa fa-book" style="font-size:45px; float:left; margin:30px 0px 0 0px; color:#FF7F50;"></i><h2 class="feature-head">Customized Study Planners</h2>
                                            <p class="feature-text">Intelligent Planner creates a personalized study schedule based on syllabus, important topics and time available. Track your progress & upcoming tasks</p>
                                    </div>
                                    <div class="features">
                                        <i class="fa fa-book" style="font-size:45px; float:left; margin:30px 0px 0 0px; color:#FF7F50;"></i><h2 class="feature-head">Complete Course Material</h2>
                                            <p class="feature-text">Video lessons, Course eBooks, Topic wise Tests, Adaptive Tests, Mock Tests & Remedial Material on weak areas – all of which can be used anytime, anywhere </p>
                                    </div>


                                </div>

                            </div>

                        </div>


                            <div id="heading_and_course">
                                
                                <div id="heading" style=" border:1px solid blue;">
                                    <h2 style="text-align: center;">Best Exam Preparation for You. Start Now!</h2>
                                    <h4 style="text-align: center;">
                                        Boost your exam preparation with Us. Select your course and get started.
                                    </h4>
                                </div>

                                <div id="course" style="width:100%;">
                                    <h1 id="course-head">Courses</h1>


                                    <div id="subject_container">
                                        <ul id="subj" style="list-style-type: none;">
                                            <li>
                                                <a  class="sub_anchor" href="#" ><i class="fa fa-bank" style="font-size:32px; margin-top:15px; margin-bottom:15px;"></i><h2 style="margin-top:10px;">Bank PO</h2>
                                                    <p class="sub_paragraph">IBPS PO, SBI PO</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a  class="sub_anchor" href="#" ><i class="fa fa-bank" style="font-size:32px; margin-top:15px; margin-bottom:15px;"></i><h2 style="margin-top:10px;">Bank SO</h2>
                                                    <p class="sub_paragraph">IBPS SO, SBI SO </p>
                                                </a>
                                            </li>
                                            <li>
                                                <a  class="sub_anchor" href="#" ><i class="fa fa-bank" style="font-size:32px; margin-top:15px; margin-bottom:15px;"></i><h2 style="margin-top:10px;">Bank Clerk</h2>
                                                    <p class="sub_paragraph">IBPS Clerk, SBI Clerk</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a  class="sub_anchor" href="#" ><i class="fa fa-male" style="font-size:32px; margin-top:15px; margin-bottom:15px;"></i><h2 style="margin-top:10px;">SSC</h2>
                                                    <p class="sub_paragraph">SSC MTS, SSC CGL</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a  class="sub_anchor" href="#" ><i class="fa fa-train" style="font-size:32px; margin-top:15px; margin-bottom:15px;"></i><h2 style="margin-top:10px;">Railway</h2>
                                                    <p class="sub_paragraph">Railway RRB, NTPC</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a  class="sub_anchor" href="#" ><i class="fa fa-bank" style="font-size:32px; margin-top:15px; margin-bottom:15px;"></i><h2 style="margin-top:10px;">Apptitude</h2>
                                                    <p class="sub_paragraph">Campus  Placement </p>
                                                </a>
                                            </li>
                                            <li>
                                                <a  class="sub_anchor" href="#" ><i class="fa fa-book" style="font-size:32px; margin-top:15px; margin-bottom:15px;"></i><h2 style="margin-top:10px;">Current Affairs</h2>
                                                    <p class="sub_paragraph">GK & Current Affairs</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a  class="sub_anchor" href="#" ><i class="fa fa-bank" style="font-size:32px; margin-top:15px; margin-bottom:15px;"></i><h2 style="margin-top:10px;">RBI</h2>
                                                    <p class="sub_paragraph">RBI Officer</p>
                                                </a>
                                            </li>
                                        </ul>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div id="banner2_and_footer">
                            
                            <div id="banner2" style="border:1px solid black;">
                             <!-- <img src="<?= base_url('assets/images/logo1.png') ?> " alt="logo" style="width:100%; height:355px;" > -->
                                <div id="banner22">
                                    <h1 >Start Your Exam Prepration Now</h1>
                                    <h3 >PRACTICE ANALYZE AND IMPROVE!</h3>
                                    <button id="sign" class="button" onclick="disp()">GET STARTED</button>
                                </div>
                            </div>

                            <div id="footer_and_get_in_touch">
                                
                            <?php include('contact.php'); ?> 
                                
                                <div id="footer" >
                                    <div class="footer-social">
                                        <i class="fa fa-facebook "></i>
                                        <i class="fa fa-twitter"></i>
                                        <i class="fa fa-youtube"></i>
                                    </div>
                                    <div class="footer-copyright">
                                        <p style="font-size: 16px; font-family: Calibri; color:darkslategray;">
                                            © Copyright 2017-<a href="#">Pre-exams </a>- All Rights Reserved. 
                                        </p>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>
            
           
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.2/jquery.scrollTo.min.js"></script>
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-localScroll/1.4.0/jquery.localScroll.min.js"></script>
            <script src="<?php echo base_url('assets/javascript/login_signup.js'); ?>">  
        <script type="text/javascript" src="<?php echo base_url('assets/js/nanobar.min.js') ?>"></script>
        

        <script type="text/javascript">
            
            window.onload = function()
                {
                  var simplebar = new Nanobar();
                    simplebar.go(100);

                }

        </script>

        <script type="text/javascript">
        
       

        $(document).on('click','#up-arrow',function(){
            $('html,body').animate({scrollTop:0},1000);
            return false;
        })
        
        var ammountScolled = 300;
        $(document).scroll(function(e){
            var ScrollPos = $(this).scrollTop();
            

            if(ScrollPos > ammountScolled){
                $('#up-arrow').fadeIn(600);
                
            } else{
                $('#up-arrow').fadeOut(500);
                
            }
            
// *********************************for changing color of nav li ***************************
            if(ScrollPos < 580) {
                set_color('#ho');
                reset_color('#feat','#cour','#con');
            }
            else if(ScrollPos > 580 && ScrollPos < 1410) {
                set_color("#feat");
                reset_color('#cour','#con','#ho');
            }
            else if(ScrollPos > 1410 && ScrollPos < 2310) {
                set_color("#cour");
                reset_color('#feat','#con','#ho');
            }
            else if(ScrollPos > 2310) {
                set_color("#con");
                reset_color('#cour','#feat','#ho');
            }
            else {
                $("#ho").css('color','cornflowerblue');
                $("#ho").css('border-bottom','2px solid cornflowerblue');
            }
        });

        function set_color(tag)
        {
            $(tag).css('color','cornflowerblue');
            $(tag).css('border-bottom','2px solid cornflowerblue');
        }
        function reset_color(p, q, r) {
            $(p).css('color','darkslategray');
            $(p).css('border-bottom','none');
            $(q).css('color','darkslategray');
            $(q).css('border-bottom','none');
            $(r).css('color','darkslategray');
            $(r).css('border-bottom','none');
        }

 // *********************************for changing color of nav li *****************************
        </script>


        <!-- scroll to specific position -->
        <script type="text/javascript">
                
                $(document).on('click','#feat',function(){
                $('html,body').animate({scrollTop:640},800);
                return false;
                    })

                
                $(document).on('click','#cour',function() {
                $('html,body').animate({scrollTop:1480},800);
                return false;
                    })
              
                
                $(document).on('click','#con',function(){
                $('html,body').animate({scrollTop:2465},800);
                return false;
            })
            $("#nav").localScroll("this");
        </script>
        </body>
    </html>
