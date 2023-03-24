<?php 
// Template Name: Step2
get_header();

session_start();
if (!isset($_POST['txtEmailSend']))
 {
header ("Location: /apply");
exit;
}
?>
<script>$(document).ready(function() {
$("#rbAuthorSolo").click(function(){
 $("#pCoauthor").hide();
 });
 }); 
 $(document).ready(function() {
 $("#rbAuthorCo").click(function(){
 $("#pCoauthor").show();});});$(document).ready(function() {
 $("#rbPseudonymYes").click(function(){$("#pSeudonym").show();});}); $(document).ready(function() {$("#rbPseudonymNo").click(function(){$("#pSeudonym").hide();});});$(document).ready(function() {$("#formid").validate({rules:{rbPrevPublished:{required: true},rbDerPublished:{required: true},rbHire:{required: true},rbAuthor:{required: true},rbPseudonym:{required: true}}, messages:{rbPrevPublished:{required:"<span class='error_msg'>Please select one</span><br/>"},rbDerPublished:{required:"<br/><span class='error_msg'>Please select one</span>"},rbHire:{required:"<br/><span class='error_msg'>Please select one</span>"},rbAuthor:{required:"<br/><span class='error_msg'>Please select one</span>"},rbPseudonym:{required: "<br/><span class='error_msg'>Please select one</span>"}},errorPlacement:function(error, element){if ( element.is(":radio") ) {error.prependTo(element.parent());}else {error.insertAfter( element );}}});});</script>

<div id="tf-works">
    <div class="container">
        <div class="entry-content">
<form id="formid" action="/author-information" method="POST" class="form-horizontal">

<?php
function wpse27856_set_content_type(){
    return "text/html";
}

if($_POST['submit']) {
    if (isset($_POST['txtEmailSend']))
        $_SESSION['ValidStep']=$_POST['txtEmailSend'];   
    
?>
<input type='hidden' id='hdnEmailSend' name='hdnEmailSend'  value="<?= $_POST['txtEmailSend'] ?>" />
<input type='hidden' id='hdnCategory' name='hdnCategory'  value="<?= $_POST['rbCategory'] ?>" />
<input type='hidden' id='hdnNature' name='hdnNature' value="<?= $_POST['txtNature'] ?>" />
<input type='hidden' id='hdnTitle' name='hdnTitle' value="<?= htmlspecialchars($_POST['txtTitle']) ?>" />
<input type='hidden' id='hdnAnotherTitle' name='hdnAnotherTitle' value="<?= htmlspecialchars($_POST['txtAnotherTitle']) ?>" />
<input type='hidden' id='hdnCreateYear' name='hdnCreateYear' value="<?= $_POST['txtCreateYear'] ?>" />
<input type='hidden' id='hdnPublished' name='hdnPublished' value="<?= $_POST['rbPublished'] ?>" />
<input type='hidden' id='hdnPrevPublishDate' name='hdnPrevPublishDate' value="<?= $_POST['txtPrevPublishDate'] ?>" />
<?php
} ?>
 <h1 class="text-center text-capitalize">Step Two: Author
</h1>
<hr>

 <div class="form-group">
                    <div class='col-sm-5'>

                        <label for="rbPrevPublished" class="control-label">Has a previous Copyright Registration been filed for this work?:</label>
                    </div>
                    <div class="col-sm-7">
                       <input type="radio" name="rbPrevPublished" id="rbPrevPublishedYes" value="Yes" /> Yes  <input type="radio" name="rbPrevPublished" id="rbPrevPublishedNo" value="No" /> No
                    </div>

                </div>
 <div class="form-group">
