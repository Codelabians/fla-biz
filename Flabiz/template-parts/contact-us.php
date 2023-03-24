<?php
    // Template Name: Contact Us
    get_header();
    ?>

<div id="tf-works">
    <div class="container">
        <div class="entry-content">
                <script> 
                    $(document).ready(function() {$("#formid").validate({rules:{txtName:{required: true},txtEmail:{required: true, email:true},txtMsg:{required: true}}, messages:{txtName:{required:"<br /><span class='error_msg'>Please enter Name</span><br />"},txtEmail:{required:"<br /><span class='error_msg'>Please enter Email</span>", email:"<br /><span class='error_msg'>Not a valid email</span>"},txtMsg:{required:"<br /><span class='error_msg'>Please enter your message</span>"}},errorPlacement:function(error, element){if ( element.is(":radio") ) {error.prependTo(element.parent());}else {error.insertAfter( element );}}});});
                </script>
                
                <form id="formid" class="form-horizontal" action="" method="POST" name="formid">
                    <i class="help" style="font-size: 8pt; color: #ccc;">(Please send your feedback and queries to us)</i>
                    <?php
                    function wpse27856_set_content_type(){
                        return "text/html";
                    }
 if($_POST['submit']) {
    add_filter( 'wp_mail_content_type','wpse27856_set_content_type' );
    $msg="A contact mail has been sent from copyright Registry site. Please find the details below";
    $msg=$msg."<b>Details</b>";
    $msg=$msg."Name: ".$_POST['txtName']."<br />";
    $msg=$msg."Email: ".$_POST['txtEmail']."<br />";
    $msg=$msg."Message: ".$_POST['txtmsg']."<br />";
    wp_mail('contact@copyrightofficeonline.com', 'Feedback- Copyright Registry',$msg);
    echo "<div class='alert alert-success'>Thank you for contacting us. We will get back to you shortly</div>";
}
?>
<div class="form-group">
<div class="col-sm-3"><label class="control-label" for="txtName">Name :*</label></div>
<div class="col-sm-6"><input id="txtName" class="form-control" name="txtName" type="text" value="" /></div>
</div>
<div class="form-group">
<div class="col-sm-3"><label class="control-label" for="txtEmail">Email:*</label></div>
<div class="col-sm-6"><input id="txtEmail" class="form-control" name="txtEmail" type="text" value="" /></div>
</div>
<div class="form-group">
<div class="col-sm-3"><label class="control-label" for="txtMsg">Message:*</label></div>
<div class="col-sm-6"><textarea id="txtMsg" class="form-control" cols="35" name="txtMsg" rows="5"></textarea></div>
</div>
<div class="form-group">
<div class="col-sm-offset-4 col-sm-8"><input class="btn" name="submit" type="submit" value="Send" /></div>
<p> </p>
</div>
</form>
</div>
</div>
</div>