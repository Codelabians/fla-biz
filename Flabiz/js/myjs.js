jQuery.noConflict();
jQuery(document).ready(function () {
    // Global Variables
    let formElement = document.getElementById('myForm');
    let formData = JSON.parse(sessionStorage.getItem('formData')) || {};
    let globalUser = {};
    let directors = [];

    jQuery('#name').text(formData.first_name);
    jQuery('#Address').text(formData.personal_address);
    jQuery('#email').text(formData.primary_email);
    jQuery('#email2').text(formData.primary_email);
    jQuery('#phone').text(formData.primary_phone);
    jQuery('#choice1').text(formData.preferred_name);
    jQuery('#choice2').text(formData.alternate_name_type);
    jQuery('#purpose').text(formData.principal_activity);
    jQuery('#purpose2').text(formData.company_purpose);
    jQuery('#physicalasdress').text(formData.address);
    jQuery('#mailingadress').text(formData.mailing_address);
    jQuery('#shares').text(formData.shares);
    jQuery('#alternate_name').text(formData.alternate_name);
    jQuery('#city').text(formData.city);
    jQuery('#application').text(formData.chekbox7);
    jQuery('#agrii').text(formData.agri);
    jQuery('#others').text(formData.others);
    jQuery('#pssn').text(formData.primary_ssn);
    jQuery('#date').text(formData.date);
    jQuery('#application2').text(formData.chekbox7);
    jQuery('#p_NameOnCard').text(formData.NameOnCard);
    jQuery('#p_CardNumber').text(formData.CardNumber);
    jQuery('#p_CVV').text(formData.CVV);
    jQuery('#P_Expiration').text(formData.Expiration);
    jQuery('#p_checkoutForm3').text(formData.checkoutForm3);
    jQuery('#p_checkoutForm4').text(formData.checkoutForm4);
    jQuery('#p_checkoutForm5').text(formData.checkoutForm5);
    jQuery('#signature').text(formData.signature);
    // Getting Modal
    if (jQuery("#errorModal").length) {
        let myModal = new bootstrap.Modal(document.getElementById("errorModal"), {});
        myModal._element.addEventListener('hidden.bs.modal', function (event) {
            closingModalProperly(myModal)
        });
    }

    // Closing Modal Properl
    function closingModalProperly(myModal) {
        document.body.classList.remove('modal-open');
        myModal._element.parentNode.removeChild(myModal._element);
        document.querySelector('.modal-backdrop').remove();
    }
    // Address Show Hide on basis of same address or different step One
    jQuery(document).on("click", ".business_mailing_address_check", function () {
        if (jQuery(this).val() === "different") {
            jQuery("#business_mailing_address").show()
        } else {
            jQuery("#business_mailing_address").hide()
        }
    })

    // Address Show Data on basis of same address on Step 1

    jQuery(document).on("keyup", ".address_fields", showAddress)

    function showAddress() {
        let address = ""
        let addressValue = jQuery("#address").val().trim();
        let cityValue = jQuery("#city").val().trim();
        let zipCodeValue = jQuery("#zip_code").val().trim();
        if (addressValue !== "") {
            if (cityValue !== "") {
                if (zipCodeValue !== "") {
                    address = "<h4>" + addressValue + "<br>" + cityValue + ",FL" + " " + zipCodeValue + "</h4>";
                    jQuery("#business_mailing_address_if_same").html(address)
                } else {
                    jQuery("#zip_code").addClass("in-valid");
                }
            } else {
                jQuery("#city").addClass("in-valid");
            }
        } else {
            jQuery("#address").addClass("in-valid");
        }
    }

    // Phone Number Validation
    jQuery(document).on("keyup", ".phone", function () {
        if (!formatPhoneNumber(jQuery(this).val())) {
            jQuery(this).val("")
            jQuery(this).addClass("error")
        } else {
            jQuery(this).val(formatPhoneNumber(jQuery(this).val()))
        }
    })
    // ssn Number Validation
    jQuery(document).on("keyup", "#ssn", function () {
        if (!formatssnNumber(jQuery(this).val())) {
            jQuery(this).val("")
            jQuery(this).addClass("error")
        } else {
            jQuery(this).val(formatssnNumber(jQuery(this).val()))
        }
    })
    // digital signature 
    jQuery(document).on("keyup", "#digital_signature", function () {
        if (jQuery(this).val().trim().length < 1) {
            jQuery(this).addClass("error")
        } else {
            jQuery(this).removeClass("error")

        }
    })
    // shares

    jQuery(document).on("keyup", "#shares", function () {
        if (jQuery(this).val().trim().length < 1) {
            jQuery(this).addClass("error")
        } else {
            jQuery(this).removeClass("error")

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
    // Formatting the ssn number
    function formatssnNumber(ssn) {
        // Remove all non-digit characters from the phone number
        const cleaned = ssn.replace(/\D/g, '');
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
    jQuery(document).on("keyup", "#company_purpose", function () {
        if (jQuery(this).val().trim().length > 50) {
            jQuery(this).addClass("error")
        } else {
            jQuery(this).removeClass("error")

        }
    })
    // zip code validation
    jQuery(document).on("keyup", "#zip_code", function () {
        if (jQuery(this).val().trim().length < 4) {
            jQuery(this).addClass("error")
        } else {
            jQuery(this).removeClass("error")

        }
    })
    // validation for phone number
    jQuery(document).on("keyup", "#phone", function () {
        if (jQuery(this).val().trim().length < 12) {
            jQuery(this).addClass("error")
        } else {
            jQuery(this).removeClass("error")

        }
    })
    // Validation Primary Email
    jQuery(document).on("keyup", "#primary_validate_email", function () {
        if (jQuery(this).val().trim() !== jQuery("#primary_email").val().trim()) {
            jQuery(this).addClass("#error")
        }
    })

    // Retrieve the stored form data from session storage, or create an empty object if no data has been stored yet
    if (formElement != null) {
        if (formElement.length) {
            genericFromValidation("myForm", "id")
            populateData(formElement)
            assigningEventListenerToForm(formElement)
        }
    }

    if (jQuery(".modalForm") != null) {
        if (jQuery(".modalForm").length)
            genericFromValidation("modalForm", "class")
    }
    fetchMainUser();

    // Generic Form Validation on all Fields
    function genericFromValidation(formSelector, selectorType) {
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
    function populateData(formElement) {
        // Loop through all the form elements
        for (var i = 0; i < formElement.elements.length; i++) {
            var input = formElement.elements[i];
            if (input.type !== 'submit' && formData[input.id || input.name] !== undefined) {
                // Use the stored form data to pre-populate the form inputs, if applicable
                input.value = formData[input.id || input.name];
            }
        }
    }
    // for validation of email
    function ValidateEmail(email) {
        var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
        return expr.test(email);
    };
    // FormData Event Listener on Submission and show Error in Modal
    function assigningEventListenerToForm(formElement) {
        formElement.addEventListener('submit', function (event) {
            event.preventDefault();
            // Validate the form inputs
            console.log("hrllo");

            let isValid = true;
            let errorMessage = "<ol>"
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
                    } else if (input.id === "phone" && input.value.length < 12) {
                        isValid = false;
                        errorMessage += "<li>Phone number can't be less than 12 characters</li>"
                        input.classList.add('error');
                    } else if (input.name === "company_purpose" && input.value.length > 50) {
                        isValid = false;
                        errorMessage += "<li>Company purpose can't be greater than 50 characters</li>"
                        input.classList.add('error');
                    } else if (input.name === "zip_code" && input.value.length < 4) {
                        isValid = false;
                        errorMessage += "<li>Zip code can't be less than 4 characters</li>"
                        input.classList.add('error');
                    } else if (input.id === "primary_email" && !ValidateEmail(input.value)) {
                        isValid = false;
                        errorMessage += "<li>Enter valid email</li>"
                        input.classList.add('error');
                    } else if (input.id === "primary_validate_email" && !ValidateEmail(input.value)) {
                        isValid = false;
                        errorMessage += "<li>Enter valid email</li>"
                        input.classList.add('error');
                    } else if (input.id === "primary_validate_email" && input.value.trim() !== jQuery("#primary_email").val()) {
                        isValid = false;
                        errorMessage += "<li>Validating email is incorrect</li>"
                        input.classList.add('error');
                    } else if (input.id === "ssn_number" && input.value.length < 11) {
                        isValid = false;
                        errorMessage += "<li>Enter presedent ssn number</li>"
                        input.classList.add('error');
                    } else if (input.id === "digital_signature" && input.value.length < 0) {
                        isValid = false;
                        errorMessage += "<li> Digital signature is required</li>"
                        input.classList.add('error');
                    } else if (input.id === "shares" && input.value.length < 0) {
                        isValid = false;
                        errorMessage += "<li> shares is required</li>"
                        input.classList.add('error');
                    } else if (input.id === "user_name" && input.value.length < 0) {
                        isValid = false;
                        errorMessage += "<li> user name is required</li>"
                        input.classList.add('error');
                    } else if (input.id === "password" && input.value.length < 0) {
                        isValid = false;
                        errorMessage += "<li> password is required</li>"
                        input.classList.add('error');
                    } else {
                        input.classList.remove('error');
                    }
                }
            }
            errorMessage += "</ol>";
            // If the form is invalid, don't save the data and display an error message
            if (!isValid) {
                jQuery("#modal-error").html(errorMessage);
                let myModal = new bootstrap.Modal(document.getElementById("errorModal"), {});
                myModal.show();
                return;
            }

            savingDataInSessionStorage(true);
            // Redirect the user to the next form page, or do whatever else you need to do
            window.location.href = jQuery(this).data('action');
        });
    }


    // Saving data In Session Storage
    function savingDataInSessionStorage(isForm = true) {
        // Create an object to store the form data
        var formInputData = {};
        // Loop through all the form elements
        if (isForm) {
            for (let i = 0; i < formElement.elements.length; i++) {
                var input = formElement.elements[i];
                console.log(input);
                if (input.type !== 'submit') {
                    formInputData[input.id || input.name] = input.value;
                }
            }
            // Merge the form data with any existing data in session storage
            var mergedFormData = Object.assign({}, formData, formInputData);
        } else {
            var mergedFormData = formData;
        }

        // Store the merged form data in session storage
        sessionStorage.setItem('formData', JSON.stringify(mergedFormData));
    }


    // Fetch Main User and show it on step 3
    function fetchMainUser() {
        let user = {
            first_name: "",
            last_name: "",
            address: "",
            suit_apt: "",
            city: "",
            state: "",
            zip_code: "",
            email: "",
            is_main: true
        }
        let personalAddress = "";
        let mainName = jQuery("#main-name");
        let mainAddress = jQuery("#main-address");
        let mainEmail = jQuery("#main-email");
        if (mainName.length && mainAddress.length && mainEmail.length) {
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
            mainName.text(user.first_name + " " + user.last_name)
            mainAddress.text(personalAddress)
            mainEmail.html(user.email)
            globalUser = user
        }
    }
    jQuery(document).on("click", "#as-director", function () {
        directors.push(globalUser);
        jQuery("#business-manager-detail-table").hide();
        renderDirectorsTable();
        jQuery("#directors-table").show();
        jQuery("#buttons-for-director").hide();
        jQuery("#business-manager-detail").show();
    });

    // Show Directors in table newly added or previouslyAdded


    // Adding Event Listener on ModalForms
    jQuery(document).on('submit', "#dir-form", function (event) {
        event.preventDefault();
        // Validate the form inputs
        const formElement = document.querySelector(`#dir-form`);
        modalFormValidate(formElement);
    });


    jQuery(document).on('submit', "#officer-form", function (event) {
        event.preventDefault();
        // Validate the form inputs
        const formElement = document.querySelector(`#officer-form`);
        modalFormValidate(formElement);
    });


    function modalFormValidate(formElement) {

        let isValid = true;
        console.log(formElement);

        const inputs = $(formElement).find('input, select, textarea');
        const elementsLength = inputs.length;

        for (let i = 0; i < elementsLength; i++) {
            const input = inputs.eq(i);
            if (input.attr('type') !== 'submit' && input.data('required') && !input.val().trim()) {
                isValid = false;
                input.addClass('error');
            } else {
                input.removeClass('error');
            }
        }

        // old code

        // let isValid = true;
        // console.log(formElement);
        // const elementsLength = formElement.elements.length;
        // for (let i = 0; i < elementsLength; i++) {
        //     let input = formElement.elements[i];
        //     if (input.type !== 'submit' && input.dataset.required && !input.value.trim()) {
        //         isValid = false;
        //         input.classList.add('error');
        //     } else {
        //         input.classList.remove('error');
        //     }
        // }

        // If the form is invalid, don't save the data and display an error message
        if (!isValid) {
            jQuery(this).find(".modal-body #error").html("<p class='text-danger'>Please fill all required fields*</p>");
            return;
        }



        if (formElement.id === "dir-form") {
            // console.log("i am dir id", formElement.id)
            generateDirector()
        }
        else if (formElement.id === "officer-form") {
            // console.log("i am officers id", formElement.id)
            generateOfficer()
        }

        

        let dataModal = new bootstrap.Modal(document.getElementById(formElement.getAttribute("data-modal-id")), {});
        console.log(dataModal);
    }

    // Generate new Director t form Submission
    function generateDirector() {
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
        if (directors.length === 0) {
            jQuery("#buttons-for-director").show();
            jQuery("#directors-table").hide()
            jQuery("#business-manager-detail").hide();
        }
    }

    // officers position
    function createOfficerByPosition(position) {
        let officer = {
            first_name: globalUser.first_name,
            last_name: globalUser.last_name,
            address: globalUser.address,
            suit_apt: globalUser.suit_apt,
            city: globalUser.city,
            state: globalUser.state,
            zip_code: globalUser.zip_code,
            email: globalUser.email,
            position: position
        };
        officers.push(officer);

    }
    jQuery(document).on("click", "#as-officer", function () {
        officers = [];
        // President
        createOfficerByPosition("President")
        createOfficerByPosition("Vice President")
        createOfficerByPosition("Secretary")
        createOfficerByPosition("Treasure")
        jQuery("#business-manager-officer-detail-table").hide();
        renderOfficersTable();
        jQuery("#officers-table").show();
        jQuery("#buttons-for-officer").hide();
        jQuery("#business-manager-officer-detail").show();
    });

    function generateOfficer() {

        let newOfficer = {};
        newOfficer.first_name = jQuery("#officer_first_name").val().trim()
        newOfficer.last_name = jQuery("#officer_last_name").val().trim()
        newOfficer.address = jQuery("#officer_address").val().trim()
        newOfficer.suit_apt = jQuery("#officer_suit_apt").val().trim()
        newOfficer.city = jQuery("#officer_city").val().trim()
        newOfficer.state = jQuery("#officer_state").val().trim()
        newOfficer.zip_code = jQuery("#officer_zip_code").val().trim()
        newOfficer.email = jQuery("#officer_email").val().trim()
        newOfficer.position = jQuery("#officer_position").val().trim()
        if (!checkPosition(newOfficer)) {
            // officers.push(newOfficer);
        }
        renderOfficersTable();
        jQuery("#officer-table").show();
        jQuery("#officer-info").show();
        jQuery("#buttons-for-officer").hide();
        jQuery("#officer-new-info").hide();
    }

    function checkPosition(newOfficer) {
        for (var i = 0; i < officers.length; i++) {
            console.log(officers[i].position);
            if (officers[i].position === newOfficer.position) {
                officers[i] = newOfficer; // replace existing officer object with newOfficer
                return true; // position already exists in array
            }
        }
        return false; // position doesn't exist in array
    }

    function renderOfficersTable() {
        let tbody = document.querySelector("#officers-table tbody");
        tbody.innerHTML = "";
        officers.forEach((officer, index) => {
            tbody.innerHTML += generateOfficerRow(officer, index);
        });
        // Add event listener to the remove director buttons
        let removeBtns = document.querySelectorAll(".remove-officer-btn");
        removeBtns.forEach(btn => {
            btn.addEventListener("click", () => {
                let row = btn.parentNode.parentNode;
                let index = parseInt(row.dataset.index);
                removeOfficer(index);
            });
        });
    }

    // Function to generate HTML for a single officer row
    function generateOfficerRow(officer, index) {
        let name = officer.first_name + " " + officer.last_name + "<br>(" + officer.position + ")"
        let address = officer.address;
        let email = officer.email;
        if (officer.suit_apt) {
            address += ", " + officer.suit_apt;
        }
        address += ", " + officer.city + ", " + officer.state + " " + officer.zip_code;

        return `<tr data-index="${index}">
    <td>${name}</td>
    <td>${address}</td>
    <td>${email}</td>
    <td><i class="remove-officer-btn fa fa-close"></i></td>
    </tr>`;
    }

    function removeOfficer(index) {
        officers.splice(index, 1);
        renderOfficersTable();
        if (officers.length === 0) {
            jQuery("#buttons-for-officer").show();
            jQuery("#officers-table").hide()
            jQuery("#business-manager-officer-detail").hide();
        }
    }

    function checkPresident() {
        for (let i = 0; i < officers.length; i++) {
            if (officers[i].position === "President") {
                return true; // president exists in array
            }
        }
        return false; // president doesn't exist in array
    }

    jQuery(document).on("click", "#step-three-button", function () {
        let errorMessage = "<ol>";
        let countError = 0;
        isValid = true;
        if (directors.length === 0) {
            isValid = false;
            countError++;
            errorMessage += countError + ". You must add at least one director"

        } else if (officers.length === 0) {
            isValid = false
            countError++
            errorMessage += countError + ". You must add at least one officer"
        } else if (!checkPresident()) {
            isValid = false
            countError++
            errorMessage += countError + ". You must add President"
        }
        if (!isValid) {
            jQuery("#modal-error").html(errorMessage);
            if (jQuery("#errorModal").length) {
                let myModal = new bootstrap.Modal(document.getElementById("errorModal"), {});
                myModal.show();
            }
        }

        formData.directors = directors;
        formData.officers = officers;
        savingDataInSessionStorage(false)
        window.location.href = "step-four";
    })



    // show and hide data on checkbox
    $(function () {
        $("#chkbox").click(function () {
            if ($(this).is(":checked")) {
                $(".ragreement").show();
                $("#ragent").show();
            } else {
                $(".ragreement").hide();
                $("#ragent").hide();
            }
        });
    });

    //   show data with checkbox in sidebar
    $(function () {
        $("#chekbox").click(function () {
            if ($(this).is(":checked")) {
                $(".ragreement").show();
                $("#agriment").show();
            } else {
                $(".ragreement").hide();
                $("#agriment").hide();
            }
        });
        $("#chekbox2").click(function () {
            if ($(this).is(":checked")) {
                $("#order2").show();
            } else {
                $("#order2").hide();
            }
        });
        $("#chekbox3").click(function () {
            if ($(this).is(":checked")) {
                $("#order3").show();
                $(".Fictitiousname").show();
            } else {
                $("#order3").hide();
                $(".Fictitiousname").hide();
            }
        });
        $("#chekbox4").click(function () {
            if ($(this).is(":checked")) {
                $("#order4").show();
            } else {
                $("#order4").hide();
            }
        });
        $("#chekbox5").click(function () {
            if ($(this).is(":checked")) {
                $("#order5").show();
            } else {
                $("#order5").hide();
            }
        });
        $("#chekbox6").click(function () {
            if ($(this).is(":checked")) {
                $("#order6").show();
            } else {
                $("#order6").hide();
            }
        });
        $("#chekbox7").click(function () {
            if ($(this).is(":checked")) {
                $("#order7").show();
            } else {
                $("#order7").hide();
            }
        });
        $("#checbox").click(function () {
            if ($(this).is(":checked")) {
                $("#rr").show();
            } else {
                $("#rr").hide();
            }
        });

    });

    iterateDirectors();
    function iterateDirectors() {
        let output = "";

        if (formData.directors != undefined) {
            for (i = 0; i < formData.directors.length; i++) {
                output += "<p>" + formData.directors[i].first_name + "</p>"
                    + "" + "<p>" + formData.directors[i].address + "</p>"


            }
            if (jQuery("#myLis".length)) {
                jQuery("#myLis").html(output);

            }
        }
    }
    iterateofficers();
    function iterateofficers() {
        let officeroutput = "";
        if (formData.officers != undefined) {

            for (i = 0; i < formData.officers.length; i++) {
                officeroutput += "<li >" + formData.officers[i].first_name
                    + "" + formData.officers[i].address + "</li>"


            }
            if (jQuery("#officerLis".length)) {
                jQuery("#officerLis").html(officeroutput);

            }
        }
    }

    jQuery(document).on("click", "#final", function () {

        // Send AJAX request to PHP script
        jQuery.ajax({
            type: 'POST',
            url: jQuery(this).data("url"),
            data: {
                action: 'insert_form_data',
                formData: formData
            },
            success: function (response) {
                console.log(response);
                alert("coming soon");
            },
            error: function (xhr, status, error) {
                console.error("the error of sending ajax request is:", error, "stauts:", status, "and xhr:", xhr);
            }
        });
    })


});

