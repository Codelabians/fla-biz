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
            <div id="business-manager-detail-table">
                <p><strong>We show your information as:</strong></p>
                <!--Main User Data Table-->
                <table class="table table-striped">
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
            </div>
            <h3 class="mt-5">Director Information</h3>
            <p>
                Your company must have at least one director, but may have more. You may also be the only director. A director must be a legal adult (18 years of age or older) and
                <strong>is NOT required to live within the State of Florida</strong>.
            </p>
            <p id="business-manager-detail" style="display: none">
                The current corporate directors are listed below. Review this list for accuracy before continuing. You can remove any existing director by clicking the "x" icon to the right of that director's information.
            </p>
            <!--Buttons for adding director-->
            <div id="buttons-for-director">
                <p><strong>Would you like to be a director?</strong></p>
                <button class="btn bg-none border-success text-success" id="as-director">Yes</button>
                <button class="btn bg-none border-success text-success" data-bs-toggle="modal" data-bs-target="#dirModal">No</button>
            </div>

            <!-- Directors Modal -->
            <div class="modal fade" id="dirModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-black fw-bold" id="exampleModalLabel">Add Director Information</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form id="dir-form" class="modalForm" data-modal-id="dirModal">
                            <div class="modal-body">
                                <!--Fields-->
                                <!--First Name-->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <label for="dir_first_name" class="form-label">First Name</label>
                                    </div>
                                    <div class="col-md-9 col-lg-9 col-sm-12">
                                        <input data-required="true" data-error="First Name is required" class="form-control" id="dir_first_name" name="dir_first_name" type="text">
                                    </div>
                                </div>
                                <!--Last Name-->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <label for="dir_last_name" class="form-label">Last Name</label>
                                    </div>
                                    <div class="col-md-9 col-lg-9 col-sm-12">
                                        <input class="form-control" data-required="true" data-error="Last Name is required" id="dir_last_name" name="dir_last_name" type="text">
                                    </div>
                                </div>

                                <!--Address-->
                                <div class="row">
                                    <div class="col-md-3 col-sm-12 col-lg-3">
                                        <label for="personal_address" class="form-label">Address</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                        <input data-required="true" data-error="Address is required" type="text" class="form-control" id="dir_address" name="dir_address">
                                    </div>
                                </div>
                                <!--Apartment-->
                                <div class="row">
                                    <div class="col-md-3 col-sm-12 col-lg-3">
                                        <label for="dir_suit_apt" class="form-label">Suite. Apt. #, etc.</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                        <input type="text" class="form-control" id="dir_suit_apt" name="dir_suit_apt">
                                    </div>
                                </div>
                                <!--City-->
                                <div class="row">
                                    <div class="col-md-3 col-sm-12 col-lg-3">
                                        <label for="dir_city" class="form-label">City</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                        <input type="text" data-required="true" data-error="City is required" class="form-control" id="dir_city" name="dir_city">
                                    </div>
                                </div>
                                <!--Country-->
                                <div class="row">
                                    <div class="col-md-3 col-sm-12 col-lg-3">
                                        <label for="dir_state" class="form-label">State</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                        <select name="dir_state" id="dir_state" class="form-control" data-required="true" data-error="State is required">
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
                                        <label for="dir_zip_code" class="form-label">Zip Code</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                        <input type="text" class="form-control" data-required="true" data-error="Zip Code is required" id="dir_zip_code" name="dir_zip_code">
                                    </div>
                                </div>
                                <!--Email-->
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <label for="dir_email" class="form-label">Email</label>
                                    </div>
                                    <div class="col-md-9 col-lg-9 col-sm-12">
                                        <input class="form-control" data-required="true" data-error="Primary Email is required" id="dir_email" name="dir_email" type="text">
                                    </div>
                                </div>
                                <div id="error"></div>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn border-success text-success" data-bs-dismiss="modal">Cancel</button>
                                <button data-bs-dismiss="modal" type="submit" class="btn btn-success text-white float-end"><i class="fa fa-users"></i> <i class="fa fa-plus"></i> <span class="ms-2">Add Director</span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <p id="directors-info" style="display:none;">
                The current corporate directors are listed below. Review this list for accuracy before continuing. You can remove any existing director by clicking the <strong class="text-danger">"x"</strong> icon to the right of that director's information.
            </p>

            <!--Directors Table-->
            <div id="directors-table" style="display: none">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
                <button class="btn btn-success text-white" data-bs-toggle="modal" data-bs-target="#dirModal">
                    <i class="fa fa-users"></i> <i class="fa fa-plus"></i> <span class="ms-2">Add Director</span>
                </button>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h3 class="mt-5">Officer Information</h3>
                    <p>
                        One person may be a director and hold all officer positions. Typically, a Florida corporation has a President, Secretary, and Treasurer.
                    </p>
                    <p id="business-manager-officer-detail" style="display:none;">
                        The current corporate officers are listed below. Review this list for accuracy before continuing. You can remove any existing officer by clicking the "x" icon to the right of that officer's information.
                    </p>
                    <!--Buttons for adding director-->
                    <div id="buttons-for-officer">
                        <p><strong>Would you like to be a director?</strong></p>
                        <button class="btn bg-none border-success text-success" id="as-officer">Yes</button>
                        <button class="btn bg-none border-success text-success" data-bs-toggle="modal" data-bs-target="#officerModal">No</button>
                    </div>
                    <div id="officers-table" style="display: none">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                        <button class="btn btn-success text-white"  data-bs-toggle="modal" data-bs-target="#officerModal">
                            <i class="fa fa-users"></i> <i class="fa fa-plus"></i> <span class="ms-2">Add Officer</span>
                        </button>
                    </div>

                    <!-- Officers Modal -->
                    <div class="modal fade" id="officerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-black fw-bold" id="exampleModalLabel">Add Officer Information</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form id="officer-form" class="modalForm" data-modal-id="officerModal">
                                    <div class="modal-body">
                                        <!--Fields-->
                                        <!--Position-->
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-12">
                                                <label for="officer_position" class="form-label">Position</label>
                                            </div>
                                            <div class="col-md-9 col-lg-9 col-sm-12">
                                                <select id="officer_position" name="officer_position" class="form-control" data-required="true">
                                                    <option value="">Select Position</option>
                                                    <option value="President">President</option>
                                                    <option value="Vice President">Vice President</option>
                                                    <option value="Secretary">Secretary</option>
                                                    <option value="Treasure">Treasure</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!--First Name-->
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-12">
                                                <label for="officer_first_name" class="form-label">First Name</label>
                                            </div>
                                            <div class="col-md-9 col-lg-9 col-sm-12">
                                                <input data-required="true" data-error="First Name is required" class="form-control" id="officer_first_name" name="officer_first_name" type="text">
                                            </div>
                                        </div>
                                        <!--Last Name-->
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-12">
                                                <label for="officer_last_name" class="form-label">Last Name</label>
                                            </div>
                                            <div class="col-md-9 col-lg-9 col-sm-12">
                                                <input class="form-control" data-required="true" data-error="Last Name is required" id="officer_last_name" name="officer_last_name" type="text">
                                            </div>
                                        </div>

                                        <!--Address-->
                                        <div class="row">
                                            <div class="col-md-3 col-sm-12 col-lg-3">
                                                <label for="officer_address" class="form-label">Address</label>
                                            </div>
                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                                <input data-required="true" data-error="Address is required" type="text" class="form-control" id="officer_address" name="officer_address">
                                            </div>
                                        </div>
                                        <!--Apartment-->
                                        <div class="row">
                                            <div class="col-md-3 col-sm-12 col-lg-3">
                                                <label for="officer_suit_apt" class="form-label">Suite. Apt. #, etc.</label>
                                            </div>
                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                                <input type="text" class="form-control" id="officer_suit_apt" name="officer_suit_apt">
                                            </div>
                                        </div>
                                        <!--City-->
                                        <div class="row">
                                            <div class="col-md-3 col-sm-12 col-lg-3">
                                                <label for="officer_city" class="form-label">City</label>
                                            </div>
                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                                <input type="text" data-required="true" data-error="City is required" class="form-control" id="officer_city" name="officer_city">
                                            </div>
                                        </div>
                                        <!--Country-->
                                        <div class="row">
                                            <div class="col-md-3 col-sm-12 col-lg-3">
                                                <label for="officer_state" class="form-label">State</label>
                                            </div>
                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                                <select name="officer_state" id="officer_state" class="form-control" data-required="true" data-error="State is required">
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
                                                <label for="officer_zip_code" class="form-label">Zip Code</label>
                                            </div>
                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                                <input type="text" class="form-control" data-required="true" data-error="Zip Code is required" id="officer_zip_code" name="officer_zip_code">
                                            </div>
                                        </div>
                                        <!--Email-->
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-12">
                                                <label for="officer_email" class="form-label">Email</label>
                                            </div>
                                            <div class="col-md-9 col-lg-9 col-sm-12">
                                                <input class="form-control" data-required="true" data-error="Primary Email is required" id="officer_email" name="officer_email" type="text">
                                            </div>
                                        </div>
                                        <div id="error"></div>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn border-success text-success" data-bs-dismiss="modal">Cancel</button>
                                        <button data-bs-dismiss="modal" type="submit" class="btn btn-success text-white float-end"><i class="fa fa-users"></i> <i class="fa fa-plus"></i> <span class="ms-2">Add Officer</span></button>
                                    </div>
                                </form>
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
                    <div class="row mt-5">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <a href="step-two" class="btn btn-success text-white">Previous</a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <button id="step-three-button" type="button" class="btn border-success text-success float-end">Next</button>
                            <!-- <a type="submit" class="btn btn-success text-white">Next</a> -->
                            <!-- Button trigger modal -->
                            <!-- <a href="" class="" data-bs-toggle="modal" data-bs-target="#savemodel">Save and contineu later</a> -->
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer()
?>