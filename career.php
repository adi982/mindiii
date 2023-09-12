<?php

/**
 * Template Name:career
 * 
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Current Openings & Job post-IT jobs | MINDIII</title>
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
    <!---- Header sectio------------------------------------------------------------------------------------------->
    <div id="root">
        <section class="Header HeaderFixed">

            <nav class=" innerPageHeader navbar navbar-expand-md navbar-dark bg-dark fixed-top">
                <div class="container">
                    <div class="navbar-brand">
                        <a href="http://localhost/mindiii_website_wordpres/home/">
                            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/image/mindiii_logo_white_red.ce3db614.webp' ?>" alt="">
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
                                    <a href="http://localhost/mindiii_website_wordpres/lifemindiii/">Life @MINDIII </a>
                                    <a href="http://localhost/mindiii_website_wordpres/career/">Career </a>
                                    <a href="http://localhost/mindiii_website_wordpres/aboutus/">About Us </a>
                                    <a href="http://localhost/mindiii_website_wordpres/contactus/" class="dropdown-item animate__animated  animate__zoomIn animate4s nav-link  headtab-link">
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
                                <a class="nav-link  headtab-link " aria-current="page" href="http://localhost/mindiii_website_wordpres/home/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link  headtab-link " href="http://localhost/mindiii_website_wordpres/services/">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link  headtab-link" href="http://localhost/mindiii_website_wordpres/industries/">Industries</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link  headtab-link" href="http://localhost/mindiii_website_wordpres/portfolio/">Portfolio</a>
                            </li>
                            <li class="mbMenu nav-item">
                                <a href="http://localhost/mindiii_website_wordpres/lifemindiii/" class="nav-link  headtab-link">Life @MINDIII </a>
                            </li>
                            <li class="mbMenu nav-item">
                                <a href="http://localhost/mindiii_website_wordpres/career/" class="nav-link  headtab-link">Career </a>
                            </li>
                            <li class="mbMenu nav-item">
                                <a href="http://localhost/mindiii_website_wordpres/aboutus/" class="nav-link  headtab-link">About Us </a>
                            </li>
                            <li class="mbMenu nav-item">
                                <a href="http://localhost/mindiii_website_wordpres/contactus/" class="nav-link  headtab-link">Contact Us
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
            </nav>
        </section>
    </div>
    <!---------------------------carrrea page section------------------------------------------------------------------------------------->
    <div class="mainWrapper">
        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="secTitle text-center">
                            <h2 class="sectionHeadingTitle">
                                <span>Current Openings & Job post |</span>
                                MINDIII
                            </h2>
                            <p class="careerHeadingTitle">
                                <span class="sectionHeadingPara_span">MINDIII</span>
                                is an equal opportunity employer focused on consistency in learning, growth, and
                                success. Join Us to achieve your goals and give wings to your dreams.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="postJobBx mt-4">
                    <div class="row postjobalign">
                        <div class="col-lg-10">
                            <div class="postBx">
                                <div class="d-flex m-b30">
                                    <div class="job-post-info">
                                        <h5>
                                            <a href=""> Senior PHP Developer</a>
                                        </h5>
                                        <p> We are looking for Senior PHP Developer with minimum of <b>4-5 Years</b>
                                            of experience</p>
                                        <span>
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="map-marker-alt" class="svg-inline--fa fa-map-marker-alt fa-w-12 " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                <path fill="currentColor" d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z">
                                                </path>
                                            </svg>
                                            Indore, India
                                        </span>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="jobOpening mr-auto">
                                        <span>
                                            2
                                            Opening
                                        </span>
                                    </div>
                                    <div class="salary-bx">
                                        <a href="http://localhost/mindiii_website_wordpres/career1/" class="btn themeBtnOutline">Apply</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="postBx">
                                <div class="d-flex m-b30">
                                    <div class="job-post-info">
                                        <h5>
                                            <a href=""> Android Developer</a>
                                        </h5>
                                        <p> We are looking for Android Developer with minimum of <b>3 Years</b>
                                            of experience</p>
                                        <span>
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="map-marker-alt" class="svg-inline--fa fa-map-marker-alt fa-w-12 " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                <path fill="currentColor" d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z">
                                                </path>
                                            </svg>
                                            Indore, India
                                        </span>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="jobOpening mr-auto">
                                        <span>
                                            1
                                            Opening
                                        </span>
                                    </div>
                                    <div class="salary-bx">
                                        <a href="" class="btn themeBtnOutline">Apply</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="postBx">
                                <div class="d-flex m-b30">
                                    <div class="job-post-info">
                                        <h5>
                                            <a href="">iOS Developer</a>
                                        </h5>
                                        <p> We are looking for ios Developer with minimum of <b>5 Years</b>
                                            of experience</p>
                                        <span>
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="map-marker-alt" class="svg-inline--fa fa-map-marker-alt fa-w-12 " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                <path fill="currentColor" d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z">
                                                </path>
                                            </svg>
                                            Indore, India
                                        </span>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="jobOpening mr-auto">
                                        <span>
                                            3
                                            Opening
                                        </span>
                                    </div>
                                    <div class="salary-bx">
                                        <a href="" class="btn themeBtnOutline">Apply</a>
                                    </div>

                                </div>
                            </div>
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
</body>

</html>
<?php
get_footer();
?>