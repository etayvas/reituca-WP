<?php
//Check  phone
add_filter("gform_field_validation", "custom_validations_etay", 10, 4);
function custom_validations_etay($result, $value, $form, $field){
    switch ( $form["id"] ) {
   		case '3' :
        case '1' : //forms id 1 & 3 - in post form & popup form
			if ($field["id"] == 12){ //field id 12 =phone
                $phone_length = strlen($value);
				if($result["is_valid"] && ($phone_length > 19 || $phone_length < 4) || ($result["is_valid"] && !is_numeric($value))  ){
                $result["is_valid"] = false;
                if(get_option('lang_in_form') == 'en'): $result["message"] = "Please enter a 5-18 digit number"; endif;
                if(get_option('lang_in_form') == 'ru'): $result["message"] = "Пожалуйста введите 5-18 значный номер"; endif;
                if(get_option('lang_in_form') == 'ar'): $result["message"] = "الرجاء ادخال 5-18 ارقام"; endif;
                if(get_option('lang_in_form') == 'fr'): $result["message"] = "Veuillez entrer un numéro de 5 à 18 chiffres"; endif;
                if(get_option('lang_in_form') == 'it'): $result["message"] = "Per favore inserisci tra i 5 ed i 18 numeri"; endif;
                if(get_option('lang_in_form') == 'es'): $result["message"] = "Por favour ingrese un numero de 5 –18 digitos"; endif;
    			}
			}
			else if ($field["id"] == 4){ //field id 4 = name
				if(($result["is_valid"] && is_numeric($value)) || ($result["is_valid"] && strlen($value) <2) || ($result["is_valid"] && preg_match('/[0-9]/', $value))){
        			$result["is_valid"] = false;
                    if(get_option('lang_in_form') == 'en'): $result["message"] = "Name entered incorrectly"; endif;
                    if(get_option('lang_in_form') == 'ru'): $result["message"] = "имя введены неправильно"; endif;
                    if(get_option('lang_in_form') == 'ar'): $result["message"] = "قمت بتسجيل الاسم بصوره غير صحيحه"; endif;
                    if(get_option('lang_in_form') == 'fr'): $result["message"] = "Nom entré incorrectement"; endif;
                    if(get_option('lang_in_form') == 'it'): $result["message"] = "Nome immesso in modo non corretto"; endif;
                    if(get_option('lang_in_form') == 'es'): $result["message"] = "Nombre ingresado incorrecto"; endif;
    			}
			}
        break;
		case '2': //form id 2 - Topbar Form
			if ($field["id"] == 7){ //field id 7 =phone
                $phone_length = strlen($value);
				if($result["is_valid"] && ($phone_length > 19 || $phone_length < 4) || ($result["is_valid"] && !is_numeric($value))  ){
                $result["is_valid"] = false;
                if(get_option('lang_in_form') == 'en'): $result["message"] = "Please enter a 5-18 digit number"; endif;
                if(get_option('lang_in_form') == 'ru'): $result["message"] = "Пожалуйста введите 5-18 значный номер"; endif;
                if(get_option('lang_in_form') == 'ar'): $result["message"] = "الرجاء ادخال 5-18 ارقام"; endif;
                if(get_option('lang_in_form') == 'fr'): $result["message"] = "Veuillez entrer un numéro de 5 à 18 chiffres"; endif;
                if(get_option('lang_in_form') == 'it'): $result["message"] = "Per favore inserisci tra i 5 ed i 18 numeri"; endif;
                if(get_option('lang_in_form') == 'es'): $result["message"] = "Por favour ingrese un numero de 5 –18 digitos"; endif;
    			}
			}
//$text = print_r($value);
//echo "<script type='text/javascript'> alert(".json_encode(filter_var($value, FILTER_VALIDATE_EMAIL)).") </script>";  
			else if ($field["id"] == 1){ //field id 1 = name
				if(($result["is_valid"] && is_numeric($value)) || ($result["is_valid"] && strlen($value) <2) || ($result["is_valid"] && preg_match('/[0-9]/', $value))){
        			$result["is_valid"] = false;
        			if(get_option('lang_in_form') == 'en'): $result["message"] = "Name entered incorrectly"; endif;
                    if(get_option('lang_in_form') == 'ru'): $result["message"] = "имя введены неправильно"; endif;
                    if(get_option('lang_in_form') == 'ar'): $result["message"] = "قمت بتسجيل الاسم بصوره غير صحيحه"; endif;
                    if(get_option('lang_in_form') == 'fr'): $result["message"] = "Nom entré incorrectement"; endif;
                    if(get_option('lang_in_form') == 'it'): $result["message"] = "Nome immesso in modo non corretto"; endif;
                    if(get_option('lang_in_form') == 'es'): $result["message"] = "Nombre ingresado incorrecto"; endif;
    			}
			}
            
		break;
	}
    return $result;
}

//change confirmation messages

add_filter("gform_confirmation", "custom_confirmation", 10, 4);
function custom_confirmation($confirmation, $form, $lead, $ajax){  
	if(get_option('lang_in_form') == 'en'): $confirmation = "thank you for contacting us! We will communicate with you as soon as possible."; endif;
    if(get_option('lang_in_form') == 'ru'): $confirmation = "Благодарим Вас за обращение к нам! Мы свяжемся с вами как можно скорее."; endif;
    if(get_option('lang_in_form') == 'ar'): $confirmation = "شكرا على تواصلك معنا ! سنقوم بالاتصال بك باسرع وقت ممكن"; endif;
    if(get_option('lang_in_form') == 'fr'): $confirmation = "Merci de nous avoir contacté! Nous vous rappellerons dans les plus brefs délais."; endif;
    if(get_option('lang_in_form') == 'it'): $confirmation = "Grazie per averci contattato! Comunicheremo con te il più presto possibile."; endif;
    if(get_option('lang_in_form') == 'es'): $confirmation = "Gracias por contactarnos .! nos comunicaremos con usted lo antes posible ."; endif;
    return $confirmation;
}

