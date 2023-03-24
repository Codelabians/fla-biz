<?php
// Template Name: Single Record
get_header();
global $wpdb;
echo "hello";
die;
if(is_user_logged_in()){
    $user = wp_get_current_user();
if ( in_array( 'customer', (array) $user->roles ) ) {
    $userid = get_current_user_id();
    $user_case_table = $wpdb->prefix . "user_cases";
    $table = $wpdb->prefix . "copyrightinfo";
    $result = $wpdb->get_results("SELECT * FROM  $user_case_table INNER JOIN $table ON $user_case_table.order_id = $table.ID WHERE $table.uid='$userid'");
    $rowCount = $wpdb->num_rows;

    ?>
    <style>
        #wpadminbar{
            display:none;
        }
        .inner-container{
            padding-top:20px;
            background-color:#eee;
            border-left: 10px solid #444;
        }
        .entry-content{
            padding:20px;
        }
        .table{
            padding-top:20px;
            text-align:center;
        }
        thead{
            background: #242323;
            color: #fff;
        }
        body{
            background:linear-gradient(135deg, #38368b, transparent);
        }
        .text-white{
            color:white;
            text-shadow : 5px 5px #38368b;
        }
        .order-num{
            padding: 6px;
            text-align: center;
            display: inline-block;
            border-radius: 50%;
            background: #38368b;
            color: white;
            font-size: 13px;
            line-height: 16px;
            width: 25px;
            height: 25px;}

        #tf-works{
            position: relative;
            padding-bottom: 175px;
        }

        .anim-image{
            position: absolute;
            /*top: 0;*/
            /*left: -50px;*/
            display: none;
            width: 50px;

            /*Default Anim Styling*/
            transform: rotate(0deg) translate(50px) rotate(0deg);
        }

        .anim-image:nth-child(1){
            display: inline-block;

            top: 70px;
            left: 100px;
            animation: img-rotate-anim1 5s linear infinite;
        }

        .anim-image:nth-child(2){
            display: inline-block;

            top: 70px;
            right: 100px;
            animation: img-rotate-anim2 5s linear infinite;
        }
        .anim-image:nth-child(3){
            display: inline-block;

            bottom: 70px;
            left: 100px;
            animation: img-rotate-anim4 5s linear alternate infinite;
        }

        .anim-image:nth-child(4){
            display: inline-block;

            bottom: 70px;
            right: 100px;
            animation: img-rotate-anim5 5s linear alternate infinite;
        }

        .anim-image:nth-child(5){
            display: inline-block;

            bottom: 70px;
            left: calc(50% - 20px);
            animation: img-rotate-anim3 5s linear alternate infinite;
        }


        /*Footer Styling*/
        #th-footer{
            margin-top: 0;
        }
        @keyframes img-rotate-anim1{
            0% {
                transform: rotate(0deg) translateX(50px) rotate(0deg);
            }

            50% {
                transform: rotate(180deg) translateX(50px) rotate(180deg);
            }

            100% {
                transform: rotate(360deg) translateX(50px) rotate(-360deg);
            }
        }

        @keyframes img-rotate-anim2{
            0% {
                transform: rotate(360deg) translateX(50px) rotate(0deg);
            }

            50% {
                transform: rotate(180deg) translateX(50px) rotate(180deg);
            }

            100% {
                transform: rotate(0deg) translateX(50px) rotate(-360deg);
            }
        }

        @keyframes img-rotate-anim3{
            /*0% {
                transform: translate(0px) rotate(0deg);
            }*/

            0% {
                transform: translateX(150px) rotate(360deg);
            }

            100% {
                transform: translateX(-150px) rotate(-360deg);
            }
        }

        @keyframes img-rotate-anim4{
            0% {
                transform: translate(-50px, 0px) rotate(0deg);
            }

            50% {
                transform: translate(0px, -100px) rotate(360deg);
            }

            100% {
                transform: translate(50px, 0px) rotate(0deg);
            }
        }

        @keyframes img-rotate-anim5{
            0% {
                transform: translate(50px, 0px) rotate(0deg);
            }

            50% {
                transform: translate(0px, -100px) rotate(360deg);
            }

            100% {
                transform: translate(-50px, 0px) rotate(0deg);
            }
        }
        .mr{
            margin-right:10px;
        }
    </style>
