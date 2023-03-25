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
    jQuery(document).on("keyup" , ".phone_numbers" , formatPhoneNumber(jQuery(this).val()))
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

})