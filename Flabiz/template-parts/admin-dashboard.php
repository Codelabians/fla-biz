<?php
// Template Name: Admin Dashboard
get_header();

?>


    <div id="tf-works">
        <div class="container">
            <div class="entry-content table-responsive">
                <style type="text/css">
                    .pagNumActive {
                        color: #000;
                        border:#060 1px solid; background-color: #D2FFD2; padding-left:3px; padding-right:3px;
                    }
                    .paginationNumbers a:link {
                        color: #000;
                        text-decoration: none;
                        border:#999 1px solid; background-color:#F0F0F0; padding-left:3px; padding-right:3px;
                    }
                    .paginationNumbers a:visited {
                        color: #000;
                        text-decoration: none;
                        border:#999 1px solid; background-color:#F0F0F0; padding-left:3px; padding-right:3px;
                    }
                    .paginationNumbers a:hover {
                        color: #000;
                        text-decoration: none;
                        border:#060 1px solid; background-color: #D2FFD2; padding-left:3px; padding-right:3px;
                    }
                    .paginationNumbers a:active {
                        color: #000;
                        text-decoration: none;
                        border:#999 1px solid; background-color:#F0F0F0; padding-left:3px; padding-right:3px;
                    }

                </style>

                <?php
                if (current_user_can( 'manage_options' )){?>
                <p class='log' style='text-align:right'>
                    <a href="<?php echo wp_logout_url('$index.php'); ?>">Logout</a>
                </p>

                <?php
                global $wpdb;
                $table_name = $wpdb->prefix . "copyrightinfo";
                $wpdb->show_errors();
                
                $result = $wpdb->get_results("SELECT count(*) as total FROM ".$table_name);
        
                $num_rows = $result[0]->total;
                
                if (!$result) {
                    // Handle the error here
                    $error = $wpdb->last_error;
                    die;
                    // ...
                }
                if (isset($_GET['pn'])) {
                    $pn = preg_replace('#[^0-9]#i', '', $_GET['pn']);
                } else {
                    $pn = 1;
                }
                $itemsPerPage = 300;
                $lastPage = ceil($num_rows / $itemsPerPage);
                if ($pn < 1) {
                    $pn = 1;
                } else if ($pn > $lastPage) {
                    $pn = $lastPage;
                }
                $centerPages = "";
                $sub1 = $pn - 1;
                $sub2 = $pn - 2;
                $add1 = $pn + 1;
                $add2 = $pn + 2;
                if ($pn == 1) {
                    $centerPages .= '&nbsp; <span class="pagNumActive">' . $pn . '</span> &nbsp;';
                    $centerPages .= '&nbsp; <a href="/admin-dashboard/?pn=' . $add1 . '">' . $add1 . '</a> &nbsp;';
                } else if ($pn == $lastPage) {
                    $centerPages .= '&nbsp; <a href="/admin-dashboard/?pn=' . $sub1 . '">' . $sub1 . '</a> &nbsp;';
                    $centerPages .= '&nbsp; <span class="pagNumActive">' . $pn . '</span> &nbsp;';
                } else if ($pn > 2 && $pn < ($lastPage - 1)) {
                    $centerPages .= '&nbsp; <a href="/admin-dashboard/?pn=' . $sub2 . '">' . $sub2 . '</a> &nbsp;';
                    $centerPages .= '&nbsp; <a href="/admin-dashboard/?pn=' . $sub1 . '">' . $sub1 . '</a> &nbsp;';
                    $centerPages .= '&nbsp; <span class="pagNumActive">' . $pn . '</span> &nbsp;';
                    $centerPages .= '&nbsp; <a href="/admin-dashboard/?pn=' . $add1 . '">' . $add1 . '</a> &nbsp;';
                    $centerPages .= '&nbsp; <a href="/admin-dashboard/?pn=' . $add2 . '">' . $add2 . '</a> &nbsp;';
                } else if ($pn > 1 && $pn < $lastPage) {
                    $centerPages .= '&nbsp; <a href="/admin-dashboard/?pn=' . $sub1 . '">' . $sub1 . '</a> &nbsp;';
                    $centerPages .= '&nbsp; <span class="pagNumActive">' . $pn . '</span> &nbsp;';
                    $centerPages .= '&nbsp; <a href="/admin-dashboard/?pn=' . $add1 . '">' . $add1 . '</a> &nbsp;';
                }
                $limit = 'LIMIT ' .($pn - 1) * $itemsPerPage .',' .$itemsPerPage;
                $sql2 = $wpdb->get_results("SELECT * FROM $table_name ORDER BY id DESC $limit");
                $paginationDisplay = "";
                if ($lastPage != "1"){
                    $paginationDisplay .= 'Page <strong>' . $pn . '</strong> of ' . $lastPage. '&nbsp;  &nbsp;  &nbsp; ';
                    if ($pn != 1) {
                        $previous = $pn - 1;
                        $paginationDisplay .=  '&nbsp;  <a href="/admin-dashboard/?pn=' . $previous . '"> Back</a> ';
                    }
                    $paginationDisplay .= '<span class="paginationNumbers">' . $centerPages . '</span>';
                    if ($pn != $lastPage) {
                        $nextPage = $pn + 1;
                        $paginationDisplay .=  '&nbsp;  <a href="/admin-dashboard/?pn=' . $nextPage . '"> Next</a> ';
                    }
                }
                if(isset($_GET['id']))
                {
                    $id=$_GET['id'];
                    $result = $wpdb->delete(
                        $table_name,
                        array( 'id' => $id ),
                        array( '%d' )
                    );
                    if ($result === false) {
                        $error = $wpdb->last_error;
                    }
                }
                $result=$wpdb->get_results("SELECT * FROM $table_name ORDER BY id DESC $limit");
                
                echo $paginationDisplay;
                ?>
                <table class="table table-striped">
                    <thead class="thead-dark">
                    <tr bgcolor='#CCCCCC'>
                        <td class='heading'>S.No</td>
                        <td class='heading'>Title</td>
                        <td class='heading'>Date</td>
                        <td class='heading'>Company Name</td>
                        <td class='heading'>Phone #</td>
                        <td class='heading'>Credit Card #</td>
                        <td class='heading'>Options</td>
                    </tr>
                    </thead>
                    <?php
                    foreach($result as $res){

                        echo "<tr>";
                        echo "<td>".$res->ID."</td>";
                        echo "<td>".preg_replace('/\\\\/', '', $res->title_1)."</td>";
                        echo "<td>".$res->Updated."</td>";
                        echo "<td>".$res->company_name_10."</td>";
                        echo "<td>".$res->phone_10."</td>";
                        echo "<td>".$res->cc_number_10."</td>";
                        echo "<td><a href='../record-details/?id=".$res->ID."'>View</a> | 
    <a href='admin-dashboard/?id=".$res->ID."' onclick=\"return confirm('Are you sure you want to delete this record?');\">Delete</a></td></tr>";
                        echo
                            "<tr><td colspan='6' style='background:#eee;color:#666'><b style='font-weight:bold'>Note:</b>".$res->note."</td></tr>";

                    }
                    echo "</table>";

                    }
                    else
                    {?>
                        <p class='error_msg' style='padding:10px 25px; width:90%;'> You dont have permission to view this page. If you are an admin <a href="<?php echo wp_login_url(get_permalink()); ?>" title="Login" style="font-weight:bold; color:black">Login</a> here</p>

                        <?php
                    }
                    ?>
            </div>
        </div>
    </div>
<?php
get_footer();
?>