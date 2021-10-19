<?php

session_start(); 
include 'config.php';

 $name =  $_SESSION['name'];

// echo $_SESSION['name'];
 if(!$name){
header('Location: login.php');
 }
?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" />
        <link rel="stylesheet" href="bootstrap.min.css" />
        <link rel="stylesheet" href="aos.css" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />

        <script src="https://kit.fontawesome.com/4b8a73297e.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css" />

        <title>Cosmos Yoga</title>

    </head>
    <!-- <body>

  <section id="title">
    
    <div class="container-fluid"> -->
    <!-- Nav Bar -->
    <!-- <nav class="navbar navbar-expand-lg navbar-dark">
      <a class="navbar-brand" href="index.php">tindog</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span></button>
    
     <div class="collapse navbar-collapse" id="navbarNav">
     
     <ul class="navbar-nav ml-auto">
         <li class="nav-item">
             <a class="nav-link" href="">Contact</a>
         </li>
         <li class="nav-item">
             <a class="nav-link" href="">Pricing</a>
         </li>
         <li class="nav-item">
             <a class="nav-link" href="">Download</a>
         </li>
     </ul>
     </div>
 </nav> -->

 <body data-spy="scroll" data-target="#navbarNav" data-offset="50">


<!-- nav bar starts -->
<div class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <a href="index.php" class="navbar-brand">Cosmos 🕉 Yoga</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-lg-auto">
                        <li class="nav-item">
                            <a href="#home" class="nav-link smoothScroll">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="login.php" class="nav-link smoothScroll">Login/Register</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a href="register.php" class="nav-link smoothScroll"></a>
                        </li> -->
                        <!-- <li class="nav-item">
          <a class="nav-link" data-toggle="collapse"  href="#collapseExample1" role="button" aria-expanded="true" aria-controls="collapseExample">
            Login
        </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
            Register
          </a>
         </li> -->
                        <li class="nav-item">
                            <a href="#about" class="nav-link smoothScroll">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="#gallery" class="nav-link smoothScroll">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a href="#classes" class="nav-link smoothScroll">Classes</a>
                        </li>
                        <li class="nav-item">
                            <a href="#schedule" class="nav-link smoothScroll">Schedules</a>
                        </li>
                        <li class="nav-item">
                            <a href="#events" class="nav-link smoothScroll">Events</a>
                        </li>

                        <li class="nav-item">
                            <a href="#contacts" class="nav-link smoothScroll">Contacts</a>
                        </li>
                        <li class="nav-item">
                            <a href="action.php?name=logout" class="nav-link smoothScroll">Logout</a>
                        </li>


                    </ul>
                </div>
            </div>
        </div>
        <!-- navbar ends -->

        <!-- -------------------Collaps------------------------- -->



        <!-- Login Code -->

        <div class="collapse" id="collapseExample1">
            <div class="div1 card card-body" style=" padding-top: 0px;
                    padding-right: 0px;
                    padding-bottom: 0px;
                    padding-left: 0px;
                    border-left-width: 0px;
                    border-right-width: 0px;
                    border-top-width: 0px;
                    border-bottom-width: 0px;">

                <div class="div2 text-center center-div" id="login">
                    <div class="container w-25 border py-5">
                        <div class="title">
                            <i class="far fa-user " style="font-size: 3rem;"></i>
                            <h2 class="font-width-bold login">Login</h2>
                            <span style="font-family: Ubuntu ; font-size: 1rem; font-weight:lighter;">Welcome to Cosmos Yoga</span>
                        </div>
                        <form action="/route/login" method="POST" class="pt-3">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder=" 📧 Email" name="email">

                            </div>
                            <div class="from-group">
                                <input type="password" class="form-control" placeholder=" 🔒 Password" name="password">

                            </div>
                            <div>
                                <button type="submit" class="btn btn-success"><i class="fas fa-sign-in-alt"></i> Login</button>
                            </div>
                            <div class="container signin">
                                <p style="font-family: Ubuntu ; font-size: 1rem; font-weight:lighter; 
                    color:antiquewhite;">New to College ClassNotes?
                                    <a style="font-family: Ubuntu ; font-size: 1rem; font-weight:lighter; color: black;" href="/register">  Register here!</a></p>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Login Code ends here -->

        <!-- Register Code -->

        <div class="collapse" id="collapseExample2">

            <div class="text-center center-div registerDiv" id="register">
                <div class="container w-25 boder py-5">
                    <div class="form-box">
                        <!-- <h2 class="font-width-bold">Register System</h2> -->
                        <!-- <span>Register for new user</span>    -->

                        <form action="/route/register" method="POST" class="pt-3">
                            <div class="container">
                                <i class="fas fa-user-edit" style="font-size: 3rem;"></i>
                                <h1 class="registerL font-width-bold">Register</h1>
                                <!-- <p>Please fill in this form to create an account.</p> -->

                                <span style="font-family: Ubuntu ; font-size: 1rem; font-weight:lighter;">Welcome to College ClassNotes</span>

                                <!-- <label for="username" class="lable"><b>Username</b></label> -->
                                <input type="text" class="input-field form-control" placeholder="👨🏻‍🎓 Username" name="username" id="username" required>

                                <!-- <label for="name" class="lable"><b>Name</b></label> -->
                                <input type="text" class="input-field form-control" placeholder="👨🏻‍🎓 Name" name="name" id="name" required>

                                <!-- <label for="email" class="lable"><b>Email</b></label> -->
                                <input type="email" class="input-field form-control" placeholder="✉️ Email" name="email" id="email" required>

                                <!-- <label for="psw" class="lable"><b>Password</b></label> -->
                                <input type="password" class="input-field form-control" placeholder="🔒 Password" name="rpassword" id="rpasssword" required>


                                <button type="submit" class="btn btn-success"> <i class="fas fa-user-plus"></i> Register</button>
                                <!-- <script>
                     function alertonpage(){
                       window.confirm("user register!")
                     }
                   </script> -->

                            </div>

                            <div class="container signin">
                                <p style="font-family: Ubuntu ; font-size: 1rem; font-weight:lighter; 
                color:antiquewhite;">Already have an account? <a style="font-family: Ubuntu ; font-size: 1rem; font-weight:lighter; color: black;" href="/base">  Sign in!</a></p>
                            </div>

                    </div>


                    </form>
                </div>
            </div>



        </div>

        <!-- Register Code ends here -->

        <!-- Collapse ends here! -->


        <!--section 1-->
        <section class="hero d-flex flex-column justify-content-center align-items-center" id="home">
            <div class="bg-overlay">
                <video autoplay muted loop id="myVideo">
        <source src="video (2).mp4" type="video/mp4">
      </video>

            </div>

            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-10 mx-auto col-12">
                        <div class="hero-text mt-5 text-center">
                            <h4 data-aos="fade-up" data-aos-delay="300" style="font-family: 'Lora', serif; font-weight: 600; letter-spacing: 2px;">For Your Inner Peace</h4>
                            <h1 data-aos="fade-up" data-aos-delay="500" class="text-black" style="font-family: 'Baloo 2', cursive;">

                            योगः  कर्मसु  कौशलम्‌||
                            </h1>
                            <!-- <img src="Apple_Store (1).png" alt="Apple_Store" class="mt-3 down apple">
                            <img src="google-play-app.png" alt="Play_store" class="mt-3 down play-store">  -->
                            <button data-aos="fade-up" data-aos-delay="600" class="btn btn-dark btn-lg download-btn" type="button"><i class="fab fa-apple"></i> Download</button>
                            <button data-aos="fade-up" data-aos-delay="700" class="btn btn-outline-light btn-lg download-btn" type="button"><i class="fab fa-google-play"></i> Download </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--section 1 ends-->

        <!--section 2-->

        <section class="ftco-section bg-light" id="feature">
            <div class="container">
                <div class="row">


                    <div class="col-md-3 d-flex align-items-strech">
                        <div class="offer-deal text-center">
                            <div class="img" style="background-image: url(i.jpg)" data-aos="fade-up" data-aos-delay="300">
                            </div>
                            <div class="text mt-4" data-aos="fade-up" data-aos-delay="400">
                                <h3 class="mb-4">Power Yoga</h3>
                                <p class="mb-5">
                                    Power yoga is a general term used to describe a vigorous, fitness-based approach to vinyasa-style yoga....
                                </p>
                                <!-- <p>
                                    <a href="#" data-toggle="modal" data-target="#membershipForm" class="btn custom-btn bg-color mt-2">Learn More<span> &rarr; </span></a>
                                </p> -->
                            </div>
                        </div>
                    </div>



                    <div class="col-md-3 d-flex align-items-strech">
                        <div class="offer-deal text-center">
                            <div class="img" style="background-image: url(aa.jpeg)" data-aos="fade-up" data-aos-delay="400">
                            </div>
                            <div class="text mt-4" data-aos="fade-up" data-aos-delay="500">
                                <h3 class="mb-4">Weight Loss</h3>
                                <p class="mb-5">
                                    A five-thousand-year-old transcription by the Indus valley civilization on fragile palm leaves has paved the way to ...
                                </p>
                                <!-- <p>
                                    <a href="#" data-toggle="modal" data-target="#membershipForm" class="btn custom-btn bg-color mt-2">Learn More<span> &rarr; </span></a>
                                </p> -->
                            </div>
                        </div>
                    </div>


                    <div class="col-md-3 d-flex align-items-strech">
                        <div class="offer-deal text-center">
                            <div class="img" style="background-image: url(ii.jpeg)" data-aos="fade-up" data-aos-delay="500">
                            </div>
                            <div class="text mt-4" data-aos="fade-up" data-aos-delay="600">
                                <h3 class="mb-4">kid's Yoga</h3>
                                <p class="mb-5">
                                    Yoga develops awareness of body, mind and breath. Helps arrest a child’s wandering mind. Builds attention span and...
                                </p>
                                <!-- <p>
                                    <a href="#" data-toggle="modal" data-target="#membershipForm" class="btn custom-btn bg-color mt-2">Learn More<span> &rarr; </span></a>
                                </p> -->
                            </div>
                        </div>
                    </div>


                    <div class="col-md-3 d-flex align-items-strech">
                        <div class="offer-deal text-center">
                            <div class="img" style="background-image: url(333.jpeg)" data-aos="fade-up" data-aos-delay="600">
                            </div>
                            <div class="text mt-4" data-aos="fade-up" data-aos-delay="700">
                                <h3 class="mb-4">Meditation</h3>
                                <p class="mb-5">
                                    Meditation has been practiced for thousands of years. Meditation originally was meant to help deepen understanding...
                                </p>
                                <!-- <p>
                                    <a href="#" data-toggle="modal" data-target="#membershipForm" class="btn custom-btn bg-color mt-2">Learn More<span> &rarr; </span></a>
                                </p> -->
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>


        <!--section 2 ends-->

        <!-- section 3 starts -->
        <section class="home-about spad" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="home_about_pic">
                            <div class="home_about_pic_item large-item set-bg" data-setbg="about-1.jpg" data-aos="fade-up" data-aos-delay="300"></div>
                            <div class="home_about_pic_item">
                                <div class="home_about_pic_item_inner set-bg" data-setbg="j.jpg" data-aos="fade-up" data-aos-delay="400"></div>
                                <div class="home_about_pic_item_inner set-bg" data-setbg="m.jpg" data-aos="fade-up" data-aos-delay="500"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="home_about_text" data-aos="fade-up" data-aos-delay="300">
                            <div class="section-title">
                                <h2>Welcome to <br>Cosmos Yoga</h2>
                            </div>
                            <span>"What hurts today makes you stronger tomorrow."</span>
                            <p>The Institute was started in 2017 after the completion of Yogashatra Teacher Training course of all the 3 owner members of the Institute.
 with the aim "Fit Human" Fit not only Physically but also mentally, as yoga not only means doing Asana and Pranayama but also to know one self by following all the yama And Niyama that is self discipline.
