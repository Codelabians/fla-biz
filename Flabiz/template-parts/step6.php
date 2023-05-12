<?php
// Template Name: step6
get_header();
?>
<div class="container">
    <div class="row d-flex ">
        <div class="col-sm-12 col-md-10 col-lg-8 m-3 mt-3">
            <form id="myForm" data-action="step-seven">
                <h2>EIN Application</h2>
                <p>
                    What will be your best guess for the highest number of employees you will employ within the next 12
                    months (yourself being one)? If you are not sure, you may wish to use the default values indicated
                    below.
                </p>
                <div class="form-row form-group d-flex flex-column">
                    <label for="">Agriculter</label>
                    <div>
                        <input type="number" id="agri" name="agri">
                        <small>farm worker</small>
                    </div>
                </div>
                <div class="form-row form-group d-flex flex-column">
                    <label for="">other</label>
                    <div>
                        <input type="number" name="others" id="others">
                        <small>all other</small>
                    </div>
                </div>
                <p>
                    <strong>What date do you expect will be your first day in business?</strong>
                </p>
                <div class="form-row form-group d-flex ">
                    <label for="first_day">Date</label>
                    <input type="date" id="first_day" name="first_day">
                </div>
                <p>
                    <strong>What is the expected first date wages will be paid?</strong>
                </p>
                <div class="form-row form-group d-flex ">
                    <label for="first_date">Date</label>
                    <input type="date" id="first_date" name="first_date">
                </div>
                <p>To file an EIN Application with the IRS, it is necessary to supply the Social Security number of the
                    President of your new corporation. Please provide that below.</p>

                <div class="row d-flex" id="officer_position-data">
                    <div>
                        <p>Name:</p>
                    </div>
                    <div>
                        <p id="president_name_here"></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <label for="primary_ssn" class="form-label">SSN:</label>
                    </div>
                    <div class="col-md-9 col-lg-9 col-sm-12">
                        <input class="form-control ssn" data-required="true" data-error="ssn number is required "
                            id="primary_ssn" name="primary_ssn" type="text" onfocus="this.type='text'"
                            onblur="this.type='password'">
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <a href="step-five" class="btn btn-success text-white">Previous</a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <input class="btn btn-success text-white" type="submit" value="Next">
                    </div>
                </div>
            </form>
        </div>
        <!-- Error Modal -->
        <div class="modal fade" id="errorModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-black fw-bold" id="exampleModalLabel">Oops, please fix the following
                            issues:</h5>
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
        <div class="col">
            <?php get_sidebar(); ?>
        </div>


    </div>

    <?php
    get_footer()
        ?>