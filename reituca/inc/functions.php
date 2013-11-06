<?php

function addSecretKey($query){
	$query['secret'] = 'foo';
	return $query;
}
function update_plugin(){
    $pluginPath = plugin_dir_path( __DIR__ ).'plugin-updates';
    $checkForUpdate = 'http://archivecontrol.net/update/info.json';
    $mainFilePath = plugin_dir_path( __DIR__ ).'reituca.php';
    require "$pluginPath/plugin-update-checker.php";
    $UpdateChecker = new PluginUpdateChecker(
    	$checkForUpdate,
    	$mainFilePath
    );
    $UpdateChecker->addQueryArgFilter('addSecretKey');
}

function update_lp(){
    $lp_new_ver = plugin_dir_path( __DIR__ ).'lp';
    $lp_current_ver = $_SERVER['DOCUMENT_ROOT'];
    
    $new_ver = @file_get_contents($lp_new_ver.'/version.txt');
    $old_ver = @file_get_contents($lp_current_ver.'/lp/version.txt');
    
    //copy only if version is lower
    if($old_ver == '' || $old_ver < $new_ver){
        shell_exec("cp -r $lp_new_ver $lp_current_ver");
    }
}
//register options to use
function register_user_input_settings() {
	register_setting( 'user-inputs', 'adzerk_head_code' );
    register_setting( 'user-inputs', 'reituca_analytics_code' );
    register_setting( 'user-inputs', 'trackingLinkId' );
    register_setting( 'user-inputs', 'lang_in_form' );
    register_setting( 'user-inputs', 'lp_footer_text_en' );
    register_setting( 'user-inputs', 'lp_footer_text_ar' );
    register_setting( 'user-inputs', 'lp_footer_text_ru' );
    register_setting( 'user-inputs', 'lp_footer_text_fr' );
    register_setting( 'user-inputs', 'lp_footer_text_it' );
    register_setting( 'user-inputs', 'lp_footer_text_es' );
    register_setting( 'user-inputs', 'website_footer_text_en' );
    register_setting( 'user-inputs', 'website_footer_text_ar' );
    register_setting( 'user-inputs', 'website_footer_text_ru' );
    register_setting( 'user-inputs', 'website_footer_text_fr' );
    register_setting( 'user-inputs', 'website_footer_text_it' );
    register_setting( 'user-inputs', 'website_footer_text_es' );
}

function reituca_settings() {
    $plugin_path = plugin_dir_path( __DIR__ );
    include 'translations.php';
    include("$plugin_path/user-inputs.php");
}
function user_input_menu() {
        if(current_user_can('manage_options'))
            add_options_page("Reituca Scripts", "Reituca Scripts", 1, "User-Inputs", "reituca_settings");
}

function add_adzerk_to_head(){
    $adzerk_code = get_option('adzerk_head_code');
    echo "<!-- Adzerk Head Code Start-->\n";
    echo $adzerk_code;
    echo "\n<!-- Adzerk Head Code END-->\n";
}

function cwwp_custom_gforms_spinner( $src ) {
    return plugins_url( '../img/loader.gif' , __FILE__ ) ;
}

//if the forms yet imported don't show the forms areas
function check_form_exist(){
    if (class_exists('GFCommon')) {
        $forms = RGFormsModel::get_forms( null, 'title' );
        foreach( $forms as $form ):
          if (  $form->id == 1  ||  $form->id == 2 || $form->id == 3  || $form->id == 4   ){
            return true;
          }
        endforeach;
        return false;
        }
        else{
            $Anymessage[0] = 'no-gravityforms-installed';
            return $Anymessage;
        }
}

function my_admin_notice() {
    ?>
    <div class="updated">
        <p><?php _e( '<h2>Gravity Forms is required to load the forms</h2>', 'my-text-domain' ); ?></p>
    </div>
    <?php
}

