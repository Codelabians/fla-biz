<?php
// Template Name: Step 3;
get_header();
session_start();
if (!isset($_SESSION['ValidStep']))
 {
header ("Location: /apply");
exit;
}
?>
<script> $(document).ready(function() {$("#formid").validate({rules:{fname:{required: true},lname:{required: true},address:{required: true},City:{required: true},State:{required: true},Zip:{required: true},BirthYear:{required: true},rbAlive:{required: true},txtDescription:{required: true},rbClaimant:{required: true}}, messages:{fname:{required:"<br/><span class='error_msg'>First name required.</span><br/>"},lname:{required:"<br/><span class='error_msg'>Last name required</span>"},address:{required:"<br/><span class='error_msg'>Mailing Address required.</span>"},City:{required:"<br/><span class='error_msg'>City required</span>"},State:{required: "<br/><span class='error_msg'>State required</span>"},Zip:{required: "<br/><span class='error_msg'>Zip required</span>"},BirthYear:{required: "<br/><span class='error_msg'>Year of Birth required</span>"},rbAlive:{required: "<span class='error_msg'>Please select one </span>"},txtDescription:{required: "<br/><span class='error_msg'>Description required</span>"},rbClaimant:{required: "<span class='error_msg'>Please select one </span>"}},errorPlacement:function(error, element){if ( element.is(":radio") ) {error.prependTo(element.parent());}else {error.insertAfter( element );}}});});</script>


<div id="tf-works">
    <div class="container">
        <div class="entry-content">
<form id="formid" action="/conclusion" method="POST">
<?php
 function wpse27856_set_content_type(){
    return "text/html";
}

 if($_POST['submit']) {
     ?>
     <input type="hidden" id='hired_authors' name="hired_authors" value="<?= $_POST['hired_authors']?>">
     <?php
echo "<input type='hidden' id='hdnEmailSend' name='hdnEmailSend'  value='".$_POST['hdnEmailSend']."' />";
echo "<input type='hidden' id='hdnCategory' name='hdnCategory' value='".$_POST['hdnCategory']."' />";
echo "<input type='hidden' id='hdnNature' name='hdnNature' value='".$_POST['hdnNature']."' />";
?>
<input type='hidden' id='hdnTitle' name='hdnTitle' value="<?= htmlspecialchars($_POST['hdnTitle']) ?>" />
<input type='hidden' id='hdnAnotherTitle' name='hdnAnotherTitle' value="<?= htmlspecialchars($_POST['hdnAnotherTitle']) ?>"  />
<?php
echo "<input type='hidden' id='hdnCreateYear' name='hdnCreateYear' value='".$_POST['hdnCreateYear']."' />";
echo "<input type='hidden' id='hdnPublished' name='hdnPublished' value='".$_POST['hdnPublished']."' />";
echo "<input type='hidden' id='hdnPrevPublishDate' name='hdnPrevPublishDate' value='".$_POST['hdnPrevPublishDate']."' />";

echo "<input type='hidden' id='hdnPrevPublished' name='hdnPrevPublished' value='".$_POST['rbPrevPublished']."' />";
echo "<input type='hidden' id='hdnDerPublished' name='hdnDerPublished' value='".$_POST['rbDerPublished']."' />";
echo "<input type='hidden' id='hdnHire' name='hdnHire' value='".$_POST['rbHire']."' />";
echo "<input type='hidden' id='hdnAuthor' name='hdnAuthor' value='".$_POST['rbAuthor']."' />";
echo "<input type='hidden' id='hdnCoAuthors' name='hdnCoAuthors' value='".$_POST['txtCoAuthors']."' />";

echo "<input type='hidden' id='hdnPsedonym' name='hdnPsedonym' value='".$_POST['rbPseudonym']."' />";
echo "<input type='hidden' id='hdnPsedonymText' name='hdnPsedonymText' value='".$_POST['txtPseudonym']."' />";

} ?>

 <h1 class="text-center text-capitalize">Step Three: Author/Claimant
</h1>
<hr>
<table cellspacing="2" cellpadding="2" width="100%">