<div class='col-sm-12'>
<p class='help'><i>(A compilation is created by the collection and assembling of preexisting materials, arranged in such a way that the resulting work as a whole constitutes an original work of authorship. If you adapted or arranged preexisting materials that are not your own, and assembled them into an original work, you have created a compilation. For a compilation, copyright protects only the author's original material. Examples include: directories, catalogs, collage of photographs, greatest hits collections. )</i> 
</div>
                </div>
<div class="form-group">
<div class="col-sm-12">
<h3>Author(s) <i>(The person(s) who created the work seeking registration is/are considered the Author(s). )</i></h3>
</div>
</div>
<div class="form-group">
                    <div class='col-sm-5'>

                        <label for="rbHire" class="control-label">Is the work being registered a Work Made for Hire?: </label>
                    </div>
                    <div class="col-sm-7">
                      <input type="radio" name="rbHire" id="rbRegPublishedYes" value="Yes" onClick="hire('yes')" /> Yes  
                      <input type="radio" name="rbHire" id="rbRegPublishedNo" onClick="hire('no')" value="No" /> No
                      <div class="form-group" id="hired_authors" style="display:none">
                          <label for="hired_authors">Please enter the authors name that was hired</label>
                          <textarea name="hired_authors" class="form-control"></textarea>
                      </div>
                    </div>
<div class='col-sm-12'>
<p class='help'>
<i>(A work made for hire is a work created by an employee within the scope of his or her employment; or if the parties agree in writing that the work be considered a work made for hire. This, for example, could be a piece of software written by a programmer for his employer. If the work is made for hire, the employer or other person for whom the work was prepared is considered the author. If you are registering on behalf of a business, the work is considered a work made for hire; so select Yes.)</i>
</p>
</div>
                </div>
<div class="form-group">
                    <div class='col-sm-5'>

                        <label for="rbHire" class="control-label">Please tell us if there are more than one author:  </label>
                    </div>
                    <div class="col-sm-7">
                 <input type="radio" name="rbAuthor" id="rbAuthorSolo" value="Sole author" /> Sole author <input type="radio" name="rbAuthor" id="rbAuthorCo" value="Co author" /> Co author
<div class="col-sm-12" id='pCoauthor' style="display:none">
<label class="col-sm-6">Please enter co authors name (separated by comma):</label>
<div class="col-sm-6"><input type='text' name="txtCoAuthors" id="txtCoAuthors" class="form-control"/></div>
</div>
                    </div>
<div class='col-sm-12'>
<p class='help'>
<i>(You are the Sole Author if you created and own the work being registered. You are a Co-Author if two or more people contributed to the work, and both intend their respective contributions to join together as a single work. The contribution must be more than minimal work. Someone who performs non-creative work such as typing, collating, or correcting spelling errors is not considered an author.)</i>
</p>
</div>
                </div>
<div class="form-group">
                    <div class='col-sm-5'>

                        <label for="rbHire" class="control-label"> Is the author anonymous or using a pseudonym?:</label>
                    </div>
                    <div class="col-sm-7">
                <span id="radiobutt "><input type="radio" name="rbPseudonym" id="rbPseudonymYes" value="Yes" /> Yes  <input type="radio" name="rbPseudonym" id="rbPseudonymNo" value="No" /> No</span>
<div class="col-sm-12" id='pSeudonym' style="display:none">
<label class="col-sm-6">Please enter Pseudonym/Anonymous:</label>
<div class="col-sm-6"><input type='text' name="txtPseudonym" id="txtPseudonym" class="form-control"/></div>
</div>
                    </div>
<div class='col-sm-12'>
<p class='help'>
<i>(The authors contribution is anonymous if not identified on the work. An author can also use a pseudonym if identified under a fictitious name. If anonymous, leave the Name line blank or state anonymous. For a pseudonym, either leave the Name line blank, or enter the pseudonym and identify it as such. (Ex: John J. Jones, pseudonym) The citizenship or domicile must still be indicated.)</i>
</p>
</div>
                </div>
 <div class="form-group">
                    <div class="col-sm-offset-5 col-sm-7">
                        <input type="submit" name="submit" value="Save & Continue" class='btn btn-sm btn-danger' />
                    </div>
                </div>

</form>
</div>
</div>
</div>
<?php 
    get_footer();
 ?>
 <script>
     function hire(val){
         if(val == "yes"){
             $("#hired_authors").show();
         }else{
             $("#hired_authors").hide();
         }
     }
 </script>