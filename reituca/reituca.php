<?php
/*
    Plugin Name: Reituca
    Plugin URI: http://reituca.net
    Description: Various codes needed - Multilingual - Lead forms & Landing pages.
    Author: Etay Vas
    Version: 2.20
    Author URI: http://etay.me
*/

//get the $#@% out
if (!function_exists ('is_admin')){
    header('Status: 403 Forbidden');
    header('HTTP/1.1 403 Forbidden');
    exit();
}

include_once    'inc/init-options.php';
include_once    'inc/functions.php';
include_once    'inc/themes_styles.php';
include         'inc/translations.php';

//check and update plugin
update_plugin();
//check and update LP
update_lp();

add_action('admin_init', 'register_user_input_settings' );
add_action('admin_menu', 'user_input_menu');

//add translated contact page
//////$wp_rewrite = new WP_Rewrite();
//////add_contact_page($contactPageLabel);

//add the Adzerk code to the <head>
add_action('wp_head', 'add_adzerk_to_head');

//Show error message if GravityForms is not installed/activated!
$anyMessage = check_form_exist();
if ($anyMessage[0]== 'no-gravityforms-installed') {
    add_action( 'admin_notices', 'my_admin_notice' );
}

//show the forms if we don't have a cookie
if (    !isset($_COOKIE["form_status"])  && check_form_exist()   ){
    
    require_once 'send_handler.php';
    
    //get the popup lead form code (still need to setup from widgets panel!)
    if(!is_category()){require_once 'widget.php';}
    //get the inpost lead form code
    if( !($_SERVER["REQUEST_URI"] == '/') ){add_filter ('the_content', 'insertForm');}
    //get the topbar lead form code
    add_action('wp_footer', 'add_top_bar_form');
    
    add_action('wp_print_scripts', 'gf_placeholder_enqueue_scripts');
    add_filter("gform_ajax_spinner_url", "cwwp_custom_gforms_spinner" );
    add_filter("gform_submit_button_1", "form_submit_button_1", 10, 2);
    add_filter("gform_submit_button_2", "form_submit_button_2", 10, 2);
    add_filter("gform_submit_button_3", "form_submit_button_3", 10, 2);
    add_filter("gform_submit_button_4", "form_submit_button_4", 10, 2);
    add_filter("gform_pre_render", "translate_fields_labels");
    //add_filter("gform_admin_pre_render", "translate_fields_labels");
    add_filter("gform_tabindex_1", create_function("", "return 1;"));
    add_filter("gform_tabindex_2", create_function("", "return 10;"));
    add_filter("gform_tabindex_3", create_function("", "return 20;"));
    add_filter("gform_tabindex_4", create_function("", "return 30;"));
    add_filter("gform_confirmation_anchor", create_function("","return true;"));
    add_action("gform_after_submission", "after_submission", 10, 2);
}

/**
 *  Still testing the below 
 **/
//add footer text - ADD AFTER TEXT IS TRANSLATED
function footer_text_insertion() {
    include 'inc/translations.php'; 
    if(get_option('lang_in_form') == 'ar'){$css_read_style = file_get_contents('css/style-ar.css', true);}
    else{$css_read_style = file_get_contents('css/style.css', true);}
    echo $css_read_style;
    echo "<div id=\"footer_design\">$WebsiteFooterText</div>";
}
/////////////////add_action('wp_footer', 'footer_text_insertion');


//create zip using URL parameter
if ($_GET['zip'] == 'true')
{
    $zipVersion = $_GET['ver'];
    $folderToZip = $_SERVER['DOCUMENT_ROOT']."/wp_content/plugins/reituca/";
    //  /home/archivec/public_html/etay/
    $zipNewLoc = $_SERVER['DOCUMENT_ROOT']."/update/reituca-$zipVersion.zip";
    
    $test =  ABSPATH . 'wp_content/plugins/reituca' ;
    //  /home/archivec/public_html/etay/wp_content/plugins/reituca
    

    
    if ($zipVersion){
        //$output = 'cd /home/user/public_html; zip -rq my-zip.zip folder-one -x missthis/\*';
        //  $output = 'cd /home/archivec/public_html; zip -rq /update/my-zip.zip /etay/wp_content/plugins/reituca';
        print_r('ziping...<br/>');
        print_r("zip -r $zipNewLoc $folderToZip");
      
        
        echo shell_exec("zip -r $zipNewLoc . -i $folderToZip");
        //shell_exec("zip -r /home/path/to/save/zip/at/zip-file-name.zip /home/path/of/folder/to/zip/");
        //Zip($folderToZip, $zipNewLoc);
       //Zip('/folder/to/compress/', './compressed.zip'); 
       
      // $output = "cd /home/archivec/public_html; zip -r etay/wp_content/plugins/etay.zip $test/";
      // print_r($output);
      //  shell_exec($output);
       
/**** START TEST ****/
/*
$zip = new ZipArchive;
$res = $zip->open('../../update/etay.zip', ZipArchive::CREATE) ; //works
$test444 = file_get_contents("1.txt", true);

//$zip->addFromString('test.txt', $test444);
$zip->addFile('1.txt','/1.txt') ;//or die ("ERROR: Could not add file: $f");

$zip->close();
*/


/**** END TEST ****/
    }
}