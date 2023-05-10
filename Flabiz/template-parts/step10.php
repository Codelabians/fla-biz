<?php
// Template Name: step-ten
get_header();
?>
<div class="container">
    <div class="row d-flex">
        <div class="col-sm-12 col-md-10 col-lg-8">

            <form data-action="step-eleven" id="myForm" class=" m-3">
            <br>
                <h2>Create an account</h2>
                <p>With this username and password, you can return to this website at any time to complete or check on
                    the status of your application. An email confirmation will be sent to</p>
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <label for="first_name" class="form-label">First Name</label>
                    </div>
                    <div class="col-md-9 col-lg-9 col-sm-12">
                        <input data-required="true" data-error="First name is required" class="form-control"
                            id="first_name" name="first_name" type="text">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <label for="last_name" class="form-label">Last Name</label>
                    </div>
                    <div class="col-md-9 col-lg-9 col-sm-12">
                        <input data-required="true" data-error="user Name is required" class="form-control"
                            id="last_name" name="last_name" type="text">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <label for="user_name" class="form-label">user Name</label>
                    </div>
                    <div class="col-md-9 col-lg-9 col-sm-12">
                        <input data-required="true" data-error="user Name is required" class="form-control"
                            id="user_name" name="user_name" type="text">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <label for="password" class="form-label">password</label>
                    </div>
                    <div class="col-md-9 col-lg-9 col-sm-12">
                        <input data-required="true" data-error="password isrequired" class="form-control" id="password"
                            name="password" type="password">
                    </div>
                </div>
                

                <div class="row mt-5">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <a href="step-Eight" class="btn btn-success text-white">Previous</a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 d-flex flex-column">
                        <input class="btn btn-success text-white" 
                            type="submit" value="Next">

                        <!-- Button trigger modal -->
                        <!-- <a href="" class="" data-bs-toggle="modal" data-bs-target="#savemodel">Save and contineu later</a> -->
                    </div>
                </div>
                <!-- Error Modal -->
                <div class="modal fade" id="errorModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-black fw-bold" id="exampleModalLabel">Oops, please fix the
                                    following issues:</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
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
</div>
<?php
get_footer();

?>