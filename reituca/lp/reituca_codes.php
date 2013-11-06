<?php
require('../wp-load.php');
$analytics_code = get_option( 'reituca_analytics_code', false );
$lp_footer_txt_en = get_option( 'lp_footer_text_en', false );
$lp_footer_txt_ar = get_option( 'lp_footer_text_ar', false );
$lp_footer_txt_ru = get_option( 'lp_footer_text_ru', false );
$lp_footer_txt_it = get_option( 'lp_footer_text_it', false );
$lp_footer_txt_fr = get_option( 'lp_footer_text_fr', false );
$lp_footer_txt_es = get_option( 'lp_footer_text_es', false );
$form_lang = get_option('lang_in_form');
$crm_track_id = get_option('trackingLinkId');
?>