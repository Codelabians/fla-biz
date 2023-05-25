<?php
// Template Name: step11
get_header();
?>

<div class="container">
    <div class="row ">
        <div class="col-sm-12 col-md-10 col-lg-8">

            <form data-action="#" id="myForm" class=" m-3">
                <h2>Create an account</h2>
                <p>With this username and password, you can return to this website at any time to complete or check on
                    the status of your application. An email confirmation will be sent to <strong id="show_Email"></strong> </p>
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <label for="first_name" class="form-label">First Name</label>
                    </div>
                    <div class="col-md-9 col-lg-9 col-sm-12">
                        <input data-required="true" data-error="First name is required" class="form-control shadow" id="first_name" name="first_name" type="text">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <label for="last_name" class="form-label">Last Name</label>
                    </div>
                    <div class="col-md-9 col-lg-9 col-sm-12">
                        <input data-required="true" data-error="user Name is required" class="form-control shadow" id="last_name" name="last_name" type="text">
                    </div>
                </div>
                <p class="text-danger text-center">Note: If you are submiting this form second time, use differnet "username"</p>
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <label for="user_name" class="form-label">user Name</label>
                    </div>
                    <div class="col-md-9 col-lg-9 col-sm-12">
                        <input data-required="true" data-error="user Name is required" class="form-control shadow" id="user_name" name="user_name" type="text">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <label for="password" class="form-label">password</label>
                    </div>
                    <div class="col-md-9 col-lg-9 col-sm-12 d-flex">
                        <input data-required="true" data-error="password isrequired" class="form-control " id="password" name="password" type="password">
                        <i class="password-toggle  bg-light p-2 border text-center d-block justify-content-center  " style="height: 44px;"  onclick="togglePasswordVisibility()">
                        <!-- <i class="fas fa-eye"></i> -->
                        👁️
                    </i>
                    </div>
                    
                    <!-- <div class="form-check">
                        <input class="form-check-input shadow" type="checkbox" id="show-password-checkbox">
                        <label class="form-check-label" for="show-password-checkbox">
                            Show password
                        </label>
                    </div> -->
                </div>

                <h2 class="pt-5 pb-2">Note:</h2>
                <p>Thank you for choosing to sign up for an account on our website. To create your account, please fill
                    out the form with your information and click the "Save Data" button. Once you have saved your data,
                    please review it carefully to ensure that all information is accurate.</p>
                <p>After you have reviewed your information, please click the "Send Data to Admin" button to submit your
                    account request. Our team will review your information and create your account within 1-2 business
                    days. You will receive an email notification when your account has been created.</p>
                <p>Please note that incomplete or inaccurate information may delay the creation of your account or
                    result in the rejection of your request.</p>

                <div class="row mt-5">
                    <div class="col-lg-4 col-md-4 col-sm-12 mt-1 text-center">
                        <a href="step-ten" class="btn btn-success text-white shadow">Previous</a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 mt-1 text-center ">
                        <input class="btn btn-success text-white shadow" type="submit" value="Save Data" id="final" data-url=<?= admin_url("admin-ajax.php") ?>>
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
<script>
    function togglePasswordVisibility() {
        var input = document.getElementById("password");

        if (input.type === "password") {
            input.type = "text";
        } else {
            input.type = "password";
        }
    }
</script>
<?php
get_footer();

?>