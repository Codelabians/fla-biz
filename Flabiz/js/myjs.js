jQuery(document).ready(function() {
    $('#btnsubmit').click(function() {
        var d = new Date(),
            n = d.getMonth() + 1,
            y = d.getFullYear();
        if (parseInt($('#expiryMonthDD').val()) < n) {
            if (parseInt($('#expiryYearDD').val()) <= y) {
                alert('Please enter valid credit card expiry date and month');
                return false;
            }
        }
    });

    var cfname = $("#cfname").val();
    var clname = $("#clname").val();
    var caddress = $("#caddress").val();
    var cCity = $("#cCity").val();
    var cState = $("#cState").val();
    var cddlCountry = $("#cddlCountry").val();
    var cZip = $("#cZip").val();
    var cEmail = $("#cEmail").val();
    $.ajax({
        type: "post",
        url: "/redeem-submit",
        dataType: "json",
        data: {
            cfname: cfname,
            clname: clname,
            caddress: caddress,
            cCity: cCity,
            cState: cState,
            cddlCountry: cddlCountry,
            cZip: cZip,
            cEmail: cEmail

        },
        success: function(result) {
            $("#message").html(result.message);
            if (result.PromoCodeRedeemed == "YES") {
                $("#hdnPRD").val("Yes");
            } else {
                $("#hdnPRD").val("No");
            }
        }
    });

    $("#redeem").on("click", function() {
        var promo = $("#promocode").val();
        $.ajax({
            type: "post",
            url: "/redeem-submit",
            dataType: "json",
            data: {
                promo: promo
            },
            success: function(result) {
                $("#error").html(result.IsRedeem);
                $("#message").html(result.message);
                if (result.PromoCodeRedeemed == "YES") {
                    $("#hdnPRD").val("Yes");
                } else {
                    $("#hdnPRD").val("No");
                }
                $("#promocode").val();
            }
        });
    });

    function isNumberKey(evt) {
        var regularExpression = /^[0-9]$/;
        var valid = regularExpression.test(pwd);
        return valid;
    }
    jQuery("#cCvv").on("keyup", function() {
        checkdate();
    });
    // var link = jQuery("#checkoutLink").attr('href');
    // console.log(link);
    // jQuery("#checkoutLink").attr('href','#');


    function checkdate() {
        var myInput = jQuery("#cCvv").val();
        var numbers = "^[0-9]*$";
        console.log(myInput);
        if (myInput.match(numbers)) {
            console.log(myInput);
            if (myInput.length < 3) {
                console.log("hell " + myInput);
                var element = $("#cCvv");
                var error = "<br/><span class='error_msg'>Minimum Length is 3</span>";
                $("#error").html(error);
                $("#checkoutBtn").prop("disabled", true);
                return;
            } else {
                $("#error").html("");
            }
        } else {
            var element = $("#cCvv");
            var error = "<br/><span class='error_msg'>Enter a valid ccvv</span>";
            $("#error").html(error);
            element.val("");
            $("#checkoutBtn").prop("disabled", true);
            return;
        }
        var month = jQuery("#expiryMonthDD").val();
        var year = jQuery("#expiryYearDD").val();
        if (month == "Select Month") {
            jQuery("#montherror").html("<span id='monthError' class='text-danger'>Select Month Before Selecting Year</span>");
            jQuery("#expiryYearDD").val("Select Month");
            $("#checkoutBtn").prop("disabled", true);
        } else {
            jQuery("#monthError").remove();
            var d = new Date(),
                n = d.getMonth(),
                y = d.getFullYear();
            if (year == y) {
                var mon = n + 1;
                if (month < mon) {
                    // jQuery("#montherror").html("<span id='yearError' class='text-danger'>Month Must be Greater Than The Current Month</span>");

                    $("#checkoutBtn").attr("disabled", "disabled");
                } else {
                    jQuery("#checkoutBtn").removeAttr("disabled");
                    // jQuery("#checkoutLink").attr('href',link);
                }
            } else {
                jQuery("#checkoutBtn").removeAttr("disabled");
                // jQuery("#checkoutLink").attr('href',link);
            }
        }
    }


    jQuery("#expiryYearDD").on("change", function() {
        checkdate();
    });

    jQuery("#expiryMonthDD").on("change", function() {
        jQuery("#yearError").remove();
        jQuery("#expiryYearDD").val("Select Year");
        $("#checkoutBtn").attr("disabled", "disabled");
    });
    $('#ckagree').click(function() {
        if (this.checked == true) {
            this.checked = true;
        } else {
            this.checked = true;
        }
    });
    $('#ckupload').click(function() {
        if (this.checked) {
            $('#hdnUpload').val('YES');
        } else {
            $('#hdnUpload').val('NO');
        }
    });
    $('#ckPriority').click(function() {
        if (this.checked) {
            $('#hdnPriority').val('YES');
        } else {
            $('#hdnPriority').val('NO');
        }
    });
    $('#ckReward').click(function() {
        if (this.checked) {
            $('#hdnRewards').val('YES');
        } else {
            $('#hdnRewards').val('NO');
        }
    });
    
});