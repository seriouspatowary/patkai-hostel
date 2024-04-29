<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'includes.php' ?>
    <script>
        $(document).ready(function(){
            //administration
            window.document.getElementById('first_tab').click();
        });
    </script>
</head>
<body >
    <!--    navigation bar-->
    <?php include_once 'navigation.html'?>

<!--     Administration -->

    <div class="container bottom-25">
        <h3 class="topic">Administration</h3>
        <div class="tab">
            <button id="first_tab" class="tablinks" onclick="openTab(event, 'warden')">Senior Warden</button>
            <button class="tablinks" onclick="openTab(event, 'a_warden')">Warden</button>
            <button class="tablinks" onclick="openTab(event, 'prefect')">Prefect</button>
            <button class="tablinks" onclick="openTab(event, 'ass_prefect')">Assistant Prefect</button>
            <button class="tablinks" onclick="openTab(event, 'auditor')">Auditor</button>
            <button class="tablinks" onclick="openTab(event, 'convener')">Convener</button>
            <button class="tablinks" onclick="openTab(event, 'o_staff')">Office Staff</button>
            <button class="tablinks" onclick="openTab(event, 'tech_team')">Web Master</button>
        </div>
<!--        warden-->
        <div id="warden" class="tab_content">
            <div class="row zero_mar zero_pad">
                <div class="col-lg-6 zero_pad">
                    <div class="col-lg-5 col-md-4 f_left">
                        <img src="media/admin/nabin.jpg" class="img-thumbnail img-fluid" alt="Nabin">
                    </div>
                    <div class="col-lg-7 col-md-8 f_right">
                        <h5>Dr. Nabin Sarmah</h5>
                        <p>Assistant Professor<br>
                            Department of Energy<br>
                            Tezpur University<br>
                            <i class="fa fa-mobile" aria-hidden="true"></i>+91 371-227-5314<br>
                            <i class="fa fa-envelope" aria-hidden="true"></i><a href="nabin@tezu.ernet.in"> nabin@tezu.ernet.in</a><br>
                            <i class="fa fa-globe" aria-hidden="true"></i> <a href=" http://www.tezu.ernet.in/dener/people/Resume_Dr%20Nabin%20Sarmah.pdf"> Dr. Nabin Sarmah</a></p>
                    </div>
                </div>
                <!--                former prefects-->
                <div class="col-sm-12 zero_pad former_div">
                    <h5>Former Warden</h5>
                    <h6>Dr. Satya Sundar Bhattacharya - Dept. of Environmental Science</h6>
                    <h6>Dr. Bhabesh Nath - Dept. of Computer Science & Engineering</h6>
                </div>
            </div>
        </div>
