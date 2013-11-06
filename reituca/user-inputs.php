<link rel="stylesheet" href="<?php echo plugins_url( basename(dirname(__FILE__)) ) ?>/css/jquery-ui.css" />
  <script src="<?php echo plugins_url( basename(dirname(__FILE__)) ) ?>/js/jquery-1.9.1.js"></script>
  <script src="<?php echo plugins_url( basename(dirname(__FILE__)) ) ?>/js/jquery-ui.js"></script>
  <script>
  $(function() {
    $( "#tabs" ).tabs();
    $( "#subtabs" ).tabs();
    $( "#subtabs-leads" ).tabs();    
  });
  </script>
<div class="wrap">
    <h2> Reituca Script Settings</h2>
    <br />
    <form method="post" action="options.php">
    <div id="tabs">
    <ul>
        <li><a href="#tabs-1">Lead Forms Settings</a></li>
        <li><a href="#tabs-2">Landing Page Settings</a></li>
    </ul>
        <div id="tabs-1">
        <h3>Lead Forms Settings</h3>
            Language to use in the lead forms and the landing page : 
            <select id="lang_in_form" name="lang_in_form">
                <option value="en" <?php if(get_option('lang_in_form') == 'en'): ?> selected="selected"<?php endif; ?>>English</option>
                <option value="ru" <?php if(get_option('lang_in_form') == 'ru'): ?> selected="selected"<?php endif; ?>>Russian</option>
                <option value="ar" <?php if(get_option('lang_in_form') == 'ar'): ?> selected="selected"<?php endif; ?>>Arabic</option>
                <option value="fr" <?php if(get_option('lang_in_form') == 'fr'): ?> selected="selected"<?php endif; ?>>French</option>
                <option value="it" <?php if(get_option('lang_in_form') == 'it'): ?> selected="selected"<?php endif; ?>>Italian</option>
                <option value="es" <?php if(get_option('lang_in_form') == 'es'): ?> selected="selected"<?php endif; ?>>Spanish</option>
                <!-- set default to EN -->
                <option value="en" <?php if(get_option('lang_in_form') == ''): ?> selected="selected"<?php endif; ?>>English</option>
            </select> 
            <br /><br />
            Please insert the <strong>CRM Tracking Link ID</strong>:
            <select id="trackingLinkId" name="trackingLinkId">
                <option value="115897" <?php if(get_option('trackingLinkId') == '115897'): ?> selected="selected"<?php endif; ?>>Region 1 - English - 115897</option>
                <option value="116005" <?php if(get_option('trackingLinkId') == '116005'): ?> selected="selected"<?php endif; ?>>Region 1 - Russian - 116005</option>
                <option value="115287" <?php if(get_option('trackingLinkId') == '115287'): ?> selected="selected"<?php endif; ?>>Region 2 - Arabic - 115287</option>
                <option value="117370" <?php if(get_option('trackingLinkId') == '117370'): ?> selected="selected"<?php endif; ?>>Region 3 - French - 117370</option>
                <option value="117333" <?php if(get_option('trackingLinkId') == '117333'): ?> selected="selected"<?php endif; ?>>Region 3 - Italian - 117333</option>
                <option value="117332" <?php if(get_option('trackingLinkId') == '117332'): ?> selected="selected"<?php endif; ?>>Region 3 - Spanish - 117332</option>
                <!-- set default to EN -->
                <option value="115897" <?php if(get_option('trackingLinkId') == ''): ?> selected="selected"<?php endif; ?>>Region 1 - English - 115897</option>
            </select>
            <br /><br />
            Please add the <strong>Adzerk code</strong> to put in HEAD:<br />
            <a href="http://archivecontrol.net/wiki/adzerk-procedure/" target="_blank">Read on the Adzerk procedure in the WIKI</a><br />
            <textarea name="adzerk_head_code" cols="40" rows="5"><?php echo get_option('adzerk_head_code'); ?></textarea> 
        
        <h4>Website Footer Text</h4>
            <div id="subtabs-leads">
                <ul>
                    <li><a href="#subtabs-leads-1">EN</a></li>
                    <li><a href="#subtabs-leads-2">RU</a></li>
                    <li><a href="#subtabs-leads-3">AR</a></li>
                    <li><a href="#subtabs-leads-4">FR</a></li>
                    <li><a href="#subtabs-leads-5">IT</a></li>
                    <li><a href="#subtabs-leads-6">ES</a></li>
                </ul>
                <div id="subtabs-leads-1">
                    <strong>English Website Footer text</strong>:<br />
                    <textarea name="website_footer_text_en" cols="40" rows="5"><?php echo $website_footer_txt_en; ?></textarea>
                    <br /><br />
                </div>
                <div id="subtabs-leads-2">
                    <strong>Russian Website Footer text</strong>:<br />
                    <textarea name="website_footer_text_ru" cols="40" rows="5"><?php echo $website_footer_txt_ru; ?></textarea>
                    <br /><br />
                </div>
                <div id="subtabs-leads-3">
                    <strong>Arabic Website Footer text</strong>:<br />
                    <textarea name="website_footer_text_ar" cols="40" rows="5"><?php echo $website_footer_txt_ar; ?></textarea>
                    <br /><br />      
                </div>
                <div id="subtabs-leads-4">
                    <strong>French Website Footer text</strong>:<br />
                    <textarea name="website_footer_text_fr" cols="40" rows="5"><?php echo $website_footer_txt_fr; ?></textarea>
                    <br /><br />
                </div>
                <div id="subtabs-leads-5">
                    <strong>Italian Website Footer text</strong>:<br />
                    <textarea name="website_footer_text_it" cols="40" rows="5"><?php echo $website_footer_txt_it; ?></textarea>
                    <br /><br />
                </div>
                <div id="subtabs-leads-6">
                    <strong>Spanish Website Footer text</strong>:<br />
                    <textarea name="website_footer_text_es" cols="40" rows="5"><?php echo $website_footer_txt_es; ?></textarea>
                    <br /><br />
                </div>
        </div>
        </div>
        
        <div id="tabs-2">
        <h3>Landing Page Settings</h3>
        <h4>Analytics</h4>
        <?php 
            include 'inc/translations.php'; 
            $domain_name = preg_replace('/^www\./','',$_SERVER['SERVER_NAME']);
        ?>
        Please add the <strong>Analytics code</strong> of <?php echo $domain_name ?> :<br />
        <textarea name="reituca_analytics_code" cols="40" rows="5"><?php echo get_option('reituca_analytics_code'); ?></textarea>            <br />
        <br />
        <h4>Footer Text</h4>
            <div id="subtabs">
                <ul>
                    <li><a href="#subtabs-1">EN</a></li>
                    <li><a href="#subtabs-2">RU</a></li>
                    <li><a href="#subtabs-3">AR</a></li>
                    <li><a href="#subtabs-4">FR</a></li>
                    <li><a href="#subtabs-5">IT</a></li>
                    <li><a href="#subtabs-6">ES</a></li>
                </ul>
                <div id="subtabs-1">
                    <strong>English Footer text</strong>:<br />
                    <textarea name="lp_footer_text_en" cols="40" rows="5"><?php echo $lp_footer_txt_en; ?></textarea>
                    <br /><br />
                </div>
                <div id="subtabs-2">
                    <strong>Russian Footer text</strong>:<br />
                    <textarea name="lp_footer_text_ru" cols="40" rows="5"><?php echo $lp_footer_txt_ru; ?></textarea>
                    <br /><br />
                </div>
                <div id="subtabs-3">
                    <strong>Arabic Footer text</strong>:<br />
                    <textarea name="lp_footer_text_ar" cols="40" rows="5"><?php echo $lp_footer_txt_ar; ?></textarea>
                    <br /><br />      
                </div>
                <div id="subtabs-4">
                    <strong>French Footer text</strong>:<br />
                    <textarea name="lp_footer_text_fr" cols="40" rows="5"><?php echo $lp_footer_txt_fr; ?></textarea>
                    <br /><br />
                </div>
                <div id="subtabs-5">
                    <strong>Italian Footer text</strong>:<br />
                    <textarea name="lp_footer_text_it" cols="40" rows="5"><?php echo $lp_footer_txt_it; ?></textarea>
                    <br /><br />
                </div>
                <div id="subtabs-6">
                    <strong>Spanish Footer text</strong>:<br />
                    <textarea name="lp_footer_text_es" cols="40" rows="5"><?php echo $lp_footer_txt_es; ?></textarea>
                    <br /><br />
                </div>
        </div>
    </div>  
    
            <p class="submit">
                <input type="hidden" name="action" value="update" />
                <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
        </p>
        <?php settings_fields( 'user-inputs' ); ?>
    </form>  
</div>