<tr>
<td class="fourlabel"> First Name:* </td>
<td class="fourcontent"><input type='text' id="fname" name="fname" value=""/></td>
<td class="fourlabel"> Middle Name:</td>
<td class="fourcontent"><input type='text' id="mname" name="mname" value=""/> </td>
</tr>
<tr>
<td class="fourlabel"> Last Name:* </td>
<td class="fourcontent"><input type='text' id="lname" name="lname" value=""/></td>
<td class="fourlabel" valign="top"> Mailing Address:* </td>
<td class="fourcontent"><textarea id="address" name="address" cols="25" rows="1" ></textarea></td>
</tr>
<tr>
<td class="fourlabel"> City:* </td>
<td class="fourcontent">
<input type='text' id="City" name="City" value=""/>
 </td>
<td class="fourlabel"> State:* </td>
<td class="fourcontent">
<input type='text' id="State" name="State" value=""/>
 </td>
</tr>

<tr>
<td class="fourlabel"> Country:* </td>
<td class="fourcontent">
<select name="ddlCitizen" id="ddlCitizen">
    <option value="AF">AFGHANISTAN</option>
    <option value="AL">ALBANIA</option>
    <option value="DZ">ALGERIA</option>
    <option value="AS">AMERICAN SAMOA</option>
    <option value="AO">ANGOLA</option>
    <option value="AL">ANGUILLA</option>
    <option value="AQ">ANTARCTICA</option>
    <option value="AG">ANTIGUA AND BARBUDA</option>
    <option value="AR">ARGENTINA</option>
    <option value="AM">ARMENIA</option>
    <option value="AW">ARUBA</option>
    <option value="AU">AUSTRALIA</option>
    <option value="AT">AUSTRIA</option>
    <option value="AZ">AZERBAIJAN</option>
    <option value="BS">BAHAMAS</option>
    <option value="BH">BAHRAIN</option>
    <option value="BD">BANGLADESH</option>
    <option value="BB">BARBADOS</option>
    <option value="BY">BELARUS</option>
    <option value="BE">BELGIUM</option>
    <option value="BZ">BELIZE</option>
    <option value="BJ">BENIN</option>
    <option value="BM">BERMUDA</option>
    <option value="BT">BHUTAN</option>
    <option value="BO">BOLIVIA</option>
    <option value="BA">BOSNIA AND HERZEGOVINA</option>
    <option value="BT">BOTSWANA</option>
    <option value="BV">BOUVET ISLAND</option>
    <option value="BR">BRAZIL</option>
    <option value="BN">BRUNEI DARUSSALAM</option>
    <option value="BG">BULGARIA</option>
    <option value="BF">BURKINA FASO</option>
    <option value="BU">BURUNDI</option>
    <option value="KH">CAMBODIA</option>
    <option value="CM">CAMEROON</option>
    <option value="CA">CANADA</option>
    <option value="CV">CAPE VERDE</option>
    <option value="AY">CAYMAN ISLANDS</option>
    <option value="CF">CENTRAL AFRICAN REPUBLIC</option>
    <option value="TD">CHAD</option>
    <option value="CL">CHILE</option>
    <option value="CN">CHINA</option>
    <option value="CX">CHRISTMAS ISLAND</option>
    <option value="CC">COCOS (KEELING) ISLANDS</option>
    <option value="CO">COLOMBIA</option>
    <option value="KM">COMOROS</option>
    <option value="CG">CONGO</option>
    <option value="CK">COOK ISLANDS</option>
    <option value="CR">COSTA RICA</option>
    <option value="CI">CTE D&#39;IVOIRE</option>
    <option value="HR">CROATIA</option>
    <option value="CU">CUBA</option>
    <option value="CY">CYPRUS</option>
    <option value="CZ">CZECH REPUBLIC</option>
    <option value="DK">DENMARK</option>
    <option value="DJ">DJIBOUTI</option>
    <option value="DM">DOMINICA</option>
    <option value="DO">DOMINICAN REPUBLIC</option>
    <option value="TP">EAST TIMOR</option>
    <option value="EC">ECUADOR</option>
    <option value="EG">EGYPT</option>
    <option value="SV">EL SALVADOR</option>
    <option value="GQ">EQUATORIAL GUINEA</option>
    <option value="ER">ERITREA</option>
    <option value="EE">ESTONIA</option>
    <option value="ET">ETHIOPIA</option>
    <option value="FO">FAROE ISLANDS</option>
    <option value="FJ">FIJI</option>
    <option value="FI">FINLAND</option>
    <option value="FR">FRANCE</option>
    <option value="GA">GABON</option>
    <option value="GM">GAMBIA</option>
    <option value="GE">GEORGIA</option>
    <option value="GE">GERMANY</option>
    <option value="GH">GHANA</option>
    <option value="GI">GIBRALTAR</option>
    <option value="GR">GREECE</option>
    <option value="GL">GREENLAND</option>
    <option value="GD">GRENADA</option>
    <option value="GP">GUADELOUPE</option>
    <option value="GU">GUAM</option>
    <option value="GT">GUATEMALA</option>
    <option value="GN">GUINEA</option>
    <option value="GW">GUINEA-BISSAU</option>
    <option value="EE">GUYANA</option>
    <option value="HT">HAITI</option>
    <option value="VA">HOLY SEE</option>
    <option value="HN">HONDURAS</option>
    <option value="HK">HONG KONG</option>
    <option value="HU">HUNGARY</option>
    <option value="IS">ICELAND</option>
    <option value="IN">INDIA</option>
    <option value="ID">INDONESIA</option>
    <option value="IR">IRAN</option>
    <option value="IQ">IRAQ</option>
    <option value="IE">IRELAND</option>
    <option value="IL">ISRAEL</option>
    <option value="IT">ITALY</option>
    <option value="JM">JAMAICA</option>
    <option value="JP">JAPAN</option>
    <option value="JO">JORDAN</option>
    <option value="KZ">KAZAKSTAN</option>
    <option value="KE">KENYA</option>
    <option value="KI">KIRIBATI</option>
    <option value="KP">KOREA, DEMOCRATIC</option>
    <option value="KR">KOREA, REPUBLIC</option>
    <option value="KW">KUWAIT</option>
    <option value="KG">KYRGYZSTAN</option>
    <option value="LV">LATVIA</option>
    <option value="LB">LEBANON</option>
    <option value="LS">LESOTHO</option>
    <option value="LR">LIBERIA</option>
    <option value="LY">LIBYAN ARAB</option>
    <option value="LI">LIECHTENSTEIN</option>
    <option value="LT">LITHUANIA</option>
    <option value="LU">LUXEMBOURG</option>
    <option value="MO">MACAU</option>
    <option value="MK">MACEDONIA</option>
    <option value="MG">MADAGASCAR</option>
    <option value="MW">MALAWI</option>
    <option value="MY">MALAYSIA</option>
    <option value="MV">MALDIVES</option>
    <option value="ML">MALI</option>
    <option value="MT">MALTA</option>
    <option value="MH">MARSHALL ISLANDS</option>
    <option value="MQ">MARTINIQUE</option>
    <option value="MR">MAURITANIA</option>
    <option value="MU">MAURITIUS</option>
    <option value="YT">MAYOTTE</option>
    <option value="MX">MEXICO</option>
    <option value="MD">MONACO</option>
    <option value="MN">MONGOLIA</option>
    <option value="MS">MONTSERRAT</option>
    <option value="MA">MOROCCO</option>
    <option value="MZ">MOZAMBIQUE</option>
    <option value="MM">MYANMAR</option>
    <option value="NA">NAMIBIA</option>
    <option value="NR">NAURU</option>
    <option value="NP">NEPAL</option>
    <option value="NL">NETHERLANDS</option>
    <option value="AN">NETHERLANDS ANTILLES</option>
    <option value="NC">NEW CALEDONIA</option>
    <option value="NZ">NEW ZEALAND</option>
    <option value="NI">NICARAGUA</option>
    <option value="NE">NIGER</option>
    <option value="NG">NIGERIA</option>
    <option value="NU">NIUE</option>
    <option value="NF">NORFOLK ISLAND</option>
    <option value="MP">NORTHERN MARIANA 
                                          ISLANDS</option>
    <option value="NO">NORWAY</option>
    <option value="OM">OMAN</option>
    <option value="PK">PAKISTAN</option>
    <option value="PW">PALAU</option>
    <option value="PA">PANAMA</option>
    <option value="PG">PAPUA NEW GUINEA</option>
    <option value="PY">PARAGUAY</option>
    <option value="PE">PERU</option>
    <option value="PH">PHILIPPINES</option>
    <option value="PN">PITCAIRN</option>
    <option value="PL">POLAND</option>
    <option value="PT">PORTUGAL</option>
    <option value="PR">PUERTO RICO</option>
    <option value="QA">QATAR</option>
    <option value="RE">RUNION</option>
    <option value="RO">ROMANIA</option>
    <option value="RU">RUSSIAN FEDERATION</option>
    <option value="RW">RWANDA</option>
    <option value="WS">SAMOA</option>
    <option value="SM">SAN MARINO</option>
    <option value="SA">SAUDI ARABIA</option>
    <option value="SN">SENEGAL</option>
    <option value="SC">SEYCHELLES</option>
    <option value="SL">SIERRA LEONE</option>
    <option value="SG">SINGAPORE</option>
    <option value="SK">SLOVAKIA</option>
    <option value="SI">SLOVENIA</option>
    <option value="SB">SOLOMON ISLANDS</option>
    <option value="SO">SOMALIA</option>
    <option value="ZA">SOUTH AFRICA</option>
    <option value="ES">SPAIN</option>
    <option value="LK">SRI LANKA</option>
    <option value="SD">SUDAN</option>
    <option value="SR">SURINAME</option>
    <option value="SZ">SWAZILAND</option>
    <option value="SE">SWEDEN</option>
    <option value="CH">SWITZERLAND</option>
    <option value="SY">SYRIAN ARAB REPUBLIC</option>
    <option value="TW">TAIWAN</option>
    <option value="TJ">TAJIKISTAN</option>
    <option value="TZ">TANZANIA</option>
    <option value="TH">THAILAND</option>
    <option value="TG">TOGO</option>
    <option value="TK">TOKELAU</option>
    <option value="TO">TONGA</option>
    <option value="TT">TRINIDAD AND TOBAGO</option>
    <option value="TN">TUNISIA</option>
    <option value="TR">TURKEY</option>
    <option value="TM">TURKMENISTAN</option>
    <option value="TV">TUVALU</option>
    <option value="UG">UGANDA</option>
    <option value="UA">UKRAINE</option>
    <option value="AE">UAE</option>
    <option value="GB">UNITED KINGDOM</option>
    <option selected="selected" value="US">UNITED STATES</option>
    <option value="UY">URUGUAY</option>
    <option value="UZ">UZBEKISTAN</option>
    <option value="VU">VANUATU</option>
    <option value="VE">VENEZUELA</option>
    <option value="VN">VIET NAM</option>
    <option value="VG">VIRGIN ISLANDS, BRITISH</option>
    <option value="VI">VIRGIN ISLANDS, U.S.</option>
    <option value="WF">WALLIS AND FUTUNA</option>
    <option value="EH">WESTERN SAHARA</option>
    <option value="YE">YEMEN</option>
    <option value="ZM">ZAMBIA</option>
    <option value="ZW">ZIMBABWE</option>

