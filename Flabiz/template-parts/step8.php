<?php
// Template Name: step8
get_header();
?>
<div class="container">
    <div class="row ">
        <div class="col-sm-12 col-md-10 col-lg-8">
            <form data-action="step-nine" id="myForm" class=" m-3">
                <h3>Notice of Annual Report</h3>
                <p>
                    This corporation must file an Annual Report with the Division of Corporations between January 1st and May 1st of every year to maintain "active" status. The corporation's first annual report will be due between January 1st and May 1st of the calendar year following the year the corporation is formed and must be filed online. The fee to file a Corporation Annual Report is $150 And the fee to file an LLC Annual Report is $138. A $400 late fee is applied if the report is filed after May 1st. Reminder notices to file the Annual Report will be sent to the e-mail address you provide in these articles. File early to avoid the late fee.
                </p>
                <p>
                    The final step is to authorize Flabiz Incorporation Service to file these documents with the Division of Corporations on your behalf. Because our service is entirely online, this is done by providing your "electronic signature," meaning simply that you must provide your contact information below, accept the user agreement, and type your name into the electronic signature box at the bottom.
                </p>

                <!--Fields-->
                <!--Address-->
                <div class="row">
                    <div class="col-md-3 col-sm-12 col-lg-3">
                        <label for="personal_address8" class="form-label">Address</label>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-12">
                        <input data-required="true" data-error="Address is required" type="text" class="form-control shadow" id="personal_address8" name="personal_address8">
                    </div>
                </div>
                <!--Apartment-->
                <div class="row">
                    <div class="col-md-3 col-sm-12 col-lg-3">
                        <label for="personal_suit_apt8" class="form-label">Suite. Apt. #, etc.</label>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-12">
                        <input type="text" class="form-control shadow" id="personal_suit_apt8" name="personal_suit_apt8">
                    </div>
                </div>
                <!--City-->
                <div class="row">
                    <div class="col-md-3 col-sm-12 col-lg-3">
                        <label for="personal_city8" class="form-label">City</label>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-12">
                        <input type="text" data-required="true" data-error="City is required" class="form-control address_fields shadow" id="personal_city8" name="personal_city8">
                    </div>
                </div>
                <!--Country-->
                <div class="row">
                    <div class="col-md-3 col-sm-12 col-lg-3">
                        <label for="personal_state8" class="form-label">State</label>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-12">
                        <select name="personal_state8" id="personal_state8" class="form-control shadow" data-required="true" data-error="State is required">
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
                        <label for="personal_zip_code8" class="form-label">Zip Code</label>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-12">
                        <input type="number" class="form-control address_fields shadow" data-required="true" data-error="Zip Code is required" id="personal_zip_code8" name="personal_zip_code8">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-12 col-lg-3">
                        <label for="phone_number8" class="form-label">phone number</label>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-12">
                        <input type="number" class="form-control address_fields shadow" data-required="true" data-error="phone number is required" id="phone_number8" name="phone_number8">
                    </div>
                </div>
                <h3>
                    Delayed Effective Date
                </h3>
                <p>
                    Companies registered in Flabiz can opt to specify a future effective date, meaning that the company will be recognized as a valid corporation or LLC on that date rather than on the date of filing. For instance, a company filing in November 2020 can set an effective date of January 2021 to delay official recognition until the start of the new year. This can be a maximum of 90 days in the future.
                </p>
                <div class="form-row form-group d-flex flex-column">
                    <div class="col-lg-6 sm-6 md-6 d-flex ">
                        <label for="">file my effective date as:</label>
                        <input type="date" id="date" class="shadow" name="date" value="date">
                    </div>
                </div>
                <div class="ml-md-auto col-sm-12 d-flex ">
                    <div class="box-checkbox  mt-3 mb-3 ">
                        <input type="checkbox" id="accept " class="form-check-input shadow" value="accept" name="accept" required>
                        <label for="">I accept the <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">User Agreement</a> and The Notice of Annual Report</label>
                    </div>
                </div>
                <!-- <div class="form-row form-group ">
                    <div class="col-lg-6 sm-6 md-6">
                        <input type="checkbox" id="accept " value="accept" name="accept">
                        <label for="">I accept the <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">User Agreement</a> and The Notice of Annual Report</label>
                    </div>
                </div> -->
                <div class="row">
                    <div class="col-md-3 col-sm-12 col-lg-3">
                        <label for="signature" class="form-label">Digital signature:</label>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-12">
                        <input type="text" data-required="true" data-error="Signature is required" class="form-control address_fields shadow" id="signature" name="signature">
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <a href="step-seven" class="btn btn-success text-white shadow ">Previous</a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                            <input type="submit" value="Next" class="btn border-success text-success shadow "> 
                        </div>
                </div>
                <!-- agriment modal -->
                <div class="modal fade shadow" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Online Filing Disclaimer</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <P>
                                    It is very important to make sure all data entered is correct before submitting the data for filing. Once a document is submitted to the Florida Incorporation Service, it cannot be changed or altered by our office or the remitter. No phone calls can be made to the filing section to ask for changes or to request that a document be flagged to "not file". This includes the process of selecting a name for your company.
                                </P>
                                Once a document has been filed with the Florida Department of State it becomes a permanent record and cannot be "un filed". Pursuant to applicable Florida Statutes, corporations may submit (with an additional fee, and within 30 business days of filing) Articles of Correction to correct a filed document. Corrections and/or changes to Articles may also be made by filing an amendment - refer to pertinent Florida Statutes for details. If changes need to be made to a fictitious name, then a new filing will have to be submitted, with the entire filing fee.
                                <P>
                                    Data inserted by the filer onto Florida Incorporation Service filing information screens will be submitted to create Articles of Incorporation, Articles of Organization, or Fictitious Name Registration for submittal to the Florida Department of State, U.S. Internal Revenue Service, or other agencies. There is no immediate written confirmation of filing with the Florida Department of State; however, a response will be sent back by email from Florida Incorporation Service (if you have provided your email address with your contact information) confirming your filing.
                                </P>
                                Florida Incorporation Service files applicable documents on your behalf with the State of Florida or other agencies electronically. This allows your new company to be formed within two to three business days.
                                <P>
                                    When you click the "Next" button below your information will be submitted.
                                </P>
                                For the purpose of filing documents online, the "typed" name of the individual "signing" the document is sufficient under s.15.16, Florida Statutes. Electronic signatures have the same legal effect as original signatures. Typing in someone's name/signature without their permission constitutes forgery.
                                <P>
                                    Once a document is sent for filing, it is reviewed for statutory compliance. If the document is rejected, we will provide you with information regarding the deficiency in order for this to be corrected. There is no additional fee to correct the data and resubmit the document. You will simply be instructed to confirm the changes.
                                </P>
                                <P>
                                    If you need assistance, please contact Florida Incorporation Service at 800-370-2942.
                                </P>
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
            </form>
        </div>
        <div class="col">
            <?php get_sidebar(); ?>
        </div>
    </div>

</div>

<?php
get_footer();

?>