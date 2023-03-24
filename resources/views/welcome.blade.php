<!DOCTYPE html>
<html lang="en">
    

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>My Portfolio</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Retrina group" />

    <!--  FavIcon  -->
    <link rel="shortcut icon" href="assets/img/favicon.ico">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Muli:400,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700" rel="stylesheet">

    <!--  plugins Css  -->
    <link rel="stylesheet" type="text/css" href="assets/css/plugins.css">
    <!--  Custom Style CSS  -->
    <link rel="stylesheet" href="assets/css/style.css">

    </head>
    <body class="pilling-page"  data-bs-spy="scroll" data-bs-target="#scrollspy" data-bs-offset="1">

    <!--  Pre Loader  -->
    <div id="overlayer">
        <span class="spinner-grow spinner-grow-lg loader" role="status" aria-hidden="true"></span>
    </div>


        <!-- Blog Single Modal -->
        <div class="blog-single modal fade" id="blog-single" tabindex="-1" role="dialog" aria-labelledby="blogModalScrollable" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content bg-white">
                    <div class="modal-header">
                        {{-- <h5 class="modal-title" id="blogModalScrollable">Write Your Dreams</h5> --}}
                        <button type="button" class="btn-close text-muted" data-bs-dismiss="modal" aria-label="Close"></button>                    </div>
                    <div class="modal-body">
                        <!--   Blog-single   Start -->
                        <div class="pt-4 pb-5">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-10 offset-lg-1 blog">
                                        <div class="rounded px-lg-5">
                                            <div class="text-md-start">
                                                <h4 class="mb-4 fs-1">Gesture Recognition</h4>
                                                <img src="assets/img/3.jpg" alt="" class="img-fluid w-100 rounded">
                                                <span class="d-inline-block py-4"> April 2022
                                        / By <span class="purple-color text-end">Myself </span>
                                        </span>
                                                <p class="text-muted">To Develop a Smart Feature in the Smart Tv that can recognise five defferent gesture performed by the user which will help users control the TV without using a remote.Technology nowadays takes roles to create virtual environments with virtual elements and able to work collaboratively with real-world objects. A tangible robot or machine can be controlled intangibly through gestures with the help of technology</p>
                                                {{-- <div class="px-md-5 px-3 py-4 quotation">
                                                    <i class="base-color lni-quotation size-md"></i>
                                                    <h6 class="base-color font-italic mb-0">We Love Buna, lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id ligula felis euismod semper.</h6>
                                                </div> --}}
                                                <p class="my-3 text-muted">In this project scope is bounded only to derive solutions for the gesture recognition. It can be achieved from the CNN 3D model.So to emulate input  here using flask library a http url is created and through that port input video frames are received to the model and the output are displayed in the same webpage in order to verify that our model is working correctly.</p>
                                                {{-- <ul class="list-unstyled mt-4 checkmark-list">
                                                    <!-- Item-01 -->
                                                    <li class="mb-2">
                                                        <span class="text-muted ms-1">The purpose of lorem ipsum is to create</span>
                                                    </li>
                                                    <!-- Item-02 -->
                                                    <li class="mb-2">
                                                        <span class="text-muted ms-1">In particular, the garbled words of lorem ipsum</span>
                                                    </li>
                                                    <!-- Item-03 -->
                                                    <li class="mb-2">
                                                        <span class="text-muted ms-1">occasionally circumstances occur in which toil</span>
                                                    </li>
                                                </ul> --}}

                                                <!--Blog Reply-->
                                                <div class="contact mt-4">
                                                    <div class="contact-form">
                                                        <h2 class="text-start mb-4">Leave a reply</h2>
                                                        <form>
                                                            <div class="row">
                                                                <div class="col-lg-6 form-item">
                                                                    <div class="input-group mb-3">
                                                                        <input name="name" id="blog-name" type="text" class="form-control" placeholder="Your Name*" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 form-item">
                                                                    <div class="input-group mb-3">
                                                                        <input name="email" id="blog-email" type="email" class="form-control" placeholder="Your Email*" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 form-item">
                                                                    <div class="input-group mb-3">
                                                                        <textarea name="comments" id="blog-comments" rows="4" class="form-control" placeholder="Your message..."></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 mt-4 text-start">
                                                                    <button type="submit" class="pill-button" id="blog-submit-btn">Submit</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--   Blog-Single End  -->
                    </div>
                </div>
            </div>
        </div>

      

        <!-- Portfolio Single Modal -->
        {{-- <div class="portfolio-single modal fade" id="portfolio-single" tabindex="-1" role="dialog" aria-labelledby="portfolioModalScrollable" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content bg-white">
                    <div class="modal-header">
                        <h5 class="modal-title" id="portfolioModalScrollable">My Work</h5>
                        <button type="button" class="btn-close text-muted" data-bs-dismiss="modal" aria-label="Close"></button>                    </div>
                    <div class="modal-body">
                        <div class="pt-4 pb-5">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-md-10 offset-md-1">
                                        <div class="text-center">
                                            <h2 class="text-dark mb-3">Single <span class="base-color"> Portfolio</span></h2>
                                            <p class="text-muted max-width-45xUdHPiFHQ7xbKh19G45saF1raB2ot5pag8p1Hnk4yrfXRJZskr8TMbFpVfC5tDk8eQQg63TqkW9gKhwagx6HePTaK2yXb made.</p>
                                        </div>
                                        <div class="row contact-info mt-5">
                                            <div class="col-md-4">
                                                <div class="text-center">
                                                    <div>
                                                        <h6>Created by:</h6>
                                                        <p class="text-muted mb-0">John Doe</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 p-title-border mt-3 mt-md-0">
                                                <div class="text-center">
                                                    <div>
                                                        <h6 class="contact_detail-title">Completed on:</h6>
                                                        <p class="text-muted mb-0">September 30, 2019</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mt-3 mt-md-0">
                                                <div class="text-center">
                                                    <div>
                                                        <h6>Skills:</h6>
                                                        <p class="text-muted mb-0">HTML5 / PHP / CSS3</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-5">
                                            <div class="portfolio-single-item">
                                                <img src="assets/img/005.jpg" class="d-block w-100 rounded" alt="...">
                                            </div>
                                        </div>
                                        <div class="text-md-start mt-5">
                                            <p class="my-3 text-muted">These words are here to provide the reader with a basic impression of how actual text will appear in its final presentation. This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate the look and feel of finished, typeset text. These words are here to provide the reader with a basic impression of how actual text will appear in its final presentation. Only for show.</p>
                                            <p class="mt-3 mb-0 text-muted">These words are here to provide the reader with a basic impression of how actual text will appear in its final presentation. This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate the look and feel of finished, typeset text. These words are here to provide the reader with a basic impression of how actual text will appear in its final presentation. Only for show.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

    <!--  Page Pilling  Strat  -->
    <div id="pagepiling" class="pagepiling">

        <!--   Header Start -->
        <header>
            <div class="logo-area">
                <a href="#" class="logo">
                    <span class="size-sm mb-0 fw-bold ps-3 text-dark text-start">P<span class="base-color">RIYANKA</span></span>
                </a>
            </div>
            <div class="header-info-area">
                <a class="overlay-menu-toggler lni-menu size-md" href="javascript:void(0);"></a>
                <!--    Overlay Menu Start    -->
                <div class="overlay-menu bg-blue py-3 px-4 text-center center-item">
                    <!-- Overlay Menu -->
                    <div id="scrollspy" class="overlay-menu-list">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 offset-lg-2 overlay-nav">
                                    <ul class="list-group text-start" id="myMenu">
                                        <li data-menuanchor="hero" class="list-group-item"><a href="#home">Home</a></li>
                                        <li data-menuanchor="about" class="list-group-item"><a href="#about">About me</a></li>
                                        <li data-menuanchor="services" class="list-group-item"><a href="#resume">Resume</a></li>
                                        <li data-menuanchor="portfolio" class="list-group-item"><a href="#projects">Projects</a></li>
                                        <li data-menuanchor="client" class="list-group-item"><a href="#contact">Contact</a></li>

                                    </ul>
                                    <ul class="list-group contact-info text-start mb-0">
                                        <li class="list-group-item"><span>Contact Info :</span></li>
                                        <li class="list-group-item"><span><i class="lni-map-marker"></i>Banglore</span></li>
                                        <li class="list-group-item"><span><i class="lni-phone-handset"></i>+91-7358399358</span></li>
                                        <li class="list-group-item"><span><i class="lni-envelope"></i> <a href="">priyankaka0829@gmail.com</a></span></li>
                                        <li class="list-group-item"><span>Follow me :</span></li>
                                        <li class="list-group-item">
                                            <ul class="list-inline socails">
                                                <li class="list-inline-item"><a href="https://instagram.com/music_lover0829?igshid=ZDdkNTZiNTM=" target=”_blank”><i class="lni-instagram-filled"></i></a></li>
                                                <li class="list-inline-item"><a href="https://twitter.com/music_lover0829?t=fgee69RotFxDc2h3FbaU5A&s=08" target=”_blank”><i class="lni-twitter-filled"></i></a></li>
                                                <li class="list-inline-item"><a href="https://github.com/PRIYA-0829"><i class="lni-github-original" target=”_blank”></i></a></li>
                                                <li class="list-inline-item"><a href="https://www.linkedin.com/in/priyanka-k-063261223" target=”_blank”><i class="lni-linkedin-original"></i></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--    Overlay Menu End    -->
            </div>
        </header>
        <!--   Header End   -->

        <!--    Hero Start    -->
        <section class="section pp-scrollable hero hero-02 full-screen p-0" id="home" data-navigation-color="#fff" data-navigation-tooltip="HOME">
            <div class="container-fluid">
                <div class="title-small">
                    <p class="text-dark">Home</p>
                </div>
                <div class="row justify-content-center" id="hero-slider">
                    <div class="owl-carousel owl-theme px-0">
                        <!--  Item1 -->
                        <div class="hero-slide hero-item1 full-screen"></div>
                        <!--  Item2 -->
                        <div class="hero-slide hero-item2 full-screen"></div>
                        <!--  Item3 -->
                        <div class="hero-slide hero-item3 full-screen"></div>
                    </div>
                </div>
                <div class="text-center hero-content">
                    <div class="col-lg-12">
                        <div class="hero-content text-center">
                            {{-- <img src="assets/img/hero.jpg" alt="" class="rounded-circle img-thumbnail"> --}}
                            <h3 class="text-dark mb-0 mt-3">I'M Priyanka K</h3>
                            <h1 class="text-dark text-capitalize mb-3"><span class="base-color">A  </span> <span class="element" data-elements="Web Designer.,Web Developer."></span></h1>
                            <div>
                                <ul class="list-inline social-icon mt-2">
                                    <li class="list-inline-item"><a href="https://instagram.com/music_lover0829?igshid=ZDdkNTZiNTM=" target=”_blank”><i class="lni-instagram-filled text-dark"></i></a></li>
                                    <li class="list-inline-item"><a href="https://twitter.com/music_lover0829?t=fgee69RotFxDc2h3FbaU5A&s=08" target=”_blank”><i class="lni-twitter-filled text-dark"></i></a></li>
                                    <li class="list-inline-item"><a href="https://github.com/PRIYA-0829" target=”_blank”><i class="lni-github-original text-dark" ></i></a></li>
                                    <li class="list-inline-item"><a href="https://www.linkedin.com/in/priyanka-k-063261223" target=”_blank”><i class="lni-linkedin-original text-dark"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-icon">
                    <a href="#about">
                        <i class="lni-arrow-down text-dark size-sm"></i>
                    </a>
                </div>
            </div>
        </section>
        <!--    Hero End    -->

        <!--   About Start   -->
        <section id="about" class="section pp-scrollable about text-dark" data-navigation-color="#fff" data-navigation-tooltip="ABOUT ME">
            <div class="display-table">
                <div class="display-content">
                    <div class="container">
                        <div class="row">
                            <div class="title-small">
                                <p class="text-dark">About me</p>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-5">
                                <img src="assets/img/1.jpeg" alt="/" class="rounded img-thumbnail" style="height: 406px;width: 350px;">
                            </div>
                            <div class="col-lg-7 personal-item  mb-4 mb-lg-0">
                                <h2 class="text-dark mb-2">About <span class="base-color">Me</span></h2>
                                <h5 class="text-dark mb-3">Hello I'M Priyanka K</h5>
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6 personal-info">
                                        <p class="text-dark">Birthday : <span class="text-gray">29 Aug 2001</span></p>
                                        <p class="text-dark">Website : <span class="text-gray"></span></p>
                                        <p class="text-dark">Phone : <span class="text-gray">+91 7358399358</span></p>
                                        <p class="text-dark">City : <span class="text-gray">Banglore</span></p>
                                    </div>
                                    <div class="col-lg-6 col-sm-6 personal-info">
                                        <p class="text-dark">Age : <span class="text-gray">21</span></p>
                                        <p class="text-dark">Degree : <span class="text-gray">Bsc-cs</span></p>
                                        <p class="text-dark">Mail : <span class="text-gray"><a href="https://retrina.com/cdn-cgi/l/email-protection" >priyankaka0829@gmail.com</a></span></p>
                                        <p class="text-dark">Freelance : <span class="text-gray">Available</span></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <a href="assets/pdf/priyanka_resume.pdf" class="pill-button mt-3 mb-lg-0 me-4" target=”_blank”>Download Cv</a>
                                        <a href="javascript:void(0);" class="pill-button mt-3 mb-lg-0" target=”_blank”>Send Message</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div id="count-up" class="text-center">
                            <div class="container">
                                <div class="row mt-4">
                                    <!-- Item-01 -->
                                    <div class="col-6 col-md-3 mt-5 mb-md-0 count-item">
                                        <div class="count-icon">
                                            <i class="lni-download size-md"></i>
                                        </div>
                                        <div class="count-content">
                                            <span class="timer count-number" data-from="0" data-to="286" data-speed="5000">0</span>
                                        </div>
                                        <p class="mb-0 ">Files Download</p>
                                    </div>
                                    <!-- Item-02 -->
                                    <div class="col-6 col-md-3 mt-5 mb-md-0 count-item">
                                        <div class="count-icon">
                                            <i class="lni-pencil-alt size-md"></i>
                                        </div>
                                        <div class="count-content">
                                            <span class="timer count-number" data-from="0" data-to="6549" data-speed="5000">0</span>
                                        </div>
                                        <p class="mb-0">Project Done</p>
                                    </div>
                                    <!-- Item-03 -->
                                    <div class="col-6 col-md-3 mt-5 mb-md-0 count-item">
                                        <div class="count-icon">
                                            <i class="lni-medall size-md"></i>
                                        </div>
                                        <div class="count-content">
                                            <span class="timer count-number" data-from="0" data-to="793" data-speed="5000">0</span>
                                        </div>
                                        <p class="mb-0">Get Award</p>
                                    </div>
                                    <!-- Item-04 -->
                                    <div class="col-6 col-md-3 mt-5 mb-md-0 count-item">
                                        <div class="count-icon">
                                            <i class="lni-emoji-smile size-md"></i>
                                        </div>
                                        <div class="count-content">
                                            <span class="timer count-number" data-from="0" data-to="286" data-speed="5000">0</span>
                                        </div>
                                        <p class="mb-0">Happy Client</p>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </section>
        <!--    About End    -->

        <!--   Resume Start   -->
        <section id="resume" class="section pp-scrollable resume" data-navigation-color="#fff" data-navigation-tooltip="RESUME">
            <div class="display-table">
                <div class="display-content">
                    <div class="container">
                        <div class="row">
                            <div class="title-small">
                                <p class="text-dark">Resume</p>
                            </div>
                            <div class="col-lg-12">
                                <div class="text-start">
                                    <h2 class="text-dark mb-3">My <span class="base-color">Resume</span></h2>
                                    <p class="text-muted">I Am Available For Freelance Projects.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-6">
                                <h3 class="text-dark mb-2"><i class="lni-graduation base-color"></i>Education</h3>
                                <ul class="timeline">
                                    <li>
                                        <h6 class="base-color mb-0"> Masters in Computer Applications</h6>
                                        <small class="text-muted ">2022-2024</small>
                                        <p class="text-dark py-3">Indira Gandhi National Open University</p>
                                    </li>
                                    <li>
                                        <h6 class="base-color mb-0">Bachelor of Science in Computer Science</h6>
                                        <small class="text-muted ">2019-2022</small>
                                        <p class="text-dark py-3">B S Abdur Rahman Crescent Institute Of Technology</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <h3 class="text-dark mb-2 mt-5 mt-lg-0"><i class="lni-pencil base-color"></i>Experience</h3>
                                <ul class="timeline">
                                    <li>
                                        <h6 class="base-color mb-0">Web Developer </h6>
                                        <small class="text-muted ">Oct 2022 - Present</small>
                                        <p class="text-dark py-3">Sourcefile Solutions Private limited</p>
                                    </li>
                                    <li>
                                        <h6 class="base-color mb-0">Web Developer </h6>
                                        <small class="text-muted ">Apr 2022 - july 2022</small>
                                        <p class="text-dark py-3">Jnana Inventive Private Limited</p>
                                       
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row pt-6">
                            <div class="col-lg-6">
                                <div class="skill-box pt-4 pt-lg-0 mt-4 mt-lg-0">
                                    <div class="skillbar clearfix" data-percent="95%">
                                        <div class="skillbar-title"><span>HTML</span></div>
                                        <div class="skillbar-bar"></div>
                                        <div class="skill-bar-percent">95%</div>
                                    </div>
                                    <div class="skillbar clearfix " data-percent="85%">
                                        <div class="skillbar-title"><span>CSS</span></div>
                                        <div class="skillbar-bar"></div>
                                        <div class="skill-bar-percent">85%</div>
                                    </div>
                                    <div class="skillbar clearfix" data-percent="75%">
                                        <div class="skillbar-title"><span>PHP</span></div>
                                        <div class="skillbar-bar"></div>
                                        <div class="skill-bar-percent">75%</div>
                                    </div>
                                    <div class="skillbar clearfix" data-percent="80%">
                                        <div class="skillbar-title"><span>JQuery</span></div>
                                        <div class="skillbar-bar"></div>
                                        <div class="skill-bar-percent">80%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="skill-box pt-4 pt-lg-0 mt-4 mt-lg-0">
                                    
                                    <div class="skillbar clearfix " data-percent="85%">
                                        <div class="skillbar-title"><span>javascript</span></div>
                                        <div class="skillbar-bar"></div>
                                        <div class="skill-bar-percent">85%</div>
                                    </div>
                                    <div class="skillbar clearfix" data-percent="75%">
                                        <div class="skillbar-title"><span>wordpress</span></div>
                                        <div class="skillbar-bar"></div>
                                        <div class="skill-bar-percent">75%</div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--   Resume End   -->

        <!--   Services Start   -->
        {{-- <section id="services" class="section pp-scrollable services" data-navigation-color="#fff" data-navigation-tooltip="SERVICES">
            <div class="display-table">
                <div class="display-content">
                    <div class="container">
                        <div class="row">
                            <div class="title-small">
                                <p class="text-dark">My Services</p>
                            </div>
                            <div class="col-lg-12">
                                <div class="text-start">
                                    <h2 class="text-dark mb-3">My <span class="base-color">Services</span></h2>
                                    <p class="text-muted">Services I Offer To My Clients</p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <!-- Item 01 -->
                            <div class="col-lg-4 text-start">
                                <div class="services-item">
                                    <div class="float-start mt-lg-1 d-inline-block services-icon">
                                        <i class="lni-brush-alt size-md base-color"></i>
                                    </div>
                                    <div class="services-content">
                                        <h5 class="mb-3">Graphic Design</h5>
                                        <p class="text-muted mb-0">In a professional context it often happens that private clients corder a publication to be made.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Item 02 -->
                            <div class="col-lg-4 text-start">
                                <div class="services-item">
                                    <div class="float-start mt-lg-1 d-inline-block services-icon">
                                        <i class="lni-check-mark-circle size-md base-color"></i>
                                    </div>
                                    <div class="services-content">
                                        <h5 class="mb-3">Bootstrap support</h5>
                                        <p class="text-muted mb-0">In a professional context it often happens that private clients corder a publication to be made.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Item 03 -->
                            <div class="col-lg-4 text-start">
                                <div class="services-item">
                                    <div class="float-start mt-lg-1 d-inline-block services-icon">
                                        <i class="lni-heart size-md base-color"></i>
                                    </div>
                                    <div class="services-content">
                                        <h5 class="mb-3">Portfolio of works</h5>
                                        <p class="text-muted mb-0">In a professional context it often happens that private clients corder a publication to be made.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Item 04 -->
                            <div class="col-lg-4 text-start">
                                <div class="services-item">
                                    <div class="float-start mt-lg-1  d-inline-block services-icon">
                                        <i class="lni-mobile size-md base-color"></i>
                                    </div>
                                    <div class="services-content">
                                        <h5 class="mb-3">Responsive Theme</h5>
                                        <p class="text-muted mb-0">In a professional context it often happens that private clients corder a publication to be made.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Item 05 -->
                            <div class="col-lg-4 text-start">
                                <div class="services-item">
                                    <div class="float-start mt-lg-1 d-inline-block services-icon">
                                        <i class="lni-world size-md base-color mb-0"></i>
                                    </div>
                                    <div class="services-content">
                                        <h5 class="mb-3">Go Beyond Limits</h5>
                                        <p class="text-muted mb-0">In a professional context it often happens that private clients corder a publication to be made.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Item 06 -->
                            <div class="col-lg-4 text-start">
                                <div class="services-item">
                                    <div class="float-start mt-lg-1 d-inline-block services-icon">
                                        <i class="lni-cup size-md base-color"></i>
                                    </div>
                                    <div class="services-content">
                                        <h5 class="mb-3">Premium Slider</h5>
                                        <p class="text-muted mb-0">In a professional context it often happens that private clients corder a publication to be made.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!--   Services End   -->

        <!--  Portfolio Start  -->
        {{-- <section id="projects" class="section pp-scrollable portfolio" data-navigation-color="#fff" data-navigation-tooltip="PORTFOLIO">
            <div class="display-table">
                <div class="display-content">
                    <div class="container">
                        <div class="row">
                            <div class="title-small">
                                <p class="text-dark">Projects</p>
                            </div>
                            <div class="col-lg-12">
                                <div class="text-start">
                                    <h2 class="text-dark">Creative <span class="base-color">Works</span></h2>
                                    <p class="text-muted mx-auto section-subtitle mt-3">Meet My Awesome Works and Enjoy</p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <!--   Portfolio Filters   -->
                            <ul id="portfolio-filter" class="list-unstyled list-inline mb-0 col-lg-12 text-start portfolio-filter">
                                <li class="list-inline-item">
                                    <a href="#" data-filter="*" class="active my-1">All</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" data-filter=".webdesign" class="my-1">Web Design</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" data-filter=".mobiledesign" class="my-1">Mobile Design</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" data-filter=".seo" class="my-1">Seo</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" data-filter=".graphic" class="my-1">Graphic</a>
                                </li>
                            </ul>
                        </div>
                        <div class="portfolio-items mt-4 row">
                            <!-- Item 01 -->
                            <div class="col-lg-4 portfolio-item my-3 seo">
                                <div class="portfolio-item-content rounded">
                                    <img src="assets/img/portfolio/001.jpg" alt="/">
                                    <div class="img-overlay text-center">
                                        <div class="img-overlay-content">
                                            <div class="portfolio-icon">
                                                <button type="button" data-bs-toggle="modal" data-bs-target="#portfolio-single">
                                                    <i class="lni-link"></i>
                                                </button>
                                                <a href="assets/img/portfolio/001.jpg" class="js-zoom-gallery">
                                                    <i class="lni-search"></i>
                                                </a>
                                            </div>
                                            <h5 class="text-white mt-3 mb-0">My Work</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Item 02 -->
                            <div class="col-lg-4 portfolio-item my-3 graphic">
                                <div class="portfolio-item-content rounded">
                                    <img src="assets/img/portfolio/002.jpg" alt="/">
                                    <div class="img-overlay text-center">
                                        <div class="img-overlay-content">
                                            <div class="portfolio-icon">
                                                <button type="button" data-bs-toggle="modal" data-bs-target="#portfolio-single">
                                                    <i class="lni-link"></i>
                                                </button>
                                                <a href="assets/img/portfolio/002.jpg" class="js-zoom-gallery">
                                                    <i class="lni-search"></i>
                                                </a>
                                            </div>
                                            <h5 class="text-white mt-3 mb-0">My Work</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Item 03 -->
                            <div class="col-lg-4 portfolio-item my-3 webdesign graphic">
                                <div class="portfolio-item-content rounded">
                                    <img src="assets/img/portfolio/003.jpg" alt="/">
                                    <div class="img-overlay text-center">
                                        <div class="img-overlay-content">
                                            <div class="portfolio-icon">
                                                <button type="button" data-bs-toggle="modal" data-bs-target="#portfolio-single">
                                                    <i class="lni-link"></i>
                                                </button>
                                                <a href="assets/img/portfolio/003.jpg" class="js-zoom-gallery">
                                                    <i class="lni-search"></i>
                                                </a>
                                            </div>
                                            <h5 class="text-white mt-3 mb-0">My Work</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Item 04 -->
                            <div class="col-lg-4 portfolio-item my-3 webdesign">
                                <div class="portfolio-item-content rounded">
                                    <img src="assets/img/portfolio/004.jpg" alt="/">
                                    <div class="img-overlay text-center">
                                        <div class="img-overlay-content">
                                            <div class="portfolio-icon">
                                                <button type="button" data-bs-toggle="modal" data-bs-target="#portfolio-single">
                                                    <i class="lni-link"></i>
                                                </button>
                                                <a href="assets/img/portfolio/004.jpg" class="js-zoom-gallery">
                                                    <i class="lni-search"></i>
                                                </a>
                                            </div>
                                            <h5 class="text-white mt-3 mb-0">My Work</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Item 05 -->
                            <div class="col-lg-4 portfolio-item my-3 mobiledesign seo">
                                <div class="portfolio-item-content rounded">
                                    <img src="assets/img/portfolio/005.jpg" alt="/">
                                    <div class="img-overlay text-center">
                                        <div class="img-overlay-content">
                                            <div class="portfolio-icon">
                                                <button type="button" data-bs-toggle="modal" data-bs-target="#portfolio-single">
                                                    <i class="lni-link"></i>
                                                </button>
                                                <a href="assets/img/portfolio/005.jpg" class="js-zoom-gallery">
                                                    <i class="lni-search"></i>
                                                </a>
                                            </div>
                                            <h5 class="text-white mt-3 mb-0">My Work</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Item 06 -->
                            <div class="col-lg-4 portfolio-item my-3 webdesign seo">
                                <div class="portfolio-item-content rounded">
                                    <img src="assets/img/portfolio/007.jpg" alt="/">
                                    <div class="img-overlay text-center">
                                        <div class="img-overlay-content">
                                            <div class="portfolio-icon">
                                                <button type="button" data-bs-toggle="modal" data-bs-target="#portfolio-single">
                                                    <i class="lni-link"></i>
                                                </button>
                                                <a href="assets/img/portfolio/007.jpg" class="js-zoom-gallery">
                                                    <i class="lni-search"></i>
                                                </a>
                                            </div>
                                            <h5 class="text-white mt-3 mb-0">My Work</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Item 07 -->
                            <div class="col-lg-4 portfolio-item my-3 mobiledesign">
                                <div class="portfolio-item-content rounded">
                                    <img src="assets/img/portfolio/009.jpg" alt="/">
                                    <div class="img-overlay text-center">
                                        <div class="img-overlay-content">
                                            <div class="portfolio-icon">
                                                <button type="button" data-bs-toggle="modal" data-bs-target="#portfolio-single">
                                                    <i class="lni-link"></i>
                                                </button>
                                                <a href="assets/img/portfolio/009.jpg" class="js-zoom-gallery">
                                                    <i class="lni-search"></i>
                                                </a>
                                            </div>
                                            <h5 class="text-white mt-3 mb-0">My Work</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Item 08 -->
                            <div class="col-lg-4 portfolio-item my-3 mobiledesign webdesign">
                                <div class="portfolio-item-content rounded">
                                    <img src="assets/img/portfolio/006.jpg" alt="/">
                                    <div class="img-overlay text-center">
                                        <div class="img-overlay-content">
                                            <div class="portfolio-icon">
                                                <button type="button" data-bs-toggle="modal" data-bs-target="#portfolio-single">
                                                    <i class="lni-link"></i>
                                                </button>
                                                <a href="assets/img/portfolio/006.jpg" class="js-zoom-gallery">
                                                    <i class="lni-search"></i>
                                                </a>
                                            </div>
                                            <h5 class="text-white mt-3 mb-0">My Work</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Item 09 -->
                            <div class="col-lg-4 portfolio-item my-3 mobiledesign webdesign">
                                <div class="portfolio-item-content rounded">
                                    <img src="assets/img/portfolio/008.jpg" alt="/">
                                    <div class="img-overlay text-center">
                                        <div class="img-overlay-content">
                                            <div class="portfolio-icon">
                                                <button type="button" data-bs-toggle="modal" data-bs-target="#portfolio-single">
                                                    <i class="lni-link"></i>
                                                </button>
                                                <a href="assets/img/portfolio/008.jpg" class="js-zoom-gallery">
                                                    <i class="lni-search"></i>
                                                </a>
                                            </div>
                                            <h5 class="text-white mt-3 mb-0">My Work</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
      
        <section id="projects" class="section pp-scrollable blog" data-navigation-color="#fff" data-navigation-tooltip="BLOG">
            <div class="display-table">
                <div class="display-content">
                    <div class="container">
                        <div class="row">
                            <div class="title-small">
                                <p class="text-dark">Projects</p>
                            </div>
                            <div class="col-lg-12">
                                <div class="text-start">
                                    <h2 class="text-dark">Creative<span class="base-color"> Works </span></h2>
                                    <p class="text-muted mt-1">Meet My Awsome Work</p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <!-- Item-01 -->
                            <div class="col-lg-4">
                                <div class="blog-item">
                                    <div class="image-blog">
                                        <img src="assets/img/2.jpg" alt="/" class="img-fluid rounded-top">
                                    </div>
                                    <div class="blog-content rounded-bottom text-start p-3">
                                        <h5 class="mb-0 mt-3"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#blog-single" class="text-dark fw-light">Gesture Recognition</a></h5>
                                        
                                        <p class="text-muted mt-3">To Develop a Smart Feature in the Smart Tv that can recognise five defferent gesture performed by the user which will help users control the TV without using a remote.</p>
                                        <div class="blog-link pb-3">
                                            <button type="button" class="base-color" data-bs-toggle="modal" data-bs-target="#blog-single">Read More...</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Item-02 -->
                            {{-- <div class="col-lg-4">
                                <div class="blog-item">
                                    <div class="image-blog">
                                        <img src="assets/img/3.png" alt="/" class="img-fluid rounded-top">
                                    </div>
                                    <div class="blog-content rounded-bottom text-start p-3">
                                        <h5 class="mb-0 mt-3"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#blog-single" class="text-dark fw-light">Web Design</a></h5>
                                        
                                        <p class="text-muted mt-3">Using HTML CSS created a single page Template</p>
                                        <div class="blog-link pb-3">
                                            <button type="button" class="base-color" data-bs-toggle="modal" data-bs-target="#blog-single-one">Read More...</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Item-03 -->
                            <div class="col-lg-4">
                                <div class="blog-item">
                                    <div class="image-blog">
                                        <img src="assets/img/blog-img-03.jpg" alt="/" class="img-fluid rounded-top">
                                    </div>
                                    <div class="blog-content rounded-bottom text-start p-3">
                                        <h5 class="mb-0 mt-3"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#blog-single" class="text-dark fw-light">Write Your Dreams</a></h5>
                                        <ul class="list-inline mt-3">
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    <i class="base-color fw-bold">by</i>
                                                    <span class="text-dark font-italic">John Doe</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <p class="text-muted mt-3">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore.</p>
                                        <div class="blog-link pb-3">
                                            <button type="button" class="base-color" data-bs-toggle="modal" data-bs-target="#blog-single">Read More...</button>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--   Blog End   -->

        <!--   Contact Start   -->
        <section id="contact" class="section pp-scrollable contact" data-navigation-color="#fff" data-navigation-tooltip="CONTACT">
            <div class="display-table">
                <div class="display-content">
                    <div class="container">
                        <div class="row">
                            <div class="title-small">
                                <p class="text-dark">Get in Touch</p>
                            </div>
                            <div class="col-lg-12">
                                <div class="text-start">
                                    <h2 class="text-dark">Get <span class="base-color">In Touch</span></h2>
                                    <p class="text-muted mx-auto section-subtitle mt-3">Feel Free To Contact Me Any Time</p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-lg-12">
                                
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d497699.9973874144!2d77.35074421903857!3d12.95384772557775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1670c9b44e6d%3A0xf8dfc3e8517e4fe0!2sBengaluru%2C%20Karnataka!5e0!3m2!1sen!2sin!4v1678356096911!5m2!1sen!2sin" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-lg-6 text-start">
                                <div class="contact-form">
                                    <h6 class="font-weight-semibold">Let’s Get Work With Me </h6>
                                    {{-- <p class="text-muted mt-3">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p> --}}
                                    <div class="mt-4">
                                        <p class="mt-2 fw-bold"> Address : <span class="text-muted"> Banglore</span></p>
                                        <p class="mt-2 fw-bold"> Phone : <span class="text-muted"> +91 7358399358</span></p>
                                        <p class="mt-2 fw-bold"> Mail : <span class="text-muted"><a href="#" class="__cf_email__" >priyankaka0829@gmail.com</a> </span></p>
                                        <p class="mt-2 fw-bold"> Web : <span class="text-muted"></span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 text-start">
                                <h6 class="font-weight-semibold">How can I help you ? </h6>
                                <form id="contactForm" class="form mt-3">
                                    <div class="row">
                                        <div class="col-lg-12 form-item">
                                            <div class="input-group mb-3">
                                                <input name="name" id="name" type="text" class="form-control" data-name-error="Name is required" placeholder="Your Name*" required >
                                            </div>
                                        </div>
                                        <div class="col-lg-12 form-item">
                                            <div class="input-group mb-3">
                                                <input name="email" id="email" type="email" class="form-control" data-email-error="Email is required" data-email-valid="Email is not valid" placeholder="Your Email*" required >
                                            </div>
                                        </div>
                                        <div class="col-12 form-item">
                                            <div class="input-group mb-3">
                                                <textarea name="comments" id="comments" rows="2" class="form-control h-auto" data-comment-error="Comments is required" placeholder="Your message..."></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 mt-1 text-start">
                                            <button type="button" class="pill-button mt-3" id="submit-btn" onclick="sendEmail()">Send Message</button>
                                            <div id="message" class="toast text-white shadow-none border-0" role="alert" aria-live="assertive" aria-atomic="true" data-delay="4000" >
                                                <div class="toast-body d-inline-block"></div>
                                                <button type="button" class="btn-close text-muted pe-3" data-bs-dismiss="toast" aria-label="Close"></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--   Contact End   -->

        <!--   Footer Start   -->
        {{-- <div id="footer" class="section pp-scrollable footer" data-navigation-color="#fff" data-navigation-tooltip="FOOTER" data-background-image="assets/img/nill.jpg">
            <div class="container-fluid">
                <div class="row py-6">
                    <div class="title-small">
                        <p class="text-dark">Footer</p>
                    </div>
                    <div class="text-center m-auto">
                        <p class="text-dark size-sm">N<span class="base-color">ILL</span></p>
                        <ul class="list-inline socails">
                            <li class="list-inline-item"><a class="text-white" href="#"><i class="lni-facebook-filled text-dark me-2"></i></a></li>
                            <li class="list-inline-item"><a class="text-white" href="#"><i class="lni-twitter-filled text-dark me-2"></i></a></li>
                            <li class="list-inline-item"><a class="text-white" href="#"><i class="lni-github-original text-dark me-2"></i></a></li>
                            <li class="list-inline-item"><a class="text-white" href="#"><i class="lni-linkedin-original text-dark me-2"></i></a></li>
                        </ul>
                        <p class="ps-3 text-dark">Copyright © 2019. Template has been designed by <a class="base-color" href="javascript:void(0);">Retrina</a></p>
                    </div>
                </div>
            </div>
        </div> --}}
        <!--   Footer End   -->

        <!--   Color Scheme  -->
        <a class="color-scheme text-white bg-base-color d-inline-block" href="javascript:void(0)"><i class="lni-sun"></i></a>

    </div>
    <!--  Page Pilling  End -->


    <!--  JavaScripts  -->
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.6.0.min.js"></script>
    <!--  Plugins JS  -->
    <script src="assets/js/plugins.js"></script>
    <!-- Map Js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDRemITiP7JRWpZwLhVt-T2x5MeUFE2KWs"></script>
    <!--  Custom JS  -->
    <script src="assets/js/nill.js"></script>
    </body>

<!-- Mirrored from retrina.com/demo/nill/light-02.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Mar 2023 05:17:05 GMT -->
</html>