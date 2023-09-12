<?php
/* 
Template Name: twr
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
    <!------------------------------------TWR page section----------------------------------------------------------------------------->
    <div class="mainWrapper">
        <div class="main_div mt-3 animate__animated animate__fadeIn animate__slow">
            <a href=" http://localhost/mindiii_website_wordpres/portfolio/">
                <span class="Dovies-back-icon">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z">
                        </path>
                    </svg>
                    <span>Back</span>
            </a>
            </span>
            <div class="main_div1">
                <div class="container">
                    <div class="d-main-heading">
                        <h2 class="DoviesTitle">
                            Welcome to
                            <span>TWR</span>
                        </h2>
                        <h3>Therapy with Rob (TWR) a revolutionary growth and accountability app</h3>
                        <div class="row">
                            <div class="col-lg-6 mx-auto">
                                <div class="doviesCnt">
                                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/image/twrbn.ce29a03e.webp' ?>" alt="twr-banner-image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dbanner-area">
                <div class="container">
                    <div class="doviesFnt">
                        <h2>
                            <span>TWR -</span>
                            The TWR app is your home for development. Relax, learn, understand and LEVEL UP
                        </h2>
                        <p>Thousands of people are developing themselves every day with Therapy with Rob (TWR). Be
                            held accountable to your growth and start feeling like your true self. Understand
                            yourself more and truly see what you’re capable of achieving TWR is the revolutionary
                            growth and accountability app, incorporating performance hypnotherapy and mindset
                            coaching, all leading you towards being your most powerful self.</p>
                        <a href="https://www.mindiii.com/" target="_blank" class="Dovies-button btn btn-primary">
                            <span>VISIT WEBSITE </span>
                        </a>
                        <div class="my-5 doviesWt row">
                            <div class="mb-5 dWtPct col-lg-6">
                                <div class="dCnt_img ">
                                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/image/twrscreen1.05ecaecd.webp' ?>" alt="twr-image1">
                                </div>
                            </div>
                            <div class="mb-5 dWtPct col-lg-6">
                                <div class="dCnt_img">
                                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/image/twrscreen2.6ab4b8d6.webp' ?>" alt="twr-image2">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="doviesftn">
                    <div class="container">
                        <div class="doviesTest">
                            <div class="mt-20 SCnt_img">
                                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/image/twr4.3f327a10.webp' ?>" alt="twr-image3">
                            </div>
                            <div class="mt-21 SCnt_img">
                                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/image/twr1.c5ad14d1.webp' ?>" alt="twr-image4">
                            </div>
                            <div class="mt-20 SCnt_img">
                                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/image/twr2.d64b3881.webp' ?>" alt="twr-image5">
                            </div>
                            <div class="mt-21 SCnt_img">
                                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/image/twr3.3f13458e.webp' ?>" alt="" srcset="twr-image6">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="doviesPtn">
                        <h3>KNOWLEDGE IS POWER and TWR is the center to access this</h3>

                        <p>Hypnotherapy is the KEY for accessing those deep-rooted beliefs, positive or negative.
                            Indulge in a growing library of recordings to access your powerful subconscious mind and
                            begin to rewrite beliefs that don’t serve you, or enhance the ones that do.</p>
                    </div>
                    <div class="portfolio-app-store">
                        <a href="">
                            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/image/appstore1.4d62822e.webp' ?>" alt="appstore" class="mr-2">
                        </a>
                        <a href="">
                            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/image/playstore1.a5ef44af.webp' ?>" alt="playstore">
                        </a>
                    </div>
                </div>
                <div class="p-Next">
                    <h3>Next project</h3>
                    <p>Reservision</p>
                    <a href="#" class="shakeArrow">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z">
                            </path>
                        </svg>
                    </a>
                </div>
                <div class="container">
                    <div class="doviesProduct">
                        <h3>Our Featured Products</h3>
                        <div class="slick-slider slick-initialized" dir="ltr">
                            <button type="button" data-role="none" class="slick-arrow slick-prev" style="display: block;"> Previous</button>
                            <div class="slick-list">
                                <div class="slick-track" style="width: 3892px; opacity: 1; transform: translate3d(-2224px, 0px, 0px); transition: -webkit-transform 5000ms linear 0s;">
                                    <div data-index="-4" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 278px;">
                                        <div>
                                            <div tabindex="-1" style="width: 100%; display: inline-block;"><a href="http://192.168.1.62/mindiii_Website/connektUs.html">
                                                    <h3 class="mr-2"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/image/chatimmiapp.daf9ce48.webp' ?>" alt="product-img"></h3>
                                                </a></div>
                                        </div>
                                    </div>
                                    <div data-index="-3" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 278px;">
                                        <div>
                                            <div tabindex="-1" style="width: 100%; display: inline-block;"><a href="/dovies">
                                                    <h3 class="mr-2"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/image/doviesApp.7f624b5a.webp' ?>" alt="product-img"></h3>
                                                </a></div>
                                        </div>
                                    </div>
                                    <div data-index="-2" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 278px;">
                                        <div>
                                            <div tabindex="-1" style="width: 100%; display: inline-block;"><a href="/encantoVIP">
                                                    <h3 class="mr-2"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/image/encantoapp.82098d09.webp' ?>" alt="product-img"></h3>
                                                </a></div>
                                        </div>
                                    </div>
                                    <div data-index="-1" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 278px;">
                                        <div>
                                            <div tabindex="-1" style="width: 100%; display: inline-block;"><a href="/connektUs">
                                                    <h3 class="mr-2"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/image/connektUsapp.cb7d1690.webp' ?>" alt="product-img"></h3>
                                                </a></div>
                                        </div>
                                    </div>
                                    <div data-index="0" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: none; width: 278px;">
                                        <div>
                                            <div tabindex="-1" style="width: 100%; display: inline-block;"><a href="/parkswap">
                                                    <h3 class="mr-2"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/image/parkswapApp.a6272f45.webp' ?>" alt="product-img"></h3>
                                                </a></div>
                                        </div>
                                    </div>
                                    <div data-index="1" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: none; width: 278px;">
                                        <div>
                                            <div tabindex="-1" style="width: 100%; display: inline-block;"><a href="/chatimmi">
                                                    <h3 class="mr-2"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/image/chatimmiapp.daf9ce48.webp' ?>" alt="product-img"></h3>
                                                </a></div>
                                        </div>
                                    </div>
                                    <div data-index="2" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: none; width: 278px;">
                                        <div>
                                            <div tabindex="-1" style="width: 100%; display: inline-block;"><a href="/dovies">
                                                    <h3 class="mr-2"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/image/doviesApp.7f624b5a.webp' ?>" alt="product-img"></h3>
                                                </a></div>
                                        </div>
                                    </div>
                                    <div data-index="3" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: none; width: 278px;">
                                        <div>
                                            <div tabindex="-1" style="width: 100%; display: inline-block;"><a href="/encantoVIP">
                                                    <h3 class="mr-2"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/image/encantoapp.82098d09.webp' ?>" alt="product-img"></h3>
                                                </a></div>
                                        </div>
                                    </div>
                                    <div data-index="4" class="slick-slide slick-active slick-current" tabindex="-1" aria-hidden="false" style="outline: none; width: 278px;">
                                        <div>
                                            <div tabindex="-1" style="width: 100%; display: inline-block;"><a href="/connektUs">
                                                    <h3 class="mr-2"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/image/connektUsapp.cb7d1690.webp' ?>" alt="product-img"></h3>
                                                </a></div>
                                        </div>
                                    </div>
                                    <div data-index="5" tabindex="-1" class="slick-slide slick-active slick-cloned" aria-hidden="false" style="width: 278px;">
                                        <div>
                                            <div tabindex="-1" style="width: 100%; display: inline-block;"><a href="/parkswap">
                                                    <h3 class="mr-2"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/image/parkswapApp.a6272f45.webp"' ?> alt=" product-img"></h3>
                                                </a></div>
                                        </div>
                                    </div>
                                    <div data-index="6" tabindex="-1" class="slick-slide slick-active slick-cloned" aria-hidden="false" style="width: 278px;">
                                        <div>
                                            <div tabindex="-1" style="width: 100%; display: inline-block;"><a href="/chatimmi">
                                                    <h3 class="mr-2"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/image/chatimmiapp.daf9ce48.webp' ?>" alt="product-img"></h3>
                                                </a></div>
                                        </div>
                                    </div>
                                    <div data-index="7" tabindex="-1" class="slick-slide slick-active slick-cloned" aria-hidden="false" style="width: 278px;">
                                        <div>
                                            <div tabindex="-1" style="width: 100%; display: inline-block;"><a href="/dovies">
                                                    <h3 class="mr-2"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/image/doviesApp.7f624b5a.webp' ?>" alt="product-img"></h3>
                                                </a></div>
                                        </div>
                                    </div>
                                    <div data-index="8" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 278px;">
                                        <div>
                                            <div tabindex="-1" style="width: 100%; display: inline-block;"><a href="/encantoVIP">
                                                    <h3 class="mr-2"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/image/encantoapp.82098d09.webp' ?>" alt="product-img"></h3>
                                                </a></div>
                                        </div>
                                    </div>
                                    <div data-index="9" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 278px;">
                                        <div>
                                            <div tabindex="-1" style="width: 100%; display: inline-block;"><a href="/connektUs">
                                                    <h3 class="mr-2"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/image/connektUsapp.cb7d1690.webp' ?>" alt="product-img"></h3>
                                                </a></div>
                                        </div>
                                    </div>
                                </div>
                            </div><button type="button" data-role="none" class="slick-arrow slick-next" style="display: block;"> Next</button>
                            <ul class="slick-dots" style="display: none;">
                                <li class=""><button>1</button></li>
                                <li class=""><button>2</button></li>
                                <li class=""><button>3</button></li>
                                <li class=""><button>4</button></li>
                                <li class="slick-active"><button>5</button></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <section class="pt-3 pb-4 Contact-Cnt">
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
                </section>
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
    <!-------------------------------from sumit in databasa----------------------------------------------------------------------------------------------->
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
</body>

</html>

<?php
get_footer();
?>