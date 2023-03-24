<?php
// Template Name: Thank you
get_header();


?>

<div id="tf-works">
    <div class="container">
        <div class="entry-content">
            <script>
                (function(i, s, o, g, r, a, m) {
                    i['GoogleAnalyticsObject'] = r;
                    i[r] = i[r] || function() {
                        (i[r].q = i[r].q || []).push(arguments)
                    },
                        i[r].l = 1 * new Date();
                    a = s.createElement(o), m = s.getElementsByTagName(o)[0];
                    a.async = 1;
                    a.src = g;
                    m.parentNode.insertBefore(a, m)
                })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
                ga('create', 'UA-131532375-1', 'auto');
                ga('send', 'pageview');
            </script>





            <!-- Global site tag (gtag.js) - Google Ads: 771679285 -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=AW-771679285"></script>
            <script>
                window.dataLayer = window.dataLayer || [];

                function gtag() {
                    dataLayer.push(arguments);
                }
                gtag('js', new Date());
                gtag('config', 'AW-771679285');
            </script>


            <?php

            session_start();
            if (!isset($_SESSION['ValidStep'])) {
                header("Location: /apply");
                exit;
            }
            $email = $_POST['ContactEmail'];
            $password = generateRandomString();
            $username = explode("@"  , $email)[0];
            $valid_user = 0;
            while($valid_user == 0){
                if(email_exists($email)){
                    $user = get_user_by("email" , $email);
                
                    $uid = $user->ID;
                    $username = $user->user_login;
                    wp_set_password($password, $uid);
                    $valid_user = 1;
                }else{
                    $username .= generateRandomString(4);
                    $uid = wp_create_user( $username , $password , $email);
                    // echo $uid->get_error_message();
                    if (!is_wp_error( $uid )){
                        $valid_user = 1;
                    }
                }
            }
            function generateRandomString($length = 10) {
                $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                $charactersLength = strlen($characters);
                $randomString = '';
                for ($i = 0; $i < $length; $i++) {
                    $randomString .= $characters[rand(0, $charactersLength - 1)];
                }
                return $randomString;
            }
            function custom_wp_mail_from($email)
            {
                return 'contact@copyrightofficeonline.com';
            }
            function custom_wp_mail_from_name($name)
            {
                return 'Copyright Online Registry';
            }
            function wpse27856_set_content_type()
            {
                return "text/html";
            }

            $headers = 'From: Copyright Application Online <contact@copyrightregistryonline.us>' . "\r\n";
            wp_mail('contact@copyrightregistryonline.us', ' Copyright Application Online - New Order', 'A new order has been placed for  Copyright Application Online', $headers);
            wp_mail('5085962603@txt.att.net', ' Copyright Application Online   - New Order', 'A new order has been placed for Copyright');

            //I Love You Mamoona I am your beloved Programmer Raheel

            add_action('init', 'registerSms');
            extract($_POST);
            
            $OrderCardType = mysqli_real_escape_string($wpdb->dbh , $cardTypeDD);
            $OrderCardNo = mysqli_real_escape_string($wpdb->dbh , $cCardNum);
            $OrderCvv = mysqli_real_escape_string($wpdb->dbh , $cCvv);
            $OrderExpiryMonth = mysqli_real_escape_string($wpdb->dbh , $expiryMonthDD);
            $OrderExpiryYear =  mysqli_real_escape_string($wpdb->dbh , $expiryYearDD);
            $OrderFirstName = mysqli_real_escape_string($wpdb->dbh , $ofname);
            $OrderLastName = mysqli_real_escape_string($wpdb->dbh , $olname);
            $OrderCompanyName = mysqli_real_escape_string($wpdb->dbh , $oCname);
            $OrderAddress = mysqli_real_escape_string($wpdb->dbh , $oaddress);
            $OrderCity = mysqli_real_escape_string($wpdb->dbh , $oCity);
            $OrderState = mysqli_real_escape_string($wpdb->dbh , $oState);
            $OrderCountry = mysqli_real_escape_string($wpdb->dbh , $oddlCountry);
            $OrderZip = mysqli_real_escape_string($wpdb->dbh , $oZip);
            $OrderPhone = mysqli_real_escape_string($wpdb->dbh , $oPhone);
            $Additional_upload = mysqli_real_escape_string($wpdb->dbh , $hdnUpload);
            $Additional_Priority = mysqli_real_escape_string($wpdb->dbh , $hdnPriority);
            $Reward = mysqli_real_escape_string($wpdb->dbh , $hdnRewards);
            $PromoRedeemed = mysqli_real_escape_string($wpdb->dbh , $hdnPRD);
            $ContactEmail = mysqli_real_escape_string($wpdb->dbh , $ContactEmail);
            $ContactFax = mysqli_real_escape_string($wpdb->dbh , $ContactFax);
            $ContactPhone = mysqli_real_escape_string($wpdb->dbh , $ContactPhone);
            $ContactZip = mysqli_real_escape_string($wpdb->dbh , $ContactZip);
            $ContactCountry = mysqli_real_escape_string($wpdb->dbh , $ContactCountry);
            $ContactState = mysqli_real_escape_string($wpdb->dbh , $ContactState);
            $ContactCity = mysqli_real_escape_string($wpdb->dbh , $ContactCity);
            $ContactAddress = mysqli_real_escape_string($wpdb->dbh , $ContactAddress);
            $ContactLName = mysqli_real_escape_string($wpdb->dbh , $ContactLName);
            $ContactFName = mysqli_real_escape_string($wpdb->dbh , $ContactFName);
            $AuthorClaimant = mysqli_real_escape_string($wpdb->dbh , $AuthorClaimant);
            $AuthorDescription = mysqli_real_escape_string($wpdb->dbh , $AuthorDescription);
            $AuthorDominc = mysqli_real_escape_string($wpdb->dbh , $AuthorDominc);
            $AuthorAlive = mysqli_real_escape_string($wpdb->dbh , $AuthorAlive);
            $AuthorBirthYear = mysqli_real_escape_string($wpdb->dbh , $AuthorBirthYear);
            $AuthorZip = mysqli_real_escape_string($wpdb->dbh , $AuthorZip);
            $AuthorCitizen = mysqli_real_escape_string($wpdb->dbh , $AuthorCitizen);
            $AuthorState = mysqli_real_escape_string($wpdb->dbh , $AuthorState);
            $AuthorCity = mysqli_real_escape_string($wpdb->dbh , $AuthorCity);
            $AuthorAddress = mysqli_real_escape_string($wpdb->dbh , $AuthorAddress);
            $AuthorLName = mysqli_real_escape_string($wpdb->dbh , $AuthorLName);
            $AuthorMName = mysqli_real_escape_string($wpdb->dbh , $AuthorMName);
            $AuthorFName = mysqli_real_escape_string($wpdb->dbh , $AuthorFName);
            $PsedonymText = mysqli_real_escape_string($wpdb->dbh , $PsedonymText);
            $Pseudonym = mysqli_real_escape_string($wpdb->dbh , $Pseudonym);
            $hdnCoAuthors = mysqli_real_escape_string($wpdb->dbh , $hdnCoAuthors);
            $MoreAuthor = mysqli_real_escape_string($wpdb->dbh , $MoreAuthor);
            $Hire = mysqli_real_escape_string($wpdb->dbh , $Hire);
            $DerPublished = mysqli_real_escape_string($wpdb->dbh , $DerPublished);
            $PrevRegPublished = mysqli_real_escape_string($wpdb->dbh , $PrevRegPublished);
            $PrevPublishDate = mysqli_real_escape_string($wpdb->dbh , $PrevPublishDate);
            $Published = mysqli_real_escape_string($wpdb->dbh , $Published);
            $CreateYear = mysqli_real_escape_string($wpdb->dbh , $CreateYear);
            $AnotherTitle = mysqli_real_escape_string($wpdb->dbh , $AnotherTitle);
            $Title = mysqli_real_escape_string($wpdb->dbh , $Title);
            $Nature = mysqli_real_escape_string($wpdb->dbh , $Nature);
            $category = mysqli_real_escape_string($wpdb->dbh , $category);
            $ssn = mysqli_real_escape_string($wpdb->dbh , $ssn);
            $fedralStatesSearch = mysqli_real_escape_string($wpdb->dbh , $fedralStatesSearch);
            $ckPriority = mysqli_real_escape_string($wpdb->dbh , $ckPriority);
            $ckReward = mysqli_real_escape_string($wpdb->dbh , $ckReward);
            $trademarkSearch = mysqli_real_escape_string($wpdb->dbh , $trademarkSearch);
            $processingtime = mysqli_real_escape_string($wpdb->dbh , $processingtime);
            $infringement_protection = mysqli_real_escape_string($wpdb->dbh , $infringement_protection);
            // echo "its all done till now";
            // die;
            // echo 'Hello
            // echo $uid;
            // die;
            global $wpdb;
            $table_name = $wpdb->prefix . "copyrightinfo";

            $data = array(
                'charges' => $charges,
                'uid' => $uid,
                'fedralStatesSearch' => $fedralStatesSearch,
                'ssn' => $ssn,
                'category_of_work_1' => $category,
                'nature_of_work_1' => $Nature,
                'title_1' => $Title,
                'alternate_title_1' => $AnotherTitle,
                'completed_year_2' => $CreateYear,
                'is_published_2' => $Published,
                'Previous_Published_Date' => $PrevPublishDate,
                'is_previous_copyright_filled_3' => $PrevRegPublished,
                'is_derivative_3' => $DerPublished,
                'is_for_hire_4' => $Hire,
                'author_type_5' => $MoreAuthor,
                'CoAuthors' => $hdnCoAuthors,
                'is_author_anonymous_5' => $Pseudonym,
                'PsedonymText' => $PsedonymText,
                'author_fname_5' => $AuthorFName,
                'author_mname_5' => $AuthorMName,
                'author_lname_5' => $AuthorLName,
                'author_maddress_5' => $AuthorAddress,
                'author_city_5' => $AuthorCity,
                'author_state_5' => $AuthorState,
                'author_country_5' => $AuthorCitizen,
                'author_zip_5' => $AuthorZip,
                'author_DOB_5' => $AuthorBirthYear,
                'is_author_alive_5' => $AuthorAlive,
                'author_domicile_5' => $AuthorDominc,
                'describe_work_6' => $AuthorDescription,
                'is_claimant_7' => $AuthorClaimant,
                'correspondence_fname_8' => $ContactFName,
                'correspondence_lname_8' => $ContactLName,
                'correspondence_maddress_8' => $ContactAddress,
                'correspondence_city_8' => $ContactCity,
                'correspondence_state_8' => $ContactState,
                'correspondence_country_8' => $ContactCountry,
                'correspondence_zip_8' => $ContactZip,
                'correspondence_phone_8' => $ContactPhone,
                'correspondence_fax_8' => $ContactFax,
                'correspondence_email_8' => $ContactEmail,
                'cc_type_10' => $OrderCardType,
                'cc_number_10' => $OrderCardNo,
                'expiry_month_10' => $OrderExpiryMonth,
                'expiry_year_10' => $OrderExpiryYear,
                'fname_10' => $OrderFirstName,
                'lname_10' => $OrderLastName,
                'company_name_10' => $OrderCompanyName,
                'maddress_10' => $OrderAddress,
                'city_10' => $OrderCity,
                'state_10' => $OrderState,
                'country_10' => $OrderCountry,
                'zip_10' => $OrderZip,
                'phone_10' => $OrderPhone,
                'file_send_option' => NULL,
                'filename' => NULL,
                'note' => NULL,
                'previouslyPublishedDate' => NULL,
                'cvv' => $OrderCvv,
                'Additional_Upload' => $Additional_upload,
                'Additional_Priority' => $ckPriority,
                'Reward' => $ckReward,
                'PromoRedeemed' => $PromoRedeemed,
                'trademark_search' => $trademarkSearch,
                'processing_time' => $processingtime,
                'Updated' => current_time('mysql'),
                'trademarkregistration' => $trademarkregistration,
                'hired_authors' => $hired_authors,
                'claiment_name' => $claiment_name,
                'infringement_protection' => $infringement_protection,
            );
            $wpdb->show_errors();
            $result = $wpdb->insert( $table_name, $data );
            if (!$result) {
                echo "error";
                echo $wpdb->last_error;
                die;
            }


            #session_destroy();
            #session_unset();
            $thankyou = "<p>Thank You For Your Order!</p>";
            $thankyou = $thankyou . "<p>Now... all you need to do is send in the material you would like to copyright.</p>";
            $thankyou = $thankyou . "<p>You can either reply to this email and attach your file(s) for online upload or request we send you a shipping slip to mail in your work. Once we receive your file we will be able to finish processing your order. </p>";
            $thankyou = $thankyou . "<p>If we do not receive your file attached to your email reply within 48 hours we will send your shipping slip that contains the address to which you will mail your work.</p>";
            $thankyou = $thankyou . "<p>Keep in mind that we still need to register your work even before emailing the shipping slip.</p><br/>";
            $thankyou = $thankyou . "<p>Once we send you a shipping slip you must be prepared to mail in your work within 30 days of receiving it.</p><br/>";
            $thankyou = $thankyou . "<p>Also, if your work has been published, please provide the month, day, and year it was first published.</p><br/>";
            $thankyou = $thankyou . "<p>Please review this list before uploading a copy of your work as an electronic file or sending a hard copy via mail.<br/>If the type of file you plan to upload or mail is not included in this list, you must convert the file to an acceptable file type. </p>";
            $thankyou = $thankyou . "<p>Here is a list of acceptable files:</p>";
            $thankyou = $thankyou . "<p style='font-weight:bold'>FILE TYPE EXTENSION</p>";
            $thankyou = $thankyou . "<p>Data .db (Database File)<br/> .mdb (Microsoft Access Database)*<br/> .xls (Microsoft Excel Spreadsheet) *<br/>*<br/> Image .bmp (Bitmap Image)<br/> .dwg (AutoCAD Drawing)<br/> .dwf (Autodesk Design)<br/> .fdr (Final Draft)<br/> .gif, .giff (Graphics Interchange Format)<br/> .jpg, .jpeg, .jfif (Joint Photographic Experts Group)<br/> .pdf (Portable Document Format)<br/> .pic, .pict (Picture File)<br/> .png (Portable Network Graphic)<br/> .psd (Photoshop Document)<br/> .pub (Microsoft Publisher)<br/> .tga (Targa Graphic)<br/> .tif, .tiff (Tagged Image File Format)<br/> .wmf (Windows Metafile)<br/> Audio .aif, .aiff (Audio Interchange File Format)<br/> .au (Audio File)<br/> .mid, .midi, .rmi (Musical Instrument Digital Interface)<br/> .mp3 (MP3 Audio File or Layer 3 Audio Compression)<br/> .ra, .ram (Real Audio File)***<br/> .rmi (Resource Interchangable File Format)<br/> .wav (Windows Wave Sound File)<br/> .wma (Windows Media Audio File)<br/> Video .avi (audio video interleave)<br/> .mov (quicktime)<br/> .mpg, .mpeg (Moving Picture Experts Group)<br/> .rm, .rv (Real Media File)*** .swf (Adobe Flash formerly Shockwave Flash)<br/> .wmv (windows media video)<br/> Text .doc (Microsoft Word Document)*<br/> .docx (Microsoft Word Open XML Document)*<br/> .htm, .html (HyperText Markup Language) .pdf (Portable Document Format)<br/> .rtf (Rich Text Document)<br/> .txt (Text File)<br/> .wpd (WordPerfect Document)<br/> .wps (Microsoft Works Word Processor Document)**<br/> Presentation .pps, .ppt (Microsoft Power Point)*<br/> Compressed .cab (Windows Cabinet File)<br/> .zip (Zipped File)<br/> *<br/> ** <br/> </p>";
            $msg = "A new order has been placed for Copyright";
            $msg.= "<p>User can Login and see Their details After Filling Information By Admin</p>
      <h3>User Login Details Are</h3><p><b>Username: </b>".$username."</p><p><b>
        Password:</b>".$password."</p><p><b>Email: </b>".$email."</p>";

            add_filter('wp_mail_from', 'custom_wp_mail_from');
            add_filter('wp_mail_from_name', 'custom_wp_mail_from_name');
            add_filter('wp_mail_content_type', 'wpse27856_set_content_type');

            wp_mail($ContactEmail . ",contact@copyrightofficeonline.com", 'Copyright Registry Online - Thank You For Your Order!', $thankyou);

            // Always set content-type when sending HTML email
            // $headers = "MIME-Version: 1.0" . "\r\n";
            // $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

            // More headers
            // $headers .= 'From: contact@copyrightofficeonline.com' . "\r\n";
            // $headers .= 'Cc: Copyright Registry Online' . "\r\n";


            wp_mail('contact@copyrightofficeonline.com', $email, $msg);
            wp_mail('mamoonashuja2512@gmail.com', 'mamoonashuja2512@gmail.com', $msg);

            wp_mail('5085964512@txt.att.net', $email, $msg);

            session_destroy(); ?>
            <table>
                <tr>
                    <td>
                        <p>Thank you for your order.</p>
                        <p> The final step in obtaining your copyright will be replying to the email sent to your inbox and attaching your work. If we do not receive the file within 48 hours, we will automatically email you a shipping slip. The shipping slip contains the address to where you will mail in your work, completing the copyright process.</p>
                        <p>
                            Please review this list before uploading a copy of your work as an electronic file or sending a hard copy via mail. Should the type of file you plan to upload or mail is not included in this list, you must convert the file to an acceptable file type.</p>
                        <p>
                            Here is a list of acceptable file types:
                        </p>
                    </td>
                </tr>
                <tr>
                    <td> Please PRINT THIS PAGE for your records. </td>
                </tr>
                <tr>
                    <td> Here is a list of acceptable files: </td>
                </tr>
                <tr>
                    <td> Please review this list before uploading a copy of your work as an electronic file or sending a hard copy via mail. If the type of file you plan to upload or mail is not included in this list, you must convert the file to an acceptable file type. </td>
                </tr>
                <tr>
                    <td>
                        <table cellpadding="6" cellspacing="4" width="109%">
                            <tr class="Form_Label">
                                <td height="28" width="18%">
                                    <p> <strong>FILE TYPE</strong></p>
                                </td>
                                <td width="82%"> <strong>EXTENSION</strong></td>
                            </tr>
                            <tr class="Form_Label">
                                <td valign="top"> <strong>Data</strong></td>
                                <td> .db (Database File)<br /> .mdb (Microsoft Access Database)<strong>*</strong><br /> .xls (Microsoft Excel Spreadsheet) <strong>*</strong></td>
                            </tr>
                            <tr class="Form_Label">
                                <td valign="top"> <strong>Image</strong></td>
                                <td> .bmp (Bitmap Image) <br /> .dwg (AutoCAD Drawing) <br /> .dwf (Autodesk Design) <br /> .fdr (Final Draft) <br /> .gif, .giff (Graphics Interchange Format) <br /> .jpg, .jpeg, .jfif (Joint Photographic Experts Group) <br /> .pdf (Portable Document Format) <br /> .pic, .pict (Picture File) <br /> .png (Portable Network Graphic) <br /> .psd (Photoshop Document) <br /> .pub (Microsoft Publisher)<br /> .tga (Targa Graphic) <br /> .tif, .tiff (Tagged Image File Format) <br /> .wmf (Windows Metafile) </td>
                            </tr>
                            <tr class="Form_Label">
                                <td valign="top"> <strong>Audio</strong></td>
                                <td>
                                    <p> .aif, .aiff (Audio Interchange File Format) <br /> .au (Audio File) <br /> .mid, .midi, .rmi (Musical Instrument Digital Interface) <br /> .mp3 (MP3 Audio File or Layer 3 Audio Compression)<br /> .ra, .ram (Real Audio File)<strong>*** </strong> <br /> .rmi (Resource Interchangable File Format)<br /> .wav (Windows Wave Sound File) <br /> .wma (Windows Media Audio File) </p>
                                </td>
                            </tr>
                            <tr class="Form_Label">
                                <td valign="top"> <strong>Video</strong></td>
                                <td>
                                    <p> .avi (audio video interleave)<br /> .mov (quicktime)<br /> .mpg, .mpeg (Moving Picture Experts Group)<br /> .rm, .rv (Real Media File)<strong>***</strong><br /> .swf (Adobe Flash formerly Shockwave Flash)<br /> .wmv (windows media video)</p>
                                </td>
                            </tr>
                            <tr class="Form_Label">
                                <td valign="top"> <strong>Text</strong></td>
                                <td> .doc (Microsoft Word Document)<strong>* </strong> <br /> .docx (Microsoft Word Open XML Document)<strong>*</strong><br /> .htm, .html (HyperText Markup Language)<br /> .pdf (Portable Document Format)<br /> .rtf (Rich Text Document) <br /> .txt (Text File) <br /> <em><strong>.</strong></em>wpd (WordPerfect Document)<br /> .wps (Microsoft Works Word Processor Document)<strong>** </strong> </td>
                            </tr>
                            <tr class="Form_Label">
                                <td height="34" valign="top"> <strong>Presentation</strong></td>
                                <td> .pps, .ppt (Microsoft Power Point)<strong>*</strong></td>
                            </tr>
                            <tr class="Form_Label">
                                <td height="34" valign="top"> <strong>Compressed</strong></td>
                                <td> .cab (Windows Cabinet File) <br /> .zip (Zipped File) </td>
                            </tr>
                            <tr class="Form_Label">
                                <td align="right" height="60" valign="baseline"> <strong>*<br /> **<br /> ***</strong></td>
                                <td valign="top">
                                    <p> For Microsoft Office files, please use version 2003 or earlier.<br /> For Microsoft Works files, please use version 9 or earlier.<br /> For Real Player files, please use version 6 or earlier.</p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td> Any Questions Please Contact us at: <a href='mailto:contact@copyrightofficeonline.com'>contact@copyrightofficeonline.com</a></td>
                </tr>
            </table>
            <!-- Google Code for order Conversion Page -->
            <script type="text/javascript">
                /* <![CDATA[ */
                var google_conversion_id = 1010679504;
                var google_conversion_language = "en";
                var google_conversion_format = "3";
                var google_conversion_color = "ffffff";
                var google_conversion_label = "R8gNCNnQjF0Q0P324QM";
                var google_remarketing_only = false;
                /* ]]> */
            </script>
            <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
            </script>
            <noscript>
                <div style="display:inline;">
                    <img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/1010679504/?label=R8gNCNnQjF0Q0P324QM&amp;guid=ON&amp;script=0" />
                </div>
            </noscript>
            <script>
                (function(i, s, o, g, r, a, m) {
                    i['GoogleAnalyticsObject'] = r;
                    i[r] = i[r] || function() {
                        (i[r].q = i[r].q || []).push(arguments)
                    },
                        i[r].l = 1 * new Date();
                    a = s.createElement(o), m = s.getElementsByTagName(o)[0];
                    a.async = 1;
                    a.src = g;
                    m.parentNode.insertBefore(a, m)
                })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
                ga('create', 'UA-131532375-1', 'auto');
                ga('send', 'pageview');
            </script>

        </div>
    </div>
</div>