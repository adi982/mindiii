<?php

/**
 * Template Name:e-commerce
 * 
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce Development Company | E-Commerce Developers in USA, UK, Australia, India</title>
    <link rel="icon" href="<?php echo get_stylesheet_directory_uri() . '/assets/image/fav_icon.png' ?>" type="image/png" width="50px" height="50px">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/assets/css/custom.css' ?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css' ?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/assets/css/responsive.css' ?>">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-NJ3C5H8"></script>
    <script src="<?php echo   get_stylesheet_directory_uri(), '/' ?>assets/bootstrap/js/bootstrap.min.js"></script>
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
    <!---------------------------------e-commerce page section------------------------------------------------------------------------------------------------------------->
    <div class="mainWrapper">
        <section>
            <div class=" animate__animated animate__fadeIn animate__slow">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bannerCnt animate__animated animate__fad0pxeIn animate__slow title-heading bgpadding">
                            <div class="seo_bg">
                                <div class="container">
                                    <div data-aos="fade-up" class="row aos-init aos-animate">
                                        <div class="col-lg-6">
                                            <div class="title-heading-mobile_dev p-0">
                                                <h1 class="headingTitle textbg">E-Commerce Development |
                                                    <span>MINDIII</span>
                                                </h1>
                                                <h5 class="textbg" style="font-family: Oxygen, sanSerif; line-height: 2; font-size: 20px">
                                                    <span>E-Commerce</span>
                                                    Website Development company that designs the website according
                                                    to your business type. We are a premier digital solution
                                                    provider company that works with an outstanding set of eCommerce
                                                    solutions.
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <img src="<?php echo  get_stylesheet_directory_uri() . '/assets/image/ecommerce_banner.6157e404.webp' ?>" alt="E-comm-banner" class="uiuxresopnsive">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="mobileappbg1 col">
                                <div class="container">
                                    <h3 class="Ecommercetitle" style="color: #000; margin-top: 48px; text-align: left; font-size: 22px;">
                                        E-Commerce Development</h3>
                                    <div class="line_color6">
                                        <div class="line_color7">

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <div class="E-comm-img">
                                                <img src="<?php echo  get_stylesheet_directory_uri() . '/assets/image/e-commerce-development-company.077b0050.webp' ?>" alt="E-commerce development company" srcset="">

                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <p class="Ecommercepara">
                                                Selling and purchasing transactions of products and services over
                                                the internet medium is called E-Commerce. The E-Commerce website is
                                                quite popular and has become essential for the business. E-Commerce
                                                Websites and applications transform the business and help them to
                                                expand for the growth of the company. The good UI/XI is the main key
                                                factor and large options attract customers and users. MINDIII has a
                                                long experience of building E-Commerce Web & App development. We are
                                                a dedicated company for E-Commerce Software development with the
                                                latest technology. We are central India's best and leading company,
                                                our satisfied client proved that we are the best in our sector. We
                                                are a team who provides you with a custom ecommerce integration of
                                                an e-commerce website, CRM, ERP etc. Our queue design and visual
                                                effect make the e-commerce website amazing and business-oriented,
                                                and sales are driven. While developing any e-commerce website and
                                                app we always keep in mind that software should always be attractive
                                                and eye-catchy.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div>
                            <div class="mobileappbg1 col">
                                <div class="container">
                                    <div class="ios_provide ios_Section ios_MoreText title-heading top_pd">
                                        <div class="no-gutters row">
                                            <div data-aos="fade-right" class="mobileappbg py-3 col-lg-6 aos-init aos-animate">
                                                <div>
                                                    <h5 class="ios_color"> Our E-Commerce Development Expertise is
                                                    </h5>
                                                </div>
                                                <ul>
                                                    <li class="Expertise">
                                                        <span style="margin-right: 10px;">
                                                            <img src="<?php echo  get_stylesheet_directory_uri() . '/assets/image/check-mark.f3427321.webp' ?>" alt="" width="3%" height="3%">
                                                        </span>
                                                        SaaS Ecommerce Solutions

                                                    </li>
                                                    <li class="Expertise">
                                                        <span style="margin-right: 10px;">
                                                            <img src="<?php echo  get_stylesheet_directory_uri() . '/assets/image/check-mark.f3427321.webp' ?>" alt="" width="3%" height="3%">
                                                        </span>
                                                        Marketplace development services

                                                    </li>
                                                    <li class="Expertise">
                                                        <span style="margin-right: 10px;">
                                                            <img src="<?php echo  get_stylesheet_directory_uri() . '/assets/image/check-mark.f3427321.webp' ?>" alt="" width="3%" height="3%">
                                                        </span>
                                                        Shopping cart development

                                                    </li>
                                                    <li class="Expertise">
                                                        <span style="margin-right: 10px;">
                                                            <img src="<?php echo  get_stylesheet_directory_uri() . '/assets/image/check-mark.f3427321.webp' ?>" alt="" width="3%" height="3%">
                                                        </span>
                                                        Online store customization

                                                    </li>
                                                    <li class="Expertise">
                                                        <span style="margin-right: 10px;">
                                                            <img src="<?php echo  get_stylesheet_directory_uri() . '/assets/image/check-mark.f3427321.webp' ?>" alt="" width="3%" height="3%">
                                                        </span>
                                                        website maintenance and support

                                                    </li>
                                                    <li class="Expertise">
                                                        <span style="margin-right: 10px;">
                                                            <img src="<?php echo  get_stylesheet_directory_uri() . '/assets/image/check-mark.f3427321.webp' ?>" alt="" width="3%" height="3%">
                                                        </span>
                                                        MultiVendor E-Commerce Website

                                                    </li>
                                                    <li class="Expertise">
                                                        <span style="margin-right: 10px;">
                                                            <img src="<?php echo  get_stylesheet_directory_uri() . '/assets/image/check-mark.f3427321.webp' ?>" alt="" width="3%" height="3%">
                                                        </span>
                                                        multi-store eCommerce platform

                                                    </li>
                                                </ul>
                                            </div>
                                            <div data-aos="fade-left" class="col-lg-6 aos-init aos-animate">
                                                <span class="ios_Image image_setting">
                                                    <img src="<?php echo  get_stylesheet_directory_uri() . '/assets/image/ecommerce-services.6d0bdb2a.webp' ?>" alt="E-commerce services">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="dev_Process aos-init aos-animate" data-aos="fade-up">
                            <h4 class="Expertisetitle">Our Expertise E-Commerce Development Solutions</h4>
                            <p class="Expertisepara">We deal in all kinds of ecommerce functionalities and ecommerce
                                integration and are
                                ready to work as per your product and services.</p>
                            <p class="Expertisepara">Provides full ecommerce Solution for our client </p>
                        </div>
                    </div>
                    <div class="container">
                        <div data-aos="fade-up" class="row aos-init aos-animate" style="padding-right: 15px; padding-left: 15px;">
                            <div class="col-lg-3">
                                <div class="process_1 common_Web_Class">
                                    <img src="<?php echo  get_stylesheet_directory_uri() . '/' ?>assets/image/process_04.afef4a16.webp" alt="">
                                    <h4>01</h4>
                                </div>
                                <div class="bottom_Line_process color_1"></div>
                                <div class="process_Content app_process">
                                    <h3>Custom Ecommerce Integration</h3>
                                    <span>
                                        We are a team who provides you with a custom ecommerce integration of an
                                        e-commerce website, CRM, ERP etc. Our queue design and visual effect make
                                        the e-commerce website amazing and business-oriented, and sales are driven.
                                        While developing any e-commerce website and app we always keep in mind that
                                        software should always be attractive and eye-catchy.</span>
                                </div>

                            </div>
                            <div class="col-lg-3">
                                <div class="process_2 common_Web_Class">
                                    <img src="<?php echo  get_stylesheet_directory_uri() . '/assets/image/process_01.998d2f07.webp' ?>" alt="">
                                    <h4>02</h4>
                                </div>
                                <div class="bottom_Line_process color_2"></div>
                                <div class="process_Content app_process">
                                    <h3>B2C platform</h3>
                                    <span>
                                        Business to Customer e-com Software is always in demand and it works very
                                        effectively for the sales of the product and service. a web portal enables
                                        customers to connect directly to increase engagement and boost E-commerce
                                        business. We are the best company in India and have been doing tremendous
                                        work in the same category.</span>
                                </div>

                            </div>
                            <div class="col-lg-3">
                                <div class="process_3 common_Web_Class">
                                    <img src="<?php echo  get_stylesheet_directory_uri() . '/assets/image/process_03.611a9e73.webp' ?>" alt="">
                                    <h4>03</h4>
                                </div>
                                <div class="bottom_Line_process color_3"></div>
                                <div class="process_Content app_process">
                                    <h3>B2B Commerce Solutions</h3>
                                    <span>
                                        B2B Commerce Solutions We provide you business to business solutions very
                                        effectively. We keep the expertise in creating the excellent performance of
                                        B2B E-Commerce solutions that help you to grow your business.</span>
                                </div>

                            </div>
                            <div class="col-lg-3">
                                <div class="process_4 common_Web_Class">
                                    <img src="<?php echo  get_stylesheet_directory_uri() . '/assets/image/process_02.f8b1c709.webp' ?>" alt="">
                                    <h4>04</h4>
                                </div>
                                <div class="bottom_Line_process color_4"></div>
                                <div class="process_Content app_process">
                                    <h3>Technology Consulting</h3>
                                    <span>
                                        MINDIII team has a separate business consultant team for the valuable
                                        client, our consultant analyzes your requirement and then suggests to you
                                        which technology is best for your E-commerce Software. Our specialized
                                        consultant helps you to find the relevant technology, platform, and
                                        cost-effective development.</span>
                                </div>

                            </div>
                            <div class="mb-5 row">
                                <div class="col-lg-3">
                                    <div class="process_1 common_Web_Class">
                                        <img src="<?php echo  get_stylesheet_directory_uri() . '/assets/image/process_04.afef4a16.webp' ?>" alt="">
                                        <h4>05</h4>
                                    </div>
                                    <div class="bottom_Line_process color_1"></div>
                                    <div class="process_Content app_process">
                                        <h3>E-Commerce App Development</h3>
                                        <span>
                                            We provide seamless E-Commerce websites with our best E-Commerce
                                            applications development. We have an industry expert E-commerce App
                                            developer team that does tremendous work for our client and makes us
                                            no.#1 App development company in India. We help you to build E-Commerce
                                            Applications with amazing functionalities and the best features.</span>
                                    </div>

                                </div>
                                <div class="col-lg-3">
                                    <div class="process_2 common_Web_Class">
                                        <img src="<?php echo  get_stylesheet_directory_uri() . '/assets/image/process_01.998d2f07.webp' ?>" alt="">
                                        <h4>06</h4>
                                    </div>
                                    <div class="bottom_Line_process color_2"></div>
                                    <div class="process_Content app_process">
                                        <h3>Payment Integrationn</h3>
                                        <span>
                                            Payments Integration is a very important feature in an E-Commerce
                                            website and Application. In Our E-Com service we provides you with
                                            multiple payment gateways that enable secure and safe
                                            transactions.</span>
                                    </div>

                                </div>
                                <div class="col-lg-3">
                                    <div class="process_3 common_Web_Class">
                                        <img src="<?php echo  get_stylesheet_directory_uri() . '/assets/image/process_03.611a9e73.webp' ?>" alt="">
                                        <h4>07</h4>
                                    </div>
                                    <div class="bottom_Line_process color_3"></div>
                                    <div class="process_Content app_process">
                                        <h3>Deploy Maintenance</h3>
                                        <span>
                                            We provide you with full support and maintenance services after
                                            deploying the website and mobile application. Also, We always keep
                                            tracking the performance of our built software.</span>
                                    </div>

                                </div>
                                <div class="col-lg-3">
                                    <div class="process_4 common_Web_Class">
                                        <img src="<?php echo  get_stylesheet_directory_uri() . '/assets/image/process_02.f8b1c709.webp' ?>" alt="">
                                        <h4>08</h4>
                                    </div>
                                    <div class="bottom_Line_process color_4"></div>
                                    <div class="process_Content app_process">
                                        <h3>Technology Consulting</h3>
                                        <span>
                                            MINDIII team has a separate business consultant team for the valuable
                                            client, our consultant analyzes your requirement and then suggests to
                                            you which technology is best for your E-commerce Software. Our
                                            specialized consultant helps you to find the relevant technology,
                                            platform, and cost-effective development.</span>
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
                                                                <small class="text-muted form-text">We'll never
                                                                    share your
                                                                    email with anyone
                                                                    else.</small>
                                                                <div> <span class="text-danger" id="emailError"></span></div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-12">
                                                            <div class="form-group">
                                                                <label class="form-label" for="formBasicPassword">Skype ID /
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
                                                                            <input type="tel" autocomplete="off" class="form-control" name="phone" id="phone" placeholder="Enter Contact Number" value="">
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