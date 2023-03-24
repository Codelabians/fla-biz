<?php
// Template Name: Record
get_header();
function removeLineBreaks($text) {
    $result = '';
    $len = strlen($text);
    for ($i = 0; $i < $len; $i++) {
        if ($text[$i] != "\n" && $text[$i] != "\r") {
            $result .= $text[$i];
        }
    }
    return $result;
}

?>
<div id="tf-works">
        <div class="container">
    
<?php
global $wpdb;
$user_case_table = $wpdb->prefix . "user_cases";
$table = $wpdb->prefix . "copyrightinfo";
extract($_GET);
$record_id = $_GET['id'];

if (isset($_POST['btnSave'])) {
    extract($_POST);
    //fetching data in descending order (lastest entry first)
    if(!empty($txtnote)):
        $qu =$wpdb->update(
           $table,
           array( 'note' => $txtnote ), 
           array( 'id' => $record_id ), 
           array( '%s' ), 
           array( '%d' )
        );
        if($qu){
            ?>
            <p class='error_msg' style='padding:10px;margin:10px 2px;width:95%'>Note Added Successfully</p>
            <?php
        }
    endif;
    $query = $wpdb->get_results("SELECT * FROM $user_case_table WHERE order_id = '$record_id'");
    
        if(sizeof($query) > 0){
            $que = $wpdb->update(
                           $user_case_table,
                           array(
                              'title' => $title,
                              'case_no' => $case_no,
                              'opened' => $opened,
                              'status' => $status,
                              'type_of_work' => $type_of_work,
                           ),
                           array( 'order_id' => $record_id ),
                           array( '%s', '%s', '%s', '%s', '%s' ),
                           array( '%d' )
                        );
            if($que){
                ?>
                <p class='error_msg' style='padding:10px;margin:10px 2px;width:95%'>Updated successfully</p>
                <?php
            }
        }else{
            
            $que = $wpdb->insert(
                       $user_case_table,
                       array(
                          'case_no' => $case_no,
                          'title' => $title,
                          'opened' => $opened,
                          'status' => $status,
                          'type_of_work' => $type_of_work,
                          'order_id' => $record_id
                       ),
                       array( '%s', '%s', '%s', '%s', '%s', '%d' )
                    );
            if($que){
                ?>
                <p class='error_msg' style='padding:10px;margin:10px 2px;width:95%'>Updated successfully</p>
            <?php
            }else{
                echo $wpdb->last_error;
            }
        }
    }