function add_top_bar_form(){
    $plugin_url = plugins_url( basename(dirname(__DIR__)) );
    if(check_form_exist()){
    ?>
    <style type="text/css">
        <?php
            if(get_option('lang_in_form') == 'ar'){
                $css_read_form = file_get_contents("$plugin_url/css/form-ar.css", true);
                $css_read_post = file_get_contents("$plugin_url/css/topbar-form-ar.css", true);
            }
            else{
                $css_read_form = file_get_contents("$plugin_url/css/form.css", true);
                $css_read_post = file_get_contents("$plugin_url/css/topbar-form.css", true);
            }
            echo $css_read_form;
            echo $css_read_post;
         ?>
    </style>
    <div id="top_bar_holder">
        <div class="msg_txt">
            <img src="<?php echo $plugin_url; ?>/img/free-pdf-unlock-features-<?php echo get_option('lang_in_form')?>.png" alt="Free PDF and UNLOCK website features" />
        </div>
            <?php
                echo do_shortcode('[gravityform id="2" name="Top Bar" title="false" description="false" ajax="true"]');
                include ('get_country.php'); 
                $VisitorCountry = VisitorCountry::create(); 
            ?>
    </div>
     <script type="text/javascript">
        jQuery("#input_2_3 > [value='<?php echo $VisitorCountry->GetName(); ?>']").attr("selected", "true");
    </script>
    <?php 
    }
}

//insert the in post / popup form
function insertForm($content) {
    include 'translations.php';  
    include 'get_country.php'; 
    $VisitorCountry = VisitorCountry::create();
    $plugin_url = plugins_url( basename(dirname(__DIR__)) );
    if(get_option('lang_in_form') == 'ar'){
        $css_read_form = file_get_contents("$plugin_url/css/form-ar.css", true);
        $css_read_post = file_get_contents("$plugin_url/css/post-form-ar.css", true);
    }
    else{
        $css_read_form = file_get_contents("$plugin_url/css/form.css", true);
        $css_read_post = file_get_contents("$plugin_url/css/post-form.css", true);
    }

    $above_text = <<<EOD
    <div id="gform_wrapper_1">
        <div class="txt_header">
        <div>
            <img src="$plugin_url/img/jim-rohn-fortune-$form_lang.png" alt="Self-Education-Fortune" />
        </div>
        <br /><hr />
        <span class="call2action">$inpost_title</span>
        </div><br />
        <div style="clear: both;"></div>
        <div style="width: 100%;">
            <div class="offer_points">
                <ul>
                $inpost_lis
                </ul>
            </div>
            <div class="img_woman">
                <img src="$plugin_url/img/blonde.png" alt="Become a forex trader!" />
            </div>
        </div>
EOD;
    $content.= $above_text;                
    $content.= "<style type=\"text/css\">";
    $content.= $css_read_form;
    $content.= $css_read_post;
    $content.= "</style>";                                               
    $content.= "<div class='lead_post_form_holder'>";
    $content.= $get_in_post_form;
    $content.= do_shortcode('[gravityform id="1" name="Post Content" title="false" description="false" ajax="false"]');
    $content.= "</div></div>";  
    $content.= "<script type=\"text/javascript\">";  
    $content.= "jQuery(\"#input_1_10 > [value='";
    $content.= $VisitorCountry->GetName();
    $content.= "']\").attr(\"selected\", \"true\");"; 
    $content.= "</script>"; 
    
    return $content;
}

