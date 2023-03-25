$.noConflict();
$(document).ready(function () {
    $(document).on("click" , ".business_mailing_address_check" , function (){
        if($(this).val() === "different"){
            $("#business_mailing_address").show()
        }else {
            $("#business_mailing_address").hide()
        }
    })
    $(document).on("keyup" , ".address_fields" , showAddress)

    function showAddress(){
        var address = ""
        if($("#address").val().trim() !== ""){
            if($("#city").val().trim() !== ""){
                if($("#zip_code").val().trim() !== ""){
                    address = $("#address").val().trim()+"<br>"+$("#city").val().trim()+",FL"+" "+$("#zip_code").val().trim();
                    $("#business_mailing_address_if_same").text(address)
                }else{
                    $("#zip_code").addClass("in-valid");
                }
            }else{
                $("#city").addClass("in-valid");
            }
        }else{
            $("#address").addClass("in-valid");
        }
    }
    $(document).on("keyup" , ".phone_numbers" , formatPhoneNumber($(this).val()))
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