</p>
                            <p class="para-2">
                            These yoga sessions are designed with the benefit of beginer and advanced level keeping in mind. The intent to provide a good health for long period. 
                                <a href="#" class="btn custom-btn bg-color mt-3" data-aos="fade-up" data-aos-delay="400">More About Us &rarrhk;</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section 3 ends -->

        <!-- section 4 starts -->

        <section class="ftco-section ftco-no-pt ftco-no-pb" id="gallery">
            <div class="container">
                <div class="row no-gutters justify-content-center mb-5 pb-2">
                    <div class="col-md-6 text-center heading-section">
                        <span class="subheading">Gallery</span>
                        <h2 class="mb-4">Our Gallery</h2>
                        <p>
                        A relaxing form of exercise that was developed in India and involves assuming and holding postures that stretch the limbs and muscles, doing breathing exercises, and using meditation techniques to calm the mind. 
                        </p>
                    </div>
                </div>
            </div>
            <div class="container-fluid p-0"></div>
            <div class="row no-gutters">
                <div class="col-md-6 col-lg-3">
                    <div class="project">
                        <img src="work-1.jpg" alt="" class="img-fluid">
                        <div class="text">
                            <span>Asana</span>
                            <h3><a href="#">Yoga</a></h3>
                        </div>
                        <a href="work-1.jpg" class="d-flex justify-content-center align-items-center"></a>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="project">
                        <img src="work-2.jpg" alt="" class="img-fluid">
                        <div class="text">
                            <span>Asana</span>
                            <h3><a href="#">Yoga</a></h3>
                        </div>
                        <a href="work-2.jpg" class="d-flex justify-content-center align-items-center"></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="project">
                        <img src="work-3.jpg" alt="" class="img-fluid">
                        <div class="text">
                            <span>Asana</span>
                            <h3><a href="#">Yoga</a></h3>
                        </div>
                        <a href="work-3.jpg" class="d-flex justify-content-center align-items-center"></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="project">
                        <img src="work-4.jpg" alt="" class="img-fluid">
                        <div class="text">
                            <span>Asana</span>
                            <h3><a href="#">Yoga</a></h3>
                        </div>
                        <a href="work-4.jpg" class="d-flex justify-content-center align-items-center"></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="project">
                        <img src="work-5.jpg" alt="" class="img-fluid">
                        <div class="text">
                            <span>Asana</span>
                            <h3><a href="#">Yoga</a></h3>
                        </div>
                        <a href="work-5.jpg" class="d-flex justify-content-center align-items-center"></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="project">
                        <img src="work-6.jpg" alt="" class="img-fluid">
                        <div class="text">
                            <span>Asana</span>
                            <h3><a href="#">Yoga</a></h3>
                        </div>
                        <a href="work-6.jpg" class="d-flex justify-content-center align-items-center"></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="project">
                        <img src="work-7.jpg" alt="" class="img-fluid">
                        <div class="text">
                            <span>Asana</span>
                            <h3><a href="#">Yoga</a></h3>
                        </div>
                        <a href="work-7.jpg" class="d-flex justify-content-center align-items-center"></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="project">
                        <img src="work-8.jpg" alt="" class="img-fluid">
                        <div class="text">
                            <span>Asana</span>
                            <h3><a href="#">Yoga</a></h3>
                        </div>
                        <a href="work-8.jpg" class="d-flex justify-content-center align-items-center"></a>
                    </div>
                </div>
            </div>
            </div>

        </section>

        <!-- section 4 ends -->

        <!-- section 5 starts -->

        <section class="class section style-cards" id="classes">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-12 text-center mb-5">
                        <h6 data-aos="fade-up">Get a Perfect Body</h6>
                        <h1 data-aos="fade-up" data-aos-delay="200">Our Training Classes</h1>
                    </div>

                    <div class="card-3" data-aos="fade-up" data-aos-delay="200">
                        <div class="desc-3">
                            <h3 class="mb-2">Yoga Training</h3>
                            <p>
                                The word “Yoga” essentially means, “that which brings you to reality”. Literally, it means “union.” Union means it brings you to the ultimate reality, where individual manifestations of life are surface bubbles in the process of creation.
                            </p>
                        </div>
                        <img src="tv.png" alt="Yoga" data-aos="fade-up" data-aos-delay="500">
                        <video data-aos="fade-up" data-aos-delay="500" autoplay playsinline muted loop>
                        <source src="Pexels Videos 2790143.mp4"></video>
                    </div>
                    <div class="card-2" data-aos="fade-up" data-aos-delay="200">
                        <img src="tv.png" alt="Yoga" data-aos="fade-up" data-aos-delay="500">
                        <video data-aos="fade-up" data-aos-delay="500" autoplay playsinline muted loop>
                        <source src="production ID_4359315.mp4"></video>

                        <div class="desc-2">
                            <h3 class="mb-2">Thyroid Classes</h3>
                            <p>Setu bandhasana or the bridge pose is an effective yoga for thyroid, especially hypothyroidism. It stretches the neck and improves blood circulation in the thyroid gland. The pose is also effective for treating asthma, reducing
                                headaches and strengthening muscles
                            </p>
                        </div>
                    </div>
                    <div class="card-3" data-aos="fade-up" data-aos-delay="200">
                        <div class="desc-3">
                            <h3 class="mb-2">Meditation</h3>
                            <p>
                                "Meditation, which is the practice of focused concentration, bringing yourself back to the moment over and over again, actually addresses stress, whether positive or negative." Meditation can also reduce the areas of anxiety, chronic pain, depression,
                                heart disease and high blood pressure.
                            </p>
                        </div>
                        <img src="tv.png" alt="Yoga" data-aos="fade-up" data-aos-delay="500">
                        <video data-aos="fade-up" data-aos-delay="500" autoplay playsinline muted loop>
                        <source src="1.mp4"></video>
                    </div>
                </div>
            </div>
        </section>


        <!-- section 5 ends -->

        <!-- section 6 -->


        <section class="classtime-section class-time-table spad" id="schedule">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="section-title">
                            <h2>Class TimeTable</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="timetables-controls">
                            <!-- <ul>
                                <li class="active" data-tsfilter="all">All Classes</li>
                                <li data-tsfilter="Yoga">Yoga</li>
                                <li data-tsfilter="Weight Loss">Weight Loss</li>
                                <li data-tsfilter="Thyroid">Thyroid</li>
                                <li data-tsfilter="Meditation">Meditation</li>
                                <li data-tsfilter="Children's Yoga">Children's Yoga</li>
                                
                            </ul> -->
                        </div>
                    </div>
                </div>

                <div class="classtime-table">
                    <table>
                        <thead>
                            <tr>
                                <th></th>
                                <th>Monday</th>
                                <th>Tuesday</th>
                                <th>Wednesday</th>
                                <th>Thursday</th>
                                <th>Friday</th>
                                <th>Saturday</th>
                                <th>Sunday</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="workout-time">6:00</td>

                                <td class="hover-bg ts-item" data-tsmeta="Yoga">
                                    <span>6:00 - 7:15</span>
                                    <h6>Yoga</h6>
                                </td>
                                <td></td>
                                <td class="hover-bg ts-item" data-tsmeta="Yoga">
                                    <span>6:00 - 7:15</span>
                                    <h6>Yoga</h6>
                                </td>
                                <td></td>
                                <td class="hover-bg ts-item" data-tsmeta="Weight Loss">
                                    <span>7:15 - 8:30</span>
                                    <h6>Weight Loss</h6>
                                </td>
                                <td></td>
                                <td class="hover-bg ts-item" data-tsmeta="Weight Loss">
                                    <span>7:15 - 8:30</span>
                                    <h6>Weight Loss</h6>
                                </td>
                            </tr>

                            <tr>
                                <td class="workout-time">6.00</td>
                                <td></td>
                                <td class="hover-bg ts-item" data-tsmeta="Weight Loss">
                                    <span>7:15 - 8:30</span>
                                    <h6>Weight Loss</h6>
                                </td>
                                <td></td>
                                <td class="hover-bg ts-item" data-tsmeta="Yoga">
                                    <span>6:00 - 7:15</span>
                                    <h6>Yoga</h6>
                                </td>
                                <td></td>
                                <td class="hover-bg ts-item" data-tsmeta="Thyroid">
                                    <span>16:30 - 17:30</span>
                                    <h6>Thyroid</h6>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="workout-time">6.00</td>

                                <td class="hover-bg ts-item" data-tsmeta="Yoga">
                                    <span>6:00 - 7:15</span>
                                    <h6>Yoga</h6>
                                </td>
                                <td></td>
                                <td class="hover-bg ts-item" data-tsmeta="Yoga">
                                    <span>6:00 - 7:15</span>
                                    <h6>Yoga</h6>
                                </td>
                                <td></td>
                                <td class="hover-bg ts-item" data-tsmeta="Weight Loss">
                                    <span>7:15 - 8:30</span>
                                    <h6>Weight Loss</h6>
                                </td>
                                <td></td>
                                <td class="hover-bg ts-item" data-tsmeta="Weight Loss">
                                    <span>7:15 - 8:30</span>
                                    <h6>Weight Loss</h6>
                                </td>
                            </tr>
                            <tr>
                                <td class="workout-time">6.00</td>
                                <td></td>
                                <td class="hover-bg ts-item" data-tsmeta="Weight Loss">
                                    <span>7:15 - 8:30</span>
                                    <h6>Weight Loss</h6>
                                </td>
                                <td></td>
                                <td class="hover-bg ts-item" data-tsmeta="Yoga">
                                    <span>6:00 - 7:15</span>
                                    <h6>Yoga</h6>
                                </td>
                                <td></td>
                                <td class="hover-bg ts-item" data-tsmeta="Thyroid">
                                    <span>16:30 - 17:30</span>
                                    <h6>Thyroid</h6>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="workout-time">6.00</td>

                                <td class="hover-bg ts-item" data-tsmeta="Yoga">
                                    <span>6:00 - 7:15</span>
                                    <h6>Yoga</h6>
                                </td>
                                <td></td>
                                <td class="hover-bg ts-item" data-tsmeta="Yoga">
                                    <span>6:00 - 7:15</span>
                                    <h6>Yoga</h6>
                                </td>
                                <td></td>
                                <td class="hover-bg ts-item" data-tsmeta="Weight Loss">
                                    <span>7:15 - 8:30</span>
                                    <h6>Weight Loss</h6>
                                </td>
                                <td></td>
                                <td class="hover-bg ts-item" data-tsmeta="Weight Loss">
                                    <span>7:15 - 8:30</span>
                                    <h6>Weight Loss</h6>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        
        <!-- section 6  ends -->

        <!-- section 7 starts -->

        <section class="our-team-area section-padding-80-50">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-heading text-center wow fadeInUp" data-aos="fade-up" data-aos-delay="200">
                            <h2>Profile</h2>
                        </div>

                    </div>
                </div>


                <div class="row">
                    <div class="col-md-12 col-xs-1 center-block">
                        <div class="team-content-area text-center mb-30 wow fadeInUp" data-aos="fade-up" data-aos-delay="200">
                            <div class="member-thumb">
                                <img src="aditya.jpeg" alt="">
                            </div>
                            <h5>Chaitanya Kulkarni</h5>
                            <p></p>
                            <span>M.A. Yoga, M.A. Psychology</span>
                        
                            <div class="member-social-info">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        

        <!-- section 7 ends -->

        <!-- section 8 starts -->

        <section class="event-section spad bg-light" id="events">
            <div class="container">
                <div class="section-title text-center">
                    <h2>Upcoming Events</h2>
                    <p>A way to reconnect with yourself even amidst the chaos of your daily routine</p>
                </div>
                <div class="row">
                    <div class="col-xl-6">
                        <div class="event-video">
                            <img src="l.jpg" alt="" class="event-img">
                            <a href="#" class="video-popup"><img src="play.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="event-item">
                            <div class="ei-img" >
                                <img src="s2.jpeg" alt="" class="event-img" > 
                            </div>
                            <div class="ei-text">
                                <h4><a href="#">Yoga Events</a></h4>
                                <ul>
                                    <li><i class="material-icons">person</i>Chaitanya Kulkarni</li>
                                    <li><i class="material-icons">event_available</i>30 August, 2021</li>
                                    <li><i class="material-icons">map</i>Nashik</li>

                                    <a class="btn btn-primary btn-sm" id="logout" href="event_register.php">Register</a>
                                </ul>
                            </div>
                        </div>
                        <div class="event-item">
                            <div class="ei-img">
                                <img src="reiki.jpg" alt="" class="event-img">
                            </div>
                            <div class="ei-text">
                                <h4><a href="#">Reiki 1st Degree</a></h4>
                                <ul>
                                    <li><i class="material-icons">person</i>Ajit Telang</li>
                                    <li><i class="material-icons">event_available</i>31August, 2021</li>
                                    <li><i class="material-icons">map</i>Nashik</li>
                                    <a class=" btn btn-primary btn-sm" id="logout" href="event_register.php">Register</a>
                                </ul>
                            </div>
                        </div>
                        <div class="event-item">
                            <div class="ei-img">
                                <img src="q.jpg" alt="" class="event-img">
                            </div>
                            <div class="ei-text">
                                <h4><a href="#">kid's Yoga</a></h4>
                                <ul>
                                    <li><i class="material-icons">person</i>Chaitanya Kulkarni</li>
                                    <li><i class="material-icons">event_available</i>1 sep, 2021</li>
                                    <li><i class="material-icons">map</i>Pasaydan Hall</li>
                                    <a class="btn btn-primary btn-sm" id="logout" href="event_register.php">Register</a>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- section 8 ends -->