</select>
 </td>
<td class="fourlabel"> Zip:* </td>
<td class="fourcontent">
<input type='text' id="Zip" name="Zip" value=""/>
 </td>
</tr>
<tr>
<td class="fourlabel"> Year of Birth:* </td>
<td class="fourcontent">
<input type='text' id="BirthYear" name="BirthYear" value=""/>
 </td>
<td class="fourlabel"> Is the author still alive?:* </td>
<td class="fourcontent">
<input type="radio" name="rbAlive" id="rbAliveYes" value="Yes" /> Yes  <input type="radio" name="rbAlive" id="rbAliveNo" value="No" /> No
 </td>
</tr>
<tr><td colspan="4">
<i>(Date of Birth is used by the Copyright Office for identification purposes. If applicable, the year of death determines the duration of copyright protection.)</i>
</td>
</tr>
<tr>
<td class="fourlabel"> Authors Citizenship or Domicile:* </td>
<td class="fourcontent">
<select name="ddlDomicile" id="ddlDomicile">
    <option value="AF">AFGHANISTAN</option>
    <option value="AL">ALBANIA</option>
    <option value="DZ">ALGERIA</option>
    <option value="AS">AMERICAN SAMOA</option>
    <option value="AO">ANGOLA</option>
    <option value="AL">ANGUILLA</option>
    <option value="AQ">ANTARCTICA</option>
    <option value="AG">ANTIGUA AND BARBUDA</option>
    <option value="AR">ARGENTINA</option>
    <option value="AM">ARMENIA</option>
    <option value="AW">ARUBA</option>
    <option value="AU">AUSTRALIA</option>
    <option value="AT">AUSTRIA</option>
    <option value="AZ">AZERBAIJAN</option>
    <option value="BS">BAHAMAS</option>
    <option value="BH">BAHRAIN</option>
    <option value="BD">BANGLADESH</option>
    <option value="BB">BARBADOS</option>
    <option value="BY">BELARUS</option>
    <option value="BE">BELGIUM</option>
    <option value="BZ">BELIZE</option>
    <option value="BJ">BENIN</option>
    <option value="BM">BERMUDA</option>
    <option value="BT">BHUTAN</option>
    <option value="BO">BOLIVIA</option>
    <option value="BA">BOSNIA AND HERZEGOVINA</option>
    <option value="BT">BOTSWANA</option>
    <option value="BV">BOUVET ISLAND</option>
    <option value="BR">BRAZIL</option>
    <option value="BN">BRUNEI DARUSSALAM</option>
    <option value="BG">BULGARIA</option>
    <option value="BF">BURKINA FASO</option>
    <option value="BU">BURUNDI</option>
    <option value="KH">CAMBODIA</option>
    <option value="CM">CAMEROON</option>
    <option value="CA">CANADA</option>
    <option value="CV">CAPE VERDE</option>
    <option value="AY">CAYMAN ISLANDS</option>
    <option value="CF">CENTRAL AFRICAN REPUBLIC</option>
    <option value="TD">CHAD</option>
    <option value="CL">CHILE</option>
    <option value="CN">CHINA</option>
    <option value="CX">CHRISTMAS ISLAND</option>
    <option value="CC">COCOS (KEELING) ISLANDS</option>
    <option value="CO">COLOMBIA</option>
    <option value="KM">COMOROS</option>
    <option value="CG">CONGO</option>
    <option value="CK">COOK ISLANDS</option>
    <option value="CR">COSTA RICA</option>
    <option value="CI">CTE D&#39;IVOIRE</option>
    <option value="HR">CROATIA</option>
    <option value="CU">CUBA</option>
    <option value="CY">CYPRUS</option>
    <option value="CZ">CZECH REPUBLIC</option>
    <option value="DK">DENMARK</option>
    <option value="DJ">DJIBOUTI</option>
    <option value="DM">DOMINICA</option>
    <option value="DO">DOMINICAN REPUBLIC</option>
    <option value="TP">EAST TIMOR</option>
    <option value="EC">ECUADOR</option>
    <option value="EG">EGYPT</option>
    <option value="SV">EL SALVADOR</option>
    <option value="GQ">EQUATORIAL GUINEA</option>
    <option value="ER">ERITREA</option>
    <option value="EE">ESTONIA</option>
    <option value="ET">ETHIOPIA</option>
    <option value="FO">FAROE ISLANDS</option>
    <option value="FJ">FIJI</option>
    <option value="FI">FINLAND</option>
    <option value="FR">FRANCE</option>
    <option value="GA">GABON</option>
    <option value="GM">GAMBIA</option>
    <option value="GE">GEORGIA</option>
    <option value="GE">GERMANY</option>
    <option value="GH">GHANA</option>
    <option value="GI">GIBRALTAR</option>
    <option value="GR">GREECE</option>
    <option value="GL">GREENLAND</option>
    <option value="GD">GRENADA</option>
    <option value="GP">GUADELOUPE</option>
    <option value="GU">GUAM</option>
    <option value="GT">GUATEMALA</option>
    <option value="GN">GUINEA</option>
    <option value="GW">GUINEA-BISSAU</option>
    <option value="EE">GUYANA</option>
    <option value="HT">HAITI</option>
    <option value="VA">HOLY SEE</option>
    <option value="HN">HONDURAS</option>
    <option value="HK">HONG KONG</option>
    <option value="HU">HUNGARY</option>
    <option value="IS">ICELAND</option>
    <option value="IN">INDIA</option>
    <option value="ID">INDONESIA</option>
    <option value="IR">IRAN</option>
    <option value="IQ">IRAQ</option>
    <option value="IE">IRELAND</option>
    <option value="IL">ISRAEL</option>
    <option value="IT">ITALY</option>
    <option value="JM">JAMAICA</option>
    <option value="JP">JAPAN</option>
    <option value="JO">JORDAN</option>
    <option value="KZ">KAZAKSTAN</option>
    <option value="KE">KENYA</option>
    <option value="KI">KIRIBATI</option>
    <option value="KP">KOREA, DEMOCRATIC</option>
    <option value="KR">KOREA, REPUBLIC</option>
    <option value="KW">KUWAIT</option>
    <option value="KG">KYRGYZSTAN</option>
    <option value="LV">LATVIA</option>
    <option value="LB">LEBANON</option>
    <option value="LS">LESOTHO</option>
    <option value="LR">LIBERIA</option>
    <option value="LY">LIBYAN ARAB</option>
    <option value="LI">LIECHTENSTEIN</option>
    <option value="LT">LITHUANIA</option>
    <option value="LU">LUXEMBOURG</option>
    <option value="MO">MACAU</option>
    <option value="MK">MACEDONIA</option>
    <option value="MG">MADAGASCAR</option>
    <option value="MW">MALAWI</option>
    <option value="MY">MALAYSIA</option>
    <option value="MV">MALDIVES</option>
    <option value="ML">MALI</option>
    <option value="MT">MALTA</option>
    <option value="MH">MARSHALL ISLANDS</option>
    <option value="MQ">MARTINIQUE</option>
    <option value="MR">MAURITANIA</option>
    <option value="MU">MAURITIUS</option>
    <option value="YT">MAYOTTE</option>
    <option value="MX">MEXICO</option>
    <option value="MD">MONACO</option>
    <option value="MN">MONGOLIA</option>
    <option value="MS">MONTSERRAT</option>
    <option value="MA">MOROCCO</option>
    <option value="MZ">MOZAMBIQUE</option>
    <option value="MM">MYANMAR</option>
    <option value="NA">NAMIBIA</option>
    <option value="NR">NAURU</option>
    <option value="NP">NEPAL</option>
    <option value="NL">NETHERLANDS</option>
    <option value="AN">NETHERLANDS ANTILLES</option>
    <option value="NC">NEW CALEDONIA</option>
    <option value="NZ">NEW ZEALAND</option>
    <option value="NI">NICARAGUA</option>
    <option value="NE">NIGER</option>
    <option value="NG">NIGERIA</option>
    <option value="NU">NIUE</option>
    <option value="NF">NORFOLK ISLAND</option>
    <option value="MP">NORTHERN MARIANA 
                                          ISLANDS</option>
    <option value="NO">NORWAY</option>
    <option value="OM">OMAN</option>
    <option value="PK">PAKISTAN</option>
    <option value="PW">PALAU</option>
    <option value="PA">PANAMA</option>
    <option value="PG">PAPUA NEW GUINEA</option>
    <option value="PY">PARAGUAY</option>
    <option value="PE">PERU</option>
    <option value="PH">PHILIPPINES</option>
    <option value="PN">PITCAIRN</option>
    <option value="PL">POLAND</option>
    <option value="PT">PORTUGAL</option>
    <option value="PR">PUERTO RICO</option>
    <option value="QA">QATAR</option>
    <option value="RE">RUNION</option>
    <option value="RO">ROMANIA</option>
    <option value="RU">RUSSIAN FEDERATION</option>
    <option value="RW">RWANDA</option>
    <option value="WS">SAMOA</option>
    <option value="SM">SAN MARINO</option>
    <option value="SA">SAUDI ARABIA</option>
    <option value="SN">SENEGAL</option>
    <option value="SC">SEYCHELLES</option>
    <option value="SL">SIERRA LEONE</option>
    <option value="SG">SINGAPORE</option>
    <option value="SK">SLOVAKIA</option>
    <option value="SI">SLOVENIA</option>
    <option value="SB">SOLOMON ISLANDS</option>
    <option value="SO">SOMALIA</option>
    <option value="ZA">SOUTH AFRICA</option>
    <option value="ES">SPAIN</option>
    <option value="LK">SRI LANKA</option>
    <option value="SD">SUDAN</option>
    <option value="SR">SURINAME</option>
    <option value="SZ">SWAZILAND</option>
    <option value="SE">SWEDEN</option>
    <option value="CH">SWITZERLAND</option>
    <option value="SY">SYRIAN ARAB REPUBLIC</option>
    <option value="TW">TAIWAN</option>
    <option value="TJ">TAJIKISTAN</option>
    <option value="TZ">TANZANIA</option>
    <option value="TH">THAILAND</option>
    <option value="TG">TOGO</option>
    <option value="TK">TOKELAU</option>
    <option value="TO">TONGA</option>
    <option value="TT">TRINIDAD AND TOBAGO</option>
    <option value="TN">TUNISIA</option>
    <option value="TR">TURKEY</option>
    <option value="TM">TURKMENISTAN</option>
    <option value="TV">TUVALU</option>
    <option value="UG">UGANDA</option>
    <option value="UA">UKRAINE</option>
    <option value="AE">UAE</option>
    <option value="GB">UNITED KINGDOM</option>
    <option selected="selected" value="US">UNITED STATES</option>
    <option value="UY">URUGUAY</option>
    <option value="UZ">UZBEKISTAN</option>
    <option value="VU">VANUATU</option>
    <option value="VE">VENEZUELA</option>
    <option value="VN">VIET NAM</option>
    <option value="VG">VIRGIN ISLANDS, BRITISH</option>
    <option value="VI">VIRGIN ISLANDS, U.S.</option>
    <option value="WF">WALLIS AND FUTUNA</option>
    <option value="EH">WESTERN SAHARA</option>
    <option value="YE">YEMEN</option>
    <option value="ZM">ZAMBIA</option>
    <option value="ZW">ZIMBABWE</option>

