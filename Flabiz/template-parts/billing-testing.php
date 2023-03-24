<script>
</script>
<style type="text/css">
.left-col,
.right-form {
  min-height: 1257px !important;
}
#message{
    color:green;
    font-weight:bold;
}
.pr-0 {
  padding-right: 0px !important;
}

.entry-content {
  margin-bottom: 50px !important;

}

.form-heading {
  font-weight: bold;
}

.ml-0 {
  margin-left: 0px !important;
}

.billing-container {
  background-color: white !important;
  padding: 50px 0px !important;
}

.right-form .form-group,
.right-form .form-control {
  margin-bottom: 0px !important;
}

.left-col {
  box-shadow: 0px 10px 12px #c5c1c1;
  padding: 20px 0px;

}

.well {
  background-color: transparent !important;
  border: 0px !important;
}

#promocode {
  width: 89%;
  padding: 8px;
}

.right-form label {
  margin-top: .5rem;
  font-weight: bold;
  margin-bottom: 1rem;
}

/*.right-form label::after{
   position: absolute;
    height: 2px;
    width: 50px;
    background-color: green;
    content: "";
    margin-top: 24px;
    left: 16px !important;
}*/
.expiry-label::after,
.card-type-label::after {
  left: 8px !important;
}

.well h3 {
  color: green;
}

.form-heading {
  color: green;
}

.well-red-code {
  color: red !important;
}

.cvv-label::after,
.expiry-label::after {
  left: 4px !important;
}

.form-horizontal .control-label {
  margin-bottom: 18px !important;
}

@media only screen and (max-width: 1200px) {
  .billing-container .container {
    width: 95% !important;
    max-width: 95% !important;
  }
}

@media only screen and (max-width: 1100px) {

  .left-col,
  .right-form {
    min-height: 1440px !important;
  }
}

@media only screen and (max-width: 992px) {
  .left-col {
    min-height: auto !important;
  }
}

#fedralState {
  position: absolute;
  top: 236px
}

.pt-5 {
  padding-top: 110px;
}
#myCheckBox{
    margin-top:10.6rem;
}
</style>


<?php
// Template Name: Billing testing
get_header();
session_start();
if (!isset($_SESSION['ValidStep'])) {

  ob_start();
  header("Location: /apply");
  exit;
}

?>
<?php

function wpse27856_set_content_type()
{
  return "text/html";
}

// prepare the SQL query
$existing_customer = 0;
$IsRedeemed = 0;
$PromoCodeRedeemed = 'NO';
$price = 0;