?>
            <div class="entry-content">
                <p style='text-align:right' class='log'><a href='admin-dashboard'>Admin Dashboard</a></p>
                <form id="formid" action="" method="POST">
                <?php
                    if (current_user_can('manage_options')) {
                    //fetching data in descending order (lastest entry first)

                    $cases = $wpdb->get_results("SELECT * FROM $user_case_table WHERE order_id = '$record_id'");

                    $result = $wpdb->get_results("SELECT * FROM $table where ID='$record_id'");
                    
                    if (sizeof($result) > 0):
                        $res = $result[0];
                        $rewdata = $wpdb->get_results("Select count(*) as memrewarded from $table where correspondence_email_8='" . $res->correspondence_email_8 . "' and reward='YES'");
                        if ($rewdata[0]->memrewarded > 0) {
                            ?>
                            <p class='info_msg'> Membership Reward Program member (114.75 USD)</p>
                        <?php
                        } else {
                            $rewdata1 = $wpdb->get_results("Select count(*) as existingmemb from $table where correspondence_email_8='" . $res->correspondence_email_8 . "'");
                            if ($rewdata1[0]->existingmemb > 1) {
                                ?>
                                    <p class='info_msg'> Existing Member (121.50 USD)</p>
                                <?php
                            }
                        }
                    ?>

                    <table cellpadding='0' cellspacing='5' width='100%'>
                        <tr>
                            <td>Category of Work:</td>
                            <td class='heading'><?= $res->category_of_work_1 ?></td>
                            <td>Nature of Work:</td>
                            <td class='heading'><?=  preg_replace('/\\\\/', '', $res->nature_of_work_1) ?> </td></tr>
                        <tr>
                            <td>Title:</td>
                            <td class='heading'><?= preg_replace('/\\\\/', '', $res->title_1) ?></td>
                            <td>Alternate Title:</td>
                            <td class='heading'><?= preg_replace('/\\\\/', '', $res->alternate_title_1) ?></td>
                        </tr>
                        <tr>
                            <td>Completed Year:</td>
                            <td class='heading'><?= $res->completed_year_2 ?> </td>
                            <td>Is Published?:</td>
                            <td class='heading'><?= $res->is_published_2 ?> </td>
                        </tr>
                        <tr>
                            <td>Previous Published Date:</td>
                            <td class='heading'><?= $res->Previous_Published_Date ?> </td>
                            <td>Is Previous Copyright Filled?:</td>
                            <td class='heading'><?= $res->is_previous_copyright_filled_3 ?> </td>
                        </tr>
                        <tr>
                            <td>Is Derivative?:</td>
                            <td class='heading'><?= $res->is_derivative_3 ?> </td>
                            <td>Is For Hire?:</td>
                            <td class='heading'><?= $res->is_for_hire_4 ?> 
                                (
                                <?php
                                    if($res->is_for_hire_4 == "Yes"){
                                ?>
                                    <?= $res->hired_authors ?> )
                                <?php
                                    }
                                ?>
                                </td>
                        </tr>
                        <tr>
                            <td>Author Type:</td>
                            <td class='heading'> <?= $res->author_type_5?> </td>
                            <td>Co Authors:</td>
                            <td class='heading'> <?= $res->CoAuthors?> </td>
                        </tr>
                        <tr>
                            <td>Is Author Anonymous?:</td>
                            <td class='heading' colspan='3'> 
                                <?= $res->is_author_anonymous_5?>
                            </td>
                        </tr>
                        <tr>
                            <td> Pseudonym/Anonymous:</td>
                            <?php
                                if ($res->PsedonymText != ''):
                            ?>
                                <td colspan='3' class='heading'> <?= $res->PsedonymText?> </td>
                             <?php
                                else:
                            ?>
                                <td colspan='3' class='heading'>-</td>
                            <?php
                                endif;
                            ?>
                        </tr>
                        <tr>
                            <td>Author First Name:</td>
                            <td class='heading'><?= str_replace("/", "", $res->author_fname_5) ?> </td>
                            <td>Author Middle Name:</td>
                            <td class='heading'><?= str_replace("/", "", $res->author_mname_5) ?> </td>
                        </tr>
                        <tr>
                            <td>Author Last Name:</td>
                            <td class='heading'><?= str_replace("/", "", $res->author_lname_5) ?> </td>
                            <td>Author Address:</td>
                            <td class='heading'> <?= preg_replace('/\\\\/', '', $res->author_maddress_5) ?> </td></tr>
                        <tr>
                            <td>Author City:</td>
                            <td class='heading'> <?= $res->author_city_5?> </td>
                            <td>Author State:</td>
                            <td class='heading'> <?= $res->author_state_5?> </td>
                        </tr>
                        <tr>
                            <td>Author Country:</td>
                            <td class='heading'> <?= $res->author_country_5?> </td>
                            <td>Author Zip:</td>
                            <td class='heading'> <?= $res->author_zip_5?> </td>
                        </tr>
                        <tr>
                            <td>Author Date of Birth:</td>
                            <td class='heading'> <?= $res->author_DOB_5?> </td>
                            <td>Is Author Alive?:</td>
                            <td class='heading'> <?= $res->is_author_alive_5?> </td>
                        </tr>
                        <tr>
                            <td>Author Domicile:</td>
                            <td class='heading'> <?= $res->author_domicile_5?> </td>
                            <td>Work Description:</td>
                            <td class='heading'> <?= $res->describe_work_6?> </td>
                        </tr>
                        <tr>
                            <td>Is Claimant?:</td>
                            <td class='heading'> <?= $res->is_claimant_7 ?>
                                <?php
                                if($res->is_claimant_7 == "No"):
                                    ?>
                                    (<?= $res->claiment_name ?>)
                                    <?php
                                endif;
                                ?>
                            </td>
                            <td>Correpsondence First Name:</td>
                            <td class='heading'> <?= $res->correspondence_fname_8 ?> </td>
                        </tr>
                        <tr>
                            <td>Correpsondence Last Name:</td>
                            <td class='heading'> <?= $res->correspondence_lname_8 ?> </td>
                            <td>Correpsondence Address:</td>
                            
                          <td class='heading' id="address">
                                <?php
                                    $text = removeLineBreaks($res->correspondence_maddress_8);
                                    echo $text 
                                ?>
                            </td>

                              </tr>
                        <tr>
                            <td>Correpsondence City:</td>
                            <td class='heading'> <?= $res->correspondence_city_8 ?> </td>
                            <td>Correpsondence State:</td>
                            <td class='heading'> <?= $res->correspondence_state_8?> </td>
                        </tr>
                        <tr>
                            <td>Correpsondence Country:</td>
                            <td class='heading'> <?= $res->correspondence_country_8 ?> </td>
                            <td>Correpsondence Zip:</td>
                            <td class='heading'> <?= $res->correspondence_zip_8 ?> </td>
                        </tr>
                        <tr>
                            <td>Correpsondence Phone:</td>
                            <td class='heading'> <?= $res->correspondence_phone_8 ?> </td>
                            <td>Correpsondence Fax:</td>
                            <td class='heading'> <?= $res->correspondence_fax_8?> </td>
                        </tr>
                        <tr>
                            <td>Correpsondence Email:</td>
                            <td class='heading'> <?= $res->correspondence_email_8?> </td>
                            <td>Credit Card Type:</td>
                            <td class='heading'> <?= $res->cc_type_10?> </td>
                        </tr>
                        <tr>
                            <td>Credit Card Number:</td>
                            <td class='heading'> <?= $res->cc_number_10?> </td>
                            <td>CVV:</td>
                            <td class='heading'> <?= $res->cvv?> </td>
                        </tr>
                        <tr>
                            <td>Expiry Month:</td>
                            <td class='heading'> <?= $res->expiry_month_10?> </td>
                            <td>Expiry Year:</td>
                            <td class='heading'> <?= $res->expiry_year_10?> </td>
                        </tr>
                        <tr>
                            <td>First Name:</td>
                            <td class='heading'> <?= $res->fname_10?> </td>
                            <td>Last Name:</td>
                            <td class='heading'> <?= $res->lname_10?> </td>
                        </tr>
                        <tr>
                            <td>Billing Name:</td>
                            <td class='heading'> <?= $res->company_name_10?> </td>
                            <td>Address:</td>
                            <td class='heading'> <?= preg_replace('/[\\\\\r\n]/', '', $res->maddress_10) ?> </td>
                        </tr>
                        <tr>
                            <td>City:</td>
                            <td class='heading'> <?= $res->city_10?> </td>
                            <td>State:</td>
                            <td class='heading'> <?= $res->state_10?> </td>
                        </tr>
                        <tr>
                            <td>Country:</td>
                            <td class='heading'> <?= $res->country_10?> </td>
                            <td>Zip:</td>
                            <td class='heading'> <?= $res->zip_10?> </td>
                        </tr>
                        <tr>
                            <td>Phone:</td>
                            <td class='heading'> <?= $res->phone_10?> </td>
                            <td>File Sending Option:</td>
                            <td class='heading'> <?= $res->file_send_option?> </td>
                        </tr>
                        <tr>
                        <td class='heading'> <?= $res->Additional_Upload?> </td>
                        <td>$25 Priority Rush Processing:</td>
                        <td class='heading'> <?= $res->Additional_Priority?> </td>
                      </tr>
                        <tr>
                            <td> Applied for member rewards program:</td>
                            <td class='heading'> <?= $res->Reward?> </td>
                            <td>Promo Code Redeemed?:</td>
                            <td class='heading'> <?= $res->PromoRedeemed?> </td>
                        </tr>
                        <tr>
                            <td>Processing Time</td><td> <?= $res->processing_time?> </td>
                            <td>Trademark Search</td><td> <?= $res->trademark_search?> </td>
                        </tr>
                        <tr>
                            <td>File Name:</td>
                            <td class='heading'> <?= $res->filename?> </td>
                        </tr>
                        <tr>
                            <td>Search active copyrights & trademarks.:</td>
                            <td class='heading'> <?= $res->fedralStatesSearch?> </td>
                            <td>Trademark Registration</td>
                            <td class='heading'> <?= $res->trademarkregistration?> </td>
                        </tr>
                        <tr>
                            <td>Standard/Single/Group</td>
                            <td class='heading'> <?= $res->charges?> </td>
                            <td>Copyright Infringement Protection</td>
                            <td class='heading'> <?= $res->infringement_protection?> </td>
                        </tr>
                        <tr>
                            <td>Note:</td>
                            <td class='heading'> <?= $res->note?> </td>
                        </tr>
                        <hr>
                        <tr>
                            <td>Enter note:</td>
                            <td colspan='3'>
                                <textarea value="<?= $res->note ?>" id="txtnote" cols='40' rows='10' name='txtnote' id='txtnote'></textarea>
                            </td>
                            <td>Enter title:</td>
                            <td>
                                <input type="text" name="title" <?php if(sizeof($cases) > 0 ){ echo "value='".$cases[0]->title."'";  } ?> >
                            </td>
                        </tr>
                        <tr>
                            <td>Enter Case #:</td>
                            <td colspan='3'>
                                <input type="text" name="case_no" <?php if(sizeof($cases) > 0 ){ echo "value='".$cases[0]->case_no."'";  } ?>>
                            </td>
                            <td>Enter Opened Date:</td>
                            <td>
                                <input type="date" name="opened" <?php if(sizeof($cases) > 0 ){ echo "value='".$cases[0]->opened."'";  } ?>>
                            </td>
                        </tr>
                        <tr>
                            <td>Current Status</td>
                            <td colspan='3'>
                                <input type="text" name="status" <?php if(sizeof($cases) > 0 ){ echo "value='".$cases[0]->status."'";  } ?>>
                            </td>
                            <td>Enter Type of Work:</td>
                            <td><input type="text" name="type_of_work" <?php if(sizeof($cases) > 0 ){ echo "value='".$cases[0]->type_of_work."'";  } ?>>
                                <input type="hidden" name="order_id" value="<?= $res->id ?>">
                            </td>
                        </tr>
                        <tr>
                            <td style='text-align:center' colspan='4'><input type='submit' value='Save' id='btnSave' name='btnSave' /></td>
                        </tr>
                    </table>
                <?php
                    else :
                ?>
                    <p class='error_msg' style='padding:10px 25px; width:90%;'> No record found</p>
                    <?php
                endif;
            } else { ?>
                <a href="<?php echo wp_login_url(get_permalink()); ?>" title="Login">Login to view</a>
                    <?php
            } ?>
        </form>

            </div>
        </div>
    </div>
    <script>
    $(document).ready(function(){
       
        const el = document.getElementById("address");
        let val = el.innerText;
        val = val.replace(/\\n|\\r/g, "");
        console.log(val);
        val = val.replace(/\n|\r/g, "");
        el.innerText = val; 
    });
        // CKEDITOR.replace('txtnote');
        // </script>

<?php

get_footer();