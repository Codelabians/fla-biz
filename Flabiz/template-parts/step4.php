<?php
// Template Name: Step5
get_header();

?>
<div class="container ">
    <div class="row d-flex ">
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
                            <a href="#">i dont want fla-biz to be my register agent</a>
                        </div>
                    </div>
                </div>
                <!-- show data on check box -->
                <div class="ragreement" style="display:none">
                    <p>
                        As a secondary option, you or someone at your company may prefer to act as the registered agent for the company being formed
                    </p>
                    <div class="person-info fade show " role="alert">
                        <div id="business-manager-detail-table">
                            <p><strong>We show your information as:</strong></p>
                            <!--Main User Data Table-->
                            <ul class="list-grpup list-group-flush">
                                <li class="list-group-item d-flex justify-content-lg-between">
                                    <span class="info-title">Physical Adress</span>
                                    <span class="info-data me-3" id="physicalasdress"></span>
                                </li>
                            </ul>
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
                    </div>
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
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <a href="step-three" class="btn btn-success text-white">Previous</a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 d-flex flex-column">
                            <input class="btn btn-success text-white" type="submit" value="Next">
                            <!-- Button trigger modal -->
                            <!-- <a href="" class="" data-bs-toggle="modal" data-bs-target="#savemodel">Save and contineu later</a> -->
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col m-2 mt-5">
            <?php
            get_sidebar();
            ?>
        </div>
    </div>
</div>
<?php
get_footer();
?>