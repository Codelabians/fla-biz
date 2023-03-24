<?php 
// Template Name: Step4
get_header();
session_start();
if (!isset($_SESSION['ValidStep']))
 {
header ("Location: /apply");
exit;
}
?><script> $(document).ready(function () { $("#formid").validate({ rules: { cfname: { required: true }, clname: { required: true }, caddress: { required: true }, cCity: { required: true }, cState: { required: true }, cZip: { required: true }, cPhone: { required: true }, cEmail: { required: true, email: true } }, messages: { cfname: { required: "<br/><span class='error_msg'>First name required.</span><br/>" }, clname: { required: "<br/><span class='error_msg'>Last name required</span>" }, caddress: { required: "<br/><span class='error_msg'>Mailing Address required.</span>" }, cCity: { required: "<br/><span class='error_msg'>City required</span>" }, cState: { required: "<br/><span class='error_msg'>State required</span>" }, cZip: { required: "<br/><span class='error_msg'>Zip required</span>" }, cPhone: { required: "<br/><span class='error_msg'>Phone required</span>" }, cEmail: { required: "<br/><span class='error_msg'>Email required</span>", email: "<br/><span class='error_msg'>Enter valid email</span>" } }, errorPlacement: function (error, element) { if (element.is(":radio")) { error.prependTo(element.parent()); } else { error.insertAfter(element); } } }); });</script>
<div id="tf-works">
    <div class="container">
        <div class="entry-content">

 <h1 class="text-center text-capitalize">Step Four: Correspondent