</select>
 </td>
<td class="fourlabel"> </td>
<td class="fourcontent">
<!--<input type="text" name="ssn">-->
 </td>
</tr>

<tr>
<td colspan="4"><i>(Indicate the country of which the Author is a citizen, or the country where the Author is domiciled (resides).) </i></td>
</tr>
<tr>
    <td class="heading" colspan="4">
 Nature of Authorship 
</td></tr>
<td class="fourlabel">
Describe:
</td>
    
<td class="fourcontent" colspan="2">
<textarea id="txtDescription" name="txtDescription" cols="50" rows="5" ></textarea>
</td>

<td></td></tr>

<td></td></tr>

<tr><td colspan="4">
<i>(Nature of Authorship is what you have contributed to the work. For example, if wrote a book, type TEXT.  If you wrote a book with artwork, type TEXT and ART.  If you wrote a song type LYRICS and or MUSIC. Indicate amount of songs, photos, etc.)
</i>
</td>
</tr>
<tr><td class="heading" colspan="4"> Copyright Claimant(s) </td></tr>
<tr><td class="fourlabel">
 Is the copyright claimant the Author?:
</td>
<td class="fourcontent">
    <input type="radio" name="rbClaimant" id="rbClaimantYes" value="Yes" onClick="claiment('yes')" /> Yes 
    <input type="radio" name="rbClaimant" id="rbClaimantNo" value="No"onClick="claiment('no')" /> No
    <div class="form-group" id="claiment_name" style="display:none">
        <label for="claiment_name">Please enter the claimants name</label>
        <input type="text" class="form-control" name="claiment_name">
    </div>