//translate form fields and control the popup widget data
function translate_fields_labels($form){
    
    // data for popup
    include 'translations.php'; 
    $plugin_url = plugins_url( basename(dirname(__DIR__)) );
    if(get_option('lang_in_form') == 'ar'){
        $css_read_form = file_get_contents("$plugin_url/css/form-ar.css", true);
        $css_read_post = file_get_contents("$plugin_url/css/post-form-ar.css", true);
    }
    else{
        $css_read_form = file_get_contents("$plugin_url/css/form.css", true);
        $css_read_post = file_get_contents("$plugin_url/css/post-form.css", true);
    }
    
    $above_text = <<<POPTXT
    <div id="gform_wrapper_1">
        <div class="txt_header">
        <div>
            <img src="$plugin_url/img/jim-rohn-fortune-$form_lang.png" alt="Self-Education-Fortune" />
        </div>
        <br /><hr />
        <span class="call2action">$inpost_title</span>
        </div><br />
        <div style="clear: both;"></div>
        <div style="width: 100%;">
            <div class="offer_points">
                <ul>
                $inpost_lis
                </ul>
            </div>
            <div class="img_woman">
                <img src="$plugin_url/img/blonde.png" alt="Become a forex trader!" />
            </div>
        </div>
POPTXT;
    $content.= $above_text;
    $content.= "<style type=\"text/css\">";
    $content.= $css_read_form;
    $content.= $css_read_post;
    $content.= "</style>";                  
    $translatedPopup = $content;
//end data for popup

    //translate fields
    switch ( $form["id"] ) {
		case '1' : //form 1- in-post 
            $form["fields"]['1']["label"] = $nameLabel;
            $form["fields"]['2']["label"] = $emailLabel;
            $form["fields"]['3']["label"] = $phoneLabel;
            //print_r($form);
           return $form;
        case '3' : //form 3- popup 
            $form["fields"]['2']["label"] = $nameLabel;
            $form["fields"]['3']["label"] = $emailLabel;
            $form["fields"]['5']["label"] = $phoneLabel;
            $form["fields"]['0']["content"] = $translatedPopup;
           //print_r($form);
        return $form;
		break;
   		case '2': //form id 2 - top-bar Form
            $form["fields"]['0']["label"] = $nameLabel;
            $form["fields"]['1']["label"] = $emailLabel;
            $form["fields"]['3']["label"] = $phoneLabel;
            //print_r($form);
        return $form;
        case '4': //form id 4 - contact Form
            $form["fields"]['0']["label"] = $nameLabel;
            $form["fields"]['1']["label"] = $emailLabel;
            $form["fields"]['2']["label"] = $phoneLabel;
            $form["fields"]['3']["label"] = $textArea;
            //print_r($form);
        return $form;
		break;
	}
}

function gf_placeholder_enqueue_scripts() {
	$plugin_url = plugins_url( basename(dirname(__DIR__)) );
	echo "<script>var jquery_placeholder_url = '" . $plugin_url . "/js/jquery.placeholder-1.0.1.js';</script>";
	wp_enqueue_script('_gf_placeholders', $plugin_url . '/js/gf.placeholders.js', array('jquery'), '1.0' );
}

function form_submit_button_1($button, $form){
    include 'translations.php';
    return "<input type='submit' class='button gform_button' id='gform_submit_button_{$form["id"]}' value='$submitValue'  />";
}
function form_submit_button_2($button, $form){
    include 'translations.php'; 
    return "<input type='submit' class='button gform_button' id='gform_submit_button_{$form["id"]}' value='$submitValueShort'  />";
}
function form_submit_button_3($button, $form){
    include 'translations.php'; 
    return "<input type='submit' class='button gform_button' id='gform_submit_button_{$form["id"]}' value='$submitValue'  />";
}
function form_submit_button_4($button, $form){
    include 'translations.php'; 
    return "<input type='submit' class='button gform_button' id='gform_submit_button_{$form["id"]}' value='$contactSubmit'  />";
}
function after_submission($entry, $form){
    //set cookie for a week
    if (!isset($_COOKIE["form_status"])){
        setcookie("form_status", "submitted", time()+604800, '/');
    } 
    $Refresh = 2500;
    //refresh page
    ?>
    <script type="text/JavaScript">
    var GetDomainHost = window.location.hostname;
        setTimeout("location.hostname =GetDomainHost",<?=  $Refresh ?>);
    </script>
    <?php
}

function add_contact_page($contactPageLabel){  
    if (is_admin()){
            $new_page_title = $contactPageLabel;
            $new_page_content = do_shortcode('[gravityform id="4" name="Contact Page" title="false" description="false" ajax="true"]');
            $new_page_template = ''; //ex. template-custom.php. Leave blank if you don't want a custom page template.
            //don't change the code bellow, unless you know what you're doing
            $page_check = get_page_by_title($new_page_title);
            $new_page = array(
                    'post_type' => 'page',
                    'post_title' => $new_page_title,
                    'post_content' => $new_page_content,
                    'post_status' => 'publish',
                    'post_author' => 1,
            );
            if(!isset($page_check->ID)){
                    $new_page_id = wp_insert_post($new_page);
                    if(!empty($new_page_template)){
                            update_post_meta($new_page_id, '_wp_page_template', $new_page_template);
                    }
            }
    }
}