<!--        Assistant Warden-->
        <div id="a_warden" class="tab_content">
            <div class="row zero_mar zero_pad">
                <div class="col-lg-6 zero_pad">
                    <div class="col-lg-5 col-md-4 f_left">
                        <img src="media/admin/sushen.jpg" class="img-thumbnail img-fluid" alt="Sushen">
                    </div>
                    <div class="col-lg-7 col-md-8 f_right">
                        <h5>Dr. Sushen Kirtania</h5>
                        <p>Assistant Professor<br>
                            Department of Mechanical Engineering<br>
                            Tezpur University<br>
                            <i class="fa fa-mobile" aria-hidden="true"></i>+91-3712-27-5857<br>
                            <i class="fa fa-envelope" aria-hidden="true"></i><a href="sushen@tezu.ernet.in"> sushen@tezu.ernet.in</a><br>
                            <i class="fa fa-globe" aria-hidden="true"></i> <a href="http://www.tezu.ernet.in/dmech/people/Updated_Fac_Profile/gen_format.php?INI=SK1">Dr. Sushen Kirtania</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!--Prefect-->
        <div id="prefect" class="tab_content">
            <div class="row zero_mar zero_pad">
                <div class="col-lg-6 zero_pad">
                    <div class="col-lg-5 col-md-4 f_left">
                        <img src="media/admin/rishi.jpeg" class="img-thumbnail img-fluid" alt="Bitupan">
                    </div>
                    <div class="col-lg-7 col-md-8 f_right">
                        <h5>Mr. Hrishikesh Bharali</h5>
                        <p>Prefect<br>
                            Patkai Men's Hostel <br>
                            Department Of MBBT<br>
                            Tezpur University<br>
                            <i class="fa fa-mobile" aria-hidden="true"></i>+91-7576862749<br>
                    </div>
                </div>
                <!--                former prefects-->
                <div class="col-sm-12 zero_pad former_div">
                    <h5>Former Prefects</h5>
                    <h6>Mr. Daniel Basumatary [2021-22]</h6>
                    <h6>Mr. Pradipta Kalita [2020-2021]</h6>
                    <h6>Mr. Bitupan Das [2019-2020]</h6>
                    <h6>Mr. Padum Chetry [2018-2019]</h6>
                    <h6>Mr. Madhab Gogoi [2017-2018]</h6>
                    <h6>Mr. Emon Goswami [2016-2017]</h6>
                </div>
            </div>
        </div>

        <!--Assistant Prefect-->
        <div id="ass_prefect" class="tab_content">
            <div class="row zero_mar zero_pad">
<!--                one-->
                <div class="col-lg-6 zero_pad">
                    <div class="col-lg-5 col-md-4 f_left">
                        <img src="media/admin/prabitra.jpeg" class="img-thumbnail img-fluid" alt="Pradipta">
                    </div>
                    <div class="col-lg-7 col-md-8 f_right">
                        <h5>Mr. Pabitra Brahma</h5>
                        <p>Assistant Prefect<br>
                            Patkai Men's Hostel<br>
                            Department Of  Civil Engineering<br>
                            Tezpur University<br>
                            <i class="fa fa-mobile" aria-hidden="true"></i>+91-7002582538<br>
                    </div>
                </div>
<!--                two-->
                <div class="col-lg-6 zero_pad">
                    <div class="col-lg-5 col-md-4 f_left">
                        <img src="media/admin/abhinas.jpeg" class="img-thumbnail img-fluid" alt="Bibek">
                    </div>
                    <div class="col-lg-7 col-md-8 f_right">
                        <h5>Mr. Abinash Sharma</h5>
                        <p>Assistant Prefect<br>
                            Patkai Men's Hostel<br>
                            Dept. Of Civil Engineering<br>
                            Tezpur University<br>
                            <i class="fa fa-mobile" aria-hidden="true"></i>+91-7002300793<br>
                    </div>
                </div>
<!--                three-->
                <div class="col-lg-6 zero_pad">
                    <div class="col-lg-5 col-md-4 f_left">
                        <img src="media/admin/cse_guy.jpg" class="img-thumbnail img-fluid" alt="Amar">
                    </div>
                    <div class="col-lg-7 col-md-8 f_right">
                        <h5>Mr. Rajdeep Bora</h5>
                        <p>Assistant Prefect<br>
                            Patkai Men's Hostel<br>
                            Computer Science and Engineering<br>
                            Tezpur University<br>
                            <i class="fa fa-mobile" aria-hidden="true"></i>+91-7702829834<br>
                    </div>
                </div>
<!--                four-->
                <div class="col-lg-6 zero_pad">
                    <div class="col-lg-5 col-md-4 f_left">
                        <img src="media/admin/chimoy.jpg" class="img-thumbnail img-fluid" alt="Pranav">
                    </div>
                    <div class="col-lg-7 col-md-8 f_right">
                        <h5>Mr. Chinmoy Das</h5>
                        <p>Assistant Prefect<br>
                            Patkai Men's Hostel<br>
                            Department Of Physics<br>
                            Tezpur University<br>
                            <i class="fa fa-mobile" aria-hidden="true"></i>+91-8399870864<br>
                    </div>
                </div>
       <!-- five -->
                <div class="col-lg-6 zero_pad">
                    <div class="col-lg-5 col-md-4 f_left">
                        <img src="media/admin/bharali.jpg" class="img-thumbnail img-fluid" alt="Pranav">
                    </div>
                    <div class="col-lg-7 col-md-8 f_right">
                        <h5>Mr. Ankur Bharali</h5>
                        <p>Assistant Prefect<br>
                            Patkai Men's Hostel<br>
                            Dept. Of  Electronics and Communication Engineering<br>
                            Tezpur University<br>
                            <i class="fa fa-mobile" aria-hidden="true"></i>+91-7099312195<br>
                    </div>
                </div>
