<?php

/**
 * Template Name:dev-ops
 * 
 */
// get_header();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevOps Services and Solutions Provider | IT Outposts | MINDIII</title>
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
    <!--------------------------------devops page section-------------------------------------------------------------------------->
    <div class="mainWrapper">
        <section>
            <div class="animate__animated animate__fadeIn animate__slow">
                <div class="head_backgraound mobileappbg">
                    <div class="container">
                        <div data-aos="fade-up" class="assurance_Contain row aos-init aos-animate">
                            <div class="col-lg-6">
                                <h1 class="headingTitle_web quality_head">
                                    <span>DevOps |</span>
                                    MINDIII
                                </h1>
                                <p class="quality_heading Quality-Nheading1">
                                    Applying the DevOps methods is the best practice for providing the most valued
                                    technology and services to customers. DevOps is the union of technology,
                                    process, and people.
                                </p>
                            </div>
                            <div class="col-lg-6">
                                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/image/devOps_logo.30dc36b8.webp' ?>" alt="">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="ui_ux_bg">
                    <div class="ui_ux_bg1">
                        <section>
                            <div class="section_1">
                                <div class="container">
                                    <div class="section_2">
                                        <div class="block1_img">
                                            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/image/DevOps_company.c4181927.webp' ?>" alt="">
                                        </div>
                                        <div class="paragraph2">
                                            <h3 style="font-size: 22px; font-weight: bold;">What Is DevOps?</h3>
                                            <div class="line_color6">
                                                <div class="line_color7"></div>
                                            </div>
                                            <p style="line-height: 30px;">DevOps stands for combination of practices
                                                and tools designed for the
                                                improvement of the work process and work speed as compared to
                                                traditional software development process. It organized the
                                                traditional working process into modern and secure software
                                                development process. In the model of DevOps, development and
                                                operations team work collaboratively across the entire software
                                                application life cycle and this process gives a better understanding
                                                for all software developing teams and its result is directly shown
                                                in software in the form of code Quality, product delivery time and
                                                overall software developing process.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="section_1">
                                <div class="container">
                                    <div class="section_2">
                                        <div class="paragraph2">
                                            <h3 style="font-size: 22px; font-weight: bold;">How does DevOps Works?
                                            </h3>
                                            <div class="line_color6">
                                                <div class="line_color7"></div>
                                            </div>
                                            <p style="line-height: 30px;">As you know that DevOps is the set of
                                                practice, tools, and cultural
                                                philosophy that play the integrator role between the software
                                                development and entire IT team. It collaborates the process of
                                                software development, technology automation and does cross-team
                                                communication among all teams. A DevOps engineer plays a major role
                                                in the Software developer team, so here we have a separate DevOps
                                                team which makes the entire software development and operation
                                                process.</p>
                                        </div>
                                        <div class="block1_img">
                                            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/image/how_devOps_work.18ba45d2 (1).webp' ?>" alt="">
                                        </div>
                                    </div>
                                </div>

                            </div>
                    </div>
                    <section class="devops_section2">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h3 style="font-size: 22px; margin-top: 50px;">Benefits of DevOps</h3>
                                    <div class="line_color6">
                                        <div class="line_color7"></div>
                                    </div>
                                    <div class="devOps_bottom_para">
                                        <div class="devops_img_para">
                                            <div>
                                                <ul>
                                                    <li>
                                                        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/image/speed_icon.ebb42705.webp' ?>" alt="">
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="devops_para_heading">
                                                <h3>Speed</h3>
                                                <p>DevOps practice and tools directly improve the overall working
                                                    process which impact on software delivery on the time.And
                                                    becomes more efficient at driving business results.</p>
                                            </div>
                                        </div>
                                        <div class="devops_img_para">
                                            <div>
                                                <ul>
                                                    <li>
                                                        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/image/delivery_icon.cda64e51.webp' ?>" alt="">
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="devops_para_heading">
                                                <h3> Rapid delivery</h3>
                                                <p>As you increase the pace of releases, simultaneously product
                                                    delivery time improves.</p>
                                            </div>
                                        </div>
                                        <div class="devops_img_para">
                                            <div>
                                                <ul>
                                                    <li>
                                                        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/image/reliability_icon.1d66400b.webp' ?>" alt="">
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="devops_para_heading">
                                                <h3>Reliability</h3>
                                                <p>DevOps practice gives the reliability about the overall software
                                                    development process it gives the confidence for IT team that
                                                    they delivered secure and quality software product.</p>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <div class="col-lg-6">
                                    <div class="devOps_bottom_para1">
                                        <div class="devops_img_para">
                                            <div>
                                                <ul>
                                                    <li>
                                                        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/image/colaboration_icon.9229a4af.webp' ?>" alt="">
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="devops_para_heading">
                                                <h3> Improved collaboration</h3>
                                                <p>Under a DevOps model, developers and operations teams collaborate
                                                    together, they share responsibilities and distribute the
                                                    workflows which directly impact on their work quality.</p>
                                            </div>
                                        </div>
                                        <div class="devops_img_para">
                                            <div>
                                                <ul>
                                                    <li>
                                                        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/image/security_icon.81d9b40c.webp' ?>" alt="">
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="devops_para_heading">
                                                <h3>Security</h3>
                                                <p>DevOps model gives the product security and enhances the
                                                    product
                                                    quality by implementing the automated and integrated security
                                                    testing tools.</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="devops_section3">
                        <div class="container">
                            <div class="devops_lifecycle">
                                <div class="dev_text">
                                    <h3>How DevOps works: The DevOps lifecycle </h3>
                                    <div>
                                        <p>The DevOps lifecycle (sometimes called the continuous delivery pipeline,
                                            when portrayed in a linear fashion) is a series of iterative, automated
                                            development processes, or workflows, executed within a larger,
                                            automated, and iterative development lifecycle designed to optimize the
                                            rapid delivery of high-quality software. The name and number of
                                            workflows can differ depending on whom you ask, but they typically boil
                                            down to these six: The DevOps lifecycle follows a complete path which
                                            makes a full software development process and this process is done by
                                            following steps.</p>
                                    </div>
                                    <div class="Devops_im">
                                        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/image/devops-lifecycle.769d3de8.webp' ?>" alt="" width="60%" max-width="50%">
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="devops_plan">
                                        <div>
                                            <h3> Planning (or ideation)</h3>
                                            <p> In the first phase of DevOps process schedule planning and task
                                                tracking tools ensure the DevOps team knows what tasks are at hand,
                                                and which are currently being done and what all is in the pipeline
                                                for the next step. It finds the new scope for the team to search out
                                                the new features and functionality in the next release. Tools like
                                                Confluence and Jira help DevOps teams achieve a seamless and
                                                efficient project management cycle and ensure timely product
                                                delivery.</p>
                                        </div>
                                        <div>
                                            <h3> Operations</h3>
                                            <p> It defines that features are running smoothly and that there are no
                                                interruptions in service.</p>
                                        </div>
                                        <div>
                                            <h3> CI/CD pipeline engines</h3>
                                            <p> CI/CD enables DevOps teams to frequently validate and deliver
                                                application applications to the end-user through automation during
                                                the development lifecycle. in this workflow the new code is
                                                integrated into the existing code base, then tested and packaged
                                                into an executable for deployment. here are some common tools for
                                                CI, CD, or both including Jenkins, GitLab and CircleCI.</p>
                                        </div>
                                        <div>
                                            <h3> Deployment</h3>
                                            <p> Usually, it’s called continuous deployment. and here the runtime
                                                build output is deployed to the runtime environment means a
                                                development environment where runtime tests are executed for
                                                quality, compliance, and security.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="devops_plan devops_plan1">
                                        <div>
                                            <h3> Development</h3>
                                            <p> In this programming step, developers write the code, test and build
                                                new and enhanced features, based on user stories and work items in
                                                the backlog. A combination of the practices like test-driven
                                                development (TDD), pair programming, and peer code review. Docker
                                                containerization ensures consistency across multiple developments
                                                and release cycles and provides repeatable development, build, test,
                                                and production environments. And other popular tools for this phase
                                                include Kubernetes, Terraform, Chef, Ansible, and Puppet.</p>
                                        </div>
                                        <div>
                                            <h3> Learning</h3>
                                            <p> This workflow is also called the continuous feedback, this workflow
                                                consists of the feedback from end-users and customers on features,
                                                performance and business value to take back to planning for the
                                                enhancements.</p>
                                        </div>
                                        <div>
                                            <h3> Continuous testing</h3>
                                            <p> Describe the all testing phases elements like development (unit
                                                testing, contract testing), integration (static code scans, CVE
                                                scans, linting), deployment (smoke testing, penetration testing,
                                                configuration testing), operation(chaos testing, compliance
                                                testing), learning (A/B testing).</p>
                                        </div>
                                        <div>
                                            <h3>Compliance</h3>
                                            <p>A company frames compliance rules to meet regulatory requirements
                                                such as HIPAA, SOX, GDPR, etc. DevOps and Compliance managers ensure
                                                there aren’t any compliance problems from disorderly development
                                                workflows.</p>
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
                                                    <form action="" class="" id="myform" method="post">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="form-group">
                                                                    <label for="formBasicEmail" class="form-label">Full
                                                                        Name</label>
                                                                    <input name="fullName" placeholder="Enter Full Name" type="text" id="name" class="form-control" value="">
                                                                    <span class="text-danger" id="nameError"></span>
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="formBasicPassword">Email</label>
                                                                    <input name="email" placeholder="Enter Email" type="email" id="email" class="form-control" value="">
                                                                    <small class="text-muted form-text">We'll
                                                                        never
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
                                                                    <span class="text-muted form-text" style="color: #6C757D ;">We'll never
                                                                        share your
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
    <script>
        $(document).ready(function() {
            $('.showdropdown').click(function() {
                $('#menuList').toggle(); // Toggles the visibility of the dropdown menu
            });
        });

        function myFunction() {
            var x = document.getElementById("navbarNavDropdown");
            if (x.style.display === "block") {
                x.style.display = "none";
            } else {
                x.style.display = "block";
            }
        }
    </script>
    <script>
        $(document).ready(function() {
            $('#MybtnModal').click(function() {
                $('#myModal').modal('show')

            });
            $("#hide").click(function() {
                $("#myModal").modal('hide');
            });
        });

        function scrollToTop() {
            $(window).scrollTop(0);
        }
    </script>
    <!----------------top icon js----------------------------->
    <script type="text/javascript">
        $(window).scroll(function() {
            if ($(this).scrollTop() > 0) {
                $('#scroll-up').fadeIn();
            } else {
                $('#scroll-up').fadeOut();
            }
        });
    </script>
</body>

</html>


<?php
get_footer();
?>