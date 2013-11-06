<?php
function insertCssFixes(){
    
$current_theme = wp_get_theme();
$website_lang = get_option('lang_in_form');

    switch ( $current_theme ) {
    case 'Twenty Thirteen' :
    if ($website_lang == 'ar'){
                    $themeCssFix = <<<TTCSSFIX
ARABIC
TTCSSFIX;
    }
    else{
        $themeCssFix = <<<TTCSSFIX

REST LANG
TTCSSFIX;
    }
            break;
    case 'Cnews' :
    if ($website_lang == 'ar'){
                    $themeCssFix = <<<TTCSSFIX
<style type="text/css">
.span4 .pull-left{float:right}.flexslider .slides li{float:right!important}#sliders.nivoSlider,#magflexslider.flexslider{max-height:338px}#gform_submit_button_2{padding:5px!important}input[type=text],input[type=password],input[type=email],textarea,select{margin:0 0 5px!important}#gform_wrapper_2.gform_wrapper .top_label .gfield_description.validation_message,.gform_wrapper .gfield_description.validation_message{width:100%!important}.theme-default .nivoSlider img{height:335px!important}
</style>
TTCSSFIX;
    }
    else{
        $themeCssFix = <<<CNEWSCSSFIX
<style type="text/css">
#sliders.nivoSlider,#magflexslider.flexslider{max-height:338px}#gform_submit_button_2{padding:5px!important}input[type=text],input[type=password],input[type=email],textarea,select{margin:0 0 5px!important}#gform_wrapper_2.gform_wrapper .top_label .gfield_description.validation_message,.gform_wrapper .gfield_description.validation_message{width:100%!important}
</style>
CNEWSCSSFIX;
    }
            break;
    		case 'Jarida' : 
                    $themeCssFix = <<<JARIDACSSFIX
<style type="text/css">
.scroll-box .post-thumbnail img,.wide-cat-box li .post-thumbnail img{clear:left;display:block;height:118px;max-width:190px}h2.post-box-title{clear:right}#gform_submit_button_2{padding:5px!important}input[type=text],input[type=password],input[type=email],textarea,select{margin:0 0 5px!important}#gform_wrapper_2.gform_wrapper .top_label .gfield_description.validation_message,.gform_wrapper .gfield_description.validation_message{width:100%!important}
</style>
JARIDACSSFIX;
            break;
            case 'MagazinePress' : 
                $themeCssFix  = <<<MPCSSFIX
<style type="text/css">
.call2action{line-height:30px!important;padding:5px!important}#header .ad{display:none!important}#gform_submit_button_2{padding:5px!important}input[type=text],input[type=password],input[type=email],textarea,select{margin:0 0 5px!important}#gform_wrapper_2.gform_wrapper .top_label .gfield_description.validation_message,.gform_wrapper .gfield_description.validation_message{width:100%!important}
</style>
MPCSSFIX;
            break;
       		case 'Pacific Magazine': 
                $themeCssFix = <<<PMCSSFIX
<style type="text/css">
#main-menu ul li a{font-size:19px!important}#gform_submit_button_2{padding:5px!important}input[type=text],input[type=password],input[type=email],textarea,select{margin:0 0 5px!important}#gform_wrapper_2.gform_wrapper .top_label .gfield_description.validation_message,.gform_wrapper .gfield_description.validation_message{width:100%!important}
</style>
PMCSSFIX;
            break;
            case 'Cypher WordPress Theme': 
                $themeCssFix = <<<CYPHERCSSFIX
<style type="text/css">
#gform_submit_button_2{padding:5px!important}input[type=text],input[type=password],input[type=email],textarea,select{margin:0 0 5px!important}#gform_wrapper_2.gform_wrapper .top_label .gfield_description.validation_message,.gform_wrapper .gfield_description.validation_message{width:100%!important}.post .thumbnail img{margin-left:40px!important}.the-content ul li{background:none repeat scroll 0 0 rgba(0,0,0,0)!important;font-size:16px!important;font-weight:700!important;line-height:20px!important;margin-bottom:0!important;padding-right:10px!important}.gform_wrapper .top_label li.gfield.gf_right_half{width:46%!important}.call2action{line-height:35px!important}.offer_points li{list-style-image:url(/wp-content/plugins/reituca/img/check-icon.png)!important;margin-top:5px!important}
</style>
CYPHERCSSFIX;
            break;
            case 'The Gossip': 
                $themeCssFix = <<<GOSSIPCSSFIX
<style type="text/css">
#gform_submit_button_2{padding:5px!important}input[type=text],input[type=password],input[type=email],textarea,select{margin:0 0 5px!important}#gform_wrapper_2.gform_wrapper .top_label .gfield_description.validation_message,.gform_wrapper .gfield_description.validation_message{width:100%!important}
</style>
GOSSIPCSSFIX;
            break;
            case 'Bloggit': 
                $themeCssFix = <<<BLOGITCSSFIX
<style type="text/css">
.call2action{line-height:35px!important;padding:0 5px!important}.offer_points li{padding-right:10px!important}input[type=text],input[type=password],textarea{max-width:98%!important}#gform_submit_button_2{padding:5px!important}input[type=text],input[type=password],input[type=email],textarea,select{margin:0 0 5px!important}#gform_wrapper_2.gform_wrapper .top_label .gfield_description.validation_message,.gform_wrapper .gfield_description.validation_message{width:100%!important}
</style>
BLOGITCSSFIX;
            break;
            case 'Momento': 
            if ($website_lang == 'ar'){
                $themeCssFix = <<<MOMENTOCSSFIX
<style type="text/css">
.aq-template-wrapper .aq_span8{height:530px!important}#gallery-wrapper .nivoSlider img{height:200px!important}#gallery-wrapper .nivo-controlNav.nivo-thumbs-enabled img{max-height:50px}.simple_titled_posts .image_enabled .image,.first_thumb_rest_titled .image_enabled .image{float:right;margin-left:10px;margin-right:0}.widget_posts li.thumbnail .thumbnail{float:right;margin-left:4%;margin-right:0}.single_cat_thumb .image{float:right;margin-left:3.2%;margin-right:0}#related_posts .item{float:right!important}#related_posts .item span.comment_number{display:none}.flexslider .slides img{height:235px}.carousel img{height:35px!important}.aq_block_1 .image img{max-height:150px}#gform_submit_button_2{padding:5px!important}input[type=text],input[type=password],input[type=email],textarea,select{margin:0 0 5px!important}#gform_wrapper_2.gform_wrapper .top_label .gfield_description.validation_message,.gform_wrapper .gfield_description.validation_message{width:100%!important}
</style>
MOMENTOCSSFIX;
}
else{
    $themeCssFix = <<<MOMENTOCSSFIX
<style type="text/css">
.aq-template-wrapper .aq_span8{height:530px!important}#gallery-wrapper .nivoSlider img{height:200px!important}#gallery-wrapper .nivo-controlNav.nivo-thumbs-enabled img{max-height:50px}#related_posts .item span.comment_number{display:none}.flexslider .slides img{height:235px}.carousel img{height:35px!important}.aq_block_1 .image img{max-height:150px}#gform_submit_button_2{padding:5px!important}input[type=text],input[type=password],input[type=email],textarea,select{margin:0 0 5px!important}#gform_wrapper_2.gform_wrapper .top_label .gfield_description.validation_message,.gform_wrapper .gfield_description.validation_message{width:100%!important}
</style>
MOMENTOCSSFIX;
}
            break;
            case 'Trustme - Responsive WordPress Blog / Magazine Theme': 
                $themeCssFix = <<<TRUSTMECSSFIX
<style type="text/css">
#gform_submit_button_2{padding:5px!important}input[type=text],input[type=password],input[type=email],textarea,select{margin:0 0 5px!important}#gform_wrapper_2.gform_wrapper .top_label .gfield_description.validation_message,.gform_wrapper .gfield_description.validation_message{width:100%!important}
</style>
TRUSTMECSSFIX;
            break;
            case 'LiquidFolio': 
                $themeCssFix = <<<LFCSSFIX
<style type="text/css">
#gform_submit_button_2{padding:5px!important}input[type=text],input[type=password],input[type=email],textarea,select{margin:0 0 5px!important}#gform_wrapper_2.gform_wrapper .top_label .gfield_description.validation_message,.gform_wrapper .gfield_description.validation_message{width:100%!important}.sidebar .imgborder img{height:75px!important}
</style>
LFCSSFIX;
            break;
            case 'Simplog': 
                $themeCssFix = <<<SIMPLOGCSSFIX
<style type="text/css">
#right-sidebar .textwidget embed{max-width:220px}#main-navigation>ul>li>a{padding:0 22px!important}.call2action{line-height:30px!important;padding:0 10px!important}#gform_submit_button_2{padding:5px!important}input[type=text],input[type=password],input[type=email],textarea,select{margin:0 0 5px!important}#gform_wrapper_2.gform_wrapper .top_label .gfield_description.validation_message,.gform_wrapper .gfield_description.validation_message{width:100%!important}
</style>
SIMPLOGCSSFIX;
            break;
            case 'Darkwhite': 
                $themeCssFix = <<<DARKWHITECSSFIX
<style type="text/css">
#site-sidebar .textwidget embed{max-width:268px}#site-header{padding-top:1px!important}.call2action{line-height:30px!important;padding:0 10px!important}#site-header #site-logo{border-bottom:medium none!important}#gform_submit_button_2{padding:5px!important}input[type=text],input[type=password],input[type=email],textarea,select{margin:0 0 5px!important}#gform_wrapper_2.gform_wrapper .top_label .gfield_description.validation_message,.gform_wrapper .gfield_description.validation_message{width:100%!important}</style>
DARKWHITECSSFIX;
            break;
            case 'Magazon': 
                $themeCssFix = <<<MAGAZONCSSFIX
<style type="text/css">
.right-sidebar-wrapper .widget-post-wrapper img{max-width:50px!important}.po_re_container img{max-width:50px!important}#gform_submit_button_2{padding:5px!important}input[type=text],input[type=password],input[type=email],textarea,select{margin:0 0 5px!important}#gform_wrapper_2.gform_wrapper .top_label .gfield_description.validation_message,.gform_wrapper .gfield_description.validation_message{width:100%!important}.right-sidebar .textwidget embed{max-width:300px}
</style>
MAGAZONCSSFIX;
            break;
            case 'Sahifa': 
                $themeCssFix = <<<SAHIFACSSFIX
<style type="text/css">
.cat-tabs-header li{font-size:10pt!important;padding:4px 11px!important}.other-news .post-thumbnail img{max-width:50px!important}#sidebar .post-thumbnail img{max-width:50px!important}.img_woman{width:50%!important}.offer_points{width:50%!important}.offer_points li{font-size:13px!important;padding:0 5px!important}#tabbed-widget ul.tabs li a{padding:0 5px 6px!important}#gform_submit_button_2{padding:5px!important}input[type=text],input[type=password],input[type=email],textarea,select{margin:0 0 5px!important}#gform_wrapper_2.gform_wrapper .top_label .gfield_description.validation_message,.gform_wrapper .gfield_description.validation_message{width:100%!important}
</style>
SAHIFACSSFIX;
            break;
            case 'Arsene': 
                $themeCssFix = <<<ARSENECSSFIX
<style type="text/css">
.post-carousel ul.slides img{max-height:100px!important}.widget-popular-carousel .post-thumbnail img{max-height:150px!important}.widget-post-slider .slides img{height:356px!important}.call2action{line-height:35px!important}.img_woman{width:55%!important}.offer_points{font-size:13px!important;width:45%!important}.offer_points li{margin-bottom:10px!important}#gform_submit_button_2{padding:5px!important}input[type=text],input[type=password],input[type=email],textarea,select{margin:0 0 5px!important}#gform_wrapper_2.gform_wrapper .top_label .gfield_description.validation_message,.gform_wrapper .gfield_description.validation_message{width:100%!important}
</style>
ARSENECSSFIX;
            break;
            case 'Blogbold': 
                $themeCssFix = <<<BOLDGOLDCSSFIX
<style type="text/css">
#gform_submit_button_2{padding:5px!important}input[type=text],input[type=password],input[type=email],textarea,select{margin:0 0 5px!important}#gform_wrapper_2.gform_wrapper .top_label .gfield_description.validation_message,.gform_wrapper .gfield_description.validation_message{width:100%!important}
</style>
BOLDGOLDCSSFIX;
            break;
            case 'Typegrid': 
                $themeCssFix = <<<TYPEGRIDCSSFIX
<style type="text/css">
ul.slides .entry-thumbnail img{height:150px!important}.call2action{line-height:35px}.related .entry-thumbnail img{height:140px!important}.flex-viewport ul.slides .entry-thumbnail img{height:245px!important}#gform_submit_button_2{padding:5px!important}input[type=text],input[type=password],input[type=email],textarea,select{margin:0 0 5px!important}#gform_wrapper_2.gform_wrapper .top_label .gfield_description.validation_message,.gform_wrapper .gfield_description.validation_message{width:100%!important}
</style>
TYPEGRIDCSSFIX;
            break;
            case 'NewsPlus': 
                $themeCssFix = <<<NEWSPLUSCSSFIX
<style type="text/css">
#content .post-thumb img{max-height:215px!important}.gform_wrapper .gform_footer input.button,.gform_wrapper .gform_footer input[type=submit]{background-image:none!important;height:auto!important}.call2action{line-height:30px;padding:10px}.offer_points li{padding-right:13px}.scroll-box .post-thumbnail img,.wide-cat-box li .post-thumbnail img{clear:left;display:block;height:118px;max-width:190px}h2.post-box-title{clear:right}#gform_submit_button_2{padding:5px!important}input[type=text],input[type=password],input[type=email],textarea,select{margin:0 0 5px!important}#gform_wrapper_2.gform_wrapper .top_label .gfield_description.validation_message,.gform_wrapper .gfield_description.validation_message{width:100%!important}
</style>
NEWSPLUSCSSFIX;

    }
    
    echo $themeCssFix;
}

add_action('wp_footer', 'insertCssFixes');