<link rel="stylesheet" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <div id="tf-works">
        <img src="http://copyright-application-online.com/wp-content/uploads/2020/11/credit-card.png" class="anim-image">
        <img src="http://copyright-application-online.com/wp-content/uploads/2020/11/credit-card.png" class="anim-image">
        <img src="http://copyright-application-online.com/wp-content/uploads/2020/11/credit-card.png" class="anim-image">
        <img src="http://copyright-application-online.com/wp-content/uploads/2020/11/credit-card.png" class="anim-image">
        <img src="http://copyright-application-online.com/wp-content/uploads/2020/11/credit-card.png" class="anim-image">
        <div class="bg">
            <h1 class="text-center text-white">Details of Your Order</h1>
        </div>
        <div class="container inner-container">
            <div class="entry-content">
                <!-- Button trigger modal -->

                <div class="pull-left"><p>Total Orders Are <span class="order-num"><?= $rowCount ?></span></p></div>
                <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#exampleModal">
                    Change Password

                </button>
                <button type="button" class="mr btn btn-success pull-right" onclick="printDiv('table')">
                    Print Record
                </button>

                <!-- Modal Password Change -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <label>Enter New Password:</label>
                                <input class="form-control" type="password" id="pwd">

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" id=
                                "change">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                if ($rowCount > 0) {
                    ?>
                    <div id="msg"></div>
                    <div id="table" class="table table-responsive">
                        <table class="table table-striped">
                            <thead class="thead-dark">
                            <tr>
                                <td>Sr #</td>
                                <td>Case #</td>
                                <td>Title</td>
                                <td>Status</td>
                                <td>Opened On</td>
                                <td>Type Of Working</td>
                                <td>View Order Details</td>
                            </tr>
                            </thead>
                            <?php
                            $sr = 0;
                            foreach ($result as $res) {
                                $sr++;
                                ?>
                                <tr>
                                    <td><?= $sr ?></td>
                                    <td><?= $res->case_no ?></td>
                                    <td><?= ucfirst($res->title) ?></td>
                                    <td><?= ucfirst($res->status) ?></td>
                                    <td><?= ucfirst($res->opened) ?></td>
                                    <td><?= ucfirst($res->type_of_work) ?></td>
                                    <td>
                                        <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#details<?= $res->order_id ?>">
                                            View

                                        </button>
                                        <div class="modal fade" id="details<?= $res->order_id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel"><?= $res->case_no ?></h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <table class="table table-striped">
                                                            <thead class="thead-dark">
                                                            <tr>
                                                                <td>Category of Work</td>
                                                                <td>Nature of Work</td>
                                                                <td>Title</td>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td><?= preg_replace('/\\\\/', '', $res->category_of_work_1) ?></td>
                                                                <td><?= preg_replace('/\\\\/', '', $res->nature_of_work_1) ?></td>
                                                                <td><?= preg_replace('/\\\\/', '', $res->title_1) ?></td>
                                                            </tr>
                                                            </tbody>
                                                            <thead class="thead-dark">
                                                            <tr>
                                                                <td>Alternate Title:</td>
                                                                <td>Completed Year</td>
                                                                <td>Is Published</td>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td><?= preg_replace('/\\\\/', '', $res->alternate_title_1) ?></td>
                                                                <td><?= preg_replace('/\\\\/', '', $res->completed_year_2) ?></td>
                                                                <td><?= preg_replace('/\\\\/', '', $res->is_published_2) ?></td>
                                                            </tr>
                                                            </tbody><thead class="thead-dark">
                                                            <tr>
                                                                <td>Previous Published Date</td>
                                                                <td>Copyright</td>
                                                                <td>Author Type</td>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td><?= preg_replace('/\\\\/', '', $res->Previous_Published_Date) ?></td>
                                                                <td><?= preg_replace('/\\\\/', '', $res->is_previous_copyright_filled_3) ?></td>
                                                                <td><?= preg_replace('/\\\\/', '', $res->author_type_5) ?></td>
                                                            </tr>
                                                            </tbody><thead class="thead-dark">
                                                            <tr>
                                                                <td>Co Authors</td>
                                                                <td>Author First Name</td>
                                                                <td>Author Middle Name</td>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td><?= preg_replace('/\\\\/', '', $res->is_author_anonymous_5) ?></td>
                                                                <td><?= preg_replace('/\\\\/', '', $res->author_fname_5) ?></td>
                                                                <td><?= preg_replace('/\\\\/', '', $res->author_mname_5) ?></td>
                                                            </tr>
                                                            </tbody><thead class="thead-dark">
                                                            <tr>
                                                                <td>Author Last Name</td>
                                                                <td>Author Address</td>
                                                                <td>Author City</td>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td><?= preg_replace('/\\\\/', '', $res->author_lname_5) ?></td>
                                                                <td><?= preg_replace('/\\\\/', '', $res->author_maddress_5) ?></td>
                                                                <td><?= preg_replace('/\\\\/', '', $res->author_city_5) ?></td>
                                                            </tr>
                                                            </tbody><thead class="thead-dark">
                                                            <tr>
                                                                <td>Author State</td>
                                                                <td>Author Country</td>
                                                                <td>Author Zip</td>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td><?= $res->author_state_5 ?></td>
                                                                <td><?= $res->author_country_5 ?></td>
                                                                <td><?= $res->author_zip_5 ?></td>
                                                            </tr>
                                                            </tbody><thead class="thead-dark">
                                                            <tr>
                                                                <td>Author Domicile</td>
                                                                <td>Is Author Alive?</td>
                                                                <td>Work Description</td>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td><?= $res->author_domicile_5 ?></td>
                                                                <td><?= $res->is_author_alive_5 ?></td>
                                                                <td><?= $res->describe_work_6 ?></td>
                                                            </tr>
                                                            </tbody>
                                                            <thead class="thead-dark">
                                                            <tr>
                                                                <td>Is Claimant</td>
                                                                <td>Correpsondence First Name</td>
                                                                <td>Correpsondence Last Name</td>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td><?= $res->is_claimant_7 ?>
                                                                    <?php
                                                                    if($res->is_claimant_7 == "No"){
                                                                        ?>
                                                                        ( <?= $res->claiment_name ?> )
                                                                        <?php

                                                                    }
                                                                    ?>
                                                                </td>
                                                                <td><?= $res->correspondence_fname_8?></td>
                                                                <td><?= $res->correspondence_lname_8 ?></td>
                                                            </tr>
                                                            </tbody><thead class="thead-dark">
                                                            <tr>
                                                                <td>Correpsondence Addres</td>
                                                                <td>Correpsondence City</td>
                                                                <td>Correpsondence State</td>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td><?= $res->correspondence_maddress_8 ?></td>
                                                                <td><?= $res->correspondence_city_8?></td>
                                                                <td><?= $res->correspondence_state_8 ?></td>
                                                            </tr>
                                                            </tbody>
                                                            <thead class="thead-dark">
                                                            <tr>
                                                                <td>Correpsondence Country</td>
                                                                <td>Correpsondence Zip</td>
                                                                <td>Correpsondence Phone</td>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td><?= $res->correspondence_country_8 ?></td>
                                                                <td><?= $res->correspondence_zip_8 ?></td>
                                                                <td><?= $res->correspondence_phone_8 ?></td>
                                                            </tr>
                                                            </tbody>
                                                            <thead class="thead-dark">
                                                            <tr>
                                                                <td>Correpsondence Fax</td>
                                                                <td>Correpsondence Email</td>
                                                                <td>Single/Standard/Sponsored</td>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td><?= $res->correspondence_fax_8 ?></td>
                                                                <td><?= $res->correspondence_email_8 ?></td>
                                                                <td><?= $res->charges ?></td>
                                                            </tr>
                                                            </tbody>

                                                        </table>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>

                                </tr>
                                <?php
                            }
                            ?>
                        </table>
                    </div>
                <?php } else {
                    echo "<p class='error_msg' style='padding:10px 25px; width:90%;'> No record found</p>";
                }
                } }
                else { ?>
                    <a href="/login" title="Login">Login to view</a>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
    <script>
        jQuery("#change").on("click" , function(){
            var val = $("#pwd").val();
            console.log(val);
            jQuery.ajax({
                method:"post",
                url:"/checkemail",
                dataType : "json",
                data:{
                    "pwd" :  val
                },
                success:function(dat){
                    if(dat.status == 1){
                        var msg = $("#msg");
                        var el = '<p class="alert alert-success">Password Changed Successfully</p>';
                        msg.html(el);
                        $("#pwd").value = "";
                        $('#exampleModal').modal('hide');
                    }
                }
            });
        });
        function printDiv(divID) {
            //Get the HTML of div
            var divElements = document.getElementById(divID).innerHTML;
            //Get the HTML of whole page
            var oldPage = document.body.innerHTML;
            //Reset the page's HTML with div's HTML only
            document.body.innerHTML =
                "<html><head><title></title></head><body>" +
                divElements + "</body>";
            //Print Page
            window.print();
            //Restore orignal HTML
            document.body.innerHTML = oldPage;

        }
    </script>
<?php
get_footer();
?>