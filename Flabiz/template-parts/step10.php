<?php
// Template Name: step10
get_header();
?>
<div class="container">
    <div class="row ">
        <div class="col-sm-12 col-md-10 col-lg-8">

            <form data-action="step-Eleven" id="myForm" class=" m-4">
                <h1>Company Information Summary</h1>
                <p>
                    Following is a summary of your company's information as you have entered it; please verify this is
                    complete and accurate as shown. If any of the information is incorrect, please click the Edit link
                    for that section to be taken to the appropriate page to change it.
                </p>

                <p>
                    If you would like one of our support representatives to clarify the meaning of any of the
                    information below, please call us at 1-800-370-2942.
                </p>
                <div class="card-summary card m-3 shadow">
                    <h5 class="card-header mt-0 ">Point of Contact
                        <a href="step-one" class="float-end text-decoration-none ">Edit</a>
                    </h5>
                    <ul class="list-grpup list-group-flush">
                        <li class="list-group-item d-flex justify-content-lg-between  ">
                            <span class="info-title">Name:</span>
                            <p class="info-data " id="name"></p>

                        </li>
                        <li class="list-group-item d-flex justify-content-lg-between ">
                            <span class="info-title">Adress:</span>
                            <span class="info-data me-3" id="Address"></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-lg-between ">
                            <span class="info-title">Email:</span>
                            <span class="info-data me-3" id="email"></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-lg-between ">
                            <span class="info-title">Phone:</span>
                            <span class="info-data me-3" id="phone"></span>
                        </li>
                    </ul>
                </div>
                <div class="card-summary card m-3 shadow">
                    <h5 class="card-header mt-0 ">Company Names
                        <a href="step-one" class=" float-end text-decoration-none ">Edit</a>
                    </h5>
                    <ul class="list-grpup list-group-flush">
                        <li class="list-group-item d-flex justify-content-lg-between">
                            <span class="info-title">choice1:</span>
                            <span class="info-data me-3" id="choice1"></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-lg-between">
                            <span class="info-title">choice2:</span>
                            <span class="info-data me-3" id="choice2"></span>
                        </li>

                    </ul>
                </div>
                <div class="card-summary card m-3 shadow">
                    <h5 class="card-header mt-0 ">Business Activity
                        <a href="step-one" class=" float-end text-decoration-none ">Edit</a>
                    </h5>
                    <ul class="list-grpup list-group-flush">
                        <li class="list-group-item d-flex justify-content-lg-between">
                            <span class="info-title">Business Activity::</span>
                            <span class="info-data me-3" id="purpose2"></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-lg-between">
                            <span class="info-title">purpose</span>
                            <span class="info-data me-3" id="purpose"></span>
                        </li>
                    </ul>
                </div>
                <div class="card-summary card m-3 shadow">
                    <h5 class="card-header mt-0 ">Office Location
                        <a href="step-one" class=" float-end text-decoration-none ">Edit</a>
                    </h5>
                    <ul class="list-grpup list-group-flush">
                        <li class="list-group-item d-flex justify-content-lg-between">
                            <span class="info-title">Physical Adress</span>
                            <span class="info-data me-3" id="physicalasdress"></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-lg-between">
                            <span class="info-title">Mailing Adress</span>
                            <span class="info-data me-3" id="mailingadress"></span>
                        </li>
                    </ul>
                </div>
                <div class="card-summary card m-3 shadow">
                    <h5 class="card-header mt-0 ">shares
                        <a href="step-five" class=" float-end text-decoration-none ">Edit</a>
                    </h5>
                    <ul class="list-grpup list-group-flush">
                        <li class="list-group-item d-flex justify-content-lg-between">
                            <span class="info-title">Shares</span>
                            <span class="info-data me-3" id="shares"></span>
                        </li>
                    </ul>
                </div>
                <div class="card-summary card m-3 shadow">
                    <h5 class="card-header mt-0 ">Register agent
                        <a href="step-four" class=" float-end text-decoration-none ">Edit</a>
                    </h5>
                    <ul class="list-grpup list-group-flush">
                        <li class="list-group-item d-flex justify-content-lg-between">
                            <span class="info-title">Alternate Nmae:</span>
                            <span class="info-data me-3" id="alternate_name"></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-lg-between">
                            <span class="info-title">Adress:</span>
                            <span class="info-data me-3" id="city"></span>
                        </li>
                    </ul>
                </div>
                <div class="card-summary card m-3 shadow">
                    <h5 class="card-header mt-0 ">Ein application
                        <a href="step-five" class=" float-end text-decoration-none ">Edit</a>
                    </h5>
                    <ul class="list-grpup list-group-flush">
                        <li class="list-group-item d-flex justify-content-lg-between">
                            <span class="info-title">Application:</span>
                            <span class="info-data me-3" id="application"></span>
                        </li>

                    </ul>
                </div>
                <div class="card-summary card m-3 shadow">
                    <h5 class="card-header mt-0 ">Sub-S Election
                        <a href="step-seven" class=" float-end text-decoration-none ">Edit</a>
                    </h5>
                    <ul class="list-grpup list-group-flush">
                        <li class="list-group-item d-flex justify-content-lg-between">
                            <span class="info-title">sub s Application:</span>
                            <span class="info-data me-3" id="application2"></span>
                        </li>

                    </ul>
                </div>
                <div class="card-summary card m-3 shadow">
                    <h5 class="card-header mt-0 ">Ein application information
                        <a href="step-six" class=" float-end text-decoration-none ">Edit</a>
                    </h5>
                    <ul class="list-grpup list-group-flush">

                        <li class="list-group-item d-flex justify-content-lg-between">
                            <span class="info-title">President SSN:</span>
                            <span class="info-data me-3 " id="pssn"></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-lg-between">
                            <span class="info-title">Agricultural Employees:</span>
                            <span class="info-data me-3" id="agrii"></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-lg-between">
                            <span class="info-title">Other Employees:</span>
                            <span class="info-data me-3" id="others"></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-lg-between">
                            <span class="info-title">First Day in Business :</span>
                            <span class="info-data me-3" id="date"></span>
                        </li>
                    </ul>
                </div>
                <div class="card-summary card m-3 shadow">
                    <h5 class="card-header mt-0 ">Director
                        <a href="step-three" class=" float-end text-decoration-none ">Edit</a>
                    </h5>
                    <ul class="list-grpup list-group-flush">
                        <li class="list-group-item d-flex justify-content-lg-between">
                            <span class="info-title">Director:</span>
                            <span class="info-data me-3" id="myLis"></span>
                        </li>
                    </ul>
                </div>
                <div class="card-summary card m-3 shadow">
                    <h5 class="card-header mt-0 ">officers
                        <a href="step-three " class=" float-end text-decoration-none ">Edit</a>
                    </h5>
                    <ul class="list-grpup list-group-flush">
                        <li class="list-group-item ">
                            <div class="row">
                                <div class="col">
                                    <ul>
                                        <li class="list-group-item">president</li>
                                        <li class="list-group-item">vicepresident</li>
                                        <li class="list-group-item">secretary</li>
                                        <li class="list-group-item">Treasure</li>
                                    </ul>
                                </div>
                                <div class="col">
                                    <ul id="officerLis">

                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="card-summary card m-3 shadow">
                    <h5 class="card-header mt-0 ">Signature
                        <a href="step-eight" class=" float-end text-decoration-none ">Edit</a>
                    </h5>
                    <ul class="list-grpup list-group-flush">
                        <li class="list-group-item d-flex justify-content-lg-between">
                            <span class="info-title">Digital signature:</span>
                            <span class="info-data me-3" id="signature"></span>
                        </li>

                    </ul>
                </div>
                <div class="card-summary card m-3 shadow">
                    <h5 class="card-header mt-0 ">Payment information
                        <a href="step-nine" class=" float-end text-decoration-none ">Edit</a>
                    </h5>
                    <ul class="list-grpup list-group-flush">
                        <li class="list-group-item d-flex justify-content-lg-between">
                            <span class="info-title">Name on card:</span>
                            <span class="info-data me-3" id="p_NameOnCard"></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-lg-between">
                            <span class="info-title">Credit card number:</span>
                            <span class="info-data me-3" id="p_CardNumber"></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-lg-between">
                            <span class="info-title">cvn/cvv:</span>
                            <span class="info-data me-3" id="p_CVV"></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-lg-between">
                            <span class="info-title">Expiration:</span>
                            <span class="info-data me-3" id="P_Expiration"></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-lg-between">
                            <span class="info-title">payment with:</span>
                            <span class="info-data me-3" id="FormpaymentCard"></span>
                        </li>
                    </ul>
                </div>
                
                <div class="row mt-5">
                    <div class="col-lg-6 col-md-6 col-sm-12 mt-1 text-center">
                        <a href="step-nine" class="btn btn-success text-white shadow">Previous</a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 mt-1 text-center">
                            <input type="submit" value="Next" class="btn border-success text-success shadow "> 
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
<?php
get_footer();

?>
