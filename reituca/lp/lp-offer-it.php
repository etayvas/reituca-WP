<?php
ob_start();
$ln = explode(",",$_SERVER["HTTP_ACCEPT_LANGUAGE"]);
$ln = explode("-",$ln[0]);
if (!isset($_COOKIE["redirectedToLang"])){
    switch ( $ln[0] ) {
            case 'ar' : //forms id 1 & 3 - in post form & popup form
                setcookie("redirectedToLang", "true", time()+604800, '/');
                ?>
                <meta http-equiv="refresh" content="0;url='lp-offer-ar.php'" />
                إعادة توجيه وفقا للغة المستعرض.
                <?php
                die();
            break;
    		case 'ru' : //forms id 1 & 3 - in post form & popup form
                setcookie("redirectedToLang", "true", time()+604800, '/');
                ?>
                <meta http-equiv="refresh" content="0;url='lp-offer-ru.php'" />
                Перенаправление в соответствии с вашим браузером языка...
                <?php
                die();
            break;
    		case 'it' : //forms id 1 & 3 - in post form & popup form
                setcookie("redirectedToLang", "true", time()+604800, '/');
                ?>
                <meta http-equiv="refresh" content="0;url='lp-offer-it.php'" />
                Reindirizzare in base alla lingua del browser...
                <?php
                die();
            break;
    		case 'es' : //forms id 1 & 3 - in post form & popup form
                setcookie("redirectedToLang", "true", time()+604800, '/');
                ?>
                <meta http-equiv="refresh" content="0;url='lp-offer-es.php'" />
                Redireccionar según el idioma del explorador...
                <?php
                die();
            break;
    		case 'fr' : //forms id 1 & 3 - in post form & popup form
                setcookie("redirectedToLang", "true", time()+604800, '/');
                ?>
                <meta http-equiv="refresh" content="0;url='lp-offer-fr.php'" />
                Redirection selon la langue de votre navigateur...
                <?php
                die();
            break;
    		default : //forms id 1 & 3 - in post form & popup form
                setcookie("redirectedToLang", "true", time()+604800, '/');
                ?>
                <meta http-equiv="refresh" content="0;url='lp-offer-en.php'" />
                Redirecting according to your language...
                <?php
                die();
            break;
    }
}
include ('inc/get_country_code.php');
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>Become a Forex Professional | XForex</title>
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width" />
        <link rel="stylesheet" href="css/style2.css" />
        <script src="js/upper.js"></script>
        <!-- analytics code START -->
        <?php include_once ('reituca_codes.php');?>
        <?php echo $analytics_code;?>

    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        <!-- Add your site or application content here -->
    <div id="body" class="clear it_offer">
		<div id="aside" class="left">
			
		</div>
        <div style="clear: both;"></div>
		<div id="main" class="left">
			<div id="border-form">
				<form id="myform" action="send_form_email.php" method="post">
					<h2>Registrati per richieder i tuoi benefice</h2>
					<hr />
	                <label>Email address *<input id="email" name="email" type="email" /></label>
	                <label>Nome E Cognome *<input id="name" name="name" type="text" /></label>
                    <div style="clear: both;"></div>
					<select id="countries" name="countries">
						<option value="Select a country" cnCode="--" >Select a country</option>
						<option value="AF" cnCode="93">Afghanistan</option>
	                    <option value="AX" cnCode="358">Aland Islands</option>
	                    <option value="AL" cnCode="355">Albania</option>
	                    <option value="DZ" cnCode="213">Algeria</option>
	                    <option value="AS" cnCode="1684">American Samoa</option>
	                    <option value="AD" cnCode="376">Andorra</option>
	                    <option value="AO" cnCode="244">Angola</option>
	                    <option value="AI" cnCode="1264">Anguilla</option>
	                    <option value="AQ" cnCode="672">Antarctica</option>
	                    <option value="AG" cnCode="1268">Antigua and Barbuda</option>
	                    <option value="AR" cnCode="54">Argentina</option>
	                    <option value="AM" cnCode="374">Armenia</option>
	                    <option value="AW" cnCode="297">Aruba</option>
	                    <option value="AU" cnCode="61">Australia</option>
	                    <option value="AT" cnCode="43">Austria</option>
	                    <option value="AZ" cnCode="994">Azerbaijan</option>
	                    <option value="BS" cnCode="1242">Bahamas</option>
	                    <option value="BH" cnCode="973">Bahrain</option>
	                    <option value="BD" cnCode="880">Bangladesh</option>
	                    <option value="BB" cnCode="1246">Barbados</option>
	                    <option value="BY" cnCode="375">Belarus</option>
	                    <option value="BE" cnCode="32">Belgium</option>
	                    <option value="BZ" cnCode="501">Belize</option>
	                    <option value="BJ" cnCode="229">Benin</option>
	                    <option value="BM" cnCode="1441">Bermuda</option>
	                    <option value="BT" cnCode="975">Bhutan</option>
	                    <option value="BO" cnCode="591">Bolivia</option>
	                    <option value="BA" cnCode="387">Bosnia and Herzegovina</option>
	                    <option value="BW" cnCode="267">Botswana</option>
	                    <option value="BV" cnCode="47">Bouvet Island</option>
	                    <option value="BR" cnCode="55">Brazil</option>
	                    <option value="IO" cnCode="246">British Indian Ocean Territory</option>
	                    <option value="BN" cnCode="673">Brunei Darussalam</option>
	                    <option value="BG" cnCode="359">Bulgaria</option>
	                    <option value="BF" cnCode="226">Burkina Faso</option>
	                    <option value="BI" cnCode="257">Burundi</option>
	                    <option value="KH" cnCode="855">Cambodia</option>
	                    <option value="CM" cnCode="237">Cameroon</option>
	                    <option value="CA" cnCode="1">Canada</option>
	                    <option value="CV" cnCode="238">Cape Verde</option>
	                    <option value="KY" cnCode="1345">Cayman Islands</option>
	                    <option value="CF" cnCode="140">Central African Republic</option>
	                    <option value="TD" cnCode="235">Chad</option>
	                    <option value="CL" cnCode="56">Chile</option>
	                    <option value="CN" cnCode="86">China</option>
	                    <option value="CO" cnCode="57">Colombia</option>
	                    <option value="KM" cnCode="269">Comoros</option>
	                    <option value="CG" cnCode="242">Congo</option>
	                    <option value="CK" cnCode="682">Cook Islands</option>
	                    <option value="CR" cnCode="506">Costa Rica</option>
	                    <option value="CI" cnCode="225">Cote DIvoire</option>
	                    <option value="HR" cnCode="385">Croatia</option>
	                    <option value="CU" cnCode="53">Cuba</option>
	                    <option value="CY" cnCode="357">Cyprus</option>
	                    <option value="CZ" cnCode="420">Czech Republic</option>
	                    <option value="DK" cnCode="45">Denmark</option>
	                    <option value="DJ" cnCode="253">Djibouti</option>
	                    <option value="DM" cnCode="1767">Dominica</option>
	                    <option value="DO" cnCode="1809">Dominican Republic</option>
	                    <option value="EC" cnCode="593">Ecuador</option>
	                    <option value="EG" cnCode="20">Egypt</option>
	                    <option value="SV" cnCode="503">El Salvador</option>
	                    <option value="GQ" cnCode="240">Equatorial Guinea</option>
	                    <option value="ER" cnCode="291">Eritrea</option>
	                    <option value="EE" cnCode="372">Estonia</option>
	                    <option value="ET" cnCode="251">Ethiopia</option>
	                    <option value="FK" cnCode="500">Falkland Islands Malvinas</option>
	                    <option value="FO" cnCode="298">Faroe Islands</option>
	                    <option value="FJ" cnCode="679">Fiji</option>
	                    <option value="FI" cnCode="358">Finland</option>
	                    <option value="FR" cnCode="33">France</option>
	                    <option value="GF" cnCode="594">French Guiana</option>
	                    <option value="PF" cnCode="689">French Polynesia</option>
	                    <option value="GA" cnCode="241">Gabon</option>
	                    <option value="GM" cnCode="220">Gambia</option>
	                    <option value="GE" cnCode="995">Georgia</option>
	                    <option value="DE" cnCode="49">Germany</option>
	                    <option value="GH" cnCode="233">Ghana</option>
	                    <option value="GI" cnCode="350">Gibraltar</option>
	                    <option value="GR" cnCode="30">Greece</option>
	                    <option value="GL" cnCode="299">Greenland</option>
	                    <option value="GD" cnCode="1473">Grenada</option>
	                    <option value="GP" cnCode="590">Guadeloupe</option>
	                    <option value="GU" cnCode="1671">Guam</option>
	                    <option value="GT" cnCode="502">Guatemala</option>
	                    <option value="GG" cnCode="1481">Guernsey</option>
	                    <option value="GN" cnCode="224">Guinea</option>
	                    <option value="GW" cnCode="245">Guinea Bissau</option>
	                    <option value="GY" cnCode="592">Guyana</option>
	                    <option value="HT" cnCode="509">Haiti</option>
	                    <option value="HM" cnCode="672">Heard Island and McDonald Islands</option>
	                    <option value="VA" cnCode="379">Holy See Vatican City State</option>
	                    <option value="HN" cnCode="504">Honduras</option>
	                    <option value="HK" cnCode="852">Hong Kong</option>
	                    <option value="HU" cnCode="36">Hungary</option>
	                    <option value="IS" cnCode="354">Iceland </option>
	                    <option value="IN" cnCode="91">India</option>
	                    <option value="ID" cnCode="62">Indonesia</option>
	                    <option value="IR" cnCode="98">Iran</option>
	                    <option value="IQ" cnCode="964">Iraq</option>
	                    <option value="IE" cnCode="353">Ireland</option>
	                    <option value="IM" cnCode="44">Isle of Man</option>
	                    <option value="IL" cnCode="972">Israel</option>
	                    <option value="IT" cnCode="39">Italy</option>
	                    <option value="JM" cnCode="1876">Jamaica</option>
	                    <option value="JP" cnCode="81">Japan</option>
	                    <option value="JE" cnCode="1534">Jersey</option>
	                    <option value="JO" cnCode="962">Jordan</option>
	                    <option value="KZ" cnCode="7">Kazakhstan</option>
	                    <option value="KE" cnCode="254">Kenya</option>
	                    <option value="KI" cnCode="686">Kiribati</option>
	                    <option value="KR" cnCode="82">Korea</option>
	                    <option value="XK" cnCode="381">Kosovo</option>
	                    <option value="KW" cnCode="965">Kuwait</option>
	                    <option value="KG" cnCode="996">Kyrgyz Republic</option>
	                    <option value="LA" cnCode="856">Lao Peoples Democratic Republic</option>
	                    <option value="LV" cnCode="371">Latvia</option>
	                    <option value="LB" cnCode="961">Lebanon</option>
	                    <option value="LS" cnCode="266">Lesotho</option>
	                    <option value="LR" cnCode="231">Liberia</option>
	                    <option value="LY" cnCode="218">Libya</option>
	                    <option value="LI" cnCode="423">Liechtenstein</option>
	                    <option value="LT" cnCode="370">Lithuania</option>
	                    <option value="LU" cnCode="352">Luxembourg</option>
	                    <option value="MO" cnCode="853">Macau</option>
	                    <option value="MK" cnCode="389">Macedonia</option>
	                    <option value="MG" cnCode="261">Madagascar</option>
	                    <option value="MW" cnCode="265">Malawi</option>
	                    <option value="MY" cnCode="60">Malaysia</option>
	                    <option value="MV" cnCode="960">Maldives</option>
	                    <option value="ML" cnCode="223">Mali Republic</option>
	                    <option value="MT" cnCode="356">Malta</option>
	                    <option value="MH" cnCode="692">Marshall Islands</option>
	                    <option value="MQ" cnCode="596">Martinique</option>
	                    <option value="MR" cnCode="222">Mauritania</option>
	                    <option value="MU" cnCode="230">Mauritius</option>
	                    <option value="YT" cnCode="269">Mayotte </option>
	                    <option value="MX" cnCode="52">Mexico</option>
	                    <option value="MD" cnCode="498">Moldova</option>
	                    <option value="MC" cnCode="377">Monaco</option>
	                    <option value="MN" cnCode="976">Mongolia</option>
	                    <option value="ME" cnCode="382">Montenegro</option>
	                    <option value="MS" cnCode="1664">Montserrat</option>
	                    <option value="MA" cnCode="212">Morocco</option>
	                    <option value="MZ" cnCode="258">Mozambique</option>
	                    <option value="MM" cnCode="95">Myanmar</option>
	                    <option value="NA" cnCode="264">Namibia</option>
	                    <option value="NR" cnCode="674">Nauru</option>
	                    <option value="NP" cnCode="977">Nepal</option>
	                    <option value="NL" cnCode="31">Netherlands</option>
	                    <option value="AN" cnCode="599">Netherlands Antilles</option>
	                    <option value="NC" cnCode="687">New Caledonia</option>
	                    <option value="NZ" cnCode="64">New Zealand </option>
	                    <option value="NI" cnCode="505">Nicaragua</option>
	                    <option value="NE" cnCode="227">Niger</option>
	                    <option value="NG" cnCode="234">Nigeria</option>
	                    <option value="NU" cnCode="683">Niue</option>
	                    <option value="NF" cnCode="672">Norfolk Island</option>
	                    <option value="MP" cnCode="1670">Northern Mariana Islands</option>
	                    <option value="NO" cnCode="47">Norway</option>
	                    <option value="OM" cnCode="968">Oman</option>
	                    <option value="PK" cnCode="92">Pakistan</option>
	                    <option value="PO" cnCode="970">Palastine</option>
	                    <option value="PW" cnCode="680">Palau</option>
	                    <option value="PA" cnCode="507">Panama</option>
	                    <option value="PG" cnCode="675">Papua New Guinea</option>
	                    <option value="PY" cnCode="600">Paraguay</option>
	                    <option value="PE" cnCode="51">Peru</option>
	                    <option value="PH" cnCode="63">Philippines</option>
	                    <option value="PL" cnCode="48">Poland</option>
	                    <option value="PT" cnCode="351">Portugal</option>
	                    <option value="PR" cnCode="1787">Puerto Rico</option>
	                    <option value="QA" cnCode="974">Qatar</option>
	                    <option value="RE" cnCode="262">Reunion</option>
	                    <option value="RO" cnCode="40">Romania</option>
	                    <option value="RU" cnCode="7">Russian Federation</option>
	                    <option value="RW" cnCode="250">Rwanda</option>
	                    <option value="KN" cnCode="1869">Saint Kitts and Nevis</option>
	                    <option value="LC" cnCode="1758">Saint Lucia</option>
	                    <option value="PM" cnCode="508">Saint Pierre</option>
	                    <option value="VC" cnCode="1784">Saint Vincent and the Grenadines</option>
	                    <option value="WS" cnCode="685">Samoa</option>
	                    <option value="SM" cnCode="378">San Marino</option>
	                    <option value="ST" cnCode="239">Sao Tome and Principe</option>
	                    <option value="SA" cnCode="966">Saudi Arabia</option>
	                    <option value="SN" cnCode="221">Senegal</option>
	                    <option value="RS" cnCode="381">Serbia</option>
	                    <option value="SC" cnCode="248">Seychelles</option>
	                    <option value="SL" cnCode="232">Sierra Leone</option>
	                    <option value="SG" cnCode="65">Singapore</option>
	                    <option value="SK" cnCode="421">Slovakia</option>
	                    <option value="SI" cnCode="386">Slovenia</option>
	                    <option value="SB" cnCode="677">Solomon Islands</option>
	                    <option value="SO" cnCode="252">Somalia</option>
	                    <option value="ZA" cnCode="27">South Africa</option>
	                    <option value="ES" cnCode="34">Spain</option>
	                    <option value="LK" cnCode="94">Sri Lanka</option>
	                    <option value="SD" cnCode="249">Sudan</option>
	                    <option value="SR" cnCode="597">Suriname</option>
	                    <option value="SZ" cnCode="268">Swaziland</option>
	                    <option value="SE" cnCode="46">Sweden</option>
	                    <option value="CH" cnCode="41">Switzerland</option>
	                    <option value="SY" cnCode="963">Syria</option>
	                    <option value="TW" cnCode="886">Taiwan</option>
	                    <option value="TJ" cnCode="992">Tajikistan</option>
	                    <option value="TH" cnCode="66">Thailand</option>
	                    <option value="TG" cnCode="228">Togo</option>
	                    <option value="TK" cnCode="690">Tokelau</option>
	                    <option value="TO" cnCode="676">Tonga</option>
	                    <option value="TT" cnCode="1868">Trinidad and Tobago</option>
	                    <option value="TN" cnCode="216">Tunisia</option>
	                    <option value="TR" cnCode="90">Turkey</option>
	                    <option value="TM" cnCode="993">Turkmenistan</option>
	                    <option value="TC" cnCode="1649">Turks and Caicos Islands</option>
	                    <option value="TV" cnCode="688">Tuvalu</option>
	                    <option value="UG" cnCode="256">Uganda</option>
	                    <option value="UA" cnCode="380">Ukraine</option>
	                    <option value="AE" cnCode="971">United Arab Emirates</option>
	                    <option value="GB" cnCode="44">United Kingdom</option>
	                    <option value="US" cnCode="1">United States</option>
	                    <option value="UN" cnCode="581">United States Minor Outlying Islands</option>
	                    <option value="UY" cnCode="598">Uruguay</option>
	                    <option value="UZ" cnCode="998">Uzbekistan</option>
	                    <option value="VU" cnCode="678">Vanuatu</option>
	                    <option value="VE" cnCode="58">Venezuela</option>
	                    <option value="VN" cnCode="84">Vietnam</option>
	                    <option value="VI" cnCode="850">Virgin Islands U.S.</option>
	                    <option value="WF" cnCode="681">Wallis and Futuna</option>
	                    <option value="YE" cnCode="967">Yemen</option>
	                    <option value="ZR" cnCode="242">Zaire</option>
	                    <option value="ZM" cnCode="260">Zambia </option>
	                    <option value="ZW" cnCode="263">Zimbabwe</option>
					</select>
	                <input id="country_code" class="c_code_class" name="country_code" type="country_code"/>
					<label>Tel * <input id="phone" name="phone" type="phone" maxlength="16"/></label>
                    <input style="display: none;" id="token" name="token" type="token" value="lp_offer_<?php echo $form_lang; ?>"/>
					<input type="submit" value="Inizia Ora" />
				</form>
	            <div id="success">Grazie!</div>
			</div>
	</div>
</div>
    <div style="clear: both;"></div>
	<div id="footer">
		<p><?php echo $lp_footer_txt_it; ?></p>
        <img src="img/footer.png" />
	</div>
    <script type="text/javascript">
       jQuery("#countries > [value='<?php echo $VisitorCountry->GetCode(); ?>']").attr("selected", "true");
    </script>
    <!-- Form Handlers -->
    <script type="text/javascript" src="js/scripts-it.js"></script>  
    </body>
</html>