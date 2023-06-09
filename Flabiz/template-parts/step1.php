<?php 
// Template Name: Step1

get_header();

?>


<div class="container mt-5">
    <div class="row">
        <div class="col-sm-12 col-md-8 col-lg-8">
            <h2>Filing Information</h2>
            <p>Please enter the business name you wish to register. Make sure the business name you are filing is spelled correctly.</p>
            <form id="myForm" data-action="step-two">
                <!--Filing Information-->
                <div class="row">
                    <div class="col-md-9 col-lg-9 col-sm-12">
                        <label for="preferred_name" class="form-label">Preferred Name</label>
                        <input class="form-control" data-error="Preferred Name is required" id="preferred_name" name="preferred_name" type="text" data-required="true">
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <select data-required="true" data-error="Preferred Name type is required" class="form-select select-boxes-right" name="preferred_name_type" aria-label="Default select">
                            <!-- <option value="">Select</option> -->
                            <option value=",Inc.">,Inc.</option>
                            <option value="Co.">Co.</option>
                            <option value="Company">Company</option>
                            <option value="Corp.">Corp.</option>
                            <option value="Corporation">Corporation</option>
                            <option value="Incorporated">Incorporated</option>
                            <option value=",P.A.">,P.A.</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-9 col-lg-9 col-sm-12">
                        <label for="alternate_name" class="form-label">Alternate Name</label>
                        <input data-required="true" data-error="Alternate Name is required" class="form-control" id="alternate_name" name="alternate_name" type="text">
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <select class="form-select select-boxes-right" data-error="Alternate Name type is required" data-required="true" name="alternate_name_type" aria-label="Default select">
                            <!-- <option value="">Select</option> -->
                            <option value=",Inc.">,Inc.</option>
                            <option value="Co.">Co.</option>
                            <option value="Company">Company</option>
                            <option value="Corp.">Corp.</option>
                            <option value="Corporation">Corporation</option>
                            <option value="Incorporated">Incorporated</option>
                            <option value=",P.A.">,P.A.</option>
                        </select>
                    </div>
                </div>

                <!--Business Activity-->
                <!--Heading-->
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-md-12">
                        <h2>Business Activity</h2>
                        <p>You must select one box that describes the principal activity of your business. For example, if you will operate kiosks selling keychains in a number of locations, select "retail."</p>
                    </div>
                </div>
                <!--Fields-->

                <!--Principal Activity-->
                <div class="row">
                    <div class="col-md-3 col-sm-12 col-lg-3">
                        <label for="principal_activity" class="form-label">Principal Activity</label>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-12">
                        <select data-required="true" class="form-select" data-error="Principal Activity type is required" id="principal_activity" name="principal_activity" aria-label="Default select">
                            <option value="">Select One</option>
                            <option value="Accommodation & Food Services">Accommodation & Food Services</option>
                            <option value="Construction">Construction</option>
                            <option value="Finance&Insurance">Finance & Insurance</option>
                            <option value="HealthCare & SocialAssistance">Health Care & Social Assistance</option>
                            <option value="Manufacturing">Manufacturing</option>
                            <option value="NonProfit">Non Profit</option>
                            <option value="Other">Other</option>
                            <option value="ProfessionalAssociation">Professional Association</option>
                            <option value="RealEstate">Real Estate</option>
                            <option value="Rental&Leasing">Rental & Leasing</option>
                            <option value="Retail">Retail</option>
                            <option value="Transportation & Warehousing">Transportation & Warehousing</option>
                            <option value="Wholesale Agent/Broker">Wholesale Agent/Broker</option>
                            <option value="Wholesale Other">Wholesale Other</option>
                            <option value="AnyAndLawfulBusiness">Any And Lawful Business</option>
                        </select>
                    </div>
                </div>
                <!--Company's purpose-->
                <div class="row mt-4">
                    <div class="col-md-3 col-sm-12 col-lg-3">
                        <label for="company_purpose" class="form-label">Briefly summarize the company's purpose</label>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-12">
                        <textarea data-required="true" data-error="Company Purpose is required" id="company_purpose" name="company_purpose" class="form-control"></textarea>
                        <small class="text">50 characters or less</small>
                    </div>
                </div>

                <!--Principal Place of Business-->
                <!--Heading-->
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-md-12">
                        <h2>Principal Place of Business</h2>
                        <p>The Division of Corporations requires that this be an occupied physical flabiz address. If you have not decided yet where the principal office will be, you may specify another flabiz address, such as a home address. This information can easily be changed later.</p>
                    </div>
                </div>
                <!--Fields-->
                <!--Address-->
                <div class="row">
                    <div class="col-md-3 col-sm-12 col-lg-3">
                        <label for="address" class="form-label">Address</label>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-12">
                        <input data-required="true" type="text" data-error="Address is required" class="form-control address_fields" id="address" name="address">
                    </div>
                </div>
                <!--Apartment-->
                <div class="row">
                    <div class="col-md-3 col-sm-12 col-lg-3">
                        <label for="suit_apt" class="form-label">Suite. Apt. #, etc.</label>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-12">
                        <input type="text" class="form-control" id="suit_apt" name="suit_apt">
                    </div>
                </div>
                <!--City-->
                <div class="row">
                    <div class="col-md-3 col-sm-12 col-lg-3">
                        <label for="city" class="form-label">City</label>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-12">
                        <input data-required="true" data-error="City is required" type="text" class="form-control address_fields" id="city" name="city">
                    </div>
                </div>
                <!--Country-->
                <div class="row">
                    <div class="col-md-3 col-sm-12 col-lg-3">
                        <label for="country" class="form-label">Country</label>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-12 mb-3">
                        <select data-required="true" data-error="Country is required" name="country" id="country" class="form-select" type="number">
                            <option value="">Select County</option>
                            <option value="Alachua">Alachua</option>
                            <option value="Baker">Baker</option>
                            <option value="Bay">Bay</option>
                            <option value="Bradford">Bradford</option>
                            <option value="Brevard">Brevard</option>
                            <option value="Broward">Broward</option>
                            <option value="Calhoun">Calhoun</option>
                            <option value="Charlotte">Charlotte</option>
                            <option value="Citrus">Citrus</option>
                            <option value="Clay">Clay</option>
                            <option value="Collier">Collier</option>
                            <option value="Columbia">Columbia</option>
                            <option value="Dade">Dade</option>
                            <option value="De Soto">De Soto</option>
                            <option value="Dixie">Dixie</option>
                            <option value="Duval">Duval</option>
                            <option value="Escambia">Escambia</option>
                            <option value="Flagler">Flagler</option>
                            <option value="Franklin">Franklin</option>
                            <option value="florida" selected>Florida</option>
                            <option value="Gadsden">Gadsden</option>
                            <option value="Gilchrist">Gilchrist</option>
                            <option value="Glades">Glades</option>
                            <option value="Gulf">Gulf</option>
                            <option value="Hamilton">Hamilton</option>
                            <option value="Hardee">Hardee</option>
                            <option value="Hendry">Hendry</option>
                            <option value="Hernando">Hernando</option>
                            <option value="Highlands">Highlands</option>
                            <option value="Hillsborough">Hillsborough</option>
                            <option value="Holmes">Holmes</option>
                            <option value="Indian River">Indian River</option>
                            <option value="Jackson">Jackson</option>
                            <option value="Jefferson">Jefferson</option>
                            <option value="Lafayette">Lafayette</option>
                            <option value="Lake">Lake</option><option value="Lee">Lee</option>
                            <option value="Leon">Leon</option>
                            <option value="Levy">Levy</option>
                            <option value="Liberty">Liberty</option>
                            <option value="Madison">Madison</option>
                            <option value="Manatee">Manatee</option>
                            <option value="Marion">Marion</option>
                            <option value="Martin">Martin</option>
                            <option value="Miami-Dade">Miami-Dade</option>
                            <option value="Monroe">Monroe</option>
                            <option value="Nassau">Nassau</option>
                            <option value="Okaloosa">Okaloosa</option>
                            <option value="Okeechobee">Okeechobee</option>
                            <option value="Orange">Orange</option>
                            <option value="Osceola">Osceola</option>
                            <option value="Palm Beach">Palm Beach</option>
                            <option value="Pasco">Pasco</option>
                            <option value="Pinellas">Pinellas</option>
                            <option value="Polk">Polk</option>
                            <option value="Putnam">Putnam</option>
                            <option value="St. Johns">St. Johns</option>
                            <option value="St. Lucie">St. Lucie</option>
                            <option value="Santa Rosa">Santa Rosa</option>
                            <option value="Sarasota">Sarasota</option>
                            <option value="Seminole">Seminole</option>
                            <option value="Sumter">Sumter</option>
                            <option value="Suwannee">Suwannee</option>
                            <option value="Taylor">Taylor</option>
                            <option value="Union">Union</option>
                            <option value="Volusia">Volusia</option>
                            <option value="Wakulla">Wakulla</option>
                            <option value="Walton">Walton</option>
                            <option value="Washington">Washington</option>
                        </select>
                    </div>
                    <div class="col-lg-2 col-sm-2 col-md-12">
                        <h5 class="text-center country-paragraph">,FL</h5>
                    </div>
                </div>
                <!--Zip code-->
                <div class="row">
                    <div class="col-md-3 col-sm-12 col-lg-3">
                        <label for="zip_code" class="form-label">Zip Code</label>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-12">
                        <input data-required="true" type="number" data-error="Zip code is required" class="form-control address_fields zip_code" id="zip_code" name="zip_code">
                    </div>
                </div>
                <!--Phone-->
                <div class="row">
                    <div class="col-md-3 col-sm-12 col-lg-3">
                        <label for="phone" class="form-label">Phone</label>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-12">
                        <input data-required="true" data-error="Phone is required" placeholder="111-111-1111" type="text" class="form-control phone" id="phone" name="phone">
                    </div>
                </div>

                <!--Business Mailing Address-->
                <!--Heading-->
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-md-12">
                        <h2>Business Mailing Address</h2>
                        <p>This is the address the Division of Corporations will use for correspondence with you. You may use a PO Box for this address,
                            and it does not have to be a flabiz address.</p>
                    </div>
                </div>
                <!--Fields-->
                <!--Same as above principal address-->
                <div class="row">
                    <div class="offset-md-3 offset-lg-3 col-sm-12 col-lg-9 col-md-9">
                        <input checked class="form-check-input business_mailing_address_check" type="radio" name="business_mailing_address_check" id="business_mailing_address_check">
                        <label class="form-check-label" for="business_mailing_address_check">
                            Same as Principal Place of Business Address (specified above)
                        </label>
                    </div>
                </div>
                <!--Different Mailing Address-->
                <div class="row">
                    <div class="offset-md-3 offset-lg-3 col-sm-12 col-lg-9 col-md-9">
                        <input value="different" class="form-check-input business_mailing_address_check" type="radio" name="business_mailing_address_check" id="business_mailing_address_check_other">
                        <label class="form-check-label" for="business_mailing_address_check_other">
                            Other (please specify below)
                        </label>
                    </div>
                </div>
                <!--Show Same Mailing Address-->
                <div class="row">
                    <div id="business_mailing_address_if_same" class="offset-md-3 offset-lg-3 col-sm-12 col-lg-9 col-md-9">
                    </div>
                </div>
                <!--Different Mailing Address Fields Div -->
                <div class="row" id="business_mailing_address" style="display: none">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <!--Fields-->
                        <!--Address-->
                        <div class="row">
                            <div class="col-md-3 col-sm-12 col-lg-3">
                                <label for="mailing_address" class="form-label">Address</label>
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-12">
                                <input type="text" class="form-control" id="mailing_address" name="mailing_address">
                            </div>
                        </div>
                        <!--Apartment-->
                        <div class="row">
                            <div class="col-md-3 col-sm-12 col-lg-3">
                                <label for="mailing_suit_apt" class="form-label">Suite. Apt. #, etc.</label>
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-12">
                                <input type="text" class="form-control" id="mailing_suit_apt" name="mailing_suit_apt">
                            </div>
                        </div>
                        <!--City-->
                        <div class="row">
                            <div class="col-md-3 col-sm-12 col-lg-3">
                                <label for="mailing_city" class="form-label">City</label>
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-12">
                                <input type="text" class="form-control" id="mailing_city" name="mailing_city">
                            </div>
                        </div>
                        <!--Country-->
                        <div class="row">
                            <div class="col-md-3 col-sm-12 col-lg-3">
                                <label for="mailing_country" class="form-label">state</label>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-12">
                                <select name="mailing_county" id="mailing_county" class="form-control">
                                    <option value="">Select County</option>
                                    <option value="Alachua">Alachua</option>
                                    <option value="Baker">Baker</option>
                                    <option value="Bay">Bay</option>
                                    <option value="Bradford">Bradford</option>
                                    <option value="Brevard">Brevard</option>
                                    <option value="Broward">Broward</option>
                                    <option value="Calhoun">Calhoun</option>
                                    <option value="Charlotte">Charlotte</option>
                                    <option value="Citrus">Citrus</option>
                                    <option value="Clay">Clay</option>
                                    <option value="Collier">Collier</option>
                                    <option value="Columbia">Columbia</option>
                                    <option value="Dade">Dade</option>
                                    <option value="De Soto">De Soto</option>
                                    <option value="Dixie">Dixie</option>
                                    <option value="Duval">Duval</option>
                                    <option value="Escambia">Escambia</option>
                                    <option value="Flagler">Flagler</option>
                                    <option value="Franklin">Franklin</option>
                                    <option value="Gadsden">Gadsden</option>
                                    <option value="Gilchrist">Gilchrist</option>
                                    <option value="Glades">Glades</option>
                                    <option value="Gulf">Gulf</option>
                                    <option value="Hamilton">Hamilton</option>
                                    <option value="Hardee">Hardee</option>
                                    <option value="Hendry">Hendry</option>
                                    <option value="Hernando">Hernando</option>
                                    <option value="Highlands">Highlands</option>
                                    <option value="Hillsborough">Hillsborough</option>
                                    <option value="Holmes">Holmes</option>
                                    <option value="Indian River">Indian River</option>
                                    <option value="Jackson">Jackson</option>
                                    <option value="Jefferson">Jefferson</option>
                                    <option value="Lafayette">Lafayette</option>
                                    <option value="Lake">Lake</option><option value="Lee">Lee</option>
                                    <option value="Leon">Leon</option>
                                    <option value="Levy">Levy</option>
                                    <option value="Liberty">Liberty</option>
                                    <option value="Madison">Madison</option>
                                    <option value="Manatee">Manatee</option>
                                    <option value="Marion">Marion</option>
                                    <option value="Martin">Martin</option>
                                    <option value="Miami-Dade">Miami-Dade</option>
                                    <option value="Monroe">Monroe</option>
                                    <option value="Nassau">Nassau</option>
                                    <option value="Okaloosa">Okaloosa</option>
                                    <option value="Okeechobee">Okeechobee</option>
                                    <option value="Orange">Orange</option>
                                    <option value="Osceola">Osceola</option>
                                    <option value="Palm Beach">Palm Beach</option>
                                    <option value="Pasco">Pasco</option>
                                    <option value="Pinellas">Pinellas</option>
                                    <option value="Polk">Polk</option>
                                    <option value="Putnam">Putnam</option>
                                    <option value="St. Johns">St. Johns</option>
                                    <option value="St. Lucie">St. Lucie</option>
                                    <option value="Santa Rosa">Santa Rosa</option>
                                    <option value="Sarasota">Sarasota</option>
                                    <option value="Seminole">Seminole</option>
                                    <option value="Sumter">Sumter</option>
                                    <option value="Suwannee">Suwannee</option>
                                    <option value="Taylor">Taylor</option>
                                    <option value="Union">Union</option>
                                    <option value="Volusia">Volusia</option>
                                    <option value="Wakulla">Wakulla</option>
                                    <option value="Walton">Walton</option>
                                    <option value="Washington">Washington</option>
                                </select>
                            </div>
                            <div class="col-lg-2 col-sm-2 col-md-12">
                                <p>,FL</p>
                            </div>
                        </div>
                        <!--Zip code-->
                        <div class="row">
                            <div class="col-md-3 col-sm-12 col-lg-3">
                                <label for="mailing_zip_code" class="form-label">Zip Code</label>
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-12">
                                <input type="number" class="form-control" id="mailing_zip_code" name="mailing_zip_code">
                            </div>
                        </div>
                    
                    </div>
                </div>

                <!-- Error Modal -->
                    <div class="modal fade" id="errorModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-black fw-bold" id="exampleModalLabel">Oops, please fix the following issues:</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body" id="modal-error">

                                </div>
                                <div class="modal-footer">
                                <button type="button" data-bs-dismiss="modal" class="btn btn-primary">OK</button>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 mt-3 text-center">
                        <input type="submit" value="Next" class="btn border-success text-success shadow ">
                    </div>
                </div>
            </form>
        </div>
        <div class="col">
            <?php get_sidebar(); ?>
        </div>
    </div>
  </div>
<?php 
    get_footer()
 ?>