<!--                          six -->
                <div class="col-lg-6 zero_pad">
                    <div class="col-lg-5 col-md-4 f_left">
                        <img src="media/admin/abhay.jpeg" class="img-thumbnail img-fluid" alt="Pranav">
                    </div>
                    <div class="col-lg-7 col-md-8 f_right">
                        <h5>Mr. Abhay Kumar</h5>
                        <p>Assistant Prefect<br>
                            Patkai Men's Hostel<br>
                            Department Of Mechanical Engineering<br>
                            Tezpur University<br>
                            <i class="fa fa-mobile" aria-hidden="true"></i>+91-9135842011<br>
                    </div>
                </div>
                <!--                former prefects-->
                <div class="col-sm-12 zero_pad former_div">
                    <h5>Former Assistant Prefects</h5>
                    <h6>Mr. Hrishikesh Bharali[2021-22]</h6>
                    <h6>Mr. Shirsa Mazumder[2021-22]</h6>
                    <h6>Mr. Pritom Kumar Nath[2021-22]</h6>
                    <h6>Mr. Ankur Gohain [2021-2022]</h6>
                    <h6>Mr. Ashit Singh Rajput [2021-22]</h6>

                </div>
            </div>
        </div>

        <!--Auditor-->
        <div id="auditor" class="tab_content">
            <div class="row zero_mar zero_pad">
                <div class="col-lg-6 zero_pad">
                    <div class="col-lg-5 col-md-4 f_left">
                        <img src="media/admin/bharali.jpg" class="img-thumbnail img-fluid" alt="Jitul">
                    </div>
                    <div class="col-lg-7 col-md-8 f_right">
                        <h5>Mr. Ankur Bharali</h5>
                        <p>Assistant Prefect<br>
                            Patkai Men's Hostel <br>
                            Dept. Of  Electronics and Communication Engineering<br>
                            Tezpur University<br>
                            <i class="fa fa-mobile" aria-hidden="true"></i>+91-7099312195<br>
                    </div>
                </div>
                <!--                former prefects-->
                <div class="col-sm-12 zero_pad former_div">
                    <h5>Former Auditor</h5>
                    <h6>Mr. Ankur Gohain [2021-2022]</h6>
                </div>
            </div>
        </div>

        <!--Convener-->
        <div id="convener" class="tab_content">
            <div class="row zero_mar zero_pad">
<!--                one-->
                <div class="col-lg-6 zero_pad">
                    <div class="col-lg-5 col-md-4 f_left">
                        <img src="media/admin/abhay.jpeg" class="img-thumbnail img-fluid" alt="Angshuman">
                    </div>
                    <div class="col-lg-7 col-md-8 f_right">
                        <h5>Mr. Abhay Kumar</h5>
                        <p>Mess Convener<br>
                            Patkai Men's Hostel <br>
                            Department Of Mechanical Engineering<br>
                            Tezpur University<br>
                            <i class="fa fa-mobile" aria-hidden="true"></i>+91-9135842011<br>
                    </div>
                </div>
