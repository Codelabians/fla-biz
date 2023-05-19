<?php
// Template Name: Step5
get_header();

?>
<div class="container ">
    <div class="row ">
        <div class="col-sm-12 col-md-10 col-lg-8 m-4 mt-5 ">
            <form data-action="step-five" id="myForm">
                <h2>Who will be the registerd Agent?</h2>
                <p>
                    Fla-biz requires that a company maintain a Registered Agent. fla-biz can act as your registered agent. This will relieve you from the administrative and organizational costs of doing this yourself.
                    <br><br>
                    As your registered agent, Fla-biz will receive official company documents on your behalf.
                    <br>
                    This additional service can be added for only $69 for the first year of service.
                </p>
                <div class="ml-md-auto col-sm-12 d-flex">
                    <div class="box-checkbox border border-2 border-success rounded shadow m-2 p-2  ">
                        <div class="col m-3 ">
                            <input type="checkbox" id="chekbox" checked value="Register agent service $79" class="form-check-input " name="chekbox">
                            &nbsp; <label for="chekbox">I dont want fla-biz to be my register agent</label>
                        </div>
                    </div>
                </div>
                <!-- show data on check box -->
                <div class="ragreement pt-5" style="display:none">
                    <p>
                        As a secondary option, you or someone at your company may prefer to act as the registered agent for the company being formed
                    </p>
                    <p><strong>We show your information as:</strong></p>
                    <h5 class=" text-dark alert alert-secondary show shadow">
                        <p id="NAME"></p>
                        <p id="ADRESS"></p>
                    </h5>

                    <h3>Do you wish to file the S Corporation election form?</h3>

                    <p>Will you be your own registered agent, using the information as above?</p>
                    <div>
                        <h3>register agent agreement</h3>
                        <p>
                            Having been named as registered agent and to accept service of process for the above stated company at the place designated above, I hereby accept the appointment as registered agent and agree to act in this capacity. I further agree to comply with the provisions of all statutes relating to the proper and complete performance of my duties, and I am familiar with and accept the obligations of my position as registered agent as provided for in Chapter 608, Florida Statutes.
                            By clicking the "Next" button below, you will signify your consent to this agreement and your desire to act as registered agent for the company being formed.
                        </p>
                    </div>
                </div>
                <!-- for next -->
                <div class="row mt-1 d-flex flex-column justify-content-end ">
                    <div class="row mt-5">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <a href="step-three" class="btn btn-success text-white shadow">Previous</a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <input type="submit" value="Next" class="btn border-success text-success shadow ">
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col ">
            <?php
            get_sidebar();
            ?>
        </div>
    </div>
</div>
<?php
get_footer();
?>