<!-- section starts -->

<section class="testimonials">
            <div class="container">
                <h1>Testimonials</h1>
                <p class="text-center">Subscribe Cosmos Yoga</p>
                <div class="row">
                    <div class="col-md-4 text-center">
                        <div class="profile">
                            <img src="t1.jpeg" class="user" alt="">
                            <blockquote>
                            Hello my name is Ashwin i am 23 years old i did program of weight loss from cosmos yoga for one month it was really good experience i lose 5 kg in month and plus that body detox program He has very good knowledge about yoga
                            </blockquote>
                            <h3>Ashwini umbare</h3>
                        </div>

                    </div>
                    <div class="col-md-4 text-center">
                        <div class="profile">
                            <img src="a.jpeg" class="user" alt="">
                            <blockquote>
                            Thanks to cosmos yoga for conducting such a wonderful online yoga session . It was great experience with you, I got positive outlook and motivation towards daily yoga practice.When I started this class my weight was 63kg now my weight is 60kg   
                  </blockquote>
                            <h3>Tanuja saraf</h3>
                        </div>

                    </div>
                    <div class="col-md-4 text-center">
                        <div class="profile">
                            <img src="f.jpeg" class="user" alt="">
                            <blockquote>
                            हरी ओम,
आज एक महिना झाला आम्ही योगा क्लास सुरू करून, खरच अनुभव खूप छान आहे.
दिवसभर अगदी ताजेतवाने वाटते. एक वेगळाच उत्साह मनामध्ये असतो.  महत्त्वाचं म्हणजे आधीच्या छोट्या-मोठ्या शारीरिक तक्रारी असायच्या आता त्या जाणवत नाहीत. दिवसभर काम करून सुद्धा थकवा येत नाही.
                            </blockquote>
                            <h3>Archana chavan</h3>
                        </div>

                    </div>
                </div>
            </div>

        </section>
