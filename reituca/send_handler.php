<?php

require_once 'inc/validations.php'; 
// Send Post form to third party

add_action("gform_post_submission", "set_post_content", 10, 2);
function set_post_content($entry, $form){
    
    //get the country ID
    include 'inc/get_country.php'; 
    $VisitorCountry = VisitorCountry::create();  
    include_once 'inc/snippets.php';
    
    //get the tracking link ID
    $trackinglinkid = '';
    $trackinglinkid = get_option( 'trackingLinkId', false );
    if ($trackinglinkid == ''){
        $trackinglinkid = '115897'; //if no tracking link is set use EN as default
    }
    
    //get the language
    $form_lang = get_option('lang_in_form');
    
    // $message = print_r($entry, true); 
    //print_r ($message);

    function post_to_url($url, $data) {
        $fields = '';
        foreach($data as $key => $value) {
         $fields .= $key . '=' . $value . '&';
        }
        rtrim($fields, '&');
        $post = curl_init();
        curl_setopt($post, CURLOPT_URL, $url);
        curl_setopt($post, CURLOPT_POST, count($data));
        curl_setopt($post, CURLOPT_POSTFIELDS, $fields);
        curl_setopt($post, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($post);
        curl_close($post);
    }
     switch ( $form["id"] ) {
		case '1' :
        case '3' : //form id 1 & 3- in-post & popup forms
            //send to reituca's log
            $data = array(
            "from_email"   =>      $entry["5"],
            "from_name"    =>      $entry["4"],
            "date_time"    =>      $entry["date_created"],
            "IP"           =>      $entry["ip"],
            "countries"    =>      $entry["10"],
            "phone"        =>      $entry["12"],
            "user_agent"   =>      $entry["user_agent"],
            "referrer"     =>      $entry["source_url"],
            "lang"         =>      $form_lang,
            "lead_form"    =>      $entry["9"]
            );
            post_to_url("http://reituca.net/addit-new.php", $data);
                        
            //send to lead proxy
            $data = array(
            "customerLeadEmail"         =>      $entry["5"],
            "customerLeadFirstName"     =>      $entry["4"],
            "customerLeadLastName"      =>      $entry["4"],
            "countryId"                 =>      $countries2code[$entry["10"]],
            "countryCode"               =>      $countryDialCodeArray[$countries2code[$entry["10"]]]['dial_code'],
            "areaCode"                  =>      '000',
            "phoneNumber"               =>      $entry["12"],
            "lang"                      =>      $form_lang,
            "trackingLinkId"            =>      $trackinglinkid
            );
            //print_r($data);
            post_to_url("https://www.xforex.com/lead/lp", $data);
		break;
   		case '2': //form id 2 - top-bar Form
            $data = array(
            "from_email"   =>      $entry["2"],
            "from_name"    =>      $entry["1"],
            "date_time"    =>      $entry["date_created"],
            "IP"           =>      $entry["ip"],
            "countries"    =>      $entry["3"],
            "phone"        =>      $entry["7"],
            "user_agent"   =>      $entry["user_agent"],
            "referrer"     =>      $entry["source_url"],
            "lang"         =>      $form_lang,
            "lead_form"    =>      $entry["5"]
            );
            post_to_url("http://reituca.net/addit-new.php", $data);  
             
            //send to lead proxy
            $data = array(
            "customerLeadEmail"         =>      $entry["2"],
            "customerLeadFirstName"     =>      $entry["1"],
            "customerLeadLastName"      =>      $entry["1"],
            "countryId"                 =>      $countries2code[$entry["3"]],
            "countryCode"               =>      $countryDialCodeArray[$countries2code[$entry["3"]]]['dial_code'],
            "areaCode"                  =>      '000',
            "phoneNumber"               =>      $entry["7"],
            "lang"                      =>      $form_lang,
            "trackingLinkId"            =>      $trackinglinkid
            );     
            //print_r($data);
            post_to_url("https://www.xforex.com/lead/lp", $data);
		break;
	}
 }