<?php
// Template Name: custom-career-template.php
?>

<!DOCTYPE html>
<html>

<head>
    <title>Your Custom Email Template</title>
</head>

<body>
    <p>Hello</p>
    <p>
        There is a new job application:Please check details below
    </p>
    <p style="font-weight: bold;">Name: <?php echo $fullName ?> </p>
    <p style="font-weight: bold;">Email: <?php echo $email ?> </p>
    <p style="font-weight: bold;">Contact Number: <?php echo $phone ?> </p>
    <p style="font-weight: bold;">Position: <?php echo $jobPosition ?> </p>
    <p style="font-weight: bold;">Message: <?php echo $message ?> </p>

</body>

</html>