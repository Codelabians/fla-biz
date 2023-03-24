<?php 
// Template Name: Step1

get_header();

?>

<div class="container">
    <h2>Filing Information</h2>
    <p>Please enter the business name you wish to register. Make sure the business name you are filing is spelled correctly.</p>
    <hr>
    <form class="row g-3">
      <div class="col-md-6">
        
        <label for="inputname" class="form-label">Preferred Name</label>
        <input class="form-control" type="text" placeholder="Preferred Name">

      </div>
      <div class="col-md-6">
        
        <label for="inputEmail4" class="form-label">Select</label>
        <select class="form-select" aria-label="Default select example">
          <option selected>,Inc.</option>
          <option value="Company">Company</option>
          <option value="Corp">Corp.</option>
          <option value="Inc">,Inc.</option>
          <option value="Incorp">Incorporated</option>
          <option value="PA">,P.A.</option>
        </select>
      </div>

      <form class="row g-3">
        <div class="col-md-6">
          
          <label for="inputSelname" class="form-label">Alternate Name
          </label>
          <input class="form-control" type="text" placeholder="Alternate Name
          ">
  
        </div>
        <div class="col-md-6">
          <label for="Select" class="form-label">Select</label>
          <select class="form-select" aria-label="Default select">
            <option selected>,Inc.</option>
            <option value="Company">Company</option>
            <option value="Corp">Corp.</option>
            <option value="Inc">,Inc.</option>
            <option value="Incorp">Incorporated</option>
            <option value="PA">,P.A.</option>
          </select>
        </div>
  
        <h2>Business Activity</h2>
        <p>You must select one box that describes the principal activity of your business. For example, if you will operate kiosks selling keychains in a number of locations, select "retail."</p>
        <hr>
        <form class="row g-3">
        <div class="col-md-6">
          <label for="inputPrincipal" class="form-label">Principal Activity</label>
          <select class="form-select" aria-label="Default select">
            <option selected>Select One</option>
            <option value="Accomodation&Food Services">Accomodation & Food Services</option>
            <option value="Construction">Construction</option>
            <option value="Finance&Insurance">Finance & Insurance</option>
            <option value="HelthCare&SocialAssistance">Helth Care & Social Assistance</option>
            <option value="Manufacturing">Manufacturing</option>
            <option value="NonProfit">Non Profit</option>
            <option value="Other">Other</option>
            <option value="ProfessionalAssociation">Professional Association</option>
            <option value="RealEstate">Real Estate</option>
            <option value="Rental&Leasing">Rental & Leasing</option>
            <option value="Retail">Retail</option>
            <option value="Transpotation&Warehousing">Transpotation & Warehousing</option>
            <option value="Wholesale Agent/Broker">Wholesale Agent/Broker</option>
            <option value="Wholesale Other">Wholesale Other</option>
            <option value="AnyAndLawfulBusiness">Any And Lawful Busines</option>
          </select>
        </div>

        <div class="col-md-6">

          <label for="bfsum" class="form-label">Briefly summarize the company's purpose</label>
          <textarea class="form-control" id="bfsum" rows="4"></textarea>
         </div>



         <h2>Principal Place of Business</h2>
         <p>The Division of Corporations requires that this be an occupied physical Florida address. If you have not decided yet where the principal office will be, you may specify another Florida address, such as a home address. This information can easily be changed later.</p>
         <hr>
      <div class="col-12">
        
        <label for="inputAddress" class="form-label">Address</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
      </div>
      <div class="col-12">
        <label for="inputAddress2" class="form-label">Address 2</label>
        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
      </div>
      <div class="col-md-6">
        <label for="inputCity" class="form-label">City</label>
        <input type="text" class="form-control" id="inputCity">
        <label for="phone" class="form-label">Phone</label>
        <input type="number" class="form-control" placeholder ="Enter Phone Number">
        </label>
      </div>
      <div class="col-md-4">
        <label for="inputState" class="form-label">State</label>
        <select id="inputState" class="form-select">
          <option selected>Choose...</option>
          <option>...</option>
        </select>
       
      </div>
      <div class="col-md-2">
        <label for="inputZip" class="form-label">Zip</label>
        <input type="text" class="form-control" id="inputZip">
      </div>
      <div class="col-12">
        
          
         <h2>Business Mailing Address</h2>
         <p>This is the address the Division of Corporations will use for correspondence with you. You may use a PO Box for this address,
          and it does not have to be a Florida address.</p>
          <hr>
          <input class="form-check-input" type="radio" name="sameasprincipaladd" id="flexRadioDefault1">
          <label class="form-check-label" for="sameasprincipaladd">
            Same as Principal Place of Business Address (specified above)
          </label>

          <input class="form-check-input" type="radio" name="othersprincipaladd" id="flexRadioDefault1">
          <label class="form-check-label" for="othersprincipaladd">
            Other (please specify below)
          </label>
      </div>
      <div class="col-md-4">
      <input type="button" name="Next" id="Next" value="Next">
      </div>
    </form>
 
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </div>
<?php 
    get_footer()
 ?>