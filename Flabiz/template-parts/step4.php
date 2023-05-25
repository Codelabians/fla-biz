<?php
// Template Name: Step5
get_header();

?>
<div class="container">
    <div class="row ">
        <div class="col-sm-12 col-md-10 col-lg-8 m-4 mt-5 ">
            <form data-action="step-five" id="myForm">
                <h2>Who will be the registerd Agent?</h2>
                <p>
                    Fla-biz requires that a company maintain a Registered Agent. fla-biz can act as your registered agent. This will relieve you from the administrative and organizational costs of doing this yourself.
                    <br><br>
                    As your registered agent, Fla-biz will receive official company documents on your behalf.
                    <br>
                    This additional service can be added for only $500 for the first year of service.
                </p>
                <div class="ml-md-auto col-sm-12 p-3  ">
                    <div class="box-checkbox ">
                        <div class="col  ">
                            <input type="checkbox" id="chekbox" checked  class="form-check-input " name="chekbox">
                            &nbsp; <label for="chekbox">I  want fla-biz to be my register agent</label>
                        </div>
                    </div>
                    <a class="mt-3 align-content-center " id="my-link" onclick="uncheckCheckbox()" style="cursor:pointer;">I don't  want fla-biz to be my register agent</a>

                </div>
                <!-- show data on check box -->
                <div class="ragreement pt-5" style="display:none">
                    <p>
                        As a secondary option, you or someone at your company may prefer to act as the registered agent for the company being formed
                    </p>
                    <p><strong>We show your information as:</strong></p>
                    <h5 class=" text-dark alert alert-secondary show d-flex flex-column ">
                        <stong id="NAME"></stong>
                        <strong id="ADRESS"></strong>
                    </h5>

                    <p>Will you be your own registered agent, using the information as above?</p>
                    <div>
                        <h3>Register Agent Agreement</h3>
                        <p>
                            Having been named as registered agent and to accept service of process for the above stated company at the place designated above, I hereby accept the appointment as registered agent and agree to act in this capacity. I further agree to comply with the provisions of all statutes relating to the proper and complete performance of my duties, and I am familiar with and accept the obligations of my position as registered agent as provided for in Chapter 608, Florida Statutes.<br>
                            By clicking the <strong>"Next"</strong>  button below, you will signify your consent to this agreement and your desire to act as registered agent for the company being formed.
                        </p>
                    </div>
                </div>
                <!-- for next -->
                <div class="row mt-1 d-flex flex-column justify-content-end ">
                    <div class="row mt-5">
                        <div class="col-lg-6 col-md-6 col-sm-12 mt-1">
                            <a href="step-three" class="btn btn-success text-white shadow">Previous</a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 mt-1">
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
<script>
    function uncheckCheckbox() {
        document.getElementById("chekbox").checked = false;
      }
</script>
<?php
get_footer();
?>