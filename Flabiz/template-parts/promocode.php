<?php
// Template Name: Promocode
get_header();
session_start();
global $wpdb;
$ptable = $wpdb->prefix . "Promocodes";
?>

    <div id="tf-works">
        <div class="container">
            <div class="entry-content">
                <script>
                    $(document).ready(function() {
                        $("#formid").validate({
                            rules: {
                                txtName: {
                                    required: true
                                },
                                txtEmail: {
                                    required: true,
                                    email: true
                                }
                            },
                            messages: {
                                txtName: {
                                    required: "<br/><span class='error_msg'>Please enter Name</span><br/>"
                                },
                                txtEmail: {
                                    required: "<br/><span class='error_msg'>Please enter Email</span>",
                                    email: "<br/><span class='error_msg'>Not a valid email</span>"
                                }
                            },
                            errorPlacement: function(error, element) {
                                if (element.is(":radio")) {
                                    error.prependTo(element.parent());
                                } else {
                                    error.insertAfter(element);
                                }
                            }
                        });
                    });
                </script>
                <form id="formid" name="formid" action="" method="POST">
                    <table cellspacing="2" cellpadding="2" width="100%">
                        <tr>
                            <td class="label">Name:* </td>

                            <td class="content">
                                <input type="text" class="form-control" name="txtName" id="txtName" value="" />
                            </td>
                        </tr>

                        <tr>
                            <td class="label">Email:* </td>

                            <td class="content">
                                <input type="text" class="form-control" name="txtEmail" id="txtEmail" value="" />
                            </td>
                        </tr>

                        <tr>
                            <td colspan="2" style="text-align:center">
                                <?php
                                function wpse27856_set_content_type()
                                {
                                    return "text/html";
                                }

                                if ($_POST['submit']) {
                                    add_filter('wp_mail_content_type', 'wpse27856_set_content_type');
                                    $msg = "Following promocode has been generated" . "<br/><br/>";;
                                    $msg = $msg . "<u><b>Details</b></u>" . "<br/><br/>";
                                    $msg = $msg . "Name: " . $_POST['txtName'] . "<br/>";
                                    $msg = $msg . "Email: " . $_POST['txtEmail'] . "<br/>";
                                    //wp_mail('contact@copyrightregistryonline.us', 'Promo Code Generated- Copyright Registry',$msg);

                                    // prepare the SQL query
                                    $num = $wpdb->get_var( $wpdb->prepare( "SELECT COUNT(*) as total FROM $ptable WHERE Email = %s", $_POST['txtEmail'] ) );
                                    if ($num[0]->total == 0) {
                                        $promocode = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, 6);
                                        ?>
                                        <p style='margin:auto;padding:10px 25px; width:90%;text-align:center'> Promo Code:
                                            <b style='font-weight:bold;font-size:20pt;color:black'><?= $promocode ?></b>
                                        </p>
                                        <a href='/apply' class='readmore'>Apply Now</a>
                                        <?php
                                            $wpdb->insert(
                                                $ptable,
                                                array(
                                                    'Email' => $_POST['txtEmail'],
                                                    'Promocode' => $promocode
                                                ),
                                                array( '%s', '%s' )
                                            );
                                            $_SESSION['PromoEmail'] = $_POST['txtEmail'];
                                        } else {
                                        ?>
                                            <p style='margin:auto;padding:10px 25px; width:90%;text-align:center' class='error_msg'> 
                                                You have already redeemed Promocode. If you are a returning customer you get 5% offer
                                            </p>
                                            <a href='/apply' class='readmore'>Apply Now</a>
                                        <?php
                                    }
                                } else {
                                    ?>
                                    <input type='submit' class='btn btn-primary btn-lg cust-btn' name='submit' value='Send' />
                                    <?php
                                }
                                ?>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
<?php
get_footer();
?>