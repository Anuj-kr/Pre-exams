<!DOCTYPE html>
    <html>
        <head>
            <title>mainPage</title>
            <?= link_tag(base_url('assets/css/mainPage.css')) ?>
            <script src="<?= base_url('assets/javascript/login_signup.js') ?>">  
            </script>
            <!-- For font -->
            <link href='https://fonts.googleapis.com/css?family=Courgette' rel='stylesheet'>
            <!-- For Icons -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

            <link rel="code.jquery.com/jquery-2.1.3.min.js">
            <link rel="https://cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.2/jquery.scrollTo.min.js">
            <link rel="https://cdnjs.cloudflare.com/ajax/libs/jquery-localScroll/1.4.0/jquery.localScroll.min.js">
 
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
                            <img src="<?= base_url('assets/images/logo1.png') ?> " alt="logo" style="width:200px; height:55px;" >

                        </div>
                        <div id="navbar">
                            <ul id="nav">
                                <li><?= anchor('Main','Home');?></li>
                                <li><a id="cour" href="#course">Course</a></li>
                                <li><a id="feat" href="#">Features</a></li></li>
                                <li><a id="con" href="#">Contact</a></li>
                                <li><a id="login" href="#" onclick="logindisp()">login</a></li>
                                <li><a  id="signupNow" onclick="disp()">SignUp</a></li>
                            </ul>
                        </div>

                    </div>
                    <!-- <?php //include('navbar1.php'); ?> -->
                    <div id="container" >

                        <div id="sub_container" style="margin-top:50px;" >

                        <div id="banner1_and_features">

                            <div id="banner1">

                                <div class="banner-left-side">
                                    <h2 style="font-family: Calibri; font-size: 70px; color:darkslategray; margin-top:100px;letter-spacing: 2px;">ACE YOUR EXAM</h2>
                                    <h4 style="font-family: Calibri; font-size: 18px; color:darkslategray; text-align: center;">PRACTICE ANALYZE AND IMPROVE!</h4>
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

                            <div id="features_list" style="border:3px solid darkgray; text-align: center; ">
                                <div id="feature_heading" style="font-family: candara; font-size: 28px; font-weight: 100; width:100%; height:100px;">
                                    <h2 style="border:1px solid red; margin:0;">Features</h2>
                                </div>
                                <div class="bor" style="width:70px; height:3px; color:green;">
                                    </div>
                                <div class="feature" >

                                    <div class="features">
                                        <i class="fa fa-book" style="font-size:45px; float:left; margin:30px 10px 0 0px; color:#FF7F50;"></i><h2 class="feature-head">Up-to-date Exam Content</h2>
                                            <p class="feature-text" ">Created by Exam Toppers, Experts and Top Faculty across the country. Comprehensive course material updated with latest exam patterns. </p>
                                    </div>
                                    <div class="features">
                                    <i class="fa fa-book" style="font-size:45px; float:left; margin:30px 15px 0 0px; color:#FF7F50;"></i><h2 class="feature-head">Unlimited Practice For Free</h2>
                                            <p class="feature-text" ">Unlimited practice for unlimited times, without any cost, it's totaly free for you.Just Resister yourself and get started. </p>
                                    </div>
                                    <div class="features">
                                        <i class="fa fa-book" style="font-size:45px; float:left; margin:30px 0px 0 0px; color:#FF7F50;"></i><h2 class="feature-head">Extensive Online Test Series</h2>
                                            <p class="feature-text" ">Extensive range of high quality mock tests with thousands of questions and their solutions, as per latest exam pattern. Complete set of practice tests needed for all exams</p>
                                    </div>
                                    <div class="features">
                                        <i class="fa fa-book" style="font-size:45px; float:left; margin:30px 0px 0 0px; color:#FF7F50;"></i><h2 class="feature-head">Huge Database of Questions</h2>
                                            <p class="feature-text" ">Huge Database of Questions for Bank PO, Bank SO, Bank Clerk, RRB, Railway, SSC and all other Competitive Exams.</p>
                                    </div>
                                    <div class="features">
                                        <i class="fa fa-book" style="font-size:45px; float:left; margin:30px 0px 0 0px; color:#FF7F50;"></i><h2 class="feature-head">Customized Study Planners</h2>
                                            <p class="feature-text" ">Intelligent Planner creates a personalized study schedule based on syllabus, important topics and time available. Track your progress & upcoming tasks</p>
                                    </div>
                                    <div class="features">
                                        <i class="fa fa-book" style="font-size:45px; float:left; margin:30px 0px 0 0px; color:#FF7F50;"></i><h2 class="feature-head">Complete Course Material</h2>
                                            <p class="feature-text" ">Video lessons, Course eBooks, Topic wise Tests, Adaptive Tests, Mock Tests & Remedial Material on weak areas – all of which can be used anytime, anywhere </p>
                                    </div>


                                </div>

                            </div>

                        </div>


                            <div id="heading_and_course" style=" border:1px solid red;">
                                
                                <div id="heading" style=" border:1px solid blue;">
                                    <h2 style="text-align: center;">Best Exam Preparation for You. Start Now!</h2>
                                    <h4 style="text-align: center;">
                                        Boost your exam preparation with Us. Select your course and get started.
                                    </h4>
                                </div>

                                <div id="course" style="border:1px solid green;">
                                    <h1 style="border:1px solid yellow; font-family: Courgette; padding:30px 0 30px 0;color: darkslategray; text-align:center;font-size: 30px;">Courses</h1>


                                    <div id="subject_container" style="border: 1px solid red; ">
                                        <ul id="subj" style="list-style-type: none;">
                                            <li>
                                                <a  class="sub_anchor" href="#" ><i class="fa fa-bank" style="font-size:32px; margin-top:15px; margin-bottom:15px;"></i><h2 style="margin-top:10px;">Bank PO</h2>
                                                    <p class="sub_paragraph">IBPS PO, SBI PO, RRB Officer </p>
                                                </a>
                                            </li>
                                            <li>
                                                <a  class="sub_anchor" href="#" ><i class="fa fa-bank" style="font-size:32px; margin-top:15px; margin-bottom:15px;"></i><h2 style="margin-top:10px;">Bank SO</h2>
                                                    <p class="sub_paragraph">IBPS SO, SBI SO </p>
                                                </a>
                                            </li>
                                            <li>
                                                <a  class="sub_anchor" href="#" ><i class="fa fa-bank" style="font-size:32px; margin-top:15px; margin-bottom:15px;"></i><h2 style="margin-top:10px;">Bank Clerk</h2>
                                                    <p class="sub_paragraph">IBPS Clerk, SBI Clerk, RRB Assistant </p>
                                                </a>
                                            </li>
                                            <li>
                                                <a  class="sub_anchor" href="#" ><i class="fa fa-male" style="font-size:32px; margin-top:15px; margin-bottom:15px;"></i><h2 style="margin-top:10px;">SSC</h2>
                                                    <p class="sub_paragraph">SSC MTS, SSC CGL & Stenographer</p>
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
                                                    <p class="sub_paragraph">RBI Officer, RRB Assistant</p>
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
                                <!-- <div id="banner22"> -->
                                <h1 style="font-family: Courgette;font-size: 36px;color:white;padding: 80px 0px 10px 0px;letter-spacing: 2px;" >Start Your Exam Prepration Now</h1>
                                <h3 style="color:white;font-size: 16;font-family: monospace;">PRACTICE ANALYZE AND IMPROVE!</h3>
                                
                                
                                <button id="sign" class="button" onclick="disp()">GET STARTED</button>
                                
                                <!-- </div> -->
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
                                            © Copyright 2017-<a href="#">TestYourSelf.com </a>- All Rights Reserved. 
                                        </p>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>
            </div>

        <script type="text/javascript" src="<?php echo base_url('assets/js/nanobar.min.js') ?>"></script>
        </body>

        <script type="text/javascript">
            
            window.onload = function()
                {
                  var simplebar = new Nanobar();
                    simplebar.go(100);

                }

        </script>

        <script type="text/javascript">
        
        // Scroll to top animation

        $(document).on('click','#up-arrow',function(){
            $('html,body').animate({scrollTop:0},1000);
            return false;
        })
        // button controll
        var ammountScolled = 300;
        $(document).scroll(function(e){
            var ScrollPos = $(this).scrollTop();
            // console.log(ScrollPos);
            if(ScrollPos > ammountScolled){
                $('#up-arrow').fadeIn(600);
                // document.getElementById('up-arrow').style.display = "block";
            } else{
                $('#up-arrow').fadeOut(500);
                // document.getElementById('up-arrow').style.display = "none";
            }
        })
        </script>


        <!-- scroll to specific position -->
        <script type="text/javascript">
                // features
                $(document).on('click','#feat',function(){
                $('html,body').animate({scrollTop:590},1000);
                return false;
                    })

                //course
                $(document).on('click','#cour',function() {
                $('html,body').animate({scrollTop:1420},1000);
                return false;
                    })
              
                // contact
                $(document).on('click','#con',function(){
                $('html,body').animate({scrollTop:2425},1000);
                return false;
            })
            $("#nav").localScroll();
        </script>
    </html>