?>
<div id="tf-works" class="billing-container">
  <div class="container">
    <div class="entry-content">
      <div class="row">
        <div class="col-md-4 col-sm-12 col-12 left-col">
          <div class="well">
            <form id="formidbilling" onsubmit="mySubmitFunction(event)" data-href="/captcha" class="form-horizontal" action="/thank-you" method="POST">
              <h3>Copyright Order Form</h3>
              <p><b>Please select a service</b></p>
              <p>
                  <input id="ckagree" class="ckagree" name="ckagree" type="checkbox" checked="checked">
                  <span class="price">
                    <span id="message">$149.95 </span> Copyright Application, and <br>
                  <?php 
                    if(isset($_POST['test_price'])){
                  ?>
                  <?php
                    if($_POST['test_price'] == "$45"){
                  ?>
                    <input type="hidden" name="charges" value="$45 for Single Application (single author, one work, not for hire)">
                  $45 for Single Application (single author, one work, not for hire) 
                  <?php }else if($_POST['test_price'] == "$65"){ ?>
                  <input type="hidden" name="charges" value="$65 for Standard Application (all other filings)">
                  $65 for Standard Application (all other filings)<br>
                  <?php }else if($_POST['test_price'] == "$85"){ ?>
                    <input type="hidden" name="charges" value="Group of unpublished works $85.">
                
                  Group of unpublished works $85.
                  <?php
                  }
                    }
                  ?>
                  </span>
                  </p>

              <h3>Additional Services:</h3>
              <p class="pt-5 mt-5" id="myCheckBox">
                <input id="ckPriority" class="ckPriority" name="ckPriority" type="checkbox" value="Yes"><span class="price"> $25 Priority Rush Processing</span></p>
              <ul>
                <li>24 hour processing and filing of your copyright application.</li>
              </ul>
              <p class="">
                  <input id="ckReward" class="ckReward" name="ckReward" type="checkbox" value="Yes">
                  <span class="price"> $30 Membership Reward <br>Program</span>
              </p>
              <ul>
                <li>15% reduction on all future copyright submissions.</li>
              </ul>
              
              
              <!-- New Addition -->
              <!-- New Addition -->
              <!-- New Addition -->
              <h3>Trademark Order</h3>
              
             <input type="hidden" name="claiment_name" value="<?= $_POST['claiment_name'] ?>">
             <input type="hidden" name="hired_authors" value="<?= $_POST['hired_authors'] ?>">
              <input type="hidden" name="category" value="<?= $_POST['hdnCategory'] ?>">
              <input type="hidden" name="Nature" value="<?= $_POST['hdnNature'] ?>">
              <input type="hidden" name="Title" value="<?= htmlspecialchars($_POST['hdnTitle']) ?>">
              <input type="hidden" name="AnotherTitle" value="<?= htmlspecialchars($_POST['hdnAnotherTitle']) ?>">
              <input type="hidden" name="CreateYear" value="<?= $_POST['hdnCreateYear'] ?>">
              <input type="hidden" name="Published" value="<?= $_POST['hdnPublished'] ?>">
              <input type="hidden" name="Published" value="<?= $_POST['hdnPublished'] ?>">
              <input type="hidden" name="PrevPublishDate" value="<?= $_POST['hdnPrevPublishDate'] ?>">
              <input type="hidden" name="PrevRegPublished" value="<?= $_POST['hdnPrevPublished'] ?>">
              <input type="hidden" name="DerPublished" value="<?= $_POST['hdnDerPublished'] ?>">
              <input type="hidden" name="Hire" value="<?= $_POST['hdnHire'] ?>">
              <input type="hidden" name="MoreAuthor" value="<?= $_POST['hdnAuthor'] ?>">
              <input type="hidden" name="MoreAuthor" value="<?= $_POST['hdnAuthor'] ?>">
              <input type="hidden" name="hdnCoAuthors" value="<?= $_POST['hdnCoAuthors'] ?>">
              <input type="hidden" name="Pseudonym" value="<?= $_POST['hdnPsedonym'] ?>">
              <input type="hidden" name="PsedonymText" value="<?= $_POST['hdnPsedonymText'] ?>">
              <input type="hidden" name="PsedonymText" value="<?= $_POST['hdnPsedonymText'] ?>">
              <input type="hidden" name="AuthorFName" value="<?= $_POST['hdnFname'] ?>">
              <input type="hidden" name="AuthorMName" value="<?= $_POST['hdnMname'] ?>">
              <input type="hidden" name="AuthorLName" value="<?= $_POST['hdnLname'] ?>">
              <input type="hidden" name="AuthorAddress" value="<?= $_POST['hdnAddress'] ?>">
              <input type="hidden" name="AuthorCity" value="<?= $_POST['hdnCity'] ?>">
              <input type="hidden" name="AuthorState" value="<?= $_POST['hdnState'] ?>">
              <input type="hidden" name="AuthorCitizen" value="<?= $_POST['hdnCitizen'] ?>">
              <input type="hidden" name="AuthorZip" value="<?= $_POST['hdnZip'] ?>">
              <input type="hidden" name="AuthorBirthYear" value="<?= $_POST['hdnBirthYear'] ?>">
              <input type="hidden" name="AuthorAlive" value="<?= $_POST['hdnAlive'] ?>">
              <input type="hidden" name="AuthorDominc" value="<?= $_POST['hdnDomicile'] ?>">
              <input type="hidden" name="AuthorDescription" value="<?= $_POST['hdnDescription'] ?>">
              <input type="hidden" name="AuthorClaimant" value="<?= $_POST['hdnClaimant'] ?>">
              <input type="hidden" id="cfname" name="ContactFName" value="<?= $_POST['cfname'] ?>">
              <input type="hidden" id="clname" name="ContactLName" value="<?= $_POST['clname'] ?>">
              <input type="hidden" id="caddress" name="ContactAddress" value="<?= $_POST['caddress'] ?>">
              <input type="hidden" id="cCity" name="ContactCity" value="<?= $_POST['cCity'] ?>">
              <input type="hidden" id="cState" name="ContactState" value="<?= $_POST['cState'] ?>">
              <input type="hidden" id="cddlCountry" name="ContactCountry" value="<?= $_POST['cddlCountry'] ?>">
              <input type="hidden" id="cZip" name="ContactZip" value="<?= $_POST['cZip'] ?>">
              <input type="hidden" name="ContactPhone" value="<?= $_POST['cPhone'] ?>">
              <input type="hidden" name="ContactFax" value="<?= $_POST['cFax'] ?>">
              <input type="hidden" id="cEmail" name="ContactEmail" value="<?= $_POST['cEmail'] ?>">
              <input type="hidden" name="ssn" value="<?= $_POST['ssn'] ?>">
              <p>
                <input class="ckPriority" name="trademarkregistration" type="checkbox" value="24 Hour Rush Processing - $500"><span class="price"> Trademark Registration</span></p>
              <ul>
                <li>United State patent and trademark application registration $500</li>
              </ul>

              <h3>Copyright and Trademark Search Report Services:</h3>
              <div id="fedralState">
                <p>
                  <input checked="cheked" class="ckReward" name="fedralStatesSearch" type="checkbox" value="Federal & 50-States Search -  $49.95"><span class="price"> Federal & 50-States Search - $49.95</span></p>
                <ul>
                  <li> Search active copyrights and trademarks
                    <br>in all 50 states.

                  </li>
                  <li> Search active copyrights and trademarks
                    <br>Recommended to ensure successful registration
                  </li>
                  <li>
                  <p class="">
                  Copyright Infringement Protection
              </p>
              <ul>
                <li>
                    <input checked id="yearly" type="checkbox" name="infringement_protection" value="$99/year">
                    <label for="yearly">
                        $99/year
                    </label>
                </li>
                <li>
                    <input id="monthly" type="checkbox" name="infringement_protection" value="$24/month">
                    <label for="monthly">
                        $24/month (billed annually)
                    </label>
                </li>
              </ul>
                  </li>
                </ul>
              </div>
              <p><input class="ckReward" name="trademarkSearch" type="radio" value="Comprehensive U.S. Search -  $149.95"><span class="price"> Comprehensive U.S. Search - $149.95</span></p>
              <ul>
                <li>Complete search of active trademarks from federal, 50 states and common-law databases. Includes searching corporate names from all Secretary of States in the U.S.</li>
              </ul>
              <p><input class="ckReward" name="trademarkSearch" type="radio" value="Worldwide and U.S. Comprehensive Search - $229.95"><span class="price"> Worldwide and U.S. Comprehensive Search - $229.95</span></p>
              <ul>
                <li>Complete search report of trademarks from United States, World Intellectual Property Organization (WIPO), Canada, European Community, United Kingdom, and others.</li>
              </ul>

              <div class="promocode-div">
                <h3 class="well-red-code">Have Promo Code? Redeem here</h3>
                <p>
                  <input id="promocode" name="promocode" type="text"></p>
                <p id="error"></p>
                <p>
                  <input id="redeem" class="cancel btn btn-sm btn-danger" name="Redeem" type="button" value="Redeem">
                </p>
                <p>
                  <i> (First time user? <a href="/PromoCode" target="_blank" rel="noopener noreferrer">Get it here</a>)
                  </i>
                </p>
              </div>




              <!-- new addition end -->
              <!-- new addition end -->
              <!-- new addition end -->

              <!-- <h3>Processing Time:</h3>
                            <p><input class="ckPriority" name="processingtime" type="radio" value="Regular 2-3 Working Days - $0 (included)" ><span class="price"> Regular 2-3 Working Days - $0 (included)</span></p>
                           
                            <p><input class="ckPriority" name="processingtime" type="radio" value="24 Hour Rush Processing -   $49.95" ><span class="price"> 24 Hour Rush Processing -  $49.95</span></p>
                                <ul>
                                    <li>We'll process your order within 24 hours after receiving your information.</li>
                                </ul> -->


          </div>
        </div>
        <div class="col-md-8 col-sm-12 col-12 right-form">
          <h2 class="form-heading">
            Payment information

          </h2>

          <input id="hdnUpload" name="hdnUpload" type="hidden" value="NO">
          <input id="hdnPriority" name="hdnPriority" type="hidden" value="NO">
          <input id="hdnRewards" name="hdnRewards" type="hidden" value="NO">
          <input id="hdnPRD" name="hdnPRD" type="hidden" value="NO">'
          <div class="form-group">
            <div class="col-sm-12 pr-0">
              <div class="row">
                <div class="col-sm-6 pl-0">
                  <label class="control-label card-type-label" for="cardTypeDD">Credit Card Type :*</label><br>

                  <select id="cardTypeDD" class="form-control" name="cardTypeDD">
                    <option value="Master Card">Master Card</option>
                    <option value="Visa">Visa</option>
                    <option value="American Express">American Express</option>
                    <option value="Discover">Discover</option>
                  </select>
                </div>

                <div class="col-sm-6">
                  <label class="control-label" for="cCardNum">
                    Credit card #:*
                  </label><br>
                  <input id="cCardNum" class="form-control" name="cCardNum" type="text" value="" required="required">
                </div>


              </div>
            </div>

          </div>
          <div class="form-group">
            <!-- <div class="col-sm-12 pl-0">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label class="control-label" for="cCvv"> Cvv:*</label>
                                    </div>
                                    <div class="col-sm-12">
                                        <input id="cCvv" class="form-control" maxlength="5" name="cCvv" type="password" value="">
                                    </div>
                                </div>
                            </div> -->
            <div class="col-sm-12 pr-0">
              <div class="row">
                <div class="col-sm-4 pl-1">
                  <label class="control-label cvv-label" for="cCvv"> Cvv:*</label><br>
                  <input id="cCvv" class="form-control" required="required" minlength="3" maxlength="5" name="cCvv" type="password" value="" />
                  <div id="error"></div>
                </div>
                <div class="col-sm-4 pl-0">
                  <label class="control-label expiry-label" for="expiryMonthDD">Expiration Month:*</label><br>

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
                  <div id="montherror"></div>
                </div>
                <div class="col-sm-4 pl-0">
                  <label class="control-label expiry-label" for="cCvv"> Expiration Year:*</label><br>
                  <select id="expiryYearDD" class="form-control" name="expiryYearDD">

                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-12 pl-0 pr-0">
              <div class="row">
                <div class="col-sm-12">
                  <label class="control-label" for="ofname"> First Name:*</label>
                </div>
                <div class="col-sm-12">
                  <input required="required" id="ofname" class="form-control" name="ofname" type="text" value="">
                </div>
              </div>
            </div>
            <div class="col-sm-12 pl-0 pr-0">
              <div class="row pl-0">
                <div class="col-sm-12">
                  <label class="control-label" for="olname">Last Name:*
                  </label>
                </div>
                <div class="col-sm-12">
                  <input required="required" id="olname" class="form-control" name="olname" type="text" value="">
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row ml-0">
              <div class="col-sm-12"><label class="control-label" for="oCname"> Billing Name:*</label></div>
              <div class="col-sm-12">
                <input id="oCname" required="required" class="form-control" name="oCname" type="text" value=""></div>
            </div>
            <div class="row ml-0">
              <div class="col-sm-12"><label class="control-label" for="oaddress">Mailing Address:*</label></div>
              <div class="col-sm-12">
                <textarea id="oaddress" class="form-control" cols="20" name="oaddress" rows="4"></textarea>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row ml-0">
              <div class="col-sm-12"><label class="control-label" for="oCity"> City:*</label></div>
              <div class="col-sm-12"><input required="required" id="oCity" class="form-control" name="oCity" type="text" value=""></div>
            </div>
            <div class="row ml-0">
              <div class="col-sm-12"><label class="control-label" for="oaddress">State/Province:*</label></div>
              <div class="col-sm-12">
                <input required="required" id="oState" class="form-control" name="oState" type="text" value="">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row ml-0">
              <div class="col-sm-6"><label class="control-label" for="oZip">Zip code:*</label><br>
                <input id="oZip" class="form-control" name="oZip" type="text" value="" required="required">
              </div>

            </div>

          </div>
          <div class="form-group">
            <div class="row ml-0">
              <div class="col-sm-12"><label class="control-label" for="oddlCountry"> Phone:*</label></div>
              <div class="col-sm-12">
                <p><input required="required" id="oPhone" class="form-control" name="oPhone" type="text" value=""></p>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-12">
              <p>
                <input id="ckagree1" class="ckagree" name="ckagree1" type="checkbox" required="required">
                I agree to submit my information to this website and agree that filling out these fields acts as a signature agreeing to the Terms and Conditions link on this page.<br>Click here to see the
                <a href="terms-conditions">Terms And Conditions</a>
              </p>
              <p class="help">
                <i>(If you do not send us your files via email we will send you a shipping slip. Please note that your work must be ready within 30 days of you receiving your shipping slip.)</i></p>
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-sm-12 col-md-12">
                
                <input type="submit" id="checkoutBtn" disabled class="btn btn-primary" style="padding: 15px;" value="Proceed To Checkout"></div>
          </div>

          <div class="form-group">
            <div class="col-md-4 text-center" style="margin-top:15px">
              <img src="http://copyright-application-online.com/wp-content/uploads/2020/01/SSLbadge.png" width="70px" height="70px" class="img img-fluid" />
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-4">
              <img src="http://copyright-application-online.com/wp-content/uploads/2020/01/ssl-secure.png" width="200px" class="img img-fluid" />
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-4 text-center" style="margin-top:15px">
              <img src="http://copyright-application-online.com/wp-content/uploads/2020/01/ssl-encryption-icon-png-2.png" width="70px" height="70px" class="img img-fluid" />
            </div>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
  <script src='https://www.google.com/recaptcha/api.js'></script>

<script>
  var select = document.getElementById("expiryYearDD");
  var currentYear = new Date().getFullYear();

  for (var i = currentYear; i <= currentYear + 7; i++) {
    var option = document.createElement("option");
    option.value = i;
    option.text = i;
    select.appendChild(option);
  }
</script>
  <?php
  get_footer();
  ?>