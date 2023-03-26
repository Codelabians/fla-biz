<?php
// Template Name: Step3

get_header();

?>

    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-sm-12 col-md-8 col-lg-8">
                <!--Primary Contact Information-->
                <!--Heading-->
                <h2>Business Management</h2>
                <p><strong>We show your information as:</strong></p>
                <table class="table table-striped" id="myTable">
                    <thead>
                        <tr class="bg-light">
                            <th>Name</th>
                            <th>Address</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td id="main-name"></td>
                            <td id="main-address"></td>
                            <td id="main-email"></td>
                        </tr>
                    </tbody>
                </table>
                <h3 class="mt-5">Director Information</h3>
                <p>
                    Your company must have at least one director, but may have more. You may also be the only director. A director must be a legal adult (18 years of age or older) and
                    <strong>is NOT required to live within the State of Florida</strong>.
                </p>
                <p><strong>Would you like to be a director?</strong></p>
                <button class="btn bg-none border-success text-success">Yes</button>
                <button class="btn bg-none border-success text-success" data-bs-toggle="modal" data-bs-target="#dirModal">No</button>

                <!-- Modal -->
                <div class="modal fade" id="dirModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-2 form-group">
                                    <label for="directors-first-name" class="mb-1">First Name</label>
                                    <input name="directors-first-name" id="directors-first-name"  type="text" class="form-control" value=""></div><div class="mb-2 form-group"><label for="directorslastName" class="mb-1">Last Name</label><input name="lastName" id="directorslastName" data-hj-masked="true" type="text" class="form-control" value=""></div><div class="mb-2 form-group"><label for="directorsstreet1" class="mb-1">Address</label><input name="street1" id="directorsstreet1" data-hj-masked="true" type="text" class="form-control" value=""></div><div class="mb-2 form-group"><label for="directorsstreet2" class="mb-1">Suite. Apt. #, etc.</label><input name="street2" id="directorsstreet2" data-hj-masked="true" type="text" class="form-control" value=""></div><div class="mb-2 form-group"><label for="directorscity" class="mb-1">City</label><input name="city" id="directorscity" data-hj-masked="true" type="text" class="form-control" value=""></div><div class="mb-2 form-group"><label for="directorsstate" class="mb-1">State</label><select name="stateProvince" id="directorsstate" data-hj-masked="true" class="custom-select"><option value="">Select State</option><option value="- ">Outside the US or Canada</option><option value="AB">Alberta</option><option value="AK">Alaska</option><option value="AL">Alabama</option><option value="AR">Arkansas</option><option value="AZ">Arizona</option><option value="BC">British Columbia</option><option value="CA">California</option><option value="CO">Colorado</option><option value="CT">Connecticut</option><option value="DC">District of Columbia</option><option value="DE">Delaware</option><option value="FL">Florida</option><option value="GA">Georgia</option><option value="HI">Hawaii</option><option value="IA">Iowa</option><option value="ID">Idaho</option><option value="IL">Illinois</option><option value="IN">Indiana</option><option value="KS">Kansas</option><option value="KY">Kentucky</option><option value="LA">Louisiana</option><option value="LB">Labrador</option><option value="MA">Massachusetts</option><option value="MB">Manitoba</option><option value="MD">Maryland</option><option value="ME">Maine</option><option value="MI">Michigan</option><option value="MN">Minnesota</option><option value="MO">Missouri</option><option value="MS">Mississippi</option><option value="MT">Montana</option><option value="NB">New Brunswick</option><option value="NC">North Carolina</option><option value="ND">North Dakota</option><option value="NE">Nebraska</option><option value="NF">Newfoundland</option><option value="NH">New Hampshire</option><option value="NJ">New Jersey</option><option value="NM">New Mexico</option><option value="NS">Nova Scotia</option><option value="NT">Northwest Territories</option><option value="NU">Nunavut</option><option value="NV">Nevada</option><option value="NY">New York</option><option value="OH">Ohio</option><option value="OK">Oklahoma</option><option value="ON">Ontario</option><option value="OR">Oregon</option><option value="PA">Pennsylvania</option><option value="PE">Prince Edward Island</option><option value="PQ">Quebec</option><option value="PR">Puerto Rico</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option><option value="SD">South Dakota</option><option value="SK">Saskatchewan</option><option value="TN">Tennessee</option><option value="TX">Texas</option><option value="UT">Utah</option><option value="VA">Virginia</option><option value="VT">Vermont</option><option value="WA">Washington</option><option value="WI">Wisconsin</option><option value="WV">West Virginia</option><option value="WY">Wyoming</option><option value="YT">Yukon Territory</option></select></div><div class="mb-2 form-group"><label for="directorspostalCode" class="mb-1">Zip Code</label><input name="postalCode" id="directorspostalCode" data-hj-masked="true" type="text" class="form-control" value=""></div><div class="mb-2 form-group"><label for="directorsemailAddress" class="mb-1">Email</label><input name="emailAddress" id="directorsemailAddress" data-hj-masked="true" type="text" class="form-control" value=""></div></div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>


                <p style="display:none;">
                    The current corporate directors are listed below. Review this list for accuracy before continuing. You can remove any existing director by clicking the <strong class="text-danger">"x"</strong> icon to the right of that director's information.
                </p>

                <table class="table" id="myTable" style="display: none">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody></tbody>
                </table>
                <button type="button" class="btn btn-primary" onclick="addRow()">Add Row</button>
                <form id="form-two">
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
                            <label for="phone" class="form-label">Phone</label>
                        </div>
                        <div class="col-md-9 col-lg-9 col-sm-12">
                            <input class="form-control" id="phone" name="phone" type="text">
                        </div>
                    </div>

                    <!--Email-->
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <label for="email" class="form-label">Email</label>
                        </div>
                        <div class="col-md-9 col-lg-9 col-sm-12">
                            <input class="form-control" id="email" name="email" type="text">
                        </div>
                    </div>
                    <!--Validate Email-->
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <label for="validate_email" class="form-label">Validate Email</label>
                        </div>
                        <div class="col-md-9 col-lg-9 col-sm-12">
                            <input class="form-control" id="validate_email" name="validate_email" type="text">
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
                </form>
            </div>
        </div>
    </div>
<?php
get_footer()
?>