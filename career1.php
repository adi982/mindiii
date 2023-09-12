<?php

/***
 * Template Name:career1
 * 
 */
// get_header();
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
    <div id="root">
        <section class="Header HeaderFixed">

            <nav class=" innerPageHeader navbar navbar-expand-md navbar-dark bg-dark fixed-top">
                <div class="container">
                    <div class="navbar-brand">
                        <a href="http://localhost/mindiii_website_wordpres/home/">
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
    <!--------------------------------career1 page section----------------------------------------------------------------------->
    <div class="mainWrapper">
        <div class="py-5">
            <div class="container">
                <div class="careerDetails">
                    <div class="justify-content-center row">
                        <div class="col-lg-7 col-md-7">
                            <div class="careerInfo">
                                <div class="carDetInfo">
                                    <h2>
                                        <a>Senior PHP Developer</a>
                                    </h2>
                                    <div class="jobOpening">
                                        <span>2 Opening</span>
                                    </div>
                                    <div class="carrMetaInfo">
                                        <h3>Experience</h3>
                                        <p>We are looking for Senior PHP Developer with minimum of <b>4-5 Years</b>
                                            of experience</p>
                                    </div>
                                    <div class="carrMetaInfo">
                                        <h3>Skils Required</h3>
                                        <p class="keySkills mt-2">
                                            <span>WordPress</span>
                                            <span>Magneto</span>
                                            <span>shopify</span>
                                            <span>php</span>
                                            <span>codeigniter</span>
                                            <span>Prestashop</span>
                                            <span>Laravel</span>
                                        </p>
                                    </div>
                                    <div class="carrMetaInfo">
                                        <h3>Job Description</h3>
                                        <div class="customStyleList mt-3">
                                            <ul>
                                                <li>
                                                    Designing, coding and implementation of complex web based
                                                    applications.
                                                </li>
                                                <li>
                                                    Mentoring teams of junior& mid level PHP developers.
                                                </li>
                                                <li>
                                                    Working with cross-functional team.
                                                </li>
                                                <li>
                                                    Client Communication.
                                                </li>
                                                <li>
                                                    Bringing new technology trends in the company and preparing a
                                                    road map to implement them smoothly.
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5">
                            <div class="careerApplyForm contactForm">
                                <form action="" autocomplete="off" id="careerform" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label class="form-label">Full Name</label>
                                        <input name="fullName" placeholder="Enter Full Name" type="text" class="form-control" value="" id="fullName">
                                        <span class="text-danger" id="nameError"></span>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Email</label>
                                        <input name="email" placeholder="Enter  Email" type="text" class="form-control" value="" id="email">
                                        <span class="text-danger"></span>
                                        <div>
                                            <span class="text-danger" id="emailError"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Contact No</label>
                                        <div class="mobileInput">
                                            <div class="allow-dropdown intl-tel-input">
                                                <div class="flag-container">
                                                    <input type="tel" id="phone" class="form-control" name="phone" placeholder="Enter Contact Number" />
                                                    <div> <span class="text-danger" id="phoneerror"></span></div>
                                                </div>
                                            </div>
                                        </div>

                                        <span class="text-danger"></span>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Job Position</label>
                                        <select name="jobPosition" class="sel-crfeild form-control" id="jobPosition">
                                            <option value="Choose">Choose...</option>
                                            <option value="Senior PHP Developer">Senior PHP Developer</option>
                                            <option value="Android Developer">Android Developer</option>
                                            <option value="iOS Developer">iOS Developer</option>
                                        </select>
                                        <span class="text-danger" id="Choose-error"></span>
                                    </div>
                                    <div class="form-group">
                                        <!-- <input type="file" name="resumeFile" id="resumeFile"> -->
                                        <label class="form-label">Upload Resume</label>
                                        <label class="resFile">
                                            <input id="resumeFile" name="resumeFile" type="file" id="resumeFile">
                                            <p>
                                                <span></span>
                                                Upload Your Resume
                                            </p>
                                            <a class="btn themeBtn">Browser File</a>
                                        </label>
                                        <span class="text-danger" id="resume-error"></span>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Message</label>
                                        <textarea name="message" rows="5" placeholder="Write your message" class="form-control" id="message"></textarea>
                                        <span class="text-danger" id="messageerror"></span>
                                    </div>
                                    <button type="submit" class="themeBtn btn btn-primary" name="btn">Apply</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $("#careerform").submit(function(event) {
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
                $("#jobPosition").change(function() {
                    $("#Choose-error").text('');
                    $("#jobPosition").addClass("box_error");
                    error = true;
                    $("#Choose-error").text('');
                    error = false;
                });
                $("#resumeFile").keyup(function() {
                    $("#resume-error").text('');
                    $("#resumeFile").addClass("box_error");
                    error = true;
                    $("#resume-error").text('');
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
                var jobPosition = $("#jobPosition").val();
                var resumeFile = $("#resumeFile").val();
                var message = $("#message").val();
                var formData = new FormData(this);
                formData.append('action', 'career');
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
                if ($('#jobPosition').val() == 'Choose') {
                    $("#Choose-error").text("The Job Position field is required");
                    return false
                }
                if ($("#resumeFile").val() === "") {
                    $("#resume-error").text("Upload your resume file.");
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
                    data: formData,
                    processData: false,
                    contentType: false,
                    // data: {
                    //     'action': 'career',
                    fullName: fullName,
                    email: email,
                    phone: phone,
                    jobPosition: jobPosition,
                    resumeFile: resumeFile,
                    message: message,
                    // },
                    success: function(response) {
                        if (response.status == 1) {
                            toastr.success(response.message)
                            jQuery('#careerform').trigger('reset');
                        }
                        console.log(response);
                    },
                    error: function(response) {
                        if (response.status == 0) {
                            toastr.error(response.message)
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

        $('#resumeFile').change(function() {
            var file = $('#resumeFile')[0].files[0];
            $(this).parent('label').find('p').text(file.name);
            jQuery('#resumeFile').trigger('reset');
        });
    </script>
</body>

</html>
<?php
get_footer();
?>