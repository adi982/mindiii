<?php

/***
 * Template Name:ui-ux-development
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UI/UX Development Company | India, UAE, Spain, Australia, USA, UK | MINDIII</title>
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
                            <li class="nav-item">
                                <a class="nav-link  headtab-link " aria-current="page" href=" http://localhost/mindiii_website_wordpres/home/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link  headtab-link " href=" http://localhost/mindiii_website_wordpres/services/">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link  headtab-link" href=" http://localhost/mindiii_website_wordpres/industries/">Industries</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link  headtab-link" href=" http://localhost/mindiii_website_wordpres/portfolio/">Portfolio</a>
                            </li>
                            <li class="mbMenu nav-item">
                                <a href=" http://localhost/mindiii_website_wordpres/lifemindiii/" class="nav-link  headtab-link">Life @MINDIII </a>
                            </li>
                            <li class="mbMenu nav-item">
                                <a href=" http://localhost/mindiii_website_wordpres/career/" class="nav-link  headtab-link">Career </a>
                            </li>
                            <li class="mbMenu nav-item">
                                <a href=" http://localhost/mindiii_website_wordpres/aboutus/" class="nav-link  headtab-link">About Us </a>
                            </li>
                            <li class="mbMenu nav-item">
                                <a href=" http://localhost/mindiii_website_wordpres/contactus/" class="nav-link  headtab-link">Contact Us
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
            </nav>
        </section>
    </div>
    <!-----------------------------------ui-ux-development section----------------------------------------------------------------------------------------------------------->
    <div class="mainWrapper">
        <section>
            <div class="animate__animated animate__fadeIn animate__slow">
                <div class="ui_ux_body p-0 col-lg-12">
                    <div class="ui_ux_header">
                        <div class="container">
                            <div data-aos="fade-up" class="ui_ux_banner row aos-init aos-animate">
                                <div class="col-lg-6">
                                    <div>
                                        <h1 class="headingTitle text_ui_ux">
                                            UI/UX DESIGN |
                                            <span> MINDIII</span>
                                        </h1>
                                        <h5 class="text_ui_ux" style="font-family: Oxygen, sanSerif; line-height: 2; font-size: 20px;">
                                            Our expert
                                            <span>DESIGNERS</span>
                                            are specialized in create user-friendly user interface (UI) that
                                            instantly impacts the user experience (UX).
                                        </h5>
                                    </div>
                                </div>
                                <div class="bn-nw-sol col-lg-6">
                                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/image/UI_UX_banner.b7cded5e.webp' ?>" alt="Ui/ux-banner" srcset="" class="ui_design_img uiuxresopnsive py-4">
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                <div class="ui_ux_bg">
                    <div class="ui_ux_bg1">
                        <div class="section_1">
                            <div class="container">
                                <div class="section_2">
                                    <div class="block1_img">
                                        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/image/UI_UX_design.9ec05aa1.webp' ?>" alt="ui/ux design">
                                    </div>
                                    <div class="paragraph2 ">
                                        <h3 style="font-weight: bold; font-size:22px">UI/UX Design</h3>
                                        <div class="line_color6">
                                            <div class="line_color7">
                                            </div>

                                        </div>
                                        <p>As we understand the importance of user interface and visual intimacy,
                                            our experts in UI & UX Design make sure that your user feels delighted
                                            and engages on your site longer.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ui_second_para">
                            <div class="section_1">
                                <div class="container">
                                    <div class="section_2">
                                        <div class="paragraph1">
                                            <p>
                                            <h3 style="font-weight: bold; font-size:22px">Role of UI/UX in Web and Apps Rank?</h3>
                                            <div class="line_color6">
                                                <div class="line_color7"></div>
                                            </div>
                                            The highest rank website and top brand have one thing in common, is a
                                            highly attractive & user-responsive website that delivers the best user
                                            experience. We understand the importance of user interface and visual
                                            intimacy. Our experts in UI/UX make sure that website and app design
                                            should be delighted and engages on your site and apps longer. MINDIII is
                                            the most experienced and trusted UI/UX services provider and specializes
                                            in making the UI/UX beyond just appearance.
                                            </p>

                                        </div>
                                        <div class="block1_img">
                                            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/image/role_of_ui_ux.cefe3260.webp' ?>" alt="role of ui/ux">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="weProvide_Ui">
                    <div class="container">
                        <div class="Row_Body row">
                            <div class="weProvide_side col-lg-3">
                                <h1>We</h1>
                                <h3>Provides</h3>

                            </div>
                            <div class="Box_Side col-lg-9">
                                <div class="Box_1 uiux-box">
                                    <div class="row">
                                        <div class="col-lg-2.5" style="display: contents;">
                                            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/image/ui_for_mobile_app.118f1a72.webp' ?>" alt="" srcset="">
                                        </div>
                                        <div class="Box_Body col-lg-8">
                                            <h4>UI & UX for Mobile App Design</h4>
                                            <p class="Box_Contain">
                                                We have expertise in Mobile app design, our qualified UI/UX designer
                                                has vital experience in major industries, and they make the design
                                                according to business types and its functionalities. Our previous
                                                works prove to us that we are a leading mobile application
                                                development Company.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="Box_2 uiux-box" alt="website-box">
                                    <div class="row">
                                        <div class="col-lg-2.5" style="display: contents;">
                                            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/image/responsive_ui.0d64b965.webp' ?>" alt="" srcset="">
                                        </div>
                                        <div class="Box_Body col-lg-8">
                                            <h4>Responsive Website Design</h4>
                                            <p class="Box_Contain">
                                                To convert your visitors into customers, you always need a powerful
                                                website with an attractive user interface and content-rich features.
                                                Our Website design services team follows a creative approach for
                                                making the unique and attractive Website design..
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="Box_3 uiux-box" alt="website-box">
                                    <div class="row">
                                        <div class="col-lg-2.5" style="display: contents;">
                                            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/image/branding.17a4f02c.webp' ?>" alt="" srcset="">
                                        </div>
                                        <div class="Box_Body col-lg-8">
                                            <h4>Branding & Identity</h4>
                                            <p class="Box_Contain">
                                                For enhancing brand identity and brand awareness, design plays a
                                                huge part. A good design helps to improve the branding of your
                                                product & services, and this is the reason why the global brands
                                                choose us for their Website & Mobile Application design.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="Box_4 uiux-box" alt="website-box">
                                    <div class="row">
                                        <div class="col-lg-2.5" style="display: contents;">
                                            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/image/usability.0fe6bbce.webp' ?>" alt="" srcset="">
                                        </div>
                                        <div class="Box_Body col-lg-8">
                                            <h4>Usability Testing</h4>
                                            <p class="Box_Contain">
                                                Usability testing makes us ensure about our final design, our
                                                designer conduct a usability testing session to get feedback and
                                                insight on the UI/UX design and make change and updates accordingly.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="Box_5 uiux-box" alt="website-box">
                                    <div class="row">
                                        <div class="col-lg-2.5" style="display: contents;">
                                            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/image/cross-plateform.956ffff2.webp' ?>" alt="" srcset="">
                                        </div>
                                        <div class="Box_Body col-lg-8">
                                            <h4>Cross-Platform Compatibility</h4>
                                            <p class="Box_Contain">
                                                A Website and Mobile Application called successfully deployed and
                                                performing when it’s responsive for all cross platform, its
                                                necessity perform well on every cross platform of any Website and
                                                Mobile application, We always take care for the same.y.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="Box_6 uiux-box" alt="website-box">
                                    <div class="row">
                                        <div class="col-lg-2.5" style="display: contents;">
                                            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/image/consulting.d2c01d65.webp' ?>" alt="" srcset="">
                                        </div>
                                        <div class="Box_Body col-lg-8">
                                            <h4>UI/UX Consulting</h4>
                                            <p class="Box_Contain">
                                                MINDIII not only delivers immersive UX design, but also provides
                                                UI/UX consultancy to ensure a well planned design strategy and
                                                professional UX audits and analysis for an amazing digital product.
                                            </p>
                                        </div>
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
                                                                        <span class="text-danger" id="phoneerror"></span>
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
                                                            <form action="" class="" id="myform" method=" post">
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