<!-- section ends -->
        <!-- section 9 starts -->

        <section class="contact section" id="contacts">
            <div class="container">
                <div class="row">
                    <div class="ml-auto col-lg-5 col-md-6 col-12">
                        <h2 style="font-family: 'Lora', serif; letter-spacing: 2px;" class="mb-4 pb-2" data-aos="fade-up" data-aos-delay="200">
                            Feel free to ask anything
                        </h2>
                        <form action="action.php" method="post" class="contact-form webform" data-aos-delay="400" data-aos="fade-up" role="form">

                            <input type="text" name="fullname" class="form-control" placeholder="Name">
                            <input type="email" name="email" class="form-control" placeholder="Email">
                            <textarea name="message" id="" cols="30" rows="5" class="form-control" placeholder="Message"></textarea>
                            <button type="submit" class="form-control" id="submit-button" name="contact">Send Message</button>
                        </form>

                    </div>
                    <div class="mx-auto mt-4 mt-lg-0 col-lg-5 col-md-6 col-12">
                        <h2 style="font-family: 'Lora', serif; letter-spacing: 2px;" class="mb-4" data-aos="fade-up" data-aos-delay="600">
                            Where you can <span>find us</span>
                        </h2>
                        <p data-aos="fade-up" data-aos-delay="800">
                        <i class="fa fa-map-marker mr-1"></i> Pasaydan, Vishakha Colony, Rajiv Nagar, Nashik, Maharashtra 422009
                    </p>
                        <div class="google-map" data-aos="fade-up" data-aos-delay="900">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3749.9064353135336!2d73.7734329143904!3d19.97043672843821!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bddebe59394e403%3A0x3211a49bd3e3b1d2!2sCosmos%20Yoga%20and%20Nature%20cure%20Center!5e0!3m2!1sen!2sin!4v1629659527581!5m2!1sen!2sin" width="1920" height="250" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
                        </iframe>

                        </div>
                    </div>
                </div>
            </div>

        </section>


