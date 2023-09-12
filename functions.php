<?php
function enqueue_toastify_scripts()
{
    wp_enqueue_script('toastify-js', 'https://cdn.jsdelivr.net/npm/toastify-js@1.11.0/dist/toastify.min.js', array('jquery'), null, true);
    wp_enqueue_style('toastify-css', 'https://cdn.jsdelivr.net/npm/toastify-js@1.11.0/dist/toastify.min.css');
}
add_action('wp_enqueue_scripts', 'enqueue_toastify_scripts');


/*********************************** show the menu option create using the custom theme********************************************************* */

function theme_register_nav_menu()
{
    register_nav_menu('primary-menu', 'Primary Menu');
}
add_action('after_setup_theme', 'theme_register_nav_menu');

add_theme_support('post-thumbnails');
function my_custom_menu()
{
    register_nav_menus(
        array(
            'footer-menu' => _('Footer menu'),
            'services-footer-menu' => _('Services Menu'),
            'header-menu' => _('Header menu'),
            'moblie-menu' => _('Moblie menu'),

        )
    );
}
add_action('init', 'my_custom_menu');

/***********************************custom  css add  navigation menu *****************************************************/
add_filter('nav_menu_css_class', 'special_nav_class', 10, 2);

function special_nav_class($classes, $item)
{
    if (in_array('current-menu-item', $classes)) {
        $classes[] = 'active ';
    }
    return $classes;
}
/********************************insert data in database career *************************************************************** */
function career()
{

    $fullName = sanitize_text_field($_POST['fullName']);
    $email = sanitize_email($_POST['email']);
    $phone = sanitize_textarea_field($_POST['phone']);
    $jobPosition = sanitize_textarea_field($_POST['jobPosition']);
    $message = sanitize_textarea_field($_POST['message']);
    $upload_dir = wp_upload_dir();
    $image_name = sanitize_file_name($_FILES['resumeFile']['name']);
    $image_path = $upload_dir['path'] . '/' . $image_name;
    move_uploaded_file($_FILES['resumeFile']['tmp_name'], $image_path);
    global $wpdb;
    $table_name = 'career';
    $result = $wpdb->insert($table_name, array(
        "fullName" => $fullName,
        "email" => $email,
        "phone" => $phone,
        "jobPosition" => $jobPosition,
        'resumeFile' => $upload_dir['url'] . '/' . $image_name,
        "message" => $message,

    ));
    ob_start();
    include(get_template_directory() . '/custom-career-template.php');
    $email_content = ob_get_clean();
    $to = $email;
    $subject = 'New Job Application';
    $attachments = array($image_path);
    $headers = array('Content-Type: text/html; charset=UTF-8');
    wp_mail($to, $subject, $email_content, $headers, $attachments);
    if ($result == true) {
        echo json_encode(array('message' => 'Thanks for apply', 'status' => 1));
    } else {
        echo json_encode(array('message' => 'Error', 'status' => 0));
    }
}

add_action('wp_ajax_career', 'career');
add_action('wp_ajax_nopriv_career', 'career');


/*************************************Add the menu wp-admin area************************************************************************************* */

function custom_menu()
{
    add_menu_page(
        'applicant',  // Page Title
        'ApplicantList', // Menu Title
        'edit_posts',
        'applicant', // Menu Slug
        'ApplicantList', // call back funcation
        'dashicons-media-spreadsheet'

    );
}
add_action('admin_menu', 'custom_menu');
function ApplicantList()
{
    global $wpdb;
    $table_name = 'career';
    $result = $wpdb->get_results("SELECT * FROM $table_name");
?>
    <style>
        table,
        td,
        th {
            text-align: left;
            margin-top: 5px;
            border: 1px solid #201f3f;
            padding: auto;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            padding: 15px;
        }
    </style>
    <table>
        <tr>
            <th>id</th>
            <th>fullName</th>
            <th>email</th>
            <th>phone</th>
            <th>jobPosition</th>
            <th>resumeFile</th>
            <th>message</th>
            <?php
            foreach ($result as $row) {



            ?>
        <tr>
            <td><?php echo $row->id  ?></td>
            <td><?php echo $row->fullName  ?></td>
            <td><?php echo $row->email  ?></td>
            <td><?php echo $row->phone  ?></td>
            <td><?php echo $row->jobPosition  ?></td>
            <td><a href="<?php echo esc_url($row->resumeFile); ?>" style="color:black; text-decoration: none;"><?php echo esc_html($row->resumeFile); ?></a></td>
            <td><?php echo $row->message  ?></td>
        </tr>
    <?php     }
    ?>
    </tr>
    </table>
<?php

}


/**********************php send mail ************************************* */
add_action('phpmailer_init', 'my_phpmailer_smtp');
function my_phpmailer_smtp($phpmailer)
{
    $phpmailer->isSMTP();
    $phpmailer->Host = 'smtp.gmail.com';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = '465';
    $phpmailer->Username = 'adityatiwari23mindiii@gmail.com';
    $phpmailer->Password = 'qjbgppsdjuwoullq';
    $phpmailer->SMTPSecure = 'ssl';
    $phpmailer->From = 'adityatiwari23mindiii@gmail.com';
    // $phpmailer->FromName = 'Aditya tiwari';
}
/*************************************insert data in contactus page**************************************************************************************/
function contactus()
{
    global $wpdb;
    $fullName = sanitize_text_field($_POST['fullName']);
    $email = sanitize_email($_POST['email']);
    $phone = sanitize_text_field($_POST['phone']);
    $skype = sanitize_text_field($_POST['skype']);
    $message = sanitize_textarea_field($_POST['message']);
    $table_name = 'contactus';
    $result = $wpdb->insert($table_name, array(
        "fullName" => $fullName,
        "email" => $email,
        "phone" => $phone,
        "skype" => $skype,
        "message" => $message,
    ));
    // ob_start();
    // include(get_template_directory() . '/custom-conactus-template.php');
    // $email_content = ob_get_clean();
    // $to = $email;
    // $subject = 'Contact Request';
    // $headers = array('Content-Type: text/html; charset=UTF-8');
    // wp_mail($to, $subject, $email_content, $headers);
    if ($result == true) {
        echo json_encode(array('message' => 'Message sent successfull', 'status' => 1));
    } else {
        echo json_encode(array('message' => 'Error', 'status' => 0));
    }
}
add_action('wp_ajax_contactus', 'contactus');
add_action('wp_ajax_nopriv_contactus', 'contactus');
