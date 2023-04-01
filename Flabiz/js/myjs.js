jQuery.noConflict();
jQuery(document).ready(function () {
    // Global Variables
    let formElement = document.getElementById('myForm');
    let formData = JSON.parse(sessionStorage.getItem('formData')) || {};
    let globalUser = {};
    let directors = [];

    // Getting Modal
    if(jQuery("#errorModal").length) {
        let myModal = new bootstrap.Modal(document.getElementById("errorModal"), {});
            myModal._element.addEventListener('hidden.bs.modal', function (event) {
                closingModalProperly(myModal)
            });
    }

    // Closing Modal Properly
    function closingModalProperly(myModal){
        document.body.classList.remove('modal-open');
        myModal._element.parentNode.removeChild(myModal._element);
        document.querySelector('.modal-backdrop').remove();
    }
    // Address Show Hide on basis of same address or different step One
    jQuery(document).on("click" , ".business_mailing_address_check" , function (){
        if(jQuery(this).val() === "different"){
            jQuery("#business_mailing_address").show()
        }else {
            jQuery("#business_mailing_address").hide()
        }
    })


    // Address Show Data on basis of same address on Step 1

    jQuery(document).on("keyup" , ".address_fields" , showAddress)

    function showAddress(){
        let address = ""
        let addressValue = jQuery("#address").val().trim();
        let cityValue = jQuery("#city").val().trim();
        let zipCodeValue = jQuery("#zip_code").val().trim();
        if(addressValue !== ""){
            if(cityValue !== ""){
                if(zipCodeValue !== ""){
                    address = "<h4>"+addressValue+"<br>"+cityValue+",FL"+" "+zipCodeValue+"</h4>";
                    jQuery("#business_mailing_address_if_same").html(address)
                }else{
                    jQuery("#zip_code").addClass("in-valid");
                }
            }else{
                jQuery("#city").addClass("in-valid");
            }
        }else{
            jQuery("#address").addClass("in-valid");
        }
    }

    // Phone Number Validation
    jQuery(document).on("keyup" , ".phone" , function () {
        if(!formatPhoneNumber(jQuery(this).val())){
            jQuery(this).val("")
            jQuery(this).addClass("error")
        }else{
            jQuery(this).val(formatPhoneNumber(jQuery(this).val()))
        }
    })

    // Formatting the phone number
    function formatPhoneNumber(phoneNumber) {
        // Remove all non-digit characters from the phone number
        const cleaned = phoneNumber.replace(/\D/g, '');
        // Format the cleaned phone number with hyphens

        if (cleaned.startsWith('0')) {
            return false;
        }

        let formatted = "";
        for (let i = 0; i < cleaned.length && i < 10; i++) {
            if (i === 3 || i === 6) {
                formatted += '-';
            }
            formatted += cleaned[i];
        }
        return formatted;
    }


    // Company Purpose length fixing
    jQuery(document).on("keyup" , "#company_purpose" , function () {
        if(jQuery(this).val().trim().length > 50){
            jQuery(this).addClass("error")
        }else {
            jQuery(this).removeClass("error")

        }
    })

    // Validating Primary Email
    jQuery(document).on("keyup" , "#primary_validate_email" , function (){
        if(jQuery(this).val().trim() !== jQuery("#primary_email").val().trim()){
            jQuery(this).addClass("#error")
        }
    })

    // Retrieve the stored form data from session storage, or create an empty object if no data has been stored yet
    if(formElement!= null){
        if(formElement.length) {
            genericFromValidation("myForm" , "id")
            populateData(formElement)
            assigningEventListenerToForm(formElement)
        }
    }

    if(jQuery(".modalForm") != null) {
        if(jQuery(".modalForm").length)
            genericFromValidation("modalForm", "class")
    }
    fetchMainUser();

    // Generic Form Validation on all Fields
    function genericFromValidation(formSelector, selectorType){
        const formElement = selectorType === 'class' ? document.querySelector(`.${formSelector}`) : document.getElementById(formSelector);
        const fields = formElement.querySelectorAll('[data-required="true"]');
        fields.forEach((field) => {
            field.addEventListener('blur', () => {
                if (!field.value.trim()) {
                    field.classList.add('error');
                } else {
                    field.classList.remove('error');
                }
            });

            field.addEventListener('focus', () => {
                if (field.classList.contains('error')) {
                    field.classList.remove('error');
                }
            });

            field.addEventListener('keyup', () => {
                if (!field.value.trim()) {
                    field.classList.add('error');
                } else {
                    field.classList.remove('error');
                }
            });
        });
    }
    // Populate Already Submiited Form data
    function populateData(formElement){
        // Loop through all the form elements
        for (var i = 0; i < formElement.elements.length; i++) {
            var input = formElement.elements[i];
            if (input.type !== 'submit' && formData[input.id || input.name] !== undefined) {
                // Use the stored form data to pre-populate the form inputs, if applicable
                input.value = formData[input.id || input.name];
            }
        }
    }

    // FormData Event Listener on Submission and show Error in Modal
    function assigningEventListenerToForm(formElement){
        formElement.addEventListener('submit', function (event) {
            event.preventDefault();
            // Validate the form inputs
            var isValid = true;
            var errorMessage = "<ol>"
            for (var i = 0; i < formElement.elements.length; i++) {
                var input = formElement.elements[i];
                if (input.type !== 'submit' && input.dataset.required && !input.value.trim()) {
                    isValid = false;
                    errorMessage += "<li>" + input.dataset.error + "</li>"
                    input.classList.add('error');
                } else {
                    if (input.classList.contains("phone") && input.value.startsWith("0")) {
                        isValid = false;
                        errorMessage += "<li>Phone Number format is XXX-XXX-XXXX</li>"
                        input.classList.add('error');
                    } else if (input.name === "company_purpose" && input.value.length > 50) {
                        isValid = false;
                        errorMessage += "<li>Company purpose can't br greater than 50 characters</li>"
                        input.classList.add('error');
                    } else if (input.id === "primary_validate_email" && input.value.trim() !== jQuery("#primary_email").val()) {
                        isValid = false;
                        errorMessage += "<li>Validating email is incorrect</li>"
                        input.classList.add('error');
                    }
                    input.classList.remove('error');
                }
            }
            errorMessage += "</ol>";
            // If the form is invalid, don't save the data and display an error message
            if (!isValid) {
                jQuery("#modal-error").html(errorMessage);
                myModal.show();
                return;
            }

            savingDataInSessionStorage();
            // Redirect the user to the next form page, or do whatever else you need to do
            window.location.href = jQuery(this).data('action');
        });
    }


    // Saving data In Session Storage
    function savingDataInSessionStorage(){

        // Create an object to store the form data
        var formInputData = {};

        // Loop through all the form elements
        for (var i = 0; i < formElement.elements.length; i++) {
            var input = formElement.elements[i];
            if (input.type !== 'submit') {
                formInputData[input.id || input.name] = input.value;
            }
        }

        // Merge the form data with any existing data in session storage
        var mergedFormData = Object.assign({}, formData, formInputData);

        // Store the merged form data in session storage
        sessionStorage.setItem('formData', JSON.stringify(mergedFormData));

    }


    // Fetch Main User and show it on step 3
    function fetchMainUser(){
        let user = {
            first_name : "",
            last_name : "",
            address : "",
            suit_apt : "",
            city : "",
            state : "",
            zip_code : "",
            email : "",
            is_main : true
        }
        let personalAddress = "";
        let mainName = jQuery("#main-name");
        let mainAddress = jQuery("#main-address");
        let mainEmail = jQuery("#main-email");
        if(mainName.length && mainAddress.length && mainEmail.length) {
            if (formData.personal_address !== undefined) {
                user.address = formData.personal_address
                personalAddress += formData.personal_address + ", "
            }
            if (formData.personal_suit_apt !== undefined) {
                user.suit_apt = formData.personal_suit_apt;
                personalAddress += formData.personal_suit_apt + ", "
            }
            if (formData.personal_city !== undefined) {
                user.city = formData.personal_city
                personalAddress += formData.personal_city + ", "
            }
            if (formData.personal_state !== undefined) {
                user.state = formData.state
                personalAddress += formData.personal_state + ", "
            }
            if (formData.personal_zip_code !== undefined) {
                user.zip_code = formData.personal_zip_code
                personalAddress += formData.personal_zip_code
            }
            if (formData.primary_email !== undefined) {
                user.email = formData.primary_email
            }
            if (formData.first_name !== undefined) {
                user.first_name = formData.first_name
            }
            if (formData.last_name !== undefined) {
                user.last_name = formData.last_name
            }
            mainName.text(user.first_name + " "+ user.last_name)
            mainAddress.text(personalAddress)
            mainEmail.html(user.email)
            globalUser = user
        }
    }


    jQuery(document).on("click" , "#as-director" , function (){
        directors.push(globalUser);
        jQuery("#business-manager-detail-table").hide();
        renderDirectorsTable();
        jQuery("#directors-table").show();
        jQuery("#buttons-for-director").hide();
    });

    // Show Directors in table newly added or previouslyAdded


    // Adding Event Listener on ModalForms
    jQuery(document).on('submit', ".modalForm",function (event) {
        event.preventDefault();
        // Validate the form inputs
        let isValid = true;
        const formElement = document.querySelector(`.modalForm`);
        for (let i = 0; i < formElement.elements.length; i++) {
            let input = formElement.elements[i];
            if (input.type !== 'submit' && input.dataset.required && !input.value.trim()) {
                isValid = false;
                input.classList.add('error');
            } else {
                input.classList.remove('error');
            }
        }
        // If the form is invalid, don't save the data and display an error message
        if (!isValid) {
            jQuery(this).find(".modal-body #error").html("<p class='text-danger'>Please fill all required fields*</p>");
            return;
        }

        if(formElement.getAttribute("id") === "dir-form")
            generateDirector()
        else if(formElement.getAttributjQuery("id") === "officer-form")
            generateOfficer()

        let myModal = new bootstrap.Modal(document.getElementById(formElement.getAttribute("data-modal-id")), {});
        closingModalProperly(myModal)
    });
    function generateDirector(){
        let newDirector = {};
        newDirector.first_name = jQuery("#dir_first_name").val().trim()
        newDirector.last_name = jQuery("#dir_last_name").val().trim()
        newDirector.address = jQuery("#dir_address").val().trim()
        newDirector.suit_apt = jQuery("#dir_suit_apt").val().trim()
        newDirector.city = jQuery("#dir_city").val().trim()
        newDirector.state = jQuery("#dir_state").val().trim()
        newDirector.zip_code = jQuery("#dir_zip_code").val().trim()
        newDirector.email = jQuery("#dir_email").val().trim()
        newDirector.is_main = false
        directors.push(newDirector);
        renderDirectorsTable();
        jQuery("#directors-table").show();
        jQuery("#directors-info").show();
        jQuery("#buttons-for-director").hide();
        jQuery("#directors-new-info").hide();
    }


    // Function to generate HTML for a single director row
    function generateDirectorRow(director, index) {
        let name = director.first_name + " " + director.last_name;
        let address = director.address;
        let email = director.email;
        if (director.suit_apt) {
            address += ", " + director.suit_apt;
        }
        address += ", " + director.city + ", " + director.state + " " + director.zip_code;

        return `<tr data-index="${index}">
        <td>${name}</td>
        <td>${address}</td>
        <td>${email}</td>
        <td><i class="remove-director-btn fa fa-close"></i></td>
        </tr>`;
    }

    // Function to render the directors table
    function renderDirectorsTable() {
        let tbody = document.querySelector("#directors-table tbody");
        tbody.innerHTML = "";
        directors.forEach((director, index) => {
            tbody.innerHTML += generateDirectorRow(director, index);
        });
        // Add event listener to the remove director buttons
        let removeBtns = document.querySelectorAll(".remove-director-btn");
        removeBtns.forEach(btn => {
            btn.addEventListener("click", () => {
                let row = btn.parentNode.parentNode;
                let index = parseInt(row.dataset.index);
                removeDirector(index);
            });
        });
    }

// Function to remove a director from the table and the directors array
    function removeDirector(index) {
        let isMain = directors[index].is_main;
        directors.splice(index, 1);
        renderDirectorsTable();
        if (isMain) {
            fetchMainUser();
            document.querySelector("#business-manager-detail-table").style.display = "block";
        }
        if(directors.length === 0){
            jQuery("#buttons-for-director").show();
            jQuery("#directors-table").hide()
        }
    }

    function generateOfficer(){

    }

})