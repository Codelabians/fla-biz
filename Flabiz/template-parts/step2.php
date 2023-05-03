<?php
// Template Name: Step2

get_header();
// get_sidebar();

?>

    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-sm-12 col-md-8 col-lg-8">
                <!--Primary Contact Information-->
                <!--Heading-->
                <h2>Primary Contact Information</h2>
                <p>Please provide the following information for the designated Point of Contact for this registration. This will be our primary way of contacting you.</p>
                <form id="myForm" data-action="step-three">
                    <!--Fields-->
                    <!--First Name-->
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <label for="first_name" class="form-label">First Name</label>
                        </div>
                        <div class="col-md-9 col-lg-9 col-sm-12">
                            <input data-required="true" data-error="First Name is required" class="form-control" id="first_name" name="first_name" type="text">
                        </div>
                    </div>
                    <!--Last Name-->
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <label for="last_name" class="form-label">Last Name</label>
                        </div>
                        <div class="col-md-9 col-lg-9 col-sm-12">
                            <input class="form-control" data-required="true" data-error="Last Name is required" id="last_name" name="last_name" type="text">
                        </div>
                    </div>

                    <!--Phone Number-->
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <label for="primary_phone" class="form-label">Phone</label>
                        </div>
                        <div class="col-md-9 col-lg-9 col-sm-12">
                            <input class="form-control phone" data-required="true" data-error="Phone is required" id="primary_phone" name="primary_phone" type="text">
                        </div>
                    </div>

                    <!--Email-->
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <label for="primary_email" class="form-label">Email</label>
                        </div>
                        <div class="col-md-9 col-lg-9 col-sm-12">
                            <input class="form-control" data-required="true" data-error="Primary Email is required" id="primary_email" name="primary_email" type="email">
                        </div>
                    </div>
                    <!--Validate Email-->
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <label for="primary_validate_email" class="form-label">Validate Email</label>
                        </div>
                        <div class="col-md-9 col-lg-9 col-sm-12">
                            <input class="form-control" data-required="true" data-error="Please add validating email" id="primary_validate_email" name="primary_validate_email" type="email">
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
                            <input data-required="true" data-error="Address is required" type="text" class="form-control" id="personal_address" name="personal_address">
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
                            <input type="text" data-required="true" data-error="City is required" class="form-control address_fields" id="personal_city" name="personal_city">
                        </div>
                    </div>
                    <!--Country-->
                    <div class="row">
                        <div class="col-md-3 col-sm-12 col-lg-3">
                            <label for="personal_state" class="form-label">State</label>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <select name="personal_state" id="personal_state" class="form-control" data-required="true" data-error="State is required">
                                <option value="">Select State</option>
                                <option value="- ">Outside the US or Canada</option>
                                <option value="AB">Alberta</option>
                                <option value="AK">Alaska</option>
                                <option value="AL">Alabama</option>
                                <option value="AR">Arkansas</option>
                                <option value="AZ">Arizona</option>
                                <option value="BC">British Columbia</option>
                                <option value="CA">California</option>
                                <option value="CO">Colorado</option>
                                <option value="CT">Connecticut</option>
                                <option value="DC">District of Columbia</option>
                                <option value="DE">Delaware</option>
                                <option value="FL">Florida</option>
                                <option value="GA">Georgia</option>
                                <option value="HI">Hawaii</option>
                                <option value="IA">Iowa</option>
                                <option value="ID">Idaho</option>
                                <option value="IL">Illinois</option>
                                <option value="IN">Indiana</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                                <option value="LA">Louisiana</option>
                                <option value="LB">Labrador</option>
                                <option value="MA">Massachusetts</option>
                                <option value="MB">Manitoba</option>
                                <option value="MD">Maryland</option>
                                <option value="ME">Maine</option>
                                <option value="MI">Michigan</option>
                                <option value="MN">Minnesota</option>
                                <option value="MO">Missouri</option>
                                <option value="MS">Mississippi</option>
                                <option value="MT">Montana</option>
                                <option value="NB">New Brunswick</option>
                                <option value="NC">North Carolina</option>
                                <option value="ND">North Dakota</option>
                                <option value="NE">Nebraska</option>
                                <option value="NF">Newfoundland</option>
                                <option value="NH">New Hampshire</option>
                                <option value="NJ">New Jersey</option>
                                <option value="NM">New Mexico</option>
                                <option value="NS">Nova Scotia</option>
                                <option value="NT">Northwest Territories</option>
                                <option value="NU">Nunavut</option>
                                <option value="NV">Nevada</option>
                                <option value="NY">New York</option>
                                <option value="OH">Ohio</option>
                                <option value="OK">Oklahoma</option>
                                <option value="ON">Ontario</option>
                                <option value="OR">Oregon</option>
                                <option value="PA">Pennsylvania</option>
                                <option value="PE">Prince Edward Island</option>
                                <option value="PQ">Quebec</option>
                                <option value="PR">Puerto Rico</option>
                                <option value="RI">Rhode Island</option>
                                <option value="SC">South Carolina</option>
                                <option value="SD">South Dakota</option>
                                <option value="SK">Saskatchewan</option>
                                <option value="TN">Tennessee</option>
                                <option value="TX">Texas</option>
                                <option value="UT">Utah</option>
                                <option value="VA">Virginia</option>
                                <option value="VT">Vermont</option>
                                <option value="WA">Washington</option>
                                <option value="WI">Wisconsin</option>
                                <option value="WV">West Virginia</option>
                                <option value="WY">Wyoming</option>
                                <option value="YT">Yukon Territory</option>
                            </select>
                        </div>
                    </div>
                    <!--Zip code-->
                    <div class="row">
                        <div class="col-md-3 col-sm-12 col-lg-3">
                            <label for="personal_zip_code" class="form-label">Zip Code</label>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <input type="text" class="form-control address_fields" data-required="true" data-error="Zip Code is required" id="personal_zip_code" name="personal_zip_code">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <a href="step-one" class="btn btn-success text-white">Previous</a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <input type="submit" value="Next" class="btn border-success text-success float-end"> 
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

                </form>
            </div>
        </div>
    </div>
<?php
get_footer()
?>