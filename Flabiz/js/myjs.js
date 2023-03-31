jQuery.noConflict();
jQuery(document).ready(function () {
    // Getting Modal
    var myModal = new bootstrap.Modal(document.getElementById("errorModal"), {});

    // Address Validation
    jQuery(document).on("click" , ".business_mailing_address_check" , function (){
        if(jQuery(this).val() === "different"){
            jQuery("#business_mailing_address").show()
        }else {
            jQuery("#business_mailing_address").hide()
        }
    })
    jQuery(document).on("keyup" , ".address_fields" , showAddress)

    function showAddress(){
        var address = ""
        if(jQuery("#address").val().trim() !== ""){
            if(jQuery("#city").val().trim() !== ""){
                if(jQuery("#zip_code").val().trim() !== ""){
                    address = "<h4>"+jQuery("#address").val().trim()+"<br>"+jQuery("#city").val().trim()+",FL"+" "+jQuery("#zip_code").val().trim()+"</h4>";
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

    // Phone Validtion
    jQuery(document).on("keyup" , ".phone" , function () {
        if(!formatPhoneNumber(jQuery(this).val())){
            jQuery(this).addClass("error")
        }else{
            jQuery(this).val(formatPhoneNumber(jQuery(this).val()))
        }
    })

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



    // Get the form element
    var formElement = document.getElementById('myForm');

    // Generaric form validation
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


// Retrieve the stored form data from session storage, or create an empty object if no data has been stored yet
    var formData = JSON.parse(sessionStorage.getItem('formData')) || {};

// Loop through all the form elements
    for (var i = 0; i < formElement.elements.length; i++) {
        var input = formElement.elements[i];
        if (input.type !== 'submit' && formData[input.id || input.name] !== undefined) {
                // Use the stored form data to pre-populate the form inputs, if applicable
            input.value = formData[input.id || input.name];
        }
    }

// Add an event listener to the form that listens for the submit event
    formElement.addEventListener('submit', function(event) {
        event.preventDefault();

        // Validate the form inputs
        var isValid = true;
        var errorMessage = "<ol>"
        for (var i = 0; i < formElement.elements.length; i++) {
            var input = formElement.elements[i];
            if (input.type !== 'submit' && input.dataset.required && !input.value.trim()) {
                isValid = false;
                errorMessage += "<li>"+input.dataset.error+"</li>"
                input.classList.add('error');
            }else {
                if(input.classList.contains("phone") && input.value.startsWith("0")){
                    isValid = false;
                    errorMessage += "<li>Phone Number format is XXX-XXX-XXXX</li>"
                    input.classList.add('error');
                }else if(input.name === "company_purpose" && input.value.length > 50){
                    isValid = false;
                    errorMessage += "<li>Company purpose can't br greater than 50 characters</li>"
                    input.classList.add('error');
                }
                input.classList.remove('error');
            }
        }
        errorMessage+="</ol>";
        // If the form is invalid, don't save the data and display an error message
        if (!isValid) {
            jQuery("#modal-error").html(errorMessage);
            myModal.show();
            return;
        }

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

        // Redirect the user to the next form page, or do whatever else you need to do
        window.location.href = jQuery(this).data('action');
    });


    myModal._element.addEventListener('hidden.bs.modal', function (event) {
        document.body.classList.remove('modal-open');
        myModal._element.parentNode.removeChild(myModal._element);
        document.querySelector('.modal-backdrop').remove();

    });

})