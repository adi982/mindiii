<?php

/**
 * Template Name:web-development
 * 
 */

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Design & Development Company | Best Web Design and Development in USA, UK, Australia, India | MINDIII</title>
    <link rel="icon" href="<?php echo get_stylesheet_directory_uri() . '/assets/image/fav_icon.png' ?>" type="image/png" width="50px" height="50px">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/assets/css/custom.css' ?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css' ?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/assets/css/responsive.css' ?>">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-NJ3C5H8"></script>
    <script src="<?php echo   get_stylesheet_directory_uri(), '/assets/bootstrap/js/bootstrap.min.js' ?>"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&amp;display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/css/intlTelInput.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/intlTelInput.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/utils.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
</head>
<style>
    #menuList {
        display: none;
    }
</style>

<body>
    <!---- Header section------------------------------------------------------------------------------------------->
    <div id="root">
        <section class="Header HeaderFixed">

            <nav class=" innerPageHeader navbar navbar-expand-md navbar-dark bg-dark fixed-top">
                <div class="container">
                    <div class="navbar-brand">
                        <a href=" http://localhost/mindiii_website_wordpres/home/">
                            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/image/mindiii_logo_white_red.ce3db614.webp' ?>" alt="logo">
                        </a>
                    </div>
                    <div class="menuToggleHead">
                        <div class="showdropdown">
                            <div class="" aria-haspopup="true" aria-expanded="false" id="dropdown-basic">
                                <a class="toggleIcon">
                                    <span class="menu-toggle">Menu</span>
                                </a>
                            </div>
                        </div>
                        <div aria-labelledby="dropdown-basic" class="moreMenuDrop dropdown-menu show dropdown-menu-right" style="margin: 0px;">
                            <div class="moreMenuDropItem">
                                <div id="menuList">
                                    <a href=" http://localhost/mindiii_website_wordpres/lifemindiii/">Life @MINDIII </a>
                                    <a href=" http://localhost/mindiii_website_wordpres/career/">Career </a>
                                    <a href=" http://localhost/mindiii_website_wordpres/aboutus/">About Us </a>
                                    <a href=" http://localhost/mindiii_website_wordpres/contactus/" class="dropdown-item animate__animated  animate__zoomIn animate4s nav-link">
                                        <div class="moreMenuDropIcon">
                                            <span><i class="fa-regular fa-envelope"></i></span>
                                        </div>Contact Us
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-label="Toggle navigation" onclick="myFunction()">

                        <span class="navbar-toggler-icon "></span>
                    </button>
                    <div class="navbar-collapse collapse" id="navbarNavDropdown">
                        <ul class="ml-auto mainMenu navbar-nav">
                            <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'header-menu'
                                )
                            );
                            ?>
                            <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'moblie-menu',

                                )
                            );
                            ?>
                        </ul>
                    </div>

                </div>
            </nav>
        </section>
    </div>
    <!---------------------------------web-development page section---------------------------------------------------------------------------->
    <div class="mainWrapper">
        <section>
            <div class="animate__animated animate__fadeIn animate__slow web_Body">
                <div class="web_Header">
                    <div data-aos="fade-up">
                        <div data-aos="fade-up" class="head_width container aos-init aos-animate">
                            <h1 class="headingTitle_web">
                                <span>Web Development | </span>
                                MINDIII
                            </h1>
                            <span class="web_heading">
                                An amazing websites always attract the user on web pages, it increases the user
                                retention time on websites. Yes, we have this amazing factor for the website
                                development
                                process, we believe to build a unique & eye-catchy Website.
                            </span>
                        </div>
                    </div>


                </div>
                <div class="dev_Area">
                    <div class="dev_contain container">
                        <div class="for_center row">
                            <div class="col-lg-6">
                                <div data-aos="fade-up" class="aos-init aos-animate">
                                    <h3>Web Site Development</h3>
                                    <div class="bottom_Line"></div>
                                    <span>
                                        The website has become an essential and significant part of every business,
                                        it gives the digital presence of your business, and the website is the
                                        showcase of your skill. products, service, talents, and much more.
                                        Everything can be formed and updated with a website.
                                    </span>
                                </div>
                            </div>
                            <div class="dev_Img col-lg-6">
                                <div class="imgShape">
                                    <div class="custom_img">
                                        <div class="image1">
                                            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/image/web_development_company.2fb88345.webp' ?>" alt="website development company" srcset="" max-width="255" max-height="320">
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="csm_Area">
                    <div class="dev_contain container">
                        <div class="for_center row">
                            <div class="CMS_Img col-lg-6">
                                <div class="imgShape resposnive_shap">
                                    <div class="custom_img">
                                        <div class="image2">
                                            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/image/cms.a8697578.web' ?>p" alt="cms development" srcset="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div data-aos="fade-up" class="aos-init aos-animate">
                                    <h3>Content Management System
                                        <span>(CMS)</span>
                                    </h3>
                                    <div class="bottom_Line"></div>
                                    <span class="text_Color">
                                        Here
                                        <span>
                                            MINDIII Systems Pvt Ltd
                                        </span>
                                        understands the necessities and crafts of
                                        exquisite websites and CMS systems for startups or businesses. We are
                                        the leading tailor-made WEBSITE DEVELOPMENT COMPANY, delivering the best
                                        web and CMS Solutions across the globe. We have been in the industry for
                                        more than 6+ years and have more than 100+ Website and CMS systems.
                                    </span>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dev_Area">
                    <div class="dev_contain container">
                        <div class="for_center row">
                            <div class="col-lg-6">
                                <div data-aos="fade-up" class="aos-init aos-animate">
                                    <h3>Web Designing and Developing</h3>
                                    <div class="bottom_Line"></div>
                                    <span>
                                        holds a decade of experience in designing and developing world-class web
                                        applications at an affordable price. We provide a reliable and customized
                                        web app development service. We have already delivered over 100+ projects to
                                        global clients, including well-known brands.
                                    </span>
                                </div>
                            </div>
                            <div class="dev_Img col-lg-6">
                                <div class="imgShape">
                                    <div class="custom_img">
                                        <div class="image1">
                                            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/image/web-designing_comapny.0af951cf.webp' ?>" alt="web desiging & developing" srcset="" max-width="255" max-height="320">
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="csm_Area">
                    <div class="dev_contain container">
                        <div class="for_center row">
                            <div class="CMS_Img col-lg-6">
                                <div class="imgShape resposnive_shap">
                                    <div class="custom_img">
                                        <div class="image2">
                                            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/image/website_primary_objective.4eae81fe.webp' ?>" alt="website primary objective" srcset="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div data-aos="fade-up" class="aos-init aos-animate">
                                    <h3>Primary objective</h3>
                                    <div class="bottom_Line"></div>
                                    <span class="text_Color">
                                        MINDIII has a primary objective to stimulate ideal outcomes for our
                                        significant clients for their web development projects. We have talented and
                                        ensured web engineers for any sort of site improvement work. Our senior web
                                        developer group is dependably prepared to chip away at your prerequisites.
                                        They follow a procedure for the improvement of any task.
                                    </span>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dev_Area4">
                    <div class="container">
                        <div class="mission_banner aos-init aos-animate" data-aos="flip-right">
                            <div class="mission_Body row">
                                <div class="col-lg-6">
                                    <h3>We Provide:</h3>
                                    <div class="bottom_Line"></div>
                                </div>
                                <div class="col-lg-6"></div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="web_Process">
                    <div class="web_process_Area container">
                        <div data-aos="fade-up" class="aos-init aos-animate">
                            <div class="process_header">
                                <h4>Our Web App Development Process</h4>
                            </div>

                        </div>
                        <div class="row aos-init aos-animate" data-aos="fade-up">
                            <div class="col-lg-4">
                                <div class="process_1 common_Web_Class">
                                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/image/process_04.afef4a16.webp' ?>" alt="count-icon">
                                    <h4>01</h4>
                                </div>
                                <div class="bottom_Line_process color_1"></div>
                                <div class="process_Content">
                                    <h3>Project analysis and Road Map</h3>
                                    <span> At MINDIII, We identify your business objective and define the roadmap
                                        for a better and smooth development procedure first. Our experienced
                                        analytics team creates the scratch wireframe of your requirement and makes
                                        the strategy about how to build the amazing and cost-effective
                                        Website.</span>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="process_2 common_Web_Class">
                                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/image/process_01.998d2f07.webp' ?>" alt="count-icon">
                                    <h4>02</h4>
                                </div>
                                <div class="bottom_Line_process color_2"></div>
                                <div class="process_Content">
                                    <h3>DESIGN UI/UX</h3>
                                    <span> After building a roadmap we work on making a unique and amazing UI/UX
                                        design as per your business type. We have a dedicated designing team who
                                        work separately on each and every project, they are always ready to adopt
                                        the latest designing technology which suits the current scenario of google
                                        and another search engine Brouwer which takes less time to load on
                                        there.</span>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="process_3 common_Web_Class">
                                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/image/process_03.611a9e73.webp' ?>" alt="count-icon">
                                    <h4>03</h4>
                                </div>
                                <div class="bottom_Line_process color_3"></div>
                                <div class="process_Content">
                                    <h3>Development</h3>
                                    <span> Once the design gets ready we switch to another process called source
                                        code/Back-end development, in this process our expert backend team writes
                                        the quality code and lite weight code. Which reduces the load time while
                                        appearing on the website on the search browser.
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row aos-init aos-animate" data-aos="fade-up">
                            <div class="col-lg-4">
                                <div class="process_4 common_Web_Class">
                                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/image/process_02.f8b1c709.webp' ?>" alt="count-icon">
                                    <h4>04</h4>
                                </div>
                                <div class="bottom_Line_process color_4"></div>
                                <div class="process_Content">
                                    <h3>Quality Assurance</h3>
                                    <span> Testing and quality assurance is the most important part of any software
                                        development. We have a dedicated expert team who checks each and every part
                                        of the website. they follow all testing methodology like manual and
                                        automation testing with multiple devices.</span>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="process_5 common_Web_Class">
                                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/image/process_05.151022ba.webp' ?>" alt="count-icon">
                                    <h4>05</h4>
                                </div>
                                <div class="bottom_Line_process color_5 "></div>
                                <div class="process_Content">
                                    <h3>Deployment</h3>
                                    <span> Before deploying a website we ensure about each and every use case of
                                        product quality and we consider that "First impression is the last
                                        impression". So it is necessary to launch a website with high software
                                        quality. our team gives their best to make it happen best. as we know a
                                        website is the showcase of any business, so we always build it with our full
                                        effort.</span>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="process_3 common_Web_Class">
                                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/image/process_06.faafd994.webp' ?>" alt="count-icon">
                                    <h4 style="color: #46aa63;">06</h4>
                                </div>
                                <div class="bottom_Line_process color_6"></div>
                                <div class="process_Content">
                                    <h3>Maintenance & Support</h3>
                                    <span> Once the design gets ready we switch to another process called source
                                        code/Back-end development, in this process our expert backend team writes
                                        the quality code and lite weight code. Which reduces the load time while
                                        appearing on the website on the search browser.
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="webDform">
                    <div class="webDev-show">
                        <div class="webTshow aos-init aos-animate" data-aos="fade-up">
                            <h3>FAQs-Web Development</h3>
                        </div>
                        <div class="mb-5 container" style="margin-top: 50px;">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="web-dev-Faqs">
                                        <div class="webcount mb-3">
                                            <h1>1</h1>
                                        </div>
                                        <h3>How much does a new website cost?</h3>
                                        <p>Cost always depends on your required features, if features
                                            are more, time and cost will be high, and if the concept is
                                            small then cost and time will be reduced accordingly.</p>

                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="web-dev-Faqs">
                                        <div class="webcount mb-3">
                                            <h1>2</h1>
                                        </div>
                                        <h3> Will I be able to update the site when it’s finished??</h3>
                                        <p> Yes , we are always here to help you with any kind of new updates and
                                            modifications. We love to give our services while and after the
                                            development process.</p>

                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="web-dev-Faqs">
                                        <div class="webcount mb-3">
                                            <h1>3</h1>
                                        </div>
                                        <h3>Will my website be mobile-friendly?</h3>
                                        <p>Absolutely! Having a mobile-friendly website is more important than ever!
                                            We work hard to ensure your website looks great on a variety of devices.
                                        </p>

                                    </div>

                                </div>
                                <div class="col-lg-4">
                                    <div class="web-dev-Faqs">
                                        <div class="webcount mb-3">
                                            <h1>4</h1>
                                        </div>
                                        <h3>How will I get an Amazing and unique app UI/UX design?</h3>
                                        <p>We always build the unique UI/UX design, and our expert team is always
                                            dedicated to doing the deep R&D for the same.</p>

                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="web-dev-Faqs">
                                        <div class="webcount mb-3">
                                            <h1>5</h1>
                                        </div>
                                        <h3>Will I own the source code?</h3>
                                        <p>Yes, you always remain the owner of the source code which we develop,
                                            while the development process we upload the source code on your server
                                            or any repository like Github / GitLab, etc, so don’t worry about the
                                            source code ownership</p>

                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="web-dev-Faqs">
                                        <div class="webcount mb-3">
                                            <h1>6</h1>
                                        </div>
                                        <h3>How’s the payment process work for website development?</h3>
                                        <p>You do not need to pay the full cost at a time, we charge the payment
                                            method step by step, as development phases are completed, we divide the
                                            cost according to that.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="devCusForm">
                    <div class="pt-3 pb-4 Contact-Cnt">
                        <div class="container">
                            <div class="contactDetailsBlk">
                                <div class="justify-content-center row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="contactForm">
                                            <h3 class="mb-4">Drop us a message for any query</h3>
                                            <form action="" class="" id="myform1" method="post">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-12">
                                                        <div class="form-group">
                                                            <label for="formBasicEmail" class="form-label">Full
                                                                Name</label>
                                                            <input name="fullName" placeholder="Enter Full Name" type="text" id="fullName" class="form-control" value="">
                                                            <span class="text-danger" id="nameError"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label class="form-label" for="formBasicPassword">Email</label>
                                                            <input name="email" placeholder="Enter Email" type="email" id="email" class="form-control" value="">
                                                            <small class="text-muted form-text">We'll never share
                                                                your
                                                                email with anyone
                                                                else.</small><br>
                                                            <span class="text-danger" id="emailError"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-12">
                                                        <div class="form-group">
                                                            <label class="form-label" for="formBasicPassword">Skype
                                                                ID /
                                                                Whatsapp</label>
                                                            <input name="skype" placeholder="Enter Skype ID / Whatsapp" type="text" id="formBasicPassword" class="form-control" value="">
                                                            <span class="text-muted form-text" style="color: #6C757D ;">We'll never share your
                                                                Skype ID / Whatsapp with anyone
                                                                else.</span>

                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label class="form-label" for="formBasicPassword">Contact
                                                                No</label>
                                                            <div class="mobileInput">
                                                                <div class="allow-dropdown intl-tel-input">
                                                                    <div class="flag-container">
                                                                        <input type="tel" id="phone" class="form-control" name="phone" placeholder="Enter Contact Number" />
                                                                    </div>
                                                                    <span class="text-danger" id="phoneerror"></span>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="form-label">Message</label>
                                                    <textarea name="message" rows="5" placeholder="Write your message" id="message" class="form-control"></textarea>
                                                    <span class="text-danger" id="messageerror"></span>
                                                </div>
                                                <button type="submit" class="themeBtn btn btn-primary">Submit

                                                </button>

                                            </form>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <button class="back-to-top sc-bdVaJa fWohKN" style="opacity: 1; visibility: visible; display:none" id="scroll-up" onclick="scrollToTop()">
                    <span class="bottom-to-top-icon">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8 12a.5.5 0 0 0 .5-.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 .5.5z">
                            </path>
                        </svg>
                    </span>
                </button>
                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/image/contact-icon.8bf2cd4d.webp' ?>" alt="" class="contact_Img" id="MybtnModal">
            </div>
        </section>
    </div>
    <!---------------------------------Model section------------------------------------------------------------------------------------------------>
    <div class="bs-example">
        <div id="myModal" class="modal fade" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header my-header">
                        <button type="button" class="close my-close-button" data-dismiss="modal" id="hide">&times;</button>
                    </div>
                    <div class="modal-body">
                        <section class="py-5">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="secTitle text-center">
                                            <h2 class="sectionHeadingTitle">
                                                <span>Connect with Us today and get the best IT & Software solutions |</span>
                                                MINDIII
                                            </h2>
                                            <p class="careerHeadingTitle">
                                                Feel free to contact us via email, phone, Skype & WhatsApp we will be pleased to
                                                assist you to provides all software consultants as per your need.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="devCusForm">
                                    <div class="">
                                        <div class="container">
                                            <div class="contactDetailsBlk">
                                                <div class="justify-content-center row">
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="contactForm">
                                                            <div class="success-message"></div>
                                                            <div class="error-message"></div>
                                                            <h3 class="mb-4">Drop us a message for any query</h3>
                                                            <form action="" id="myform" method="post">
                                                                <div class="row">
                                                                    <div class="col-lg-6 col-md-12">
                                                                        <div class="form-group">
                                                                            <label for="formBasicEmail" class="form-label">Full
                                                                                Name</label>
                                                                            <input name="fullName" placeholder="Enter Full Name" type="text" id="fullName" class="form-control" value="">
                                                                            <span class="text-danger" id="nameError"></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col">
                                                                        <div class="form-group">
                                                                            <label class="form-label" for="formBasicPassword">Email</label>
                                                                            <input name="email" placeholder="Enter Email" type="text" id="email" class="form-control" value="">
                                                                            <small class="text-muted form-text">We'll never
                                                                                share your
                                                                                email with anyone
                                                                                else.</small>
                                                                            <span class="text-danger"></span>
                                                                            <div> <span class="text-danger" id="emailError"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-6 col-md-12">
                                                                        <div class="form-group">
                                                                            <label class="form-label" for="formBasicPassword">Skype
                                                                                ID /
                                                                                Whatsapp</label>
                                                                            <input name="skype" placeholder="Enter Skype ID / Whatsapp" type="text" id="skype" class="form-control" value="">
                                                                            <span class="text-muted form-text" style="color: #6C757D ;">We'll never share your
                                                                                Skype ID / Whatsapp with anyone
                                                                                else.</span>

                                                                        </div>
                                                                    </div>
                                                                    <div class="col">
                                                                        <div class="form-group">
                                                                            <label class="form-label" for="formBasicPassword">Contact
                                                                                No</label>
                                                                            <div class="mobileInput">
                                                                                <div class="allow-dropdown intl-tel-input">
                                                                                    <div class="flag-container">
                                                                                        <input type="tel" id="phone" class="form-control" name="phone" placeholder="Enter Contact Number" />
                                                                                        <div> <span class="text-danger" id="phoneerror"></span></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="" class="form-label">Message</label>
                                                                    <textarea name="message" rows="5" placeholder="Write your message" id="message" class="form-control"></textarea>
                                                                    <span class="text-danger" id="messageerror"></span>
                                                                </div>
                                                                <button type="submit" class="themeBtn btn btn-primary" id="submit-button">Submit
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </section>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!---------------------------------Model section close------------------------------------------------------------------------------------------------>
    <!-------------------------------from sumit in databasa-------------------------------->
    <script>
        $(document).ready(function() {
            $("#myform1").submit(function(event) {
                event.preventDefault();
                $("#fullName").keyup(function() {
                    $("#nameError").text('');
                    $("#fullName").addClass("box_error");
                    error = true;
                    $("#nameError").text('');
                    error = false;
                });
                $("#email").keyup(function() {
                    $("#emailError").text('');
                    $("#email").addClass("box_error");
                    error = true;
                    $("#emailError").text('');
                    error = false;
                });
                $("#phone").keyup(function() {
                    $("#phoneerror").text('');
                    $("#phone").addClass("box_error");
                    error = true;
                    $("#phoneerror").text('');
                    error = false;
                });
                $("#message").keyup(function() {
                    $("#messageerror").text('');
                    $("#message").addClass("box_error");
                    error = true;
                    $("#messageerror").text('');
                    error = false;
                });
                var fullName = $("#fullName").val();
                var email = $("#email").val();
                var phone = $("#phone").val();
                var message = $("#message").val();
                var skype = $("#skype").val();
                var link = "<?php echo admin_url('admin-ajax.php') ?>"
                if ($("#fullName").val() === "") {
                    $("#nameError").text("The Full Name field is required.");
                    return false
                }
                if ($("#email").val() === "") {
                    $("#emailError").text("The Email field is required.");
                    return false
                }
                if (IsEmail(email) == false) {
                    $('#emailError').text("Enter a valid Email address");
                    return false;
                }
                if ($("#phone").val() === "") {
                    $("#phoneerror").text("The Contact Number field is required.");
                    return false
                }
                if ($("#message").val() === "") {
                    $("#messageerror").text("The Message field is required.");
                    return false
                }
                jQuery.ajax({
                    dataType: "json",
                    type: "post",
                    url: link,
                    data: {
                        'action': 'contactus',
                        fullName: fullName,
                        email: email,
                        skype: skype,
                        phone: phone,
                        message: message,
                    },
                    success: function(data) {
                        if (data.status == 1) {
                            toastr.success(data.message)
                            jQuery('#myform1').trigger('reset');
                        }
                    },
                    error: function(data) {
                        if (data.status == 0) {
                            toastr.error(data.message)
                        }
                    }

                })

            })
        })

        function IsEmail(email) {
            var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            if (!regex.test(email)) {
                return false;
            } else {
                return true;
            }
        }
    </script>
</body>

</html>

<?php
get_footer();
?>