</h1>
<hr>
<form id="formid" action="/billing" method="POST" class="form-horizontal">
        <?php
        $_SESSION['mailid']=$_POST['hdnEmailSend'];
        function wpse27856_set_content_type(){
        return "text/html";
        }
         if($_POST['submit']) {
             ?>
             <input type="hidden" name="claiment_name" value="<?= $_POST['claiment_name'] ?>">
             <input type="hidden" name="hired_authors" value="<?= $_POST['hired_authors'] ?>">
             <input type="hidden" name="test_price" value="<?= $_POST['test_price'] ?>">
             <?php
             
echo "<input type='hidden' id='hdnEmailSend' name='hdnEmailSend'  value='".$_POST['hdnEmailSend']."' />";
echo "<input type='hidden' id='hdnFname' name='hdnFname' value='".$_POST['fname']."' />";
echo "<input type='hidden' id='hdnMname' name='hdnMname' value='".$_POST['mname']."' />";
echo "<input type='hidden' id='hdnLname' name='hdnLname' value='".$_POST['lname']."' />";
echo "<input type='hidden' id='hdnAddress' name='hdnAddress' value='".$_POST['address']."' />";
echo "<input type='hidden' id='hdnCity' name='hdnCity' value='".$_POST['City']."' />";
echo "<input type='hidden' id='hdnState' name='hdnState' value='".$_POST['State']."' />";
echo "<input type='hidden' id='hdnCitizen' name='hdnCitizen' value='".$_POST['ddlCitizen']."' />";
echo "<input type='hidden' id='hdnZip' name='hdnZip' value='".$_POST['Zip']."' />";
echo "<input type='hidden' id='hdnBirthYear' name='hdnBirthYear' value='".$_POST['BirthYear']."' />";
echo "<input type='hidden' id='hdnAlive' name='hdnAlive' value='".$_POST['rbAlive']."' />";
echo "<input type='hidden' id='hdnDomicile' name='hdnDomicile' value='".$_POST['ddlDomicile']."' />";
echo "<input type='hidden' id='hdnDescription' name='hdnDescription' value='".$_POST['txtDescription']."' />";
echo "<input type='hidden' id='hdnClaimant' name='hdnClaimant' value='".$_POST['rbClaimant']."' />";

echo "<input type='hidden' id='hdnCategory' name='hdnCategory' value='".$_POST['hdnCategory']."' />";
echo "<input type='hidden' id='hdnNature' name='hdnNature' value='".$_POST['hdnNature']."' />";
?>
<input type='hidden' id='hdnTitle' name='hdnTitle' value="<?= htmlspecialchars($_POST['hdnTitle']) ?> " />
<input type='hidden' id='hdnAnotherTitle' name='hdnAnotherTitle' value="<?= htmlspecialchars($_POST['hdnAnotherTitle']) ?>" />
<input type='hidden' id='hdnCreateYear' name='hdnCreateYear' value="<?= $_POST['hdnCreateYear'] ?>" />
<?php
echo "<input type='hidden' id='hdnPublished' name='hdnPublished' value='".$_POST['hdnPublished']."' />";
echo "<input type='hidden' id='hdnPrevPublishDate' name='hdnPrevPublishDate' value='".$_POST['hdnPrevPublishDate']."' />";

echo "<input type='hidden' id='hdnPrevPublished' name='hdnPrevPublished' value='".$_POST['hdnPrevPublished']."' />";
echo "<input type='hidden' id='hdnDerPublished' name='hdnDerPublished' value='".$_POST['hdnDerPublished']."' />";
echo "<input type='hidden' id='hdnHire' name='hdnHire' value='".$_POST['hdnHire']."' />";
echo "<input type='hidden' id='hdnAuthor' name='hdnAuthor' value='".$_POST['hdnAuthor']."' />";
echo "<input type='hidden' id='hdnCoAuthors' name='hdnCoAuthors' value='".$_POST['hdnCoAuthors']."' />";

echo "<input type='hidden' id='hdnPsedonym' name='hdnPsedonym' value='".$_POST['hdnPsedonym']."' />";
echo "<input type='hidden' id='hdnPsedonymText' name='hdnPsedonymText' value='".$_POST['hdnPsedonymText']."' />";
// echo "<input type='hidden' id='ssn' name='ssn' value='".$_POST['ssn']."' />";
} ?>
        <div class="form-group">
            <div class='col-sm-6'>
                <div class='col-sm-4'>
                    <label for="cfname" class="control-label">First Name:*</label>
                </div>
                <div class="col-sm-8">
                    <input type="text" name="cfname" class='form-control' id="cfname" value="">
                </div>
            </div>
            <div class="col-sm-6">
                <div class='col-sm-4'>
                    <label for="mname" class="control-label">Last Name:*</label>
                </div>
                <div class="col-sm-8">
                    <input type="text" name="clname" class='form-control' id="clname" value="">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class='col-sm-6'>
                <div class='col-sm-4'>
                    <label for="caddress" class="control-label">Mailing Address:*</label>
                </div>
                <div class="col-sm-8">
                    <textarea id="caddress" name="caddress" cols="25" rows="2" class="form-control"></textarea>
                </div>
            </div>
            <div class="col-sm-6">
                <div class='col-sm-4'>
                    <label for="cCity" class="control-label">City:*</label>
                </div>
                <div class="col-sm-8">
                    <input type='text' id="cCity" name="cCity" value="" class="form-control" />
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class='col-sm-6'>
                <div class='col-sm-4'>
                    <label for="cState" class="control-label">State:*</label>
                </div>
                <div class="col-sm-8">
                    <input type='text' id="cState" name="cState" value="" class="form-control" />
                </div>
            </div>
            <div class="col-sm-6">
                <div class='col-sm-4'>
                    <label for="cddlCountry" class="control-label">Country:*</label>
                </div>
                <div class="col-sm-8">
                    <select name="cddlCountry" id="cddlCountry" class="form-control">
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
                        <option value="MP">
                            NORTHERN MARIANA
                            ISLANDS
                        </option>
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
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class='col-sm-6'>
                <div class='col-sm-4'>
                    <label for="cZip" class="control-label">Zip:*</label>
                </div>
                <div class="col-sm-8">
                    <input type="text" name="cZip" class='form-control' id="cZip" value="">
                </div>
            </div>
            <div class="col-sm-6">
                <div class='col-sm-4'>
                    <label for="cPhone" class="control-label">Day Time Phone:*</label>
                </div>
                <div class="col-sm-8">
                    <input type="text" name="cPhone" class='form-control' id="cPhone" value="">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class='col-sm-6'>
                <div class='col-sm-4'>
                    <label for="cFax" class="control-label">Fax:</label>
                </div>
                <div class="col-sm-8">
                    <input type="text" name="cFax" class='form-control' id="cFax" value="">
                </div>
            </div>
            <div class="col-sm-6">
                <div class='col-sm-4'>
                    <label for="cEmail" class="control-label">Email Address:*</label>
                </div>
                <div class="col-sm-8">
                    <input type="text" name="cEmail" class='form-control' id="cEmail"  readonly="readonly" value="<?php echo $_POST['hdnEmailSend']; ?>">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-5 col-sm-7">
                <input type="submit" name="submit" value="Save & Continue" class='btn btn-sm btn-danger' />
            </div>
        </div>


    </form>
</div>
</div>
</div>
<?php 
    get_footer( );
 ?>