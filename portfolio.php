<?php

/****
 * Template Name:portfolio
 * 
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Software Development Company Portfolio - Web & Mobile Developer | MINDIII</title>
    <link rel="icon" href="<?php echo get_stylesheet_directory_uri() . '/assets/image/fav_icon.png' ?>" type="image/png" width="50px" height="50px">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/assets/css/custom.css' ?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css' ?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/assets/css/responsive.css' ?>">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-NJ3C5H8"></script>
    <script src="<?php echo   get_stylesheet_directory_uri(), './' ?>assets/bootstrap/js/bootstrap.min.js"></script>
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
    <!---------------------portfolio page section----------------------------------------------------------------------------------->
    <div class="mainWrapper">
        <div class="animate__animated animate__fadeIn animate__slow">
            <section>
                <div class="portfolio_bg">
                    <div class="container">
                        <div class="row">
                            <div class="portfolio-banner-section portfolioMx col-lg-6">
                                <div class="headingtext-portfolio">
                                    <div class="portf-bg">
                                        <h1>Portfolio |
                                            <span>MINDIII</span>
                                        </h1>
                                        <h5 class="portf-bg" style="font-family: Oxygen, sanSerif;line-height: 2;font-size: 18px; font-weight: 700   ;">
                                            We,
                                            as
                                            <span>MINDIII</span>
                                            We, as MINDIII are glad to show our company’s previous work in the
                                            portfolio. We have 80% senior technical scientists, who did
                                            tremendous work for our worldwide satisfied clients.
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-nw-sol col-lg-6">
                                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/image/portfolio-banner.8962734c.webp' ?>" alt="digital marketing banner">
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <div class="fullPageMenu portfolio_wrapper portfolio_banner1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="secTitle text-center portfolio_secTitle">
                                <p>MINDIII Systems Pvt Ltd is highly specialized for all kinds of responsive
                                    website development with all latest techs. As well as we keep the huge
                                    specialization in mobile apps based on Native and hybrid mobile applications
                                    Like React Native, Flutter etc for the iOS and Android operating systems.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="col-lg-4 col-sm-6">
                                    <div class="footerWidget topMenuWidget">
                                        <h3 class="footerWidgetTitle portfilo">
                                            Healthcare & Fitness
                                        </h3>
                                        <ul>
                                            <li>
                                                <a href=" http://localhost/mindiii_website_wordpres/dovies/">Dovies</a>
                                            </li>
                                            <li>
                                                <a href=" http://localhost/mindiii_website_wordpres/twr/">TWR</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="footerWidget topMenuWidget">
                                        <h3 class="footerWidgetTitle portfilo">
                                            Food & Restaurant
                                        </h3>
                                        <ul>
                                            <li>
                                                <a href=" http://localhost/mindiii_website_wordpres/qvafy/">Qvafy</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="footerWidget topMenuWidget">
                                        <h3 class="footerWidgetTitle portfilo">
                                            Education & eLearning
                                        </h3>
                                        <ul>
                                            <li>
                                                <a href=" http://localhost/mindiii_website_wordpres/connektus/">ConnektUs</a>
                                            </li>
                                            <li>
                                                <a href=" http://localhost/mindiii_website_wordpres/bahamaseducation/">Bahamas Edu.</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="footerWidget topMenuWidget">
                                        <h3 class="footerWidgetTitle portfilo">
                                            Navigation & Map
                                        </h3>
                                        <ul>
                                            <li>
                                                <a href=" http://localhost/mindiii_website_wordpres/parkswap/">ParkSwap</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="footerWidget topMenuWidget">
                                        <h3 class="footerWidgetTitle portfilo">
                                            Church Managment Software
                                        </h3>
                                        <ul>
                                            <li>
                                                <a href=" http://localhost/mindiii_website_wordpres/rccgcanada/">Rccgcanada</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="footerWidget topMenuWidget">
                                        <h3 class="footerWidgetTitle portfilo">
                                            Social Networking
                                        </h3>
                                        <ul>
                                            <li>
                                                <a href=" http://localhost/mindiii_website_wordpres/hoopin/">Hoopin</a>
                                            </li>
                                            <li>
                                                <a href=" http://localhost/mindiii_website_wordpres/chatimmi/">Chatimmi</a>
                                            </li>
                                            <li>
                                                <a href=" http://localhost/mindiii_website_wordpres/breathconductor/">Breathconductor</a>
                                            </li>
                                            <li>
                                                <a href=" http://localhost/mindiii_website_wordpres/cravesocial/">Crave Social</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="footerWidget topMenuWidget">
                                        <h3 class="footerWidgetTitle portfilo">
                                            Logistics
                                        </h3>
                                        <ul>
                                            <li>
                                                <a href=" http://localhost/mindiii_website_wordpres/hobortshipping/">Hobort Shipping</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="footerWidget topMenuWidget">
                                        <h3 class="footerWidgetTitle portfilo">
                                            Telecommunication
                                        </h3>
                                        <ul>
                                            <li>
                                                <a href=" http://localhost/mindiii_website_wordpres/qvaring/">Qvaring</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="footerWidget topMenuWidget">
                                        <h3 class="footerWidgetTitle portfilo">
                                            Pet Care
                                        </h3>
                                        <ul>
                                            <li>
                                                <a href=" http://localhost/mindiii_website_wordpres/furly/">Furly</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="footerWidget topMenuWidget">
                                        <h3 class="footerWidgetTitle portfilo">
                                            Ecommerce & Retail
                                        </h3>
                                        <ul>
                                            <li>
                                                <a href=" http://localhost/mindiii_website_wordpres/qvazon/">Qvazon</a>
                                            </li>
                                            <li>
                                                <a href=" http://localhost/mindiii_website_wordpres/encantovip/">EncantoVIP</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="footerWidget topMenuWidget">
                                        <h3 class="footerWidgetTitle portfilo">
                                            Beauty & Wellness
                                        </h3>
                                        <ul>
                                            <li>
                                                <a href=" http://localhost/mindiii_website_wordpres/koobi/">Koobi</a>
                                            </li>
                                            <li>
                                                <a href=" http://localhost/mindiii_website_wordpres/blingcut/">BlingCut</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="footerWidget topMenuWidget">
                                        <h3 class="footerWidgetTitle portfilo">
                                            Pest Control Management
                                        </h3>
                                        <ul>
                                            <li>
                                                <a href=" http://localhost/mindiii_website_wordpres/greystate/">Greystate</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="footerWidget topMenuWidget">
                                        <h3 class="footerWidgetTitle portfilo">
                                            Traval & Management
                                        </h3>
                                        <ul>
                                            <li>
                                                <a href=" http://localhost/mindiii_website_wordpres/reservision/">Reservision</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="menuContact mb-5">
                                <div class="menuContactInfo">
                                    <h2>Do you have any queries or projects in mind? Contact us.</h2>
                                    <div class="contactInfoItem">
                                        <p>Call us at</p>
                                        <h3>+91-9165613316</h3>
                                    </div>
                                    <div class="contactInfoItem">
                                        <p>Email us at</p>
                                        <h3>contact@mindiii.com</h3>
                                    </div>
                                    <div class="contactInfoItem">
                                        <a href=" http://localhost/mindiii_website_wordpres/
contactus/" class="btn themeBtn btn-block">Contact Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
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
    <!-------------------------------popup model-------------------------------------->
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
                                                            <form action="" class="" id="myform1" method=" post">
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