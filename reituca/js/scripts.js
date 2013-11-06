// Set Country Code
jQuery(document).ready(function() { 
	jQuery('#input_2_3').on('change', function() { updateCountryCode(); });
	updateCountryCode();
});
        
var updateCountryCode = function() {
	var countryCode = jQuery('#input_2_3 option:selected').val();
	$getCountryCode = countryCode;
}