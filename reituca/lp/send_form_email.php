<?php
$email_from = $_POST['email'];
$name = $_POST['name'];
$country = $_POST['countries']; 
$CountryCode = $_POST['country_code']; 
$telephone = $_POST['phone'];  
date_default_timezone_set('Asia/Tel_Aviv');
$date = new DateTime();
$printDate = $date->format('d-m-Y H:i:s');
include_once 'snippets.php';
include_once 'reituca_codes.php';
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
//send to Reituca Log
$ip = preg_replace( '/[^0-9., ]/', '', $_SERVER['REMOTE_ADDR'] );
$UA = (isset($_SERVER['HTTP_USER_AGENT'])) ? $_SERVER['HTTP_USER_AGENT'] : '';
$lead_form = $_POST['token']; 
$ref = (isset($_SERVER['HTTP_REFERER'])) ? $_SERVER['HTTP_REFERER'] : '';
$data = array(
    "from_email"        =>      $email_from,
    "from_name"         =>      $name,
    "countries"         =>      $country,
    "phone"             =>      $CountryCode.$telephone,
    "date_time"         =>      $printDate,
    "IP"                =>      $ip,
    "user_agent"        =>      $UA,
    "lead_form"         =>      $lead_form,
    "lang"              =>      $form_lang,
    "referrer"          =>      $ref
);
//print_r($data);
post_to_url("http://reituca.net/addit-new.php", $data);
//send to lead proxy
$data = array(
    "customerLeadEmail"         =>      $email_from,
    "customerLeadFirstName"     =>      $name,
    "customerLeadLastName"      =>      $name,
    "countryId"                 =>      $country,
    "countryCode"               =>      $CountryCode,
    "areaCode"                  =>      '000',
    "phoneNumber"               =>      $telephone,
    "lang"                      =>      $form_lang,
    "trackingLinkId"            =>      $crm_track_id
);
//print_r($data);
post_to_url("https://www.xforex.com/lead/lp", $data);

//send to email for additional backup (added 20.10.13)
$to      = 'info@reituca.net'; 
$subject = 'New LP Lead form'; 

$message = 'Name: '.$name."\r\n".'Email: '.$email_from."\r\n".'phone: '.$CountryCode.$telephone."\r\n".'Date: '.$printDate."\r\n".'IP: '.$ip."\r\n".'Ref URL: '.$ref; 

$headers = 'From: LPLead@reituca.net' . "\r\n" 
         . 'Reply-To: info@reituca.net' . "\r\n"; 

mail($to, $subject, $message, $headers);
?>