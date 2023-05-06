<?php
// Template Name: step9
get_header();
?>
<div class="container">
    <div class="row d-flex">
        <div class="col-sm-12 col-md-10 col-lg-8">
            <form data-action="step-10" id="myForm" class=" m-3">
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label" for="NameOnCard">Name on card</label>
                            <input type="text" id="NameOnCard" data-error="Name on card is required" class="form-control" data-required="true" />
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label" for="CardNumber">Credit card number</label>
                            <input type="text" id="CardNumber" class="form-control" data-required="true" />
                        </div>
                    </div>
                </div>
                <!-- Text input -->
                <p>Your Card Verification Number (CVN/CVV) protects you from fraudulent purchases. Please provide this number to increase the security of your purchase.</p>
                <div class="form-outline">
                    <label class="form-label" for="CVV">CVN/CVV</label>
                    <input type="text" id="CVV" class="form-control" data-required="true" />
                </div>
                <div class="form-outline">
                    <label class="form-label" for="Expiration">Expiration</label>
                    <input type="date" id="Expiration" class="form-control" data-required="true" />
                </div>
                <h5 class="mb-4">Payment</h5>

                <div class="form-check">
                    <label class="form-check-label" for="checkoutForm3">
                        Credit card
                    </label>
                    <input class="form-check-input" value="Credit card" type="radio" name="flexRadioDefault" id="checkoutForm3" checked />

                </div>

                <div class="form-check">
                    <label class="form-check-label" for="checkoutForm4">
                        Debit card
                    </label>
                    <input class="form-check-input" value="Debit card" type="radio" name="flexRadioDefault" id="checkoutForm4" />

                </div>

                <div class="form-check mb-4">
                    <label class="form-check-label" for="checkoutForm5">
                        Paypal
                    </label>
                    <input class="form-check-input" value="  Paypal" type="radio" name="flexRadioDefault" id="checkoutForm5" />
                </div>

                <hr class="my-4" />
                <div class="row mt-5">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <a href="step-six" class="btn btn-success text-white">Previous</a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 d-flex flex-column">
                    <input class="btn btn-success text-white" type="submit" value="Next">
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