<!-- section 9 ends -->




<!-- section 10 starts -->
<section class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="footer_about">
                    <span>Cosmos🕉Yoga</span>
                            <ul>
                                <li>
                                    <i class="fa fa-clock-o"></i> Mon - sun : 06:00am - 07:00pm
                                </li>
                              </ul>
                             
                </div>
            </div>
            <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
                <div class="footer-widget">
                    <h5>Inspiration</h5>
                    <ul>
                        <li><a href="#">Yoga</a></li>
                        <li><a href="#">Spirituality</a></li>
                        <li><a href="#">Yoga</a></li>
                        <!-- <li><a href="#"></a></li>
                        <li><a href="#">Yoga</a></li> -->
                        
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="footer-widget">
                    <h5>About Us</h5>
                    <ul>
                        <li><a href="#">Our Vision</a></li>
                        <li><a href="#">Our Mission</a></li>
                        <li><a href="#">Meet Us</a></li>
                        <li><a href="#">Introduce</a></li>
                        <li><a href="#">Customer Service</a></li>
                        
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="footer-widget">
                    <h5>Contact Us</h5>
                    <ul class="footer-address">
                       <li><i class="fa fa-phone"></i>999-888-4444</li>
                       <li><i class="fa fa-envelope"></i>cosmos@gmail.com</li>
                       <li><i class="fa fa-location-arrow"></i>Pasaydan, Vishakha Colony, Rajiv Nagar, Nashik, Maharashtra 422009</li>
                       
                        
                    </ul>
                </div>
            </div>

        </div>
        <div class="footer_copyright">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="footer_copyright_text">
                        <p>
                            Copyright &copy; 2021 Cosmos Yoga - All Rights Reserved
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="footer_copyright_social">
                        <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                        <a href="https://instagram.com/ray_of_life_yoga?utm_medium=copy_link"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- section 10 ends -->



<!-- section 11 ends -->




        <!--scripts-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scroll/16.1.3/smooth-scroll.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/3.3.1/mixitup.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SlickNav/1.0.10/jquery.slicknav.js"></script>
        <script src="script.js"></script>
    </body>

    </html>