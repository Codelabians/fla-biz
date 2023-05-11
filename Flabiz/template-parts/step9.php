<?php
// Template Name: step9
get_header();
?>
<div class="container">
    <div class="row d-flex">
        <div class="col-sm-12 col-md-10 col-lg-8">
            <form id="myForm" data-action="step-ten" class=" m-3">
            
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label" for="NameOnCard">Name on card</label>
                            <input type="text" id="NameOnCard" data-error="Name on card is required"
                                class="form-control" data-required="true" />
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label" for="CardNumber">Credit card number</label>
                            <input type="number" id="CardNumber" data-error="Card number is required"
                                class="form-control card" data-required="true" />
                        </div>
                    </div>
                </div>
                <!-- Text input -->
                <p>Your Card Verification Number (CVN/CVV) protects you from fraudulent purchases. Please provide this
                    number to increase the security of your purchase.</p>
                <div class="form-outline">
                    <label class="form-label" for="CVV">CVN/CVV</label>
                    <input type="text" id="CVV" data-error="CVN/CVV is required" class="form-control"
                        data-required="true" />
                </div>
                <div class="form-outline">
                    <label class="form-label" for="Expiration">Expiration</label>
                    <input type="date" id="Expiration" data-error="Expiration is required" class="form-control"
                        data-required="true" />
                </div>
                <h5 class="mb-4">Payment</h5>
                <select name="paymentCard" id="paymentCard" data-error="card type is required" class="form-control"
                    data-required="true" data-error="Card is required">
                    <option value="">Select card</option>
                    <option value="MasterCard">Master card</option>
                    <option value="visaCard">Visa card</option>
                    <option value="AmericanExpress">American Express</option>
                    <option value="Discover">Discover</option>
                </select>
                



                <hr class="my-4" />
                <div class="row mt-5">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <a href="step-eight" class="btn btn-success text-white">Previous</a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 d-flex flex-column">
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
</div>
</div>
<?php
get_footer();

?>