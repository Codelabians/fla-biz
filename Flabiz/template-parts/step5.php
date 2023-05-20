<?php
// Template Name: step5
get_header();
?>
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-10 col-lg-8">
            <form data-action="step-six" id="myForm" class=" m-3">
                <h1 class="text-dark">Authorized share of stock</h1>
                <p>
                    In Fla-biz, to register a new corporation with the Division of Corporations, whether this is an S or
                    C corporation, requires the corporation to have at least one (1) share. The issuing of shares is how
                    a Corporation is owned.
                </p>
                <p>
                    Your new corporation will have 2000 authorized shares that can be issued, unless you designate
                    otherwise below:
                </p>
                <div class="indent-wrap m-5 ">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <label for="shares" class="form-label">Shares</label>
                        </div>
                        <div class="col-md-9 col-lg-9 col-sm-12">
                            <input class="form-control shares shadow" value="2000" class="form-check-input me-1"
                                data-required="true" data-error="shares is required" id="shares" name="shares"
                                type="number">
                        </div>
                    </div>
                </div>
                <h3 class="heading m-2 text-dark">Compile and optional items</h3>
                <p>
                    Listed below are a few additional items that we offer for new companies. To add any of these items
                    to your order, simply check the box next to the item(s) you need.
                </p>
                <div class="form-row form-group m-3 ">
                    <div class="ml-md-auto col-sm-12 ">
                        <input type="checkbox" id="checbox" class="form-check-input me-1"
                            value="Certificate of Status - $20" name="checbox">
                        <label for="checbox">
                            <span>Certificate of Status - $20</span>
                        </label>
                    </div>
                </div>
                <div class="form-row form-group m-3 ">
                    <div class="ml-md-auto col-sm-12 ">
                        <input type="checkbox" id="chekbox3" class="form-check-input me-1" name="chekbox3"
                            value="Fictitious Name (DBA) - $69">
                        <label for="chekbox3">
                            <span>Fictitious Name (DBA) - $69</span>
                        </label>
                    </div>
                </div>
                <div class="form-row form-group m-3 Fictitiousname " style="display: none;">
                    <div class="ml-md-auto col-sm-12 ">
                        <label for="Fictitiousname">
                            Enter Fictitious Name
                        </label>
                        <input type="text" id="Fictitiousname" class="me-1" name="Fictitiousname">
                    </div>
                </div>
                <div class="form-row form-group m-3">
                    <div class="ml-md-auto col-sm-12">
                        <input type="checkbox" id="chekbox4" class="form-check-input me-1"
                            value="Custom stock certificates and corporate seals - $49" name="chekbox4">
                        <label for="">
                            <span>Custom stock certificates and corporate seals - $49</span>
                        </label>
                    </div>
                </div>
                <div class="form-row form-group m-3">
                    <div class="ml-md-auto col-sm-12 d-flex">
                        <input type="checkbox" value=" Corporate kit with bylaws  - $20" id="chekbox5" class="form-check-input me-1" name="chekbox5">
                        <label for="chekbox5">
                            <span>Corporate kit with bylaws, -
                                $20</span>
                        </label>
                    </div>
                </div>
                <div class="form-row form-group m-3">
                    <div class="ml-md-auto col-sm-12">
                        <input type="checkbox" class="form-check-input me-1" value="Company Embosser - $25"
                            id="chekbox6" name="chekbox6">
                        <label for="chekbox6">
                            <span>Company Embosser - $25</span>
                        </label>
                    </div>
                </div>
                <h2>EIN Registration</h2>
                <h4>What is IEN & why we need one?</h4>
                <p>
                    An EIN has many different names - FEIN, FEI, Employer Tax ID number, Federal Tax ID number, and IRS
                    tax number.
                </p>
                <p>
                    This number is assigned by the IRS as a Federal Employer Tax Identification number. It is used to
                    identify the tax accounts of employers and certain others who have no employees. The IRS uses the
                    number to identify taxpayers who are required to file various business tax returns.
                </p>
                <p>
                    If you wish to file S corporate status, which most new corporations prefer, you will need to file an
                    EIN at this time.
                </p>
                <p>
                    Banks require this number to open a new corporate account. Other governmental and regulated
                    industries may also require this number for licensure or transacting business
                </p>
                <p>
                    If you choose for us to obtain an EIN for you, we will email that number along with your Articles of
                    Incorporation as quickly as possible, usually within 2-3 business days. We offer this as an option
                    for only $49.
                </p>
                <div class="ml-md-auto col-sm-12 d-flex justify-content-between align-items-center ">
                    <div class="box-checkbox border border-2 border-success rounded shadow m-2 p-2 ">
                        <input class="custom-control-input m-2 form-check-input checkbox7" value="I need file for EIN" checked
                            type="checkbox"  id="checkbox7" name="checkbox7">
                        <label for="checkbox7">
                            <span>
                                <h4>I need file for EIN</h4>
                            </span>
                        </label>
                    </div>
                    <a class="mt-2" id="my-link" style="cursor:pointer;">I don't need file for EIN</a>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <a href="step-four" class="btn btn-success text-white shadow">Previous</a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                            <input type="submit" value="Next" class="btn border-success text-success shadow "> 
                        </div>
                </div>
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