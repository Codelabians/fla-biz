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
                            <input class="form-control shares " value="2000" class="form-check-input me-1" data-required="true" data-error="shares is required" id="shares" name="shares" type="number">
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
                        <input type="checkbox" id="checbox" class="form-check-input me-1" name="checbox">
                        <label for="checbox">
                            <span>Certificate of Status - $20</span>
                        </label>
                        <i data-bs-toggle="modal" data-bs-target="#exampleModal" class="fas fa-question-circle text-primary"></i>
                    </div>
                </div>
                <div class="form-row form-group m-3 ">
                    <div class="ml-md-auto col-sm-12 ">
                        <input type="checkbox" id="chekbox3" class="form-check-input me-1" name="chekbox3">
                        <label for="chekbox3">
                            <span>Fictitious Name (DBA) - $69</span>
                        </label>
                        <i data-bs-toggle="modal" data-bs-target="#Fictitious" class="fas fa-question-circle text-primary"></i>
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
                    <div class="ml-md-auto col-sm-12 d-flex justify-content-left">
                        <input type="checkbox" id="chekbox4" class="form-check-input me-1" name="chekbox4">
                        <label for="chekbox4">
                            <span>Custom stock certificates and corporate sales - $49</span>
                        </label>
                        <span><i data-bs-toggle="modal" data-bs-target="#Custom" class="fas fa-question-circle text-primary" title="custome stok"></i></span>

                    </div>
                </div>
                <div class="form-row form-group m-3">
                    <div class="ml-md-auto col-sm-12 d-flex">
                        <input type="checkbox" id="chekbox5" class="form-check-input me-1" name="chekbox5">
                        <label for="chekbox5">
                            <span>Corporate kit with bylaws, -
                                $20</span>
                        </label>
                        <i data-bs-toggle="modal" data-bs-target="#Corporate" class="fas fa-question-circle text-primary"></i>
                    </div>
                </div>
                <div class="form-row form-group m-3">
                    <div class="ml-md-auto col-sm-12">
                        <input type="checkbox" class="form-check-input me-1" id="chekbox6" name="chekbox6">
                        <label for="chekbox6">
                            <span>Company Embosser - $25</span>
                        </label>
                        <i data-bs-toggle="modal" data-bs-target="#Emboser" class="fas fa-question-circle text-primary"></i>
                    </div>
                </div>
                <h2>EIN Registration</h2>
                <h4>What is an EIN and why would I need one?</h4>
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
                <div class="ml-md-auto col-sm-12 text-center p-3">
                    <div class="box-checkbox  ">
                        <input class="custom-control-input  form-check-input checkbox7" checked type="checkbox" id="checkbox7" name="checkbox7">
                        <label for="checkbox7">
                            <span>
                                <h4>I need file for EIN</h4>
                            </span>
                        </label>
                    </div>
                    <a class="mt-2" id="my-link" onclick="uncheckCheckbox()" style="cursor:pointer;">I don't need file for EIN</a>
                </div>
                <div class="row mt-5 ">
                    <div class="col-lg-6 col-md-6 col-sm-12  mt-3">
                        <a href="step-four" class="btn btn-success text-white shadow">Previous</a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 mt-3">
                        <input type="submit" value="Next" class="btn border-success text-success shadow ">
                    </div>
                </div>
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
<div class="modal fade shadow" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Certificate of Status</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>
                    A Certificate of Status is issued by the Division of Corporations to show that your company is active and has paid the initial filing fees or Annual Report after the first year.</p>

                <p> Some Banks and governmental agencies require this certificate as verification that the company is an active Florida company.</p>

                <P> If you choose this certificate as part of your package, it is issued electronically by the Division of Corporations and will be emailed to you with your Articles by us.


                </p>
            </div>
        </div>
    </div>
</div>
<div class="modal fade shadow" id="Fictitious" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Fictitious Name (DBA)</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>
                    A Fictitious name or DBA (Doing Business As) or Trade Name is a name you can register with the Division of Corporations so that you may transact business as another name besides your company name.

                </p>

                <p> For example, you can have a company name ABC, Inc then register a fictitious name Ray's Pizza and then do business as Ray's Pizza in advertising, letterhead, internet names and the like. So the company name remains the same and you will be able to transact business with this fictitious name.

                </p>

                <P> There are no holds on a fictitious name as it is a "nickname" or trade name of the company. So other companies can have the same fictitious name as other companies.
                </p>
            </div>
        </div>
    </div>
</div>
<div class="modal fade shadow" id="Custom" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Stock Certificates and Corporate Seals</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>
                    Ownership in a corporation is conveyed by stock shares. By issuing stock in a company you are issuing ownership in that company. Certificates are the legal document that shows this ownership. Some government agencies may require seeing the issued stock to see proof of ownership. These certificates are personalized and come with personalized seals showing the year of incorporation.
                </p>
                <p></p>
                <p><strong>If you are creating a nonprofit corporation, there are no shares, so there is no need for stock certificates and seals.</strong>

                </p>

                <P> <strong>Please note: </strong> If you are applying for Workman's Compensation Exemption, you will need to supply a stock certificate to them with your application of exemption.</p>
            </div>
        </div>
    </div>
</div>
<div class="modal fade shadow" id="Corporate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Corporate Kit</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>
                    Bylaws are the initial papers you need to complete and file in your corporate book. These are the papers that lay out how your new corporation will be run, its financial obligations and legal obligations to its shareholders. It also includes the responsibilities and duties of each office and directors as well as the responsibility of the stock holders of the company.</p>

                <p>Minutes, both initial and yearly, need to be written and filed in the corporate book along with the bylaws and stock certificates. The initial minutes are for the board to confirm the elected officers, notify who has been assigned how many shares. It can also include initial salaries of officers, when the board will meet and financial discussion on leasing or ownership the corporations have.</p>

                <P> Yearly minutes need to be filed in the corporate book after a meeting with the officers and board of directors to update what new has happened with the company in terms of officers, leasing, loans, and stock shares.
            </div>
        </div>
    </div>
</div>
<div class="modal fade shadow" id="Emboser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Company Embosser</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>
                    An embosser is a necessity if you would like to have a raised seal (such as for use on important legal documents, real estate documents, banking documents, etc.).</p>
            </div>
        </div>
    </div>
</div>
<script>
    function uncheckCheckbox() {
        document.getElementById("checkbox7").checked = false;
    }
</script>
<?php
get_footer();

?>