<!--                two-->
                <div class="col-lg-6 zero_pad">
                    <div class="col-lg-5 col-md-4 f_left">
                        <img src="media/admin/chimoy.jpg" class="img-thumbnail img-fluid" alt="Dhritisman">
                    </div>
                    <div class="col-lg-7 col-md-8 f_right">
                        <h5>Mr. Chinmoy Das</h5>
                        <p>Cultural Convenor<br>
                            Patkai Men's Hostel<br>
                            Department Of Physics<br>
                            Tezpur University<br>
                            <i class="fa fa-mobile" aria-hidden="true"></i>+91-8399870864<br>
                    </div>
                </div>
                <!--                former convener-->
                <div class="col-sm-12 zero_pad former_div">
                    <h5>Former Conveners</h5>
                    <h6>Mr. Ashit Singh Rajput [2021-22(Mess Convenor)]</h6>
                    <h6>Mr. Abinash Sharma [2021-22(Sports Convenor)]</h6>
                </div>
            </div>
        </div>

        <!--Office Staffs-->
        <div id="o_staff" class="tab_content">
            <div class="row zero_mar zero_pad">
                <div class="col-lg-6 zero_pad">
                    <div class="col-lg-5 col-md-4 f_left">
                        <img src="media/admin/alom.jpeg" class="img-thumbnail img-fluid" alt="Najimul">
                    </div>
                    <div class="col-lg-7 col-md-8 f_right">
                        <h5>Mr. Shakirul Alam</h5>
                        <p>Caretaker<br>
                            Patkai Men's Hostel<br>
                            Tezpur University<br>
                            <i class="fa fa-mobile" aria-hidden="true"></i>+91-9957515947<br>
                    </div>
                </div>

            </div>
        </div>

        <!--webmaster-->
        <div id="tech_team" class="tab_content">
            <div class="row zero_mar zero_pad">
               
                <!-- one -->
                <div class="col-lg-6 zero_pad">
                    <div class="col-lg-5 col-md-4 f_left">
                        <img src="media/admin/simanta.jpg" class="img-thumbnail img-fluid" alt="Madhurjya">
                    </div>
                    <div class="col-lg-7 col-md-8 f_right">
                        <h5>Mr. Simanta Patowary</h5>
                        <p>Developer<br>
                            Patkai Men's Hostel <br>
                            Department Of CSE<br>
                            Tezpur University<br>
                            <i class="fa fa-mobile" aria-hidden="true"></i>+91-9395268347<br>
                            <i class="fa fa-envelope" aria-hidden="true"></i>simantapatowary963@gmail.com<br>
                            <a href="https://www.linkedin.com/in/simanta-patowary-5104a2208/" target="_blank"><i class="fab fa-linkedin" aria-hidden="true" style="color:#16181b;font-size: large !important;padding-top: 2px;"></i></a>
                    </div>
                </div>
                <!--                two-->
                <div class="col-lg-6 zero_pad">
                    <div class="col-lg-5 col-md-4 f_left">
                        <img src="media/admin/anuj.jpg" class="img-thumbnail img-fluid" alt="Anuj">
                    </div>
                    <div class="col-lg-7 col-md-8 f_right">
                        <h5>Mr. Anuj Kumar Singh</h5>
                        <p>Developer<br>
                            Patkai Men's Hostel<br>
                            Department Of CSE<br>
                            Tezpur University<br>
                            <i class="fa fa-mobile" aria-hidden="true"></i>+91-9307565775<br>
                            <i class="fa fa-envelope" aria-hidden="true"></i> anuj.aes@gmail.com<br>
                            <a href="https://www.facebook.com/littleanuj/" target="_blank"><i class="fab fa-facebook" aria-hidden="true" style="color:#16181b;font-size: large !important;padding-top: 5px;"></i></a>&nbsp;
                            <a href="https://www.linkedin.com/in/anuj-aes" target="_blank"><i class="fab fa-linkedin" aria-hidden="true" style="color:#16181b;font-size: large !important;padding-top: 2px;"></i></a>
                         
                    </div>
                </div>
            </div>
        </div>

    </div><!--root-->

    <!-- carousel and slides-->
    <?php include_once 'footer.php' ?>

</body>
</html>

