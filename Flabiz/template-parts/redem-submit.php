<?php
// Template Name: Redeem Submit
session_start();
global $wpdb;

$existing_customer = 0;
$table = $wpdb->prefix . "copyrightinfo";
$ptable = $wpdb->prefix . "Promocodes";
if (isset($_POST['promo'])) {
    $output = [];
    $output['IsRedeem'] = "<p class='alert alert-success'--> Promocode has been applied</p>
  <p>";
    // prepare the SQL query
    $IsRedeemed = 0;
    $output['PromoCodeRedeemed'] = 'NO';
    $price = 0;
    if ($existing_customer == 0) {
        // die;
        // prepare the SQL query
        $datas = $wpdb->get_var($wpdb->prepare("SELECT COUNT(*) FROM $ptable WHERE Email = %s AND status = %d", $_SESSION['PromoEmail'], 0));
        $rows = sizeof($datas);
        if ($rows > 0) {
            $output['price'] = 818;
            $wpdb->update(
                'Promocodes',
                array('status' => 1),
                array('Email' => $_SESSION['mailid'], 'status' => 0),
                array('%d'),
                array('%s', '%d')
            );
            $output['PromoCodeRedeemed'] = 'YES';
            $output['message'] = '<b style="font-size: 12pt; color: green; font-weight: bold;">$99.00</b>';
        } else {
            $output['price'] = 816;
            $IsRedeemed = 1;
            $output['message'] = '<b style="font-size: 12pt; color: green; font-weight: bold;">$99</b>';
        }
    }
    else {
        $rewarded = $wpdb->get_var( $wpdb->prepare( "SELECT COUNT(*) FROM $table WHERE correspondence_email_8 = %s AND Reward = %s", $_SESSION['mailid'], 'YES' ) );
        if (sizeof($rewarded) > 0) {
            $output['message'] = '<b style="font-size: 12pt; color: green; font-weight: bold;">$114.75</b>';
            $output['price'] = 817;
        } else {
            $output['price'] = 818;
            $output['message'] = '<b style="font-size: 12pt; color: green; font-weight: bold;">$99.00</b>';
        }
    }
}
        else {
    add_filter('wp_mail_content_type', 'wpse27856_set_content_type');
    $msg = "Somebody Started to Apply for Copyright registration with <br>Title: " . $_POST['hdnNature'] . "</p>
<p>";
    $msg = $msg . "First Name:" . $_POST['cfname'] . "<br>";
    $msg = $msg . "Last Name:" . $_POST['clname'] . "<br>";
    $msg = $msg . "Address:" . $_POST['caddress'] . "<br>";
    $msg = $msg . "City:" . $_POST['cCity'] . "<br>";
    $msg = $msg . "State:" . $_POST['cState'] . "<br>";
    $msg = $msg . "Citizen:" . $_POST['cddlCountry'] . "<br>";
    $msg = $msg . "Zip:" . $_POST['cZip'] . "<br>";
    $msg = $msg . "Email: " . $_POST['cEmail'] . "<br>";
    wp_mail('contact@copyrightregistryonline.us', 'Somebody completed Step 4.', $msg);
    if ($existing_customer == 0) {
        $output['price'] = 816;
        $output['message'] = '<b style="font-size: 12pt; color: green; font-weight: bold;">$99</b>';
    } else {
        if ($rewrow['memrewarded'] > 0) {
            $output['price'] = 817;
            $output['message'] = '<b style="font-size: 12pt; color: green; font-weight: bold;">$114.75</b><br>';
        } else {
            $output['price'] = 818;
            $output['message'] =  '<b style="font-size: 12pt; color: green; font-weight: bold;">$99.00</b><br>';
        }
    }
}
if ($IsRedeemed == 1) {
    $output['IsRedeem']  = "<p class='alert alert-danger'--> You have already used the promo code</p>";
}
echo json_encode($output);