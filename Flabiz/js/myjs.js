jQuery.noConflict();
jQuery(document).ready(function () {
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
    jQuery(document).on("keyup" , ".phone" , formatPhoneNumber(jQuery(this).val()))
    function formatPhoneNumber(phoneNumber) {
        // Remove all non-digit characters from the phone number
        const cleaned = phoneNumber.replace(/\D/g, '');
        // Format the cleaned phone number with hyphens
        let formatted = "";
        for (let i = 0; i < cleaned.length && i < 10; i++) {
            if (i === 3 || i === 6) {
                formatted += '-';
            }
            formatted += cleaned[i];
        }
        return formatted;
    }
    // Get the form element
    var formElement = document.getElementById('myForm');

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
        for (var i = 0; i < formElement.elements.length; i++) {
            var input = formElement.elements[i];
            if (input.type !== 'submit' && input.dataset.required && !input.value.trim()) {
                isValid = false;
                input.classList.add('error');
            } else {
                input.classList.remove('error');
            }
        }

        // If the form is invalid, don't save the data and display an error message
        if (!isValid) {
            var errorMessage = document.createElement('div');
            errorMessage.classList.add('error-message');
            errorMessage.textContent = 'Please fill in all required fields';
            formElement.appendChild(errorMessage);
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

})