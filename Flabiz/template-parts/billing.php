<?php
    // Template Name: Billing Structure
    get_header();
    // session_start();
    // if (!isset($_SESSION['ValidStep']))
    // {

    //     ob_start();
    //     header ("Location: /apply");
    //     exit;
    // }
    ?>
<?php

    function wpse27856_set_content_type(){ return "text/html"; }
   // $conn = mysqli_connect('tax1232807355376.db.6002239.hostedresource.com', 'tax1232807355376', 'Greg@1975', 'tax1232807355376');
      $conn = mysqli_connect('p3plcpnl0956.prod.phx3.secureserver.net',  'raheel_12122', 'n&zuKszlM,R9', 'tax1232807355376', '3306');
    // prepare the SQL query
    $existing_customer=0;
    $IsRedeemed=0;
    $PromoCodeRedeemed='NO';
    $price=0;

    ?></p>
<div id="tf-works">

    <h1>hello</h1>
    <div class="container">
        <div class="entry-content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="well">
                        <form id="formid1" class="form-horizontal" action="" method="POST">
                            <h3>Order Form</h3>
                            <p><b>Please select a service</b></p>
                            <p><input id="ckagree" class="ckagree" name="ckagree" type="checkbox" checked="checked"><span class="price"><?php if ($_POST['Redeem']){
                                        if ($existing_customer==0)
                                        {
                                            // prepare the SQL query
                                            $datas=mysqli_query($conn,"Select count(*) as num1 from Promocodes where Email='".$_SESSION['PromoEmail']."' and status=0");
                                            $rows = mysqli_fetch_assoc($datas);
                                            if ($rows['num1']>0){
                                                $price= 818;
                                                $sqls="Update Promocodes SET status=1 where Email='".$_SESSION['mailid']."' and status=0";
                                                $result11 = mysqli_query($conn,$sqls) or die(mysqli_error());$PromoCodeRedeemed='YES';
                                                echo '<b style="font-size: 12pt; color: green; font-weight: bold;">$135.00</b>';
                                            }
                                            else
                                            {
                                                $price= 816;
                                                $IsRedeemed=1;
                                                echo '<b style="font-size: 12pt; color: green; font-weight: bold;">$135</b>';
                                            }}else{
                                            $data1=mysqli_query("Select count(*) as rewarded from copyrightinfo where correspondence_email_8='".$_SESSION['mailid']."' and<br>Reward='YES'");
                                            $rowse = mysqli_fetch_assoc($data1);
                                            if ($rowse['rewarded']>0)
                                            { echo '<b style="font-size: 12pt; color: green; font-weight: bold;">$114.75</b>';$price=817;
                                            } else
                                            {
                                                $price= 818;
                                                echo '<b style="font-size: 12pt; color: green; font-weight: bold;">$135.00</b>';
                                            } }
                                    } else {
                                        add_filter( 'wp_mail_content_type','wpse27856_set_content_type' ); $msg="Somebody Started to Apply for Copyright registration with <br>Title: ".$_POST['hdnNature']."</p>
<p>"; $msg=$msg."First Name:".$_POST['cfname']."<br>"; $msg=$msg."Last Name:".$_POST['clname']."<br>"; $msg=$msg."Address:".$_POST['caddress']."<br>"; $msg=$msg."City:".$_POST['cCity']."<br>"; $msg=$msg."State:".$_POST['cState']."<br>"; $msg=$msg."Citizen:".$_POST['cddlCountry']."<br>"; $msg=$msg."Zip:".$_POST['cZip']."<br>"; $msg=$msg."Email: ".$_POST['cEmail']."<br>"; wp_mail('contact@copyrightregistryonline.us', 'Somebody completed Step 4.',$msg);
                                        $_SESSION['category']=$_POST['hdnCategory'];$_SESSION['Nature']=$_POST['hdnNature'];
                                        $_SESSION['Title']=$_POST['hdnTitle'];$_SESSION['AnotherTitle']=$_POST['hdnAnotherTitle'];$_SESSION['CreateYear']=$_POST['hdnCreateYear'];
                                        $_SESSION['Published']=$_POST['hdnPublished'];
                                        $_SESSION['PrevPublishDate']=$_POST['hdnPrevPublishDate'];
                                        $_SESSION['PrevRegPublished']=$_POST['hdnPrevPublished'];
                                        $_SESSION['DerPublished']=$_POST['hdnDerPublished'];
                                        $_SESSION['Hire']=$_POST['hdnHire'];
                                        $_SESSION['MoreAuthor']=$_POST['hdnAuthor'];
                                        $_SESSION['hdnCoAuthors']=$_POST['hdnCoAuthors'];
                                        $_SESSION['Pseudonym']=$_POST['hdnPsedonym'];
                                        $_SESSION['PsedonymText']=$_POST['hdnPsedonymText'];
                                        $_SESSION['AuthorFName']=$_POST['hdnFname'];
                                        $_SESSION['AuthorMName']=$_POST['hdnMname'];
                                        $_SESSION['AuthorLName']=$_POST['hdnLname'];
                                        $_SESSION['AuthorAddress']=$_POST['hdnAddress'];
                                        $_SESSION['AuthorCity']=$_POST['hdnCity'];
                                        $_SESSION['AuthorState']=$_POST['hdnState'];
                                        $_SESSION['AuthorCitizen']=$_POST['hdnCitizen'];
                                        $_SESSION['AuthorZip']=$_POST['hdnZip'];
                                        $_SESSION['AuthorBirthYear']=$_POST['hdnBirthYear'];
                                        $_SESSION['AuthorAlive']=$_POST['hdnAlive'];
                                        $_SESSION['AuthorDominc']=$_POST['hdnDomicile'];
                                        $_SESSION['AuthorDescription']=$_POST['hdnDescription'];
                                        $_SESSION['AuthorClaimant']=$_POST['hdnClaimant'];
                                        $_SESSION['ContactFName']=$_POST['cfname'];
                                        $_SESSION['ContactLName']=$_POST['clname'];
                                        $_SESSION['ContactAddress']=$_POST['caddress'];
                                        $_SESSION['ContactCity']=$_POST['cCity'];
                                        $_SESSION['ContactState']=$_POST['cState'];
                                        $_SESSION['ContactCountry']=$_POST['cddlCountry'];
                                        $_SESSION['ContactZip']=$_POST['cZip'];
                                        $_SESSION['ContactPhone']=$_POST['cPhone'];
                                        $_SESSION['ContactFax']=$_POST['cFax'];
                                        $_SESSION['ContactEmail']=$_POST['cEmail'];
                                        if ($existing_customer==0){
                                            $price= 816;
                                            echo '<b style="font-size: 12pt; color: green; font-weight: bold;">$135</b>';
                                        }
                                        else
                                        {
                                            if ($rewrow['memrewarded']>0){
                                                $price= 817;
                                                echo '<b style="font-size: 12pt; color: green; font-weight: bold;">$114.75</b><br>';
                                            } else{
                                                $price= 818;
                                                echo '<b style="font-size: 12pt; color: green; font-weight: bold;">$135.00</b><br>';
                                            } }
                                    } ?>Copyright Application and <br>$45 for Single Application (single author, one work, not for hire) $65 for Standard Application (all other filings)</p>
                                    <p>Group of unpublished works $85.</p>
                            <h3>Additional Services(Optional):</h3>
                            <p><input id="ckPriority" class="ckPriority" name="ckPriority" type="checkbox" value="Yes" ><span class="price"> $25 Priority Rush Processing</span></p>
                            <ul>
                                <li>24 hour processing and filing of your copyright application.</li>
                            </ul>
                            <p><input id="ckReward" class="ckReward" name="ckReward" type="checkbox" value="Yes"><span class="price"> $30 Membership Reward <br>Program</span></p>
                            <ul>
                                <li>15% reduction on every further copyright submissions.</li>
                            </ul>
                            <h3>Have Promo Code? Redeem here</h3>
                            <p><input id="promocode" name="promocode" type="text"></p>
                            <p>
                                <?php if ($IsRedeemed==1){ echo "

            <p class='error_msg'--> You have already used the promo code</p>
<p>"; } ?></p>
                            <p><input id="Redeem" class="cancel btn btn-sm btn-danger" name="Redeem" type="submit" value="Redeem"></p>
                            <p><i> (First time user? <a href="/PromoCode" target="_blank" rel="noopener noreferrer">Get it here</a>)</i></p>
                        </form>
                    </div>
                </div>
                <div class="col-sm-12">
                    <!-- <h2>
                        Payment information
                        <i style="color: red;">
                            (All Prices Listed Are One-Time Payments in USD. )
                        </i>
                    </h2> -->
                    <form id="formid" class="form-horizontal" action="/thank-you" method="POST">
                        <input id="hdnUpload" name="hdnUpload" type="hidden" value="NO">
                        <input id="hdnPriority" name="hdnPriority" type="hidden" value="NO">
                        <input id="hdnRewards" name="hdnRewards" type="hidden" value="NO">
                        <br>
                        <?php
                        if ($PromoCodeRedeemed=='YES')
                            echo "<input type='hidden' value='YES' id='hdnPRD' name='hdnPRD' />";else
                            echo '<input id="hdnPRD" name="hdnPRD" type="hidden" value="NO">';?>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="cardTypeDD">Credit Card Type :*</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <select id="cardTypeDD" class="form-control" name="cardTypeDD">
                                            <option value="Master Card">Master Card</option>
                                            <option value="Visa">Visa</option>
                                            <option value="American Express">American Express</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="cCardNum">
                                            Credit card #:*
                                        </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input id="cCardNum" class="form-control" name="cCardNum" type="text" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="cCvv"> Cvv:*</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input id="cCvv" class="form-control" maxlength="5" name="cCvv" type="password" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="expiryMonthDD">Expiration Month:*</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <select id="expiryMonthDD" class="form-control" name="expiryMonthDD">
                                            <option value="1">JAN</option>
                                            <option value="2">FEB</option>
                                            <option value="3">MAR</option>
                                            <option value="4">APR</option>
                                            <option value="5">MAY</option>
                                            <option value="6">JUN</option>
                                            <option value="7">JUL</option>
                                            <option value="8">AUG</option>
                                            <option value="9">SEP</option>
                                            <option value="10">OCT</option>
                                            <option value="11">NOV</option>
                                            <option value="12">DEC</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="cCvv"> Expiration Year:*</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <select id="expiryYearDD" class="form-control" name="expiryYearDD">
                                                <option value="2023">2023</option>
                                                <option value="2024">2024</option>
                                                <option value="2025">2025</option>
                                                <option value="2026">2026</option>
                                                <option value="2027">2027</option>
                                                <option value="2028">2028</option>
                                                <option value="2022">2029</option>
                                            </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ofname"> First Name:*</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input id="ofname" class="form-control" name="ofname" type="text" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="olname">Last Name:*
                                        </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input id="olname" class="form-control" name="olname" type="text" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                                <div class="col-sm-12">
                                    <div class="col-sm-4"><label class="control-label" for="oCname"> Billing Name:*</label></div>
                                    <div class="col-sm-8"><input id="oCname" class="form-control" name="oCname" type="text" value=""></div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="col-sm-4"><label class="control-label" for="oaddress">Mailing Address:*</label></div>
                                    <div class="col-sm-8"><textarea id="oaddress" class="form-control" cols="20" name="oaddress" rows="4"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <div class="col-sm-4"><label class="control-label" for="oCity"> City:*</label></div>
                                    <div class="col-sm-8"><input id="oCity" class="form-control" name="oCity" type="text" value=""></div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="col-sm-4"><label class="control-label" for="oaddress">State/Province:*</label></div>
                                    <div class="col-sm-8"><input id="oState" class="form-control" name="oState" type="text" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <div class="col-sm-4"><label class="control-label" for="oddlCountry"> Country:*</label></div>
                                    <div class="col-sm-8"><select id="oddlCountry" class="form-control" name="oddlCountry">
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
                                            <option value="CI">CTE D'IVOIRE</option>
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
                                            <option value="MP">NORTHERN MARIANA ISLANDS</option>
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
                                        </select></div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="col-sm-4"><label class="control-label" for="oZip">Zip code:*</label></div>
                                    <div class="col-sm-8"><input id="oZip" class="form-control" name="oZip" type="text" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <div class="col-sm-4"><label class="control-label" for="oddlCountry"> Phone:*</label></div>
                                    <div class="col-sm-8">
                                        <p><input id="oPhone" class="form-control" name="oPhone" type="text" value=""></p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <p>
                                        <input id="ckagree1" class="ckagree" name="ckagree1" type="checkbox">
                                        I agree to submit my information to this website and agree that filling out these fields acts as a signature agreeing to the Terms and Conditions link on this page.Click here to see the 
                                        <a href="terms-conditions">Terms And Conditions</a>
                                    </p>
                                    <p class="help">
                                        <i>(If you do not send us your files via email we will send you a shipping slip. Please note that your work must be ready within 30 days of you receiving your shipping slip.)</i></p>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12"><a id="checkoutLink" href="/thank-you"><button id="checkoutBtn" disabled class="btn btn-primary" style="padding: 15px;">Proceed To CheckOut</button></a></div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php
get_footer();
?>