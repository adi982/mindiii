<?php

/******
 * Template Name:about
 * 
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Company Overview | MINDIII</title>
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

<body>
    <!----------------------------Header sectionc------------------------------------------------------------------------------------------->
    <div id="root">
        <section class="Header HeaderFixed">

            <nav class=" innerPageHeader navbar navbar-expand-md navbar-dark bg-dark fixed-top">
                <div class="container">
                    <div class="navbar-brand">
                        <a href="home/">
                            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/image/mindiii_logo_white_red.ce3db614.webp' ?>" alt="logo">
                        </a>
                    </div>
                    <div class="menuToggleHead">
                        <div class="showdropdown">
                            <div class='' aria-haspopup=" true" aria-expanded="false" id="dropdown-basic">
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
                                    <a href=" http://localhost/mindiii_website_wordpres/contactus/" class="dropdown-item animate__animated  animate__zoomIn animate4s nav-link  headtab-link">
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
    <!-------------------------------About page scetion---------------------------------------------------------------------------------->
    <div class="mainWrapper">
        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="secTitle text-center">
                            <h2 class="sectionHeadingTitle"><span>About us |</span> MINDIII </h2>
                            <h1 class="sectionHeadingPara">
                                MINDIII One of the best Software Development company. MINDIII is at the forefront as
                                the most innovative web development company as per client needs.
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="aboutUsSec py-6 ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="aboutUsImg">
                            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/image/img3.c0670c09 (1).webp' ?>" alt="About Mindiii" srcset="" class="rounded">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="lifeCnt aboutUsCnt">
                            <h2>Our <span class="textThemeColor">History</span> Overview</h2>
                            <p>MINDIII Systems Pvt Ltd is one of the leading software companies based in India with
                                headquarters in India, USA, Australia, Europe, and Canada. Our team is always ready
                                to serve the best software services across worldwide clients. The vision of
                                providing the best and latest techs Website & Mobile Application development
                                product.</p>
                            <p>We as MINDIII found ourselves in the year 2015. We are glad to say that our Business
                                IT Solutions & software services are the best in the category, our list of the
                                satisfied clients gives the proof that we are best in the IT Sector. All this
                                happened due to our best and experienced team. Hence we can say that we have the
                                bulk of ideas, innovation, and best implementation MINDS. Let’s join hands together
                                for better IT Services.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div data-aos="fade-up" class="aos-init aos-animate">
                            <ul class="featuresList aboutflist">
                                <li>
                                    <div class="fetursItem ">
                                        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/image/our_goal.94df8eaf.svg' ?>" alt="banner">
                                        <h4>7+ Years</h4>
                                        <p>In the market</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="fetursItem">
                                        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/image/our_goal.94df8eaf.svg' ?>" alt="banner">
                                        <h4>60+</h4>
                                        <p>Team members</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="fetursItem">
                                        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/image/our_goal.94df8eaf.svg' ?>" alt="banner">
                                        <h4>95%</h4>
                                        <p>Satisfaction rate</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="fetursItem">
                                        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/image/our_goal.94df8eaf.svg' ?>" alt="banner">
                                        <h4>80%</h4>
                                        <p>Experts</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="aboutUsSec py-6 ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="lifeCnt aboutUsCnt">
                            <h2>What We Can
                                <span class="textThemeColor">Do</span>
                                ?
                            </h2>
                            <p>MINDIII’s leading Information Technology Services Company that leverages leading
                                technology practices. Our motto is to provide excellent IT services with a very
                                affordable price.</p>
                        </div>
                        <div class="innerBox">
                            <div class="singleItem">
                                <div class="countBox">1</div>
                                <h3>Web Development</h3>
                                <p class="">In today's digital world, it is very essential to have a
                                    website and web
                                    application for all businesses. At MINDIII , we ensure to build dynamic web
                                    applications and websites that we develop according to business needs.</p>
                            </div>
                            <div class="singleItem">
                                <div class="countBox">2</div>
                                <h3>Mobile App Developmentt</h3>
                                <p class="">As mobile users are increasing day by day it is necessary
                                    to have an amazing and
                                    mobile-friendly mobile application to represent your business. at MINDIII, we
                                    develop Android and iOS mobile apps with the latest technology.</p>
                            </div>
                            <div class="singleItem">
                                <div class="countBox">3</div>
                                <h3>Design & Research</h3>
                                <p class="">An attractive design of a Website and mobile Apps always
                                    increases the traffic on
                                    a platform, it's appealing to users to stay more and explore more about a web
                                    and mobile apps, we believe to design and develop software according to your
                                    business type..</p>
                            </div>
                            <div class="singleItem">
                                <div class="countBox">4</div>
                                <h3>Analytics Business</h3>
                                <p class="">Before developing a software our experienced team gathers
                                    the full information about your requirement and features, After all analysis, we
                                    step ahead for the software development.</p>
                            </div>
                        </div>
                    </div>
                    <div class="my-auto col-lg-6">
                        <div class="aboutUsImg aboutUsImg1">
                            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/image/banner-main-img1.0d3e349c.webp' ?>" alt="About Mindiii" srcset="">
                        </div>
                    </div>
                </div>
                <div class="mt-5 row">
                    <div class="col-lg-6">
                        <div class="lifeCnt aboutUsCnt">
                            <h2>Why Choose Us
                                <span class="textThemeColor"></span>
                                ?
                            </h2>
                            <p>
                                We Incorporated in 2015, MINDIII Systems Pvt Ltd is a software product and services
                                company with international offices across Canada, United Kingdom (UK), Australia and
                                Europe With development center in central India at Indore, the cleanest city in
                                India. We believe in building web and mobile applications that always help startups
                                / businesses to lead the way forward. With our 50+ technologists, we are geared to
                                be a full-stack techs partner in your start-up and Ideas implementer.
                            </p>
                            <p>
                                WBelieve in us for the Enterprise applications, Mobility, eCommerce, CMS, ERP, CRM,
                                POS, Chatbots, application development delivered in compelling UI/UX. We have
                                delivered 50+projects across Automotive, logistics, eCommerce, Finance & Banking,
                                Healthcare, Retail, Printing, Education Industries, Telecom, Social media, etc.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <button type="button" class="back-to-top sc-bdVaJa fWohKN " style="opacity: 1; visibility: visible; display:none" onclick="scrollToTop()" id="scroll-up">
            <span class="bottom-to-top-icon">
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 12a.5.5 0 0 0 .5-.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 .5.5z">
                    </path>
                </svg>
            </span>

        </button>
        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/image/contact-icon.8bf2cd4d.webp' ?>" alt="" class="contact_Img" id="MybtnModal">
    </div>
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
</body>
<!-------------------------------from sumit in databasa-------------------------------->
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
            var isValid = true;
            if ($("#fullName").val() === "") {
                $("#nameError").text("The Full Name field is required.");
                isValid = false;
            }
            if ($("#email").val() === "") {
                $("#emailError").text("The Email field is required.");
                isValid = false;
            }
            if (IsEmail(email) == false) {
                $('#emailError').text("Enter a valid Email address");
                isValid = false;
            }
            if ($("#phone").val() === "") {
                $("#phoneerror").text("The Contact Number field is required.");
                isValid = false;
            }
            if ($("#message").val() === "") {
                $("#messageerror").text("The Message field is required.");
                isValid = false;
            }
            if (isValid) {
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

            }
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

</html>
<?php
get_footer();
?>