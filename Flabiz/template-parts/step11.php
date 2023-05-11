<?php
// Template Name: step11
get_header();
?>
<div class="container">
    <div class="row d-flex">
        <div class="col-sm-12 col-md-10 col-lg-8">

            <form data-action="" id="myForm" class=" m-3">
                <h2>Create an account</h2>
                <p>With this username and password, you can return to this website at any time to complete or check on
                    the status of your application. An email confirmation will be sent to</p>
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <label for="first_name" class="form-label">First Name</label>
                    </div>
                    <div class="col-md-9 col-lg-9 col-sm-12">
                        <input data-required="true" data-error="First name is required" class="form-control" id="first_name" name="first_name" type="text">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <label for="last_name" class="form-label">Last Name</label>
                    </div>
                    <div class="col-md-9 col-lg-9 col-sm-12">
                        <input data-required="true" data-error="user Name is required" class="form-control" id="last_name" name="last_name" type="text">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <label for="user_name" class="form-label">user Name</label>
                    </div>
                    <div class="col-md-9 col-lg-9 col-sm-12">
                        <input data-required="true" data-error="user Name is required" class="form-control" id="user_name" name="user_name" type="text">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <label for="password" class="form-label">password</label>
                    </div>
                    <div class="col-md-9 col-lg-9 col-sm-12">
                        <input data-required="true" data-error="password isrequired" class="form-control" id="password" name="password" type="password">
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="show-password-checkbox">
                        <label class="form-check-label" for="show-password-checkbox">
                            Show password
                        </label>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <a href="step-Eight" class="btn btn-success text-white">Previous</a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 d-flex flex-column">
                        <input class="btn btn-success text-white" type="submit" value="Save Data">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 d-flex flex-column">
                        <input class="btn btn-success text-white" id="final" data-url=<?= admin_url("admin-ajax.php") ?> type="button" value="Send Data to Admin">
                    </div>
                </div>
                <!-- Error Modal -->
                <div class="modal fade" id="errorModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-black fw-bold" id="exampleModalLabel">Oops, please fix the
                                    following issues:</h5>
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