</td>
<td class="fourlabel">
</td>
<td class="fourcontent"></td>
</tr>
<tr>
<td colspan="4"><i>(The copyright claimant is either the author of the work or a person or organization to whom the copyright has been transferred. In the case of a work made for hire, the employer owns the copyright. For these situations, select Yes. An author can sell or transfer a copyright. If the author has transferred this copyright to someone else, select No..)</i></td>
</tr>

<td></td></tr>

<tr>
    <td class="heading">Choose One: </td>
    <td>
        <input type="radio" name="test_price" value="$45"> One work with one author. (Ex: Book with only text)<br>
        <input type="radio" name="test_price" value="$65"> More than one work and or multiple authors. (Ex: book     with text and art)<br>
        <input type="radio" name="test_price" value="$85"> A group of unpublished works. (Ex. 10 unpublished songs)<br>

    </td>
</tr>
<td></td></tr>

<tr>
<td colspan="4" align="center" style="text-align:center"><input type="submit" name="submit" value="Save & Continue" /></td>
</tr>
</table>

</form>
</div>
</div>
</div>
<?php
    get_footer();
  ?>
  <script>
      function claiment(val){
          if(val == "no"){
              console.log($("#claiment_name"));
              $("#claiment_name").show();
          }else{
              $("#claiment_name").hide();
          }
      }
  </script>