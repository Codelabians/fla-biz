<?php
// Template Name: Step2

get_header();

?>

    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-sm-12 col-md-8 col-lg-8">
                <!--Primary Contact Information-->
                <!--Heading-->
                <h2>Primary Contact Information</h2>
                <p>Please provide the following information for the designated Point of Contact for this registration. This will be our primary way of contacting you.</p>
                <form id="myForm" data-action="/step-three">
                    <!--Fields-->
                    <!--First Name-->
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <label for="first_name" class="form-label">First Name</label>
                        </div>
                        <div class="col-md-9 col-lg-9 col-sm-12">
                            <input class="form-control" id="first_name" name="first_name" type="text">
                        </div>
                    </div>
                    <!--Last Name-->
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <label for="last_name" class="form-label">Last Name</label>
                        </div>
                        <div class="col-md-9 col-lg-9 col-sm-12">
                            <input class="form-control" id="last_name" name="last_name" type="text">
                        </div>
                    </div>

                    <!--Phone Number-->
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <label for="primary_phone" class="form-label">Phone</label>
                        </div>
                        <div class="col-md-9 col-lg-9 col-sm-12">
                            <input class="form-control" id="primary_phone" name="primary_phone" type="text">
                        </div>
                    </div>

                    <!--Email-->
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <label for="primary_email" class="form-label">Email</label>
                        </div>
                        <div class="col-md-9 col-lg-9 col-sm-12">
                            <input class="form-control" id="primary_email" name="primary_email" type="text">
                        </div>
                    </div>
                    <!--Validate Email-->
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <label for="primary_validate_email" class="form-label">Validate Email</label>
                        </div>
                        <div class="col-md-9 col-lg-9 col-sm-12">
                            <input class="form-control" id="primary_validate_email" name="primary_validate_email" type="text">
                        </div>
                    </div>

                    <!--Contact Person Mailing Address-->
                    <!--Heading-->
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-md-12">
                            <h2>Contact Person Mailing Address</h2>
                            <small class="text-danger">All packages and other correspondence from our office will be sent to the address below.</small>
                            <p>Please be sure to give us a complete and occupied address, including suite or apartment numbers. If your order is returned because of a bad address, we will have to charge you for redelivery of your items.</p>
                        </div>
                    </div>
                    <!--Fields-->
                    <!--Address-->
                    <div class="row">
                        <div class="col-md-3 col-sm-12 col-lg-3">
                            <label for="personal_address" class="form-label">Address</label>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <input type="text" class="form-control address_fields" id="personal_address" name="personal_address">
                        </div>
                    </div>
                    <!--Apartment-->
                    <div class="row">
                        <div class="col-md-3 col-sm-12 col-lg-3">
                            <label for="personal_suit_apt" class="form-label">Suite. Apt. #, etc.</label>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <input type="text" class="form-control" id="personal_suit_apt" name="personal_suit_apt">
                        </div>
                    </div>
                    <!--City-->
                    <div class="row">
                        <div class="col-md-3 col-sm-12 col-lg-3">
                            <label for="personal_city" class="form-label">City</label>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <input type="text" class="form-control address_fields" id="personal_city" name="personal_city">
                        </div>
                    </div>
                    <!--Country-->
                    <div class="row">
                        <div class="col-md-3 col-sm-12 col-lg-3">
                            <label for="personal_country" class="form-label">Country</label>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <select name="personal_country" id="personal_country" class="form-control">
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
                    </div>
                    <!--Zip code-->
                    <div class="row">
                        <div class="col-md-3 col-sm-12 col-lg-3">
                            <label for="personal_zip_code" class="form-label">Zip Code</label>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <input type="text" class="form-control address_fields" id="personal_zip_code" name="personal_zip_code">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <a href="/stepone" class="btn btn-success text-white">Previous</a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <input type="submit" value="Next" class="btn border-success text-success float-end">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php
get_footer()
?>