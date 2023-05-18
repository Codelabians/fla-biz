<?php
// Template Name: User

ob_start();
if (!current_user_can('manage_options')) {
    wp_redirect(home_url() . '/restricted');
    exit;
}

get_header();


// Get user ID from query parameter
$user_id = isset($_GET['user_id']) ? intval($_GET['user_id']) : 0;

// Get all user metadata
$user_data = get_userdata($user_id);
$user_meta = get_user_meta($user_id);

// Define an array of keys to exclude
$exclude_keys = array(
    'description',
    'rich_editing',
    'syntax_highlighting',
    'comment_shortcuts',
    'admin_color',
    'use_ssl',
    'show_admin_bar_front',
    'locale',
    'wp_capabilities',
    'wp_user_level',
    'dismissed_wp_pointers',
    'officers_data',
    'directors_data',
    'session_tokens',
    'special_note',
    'show-password-checkbox',
    'password',
    'wptx_capabilities',
    'Wptx_user_level',
    'primary_validate_email',
);
// Output the user metadata
if ($user_data) {
    ?>
    <div class="">

        <div class="container">
            <h2 class="text-center p-5 fw-bold">User
                <strong>
                    #<?php echo esc_html($user_id) ?>
                </strong>
                Data
            </h2>
            <?php
            if (isset($_POST['special_note']) && isset($_GET['user_id'])) {
                // Get the user ID from the URL parameter
                $user_id = intval($_GET['user_id']);

                // Sanitize the note text
                $note = sanitize_text_field($_POST['special_note']);

                // Update the user meta with the note text
                update_user_meta($user_id, 'special_note', $note);
            }
            ?>

            <?php
            if (isset($_POST['delete_user'])) {
                // Get the user ID from the URL parameter
        

                $user_id = intval($_GET['user_id']);
                $user_meta = get_user_meta($user_id);
                foreach ($user_meta as $meta_key => $meta_value) {
                    $deleted = delete_user_meta($user_id, $meta_key);
                }



                if (is_wp_error($deleted)) {
                    // There was an error deleting the user
                    $error_message = $deleted->get_error_message();
                    echo "Error deleting user: $error_message";
                } else {
                    // The user was deleted successfully
                    wp_redirect('users');
                }
            }
            ?>

            <div class="update_user_data container">
                <div class="inputs">
                    <form method="post">
                        <textarea cols="10" name="special_note" class="form-control"
                            placeholder="Leave a note here, or update your existing note." id="floatingTextarea2"
                            style="height: 100px"></textarea>
                        <div class="d-flex justify-content-around">
                            <button class="btn btn-primary" type="submit">Add Note</button>
                            <button onclick="return confirm('Are you sure you want to delete this user?')"
                                class="btn btn-danger" name="delete_user">Delete User</button>
                        </div>
                    </form>
                </div>

                <?php
                // Get the special note for the user
                $special_note = get_user_meta($user_id, 'special_note', true);

                // Display the special note card if the user has a note
                if (!empty($special_note)) {
                    ?>

                    <div class="card-not card">
                        <div class="card-header bg-dark color-white" style="color:#fff;">
                            Speacial Note For this User
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                <?php echo $special_note; ?>
                            </p>
                        </div>
                    </div>
                </div>

                <?php
                } else { ?>

                <div class="card">
                    <div class="card-header bg-dark color-white" style="color:#fff;">
                        Speacial Note For this User
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                        <p>You have not yet added any not for this user. Thanks!</p>
                        </p>
                    </div>
                </div>
                <?php
                }
                ?>
        </div>
        <div class="container table-responsive">

        <table class="border rounded-3 table table-light table-striped-columns text-center">
            <?php
            $i = 0;
            foreach ($user_meta as $key => $value) {
                // Check if the key is in the exclusion array
                if (!in_array($key, $exclude_keys)) {
                    // Display the key and value in alternating columns
                    if ($i % 2 == 0) {
                        ?>
                        <tr>
                            <td><strong class="text-wrap text-break text-capitalize">
                                    <?php echo esc_html($key); ?> :
                                </strong></td>
                            <td class="text-capitalize text-wrap text-break">
                                <?php echo esc_html($value[0]); ?>
                            </td>
                            <?php
                    } else {
                        ?>
                            <td><strong class="text-capitalize text-wrap text-break">
                                    <?php echo esc_html($key); ?> :
                                </strong></td>
                            <td class="text-capitalize text-wrap text-break">
                                <?php echo esc_html($value[0]); ?>
                            </td>
                        </tr>
                        <?php
                    }
                    $i++;
                }
            } ?>
        </table>
        </div>
    </div>
    <?php
} else {
    echo ('<h2 class="text-center color-gray ">User not found.</h2>');
}



// Get officers data from the database
$officers_data = get_user_meta($user_id, 'officers_data', true);

// Convert JSON string to a PHP array
$officers = json_decode($officers_data, true);

// Check if officers data is available
if ($officers) {
    ?>
    <div class="container table-responsive">
        <h2 class="text-center p-5 fw-bold">Officers</h2>
        <table class="border rounded-3 table table-light table-striped text-center">
            <thead >
                <tr class="table-dark border-dark">
                    <th>Position</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Address</th>
                    <th>Suit/Apt</th>
                    <th>City</th>
                    <th>Zip Code</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($officers as $officer) { ?>
                    <tr>
                        <td class="text-wrap text-break">
                            <?php echo esc_html($officer['position']); ?>
                        </td>
                        <td class="text-wrap text-break">
                            <?php echo esc_html($officer['first_name']); ?>
                        </td>
                        <td class="text-wrap text-break">
                            <?php echo esc_html($officer['last_name']); ?>
                        </td>
                        <td class="text-wrap text-break">
                            <?php echo esc_html($officer['address']); ?>
                        </td>
                        <td class="text-wrap text-break">
                            <?php echo esc_html($officer['suit_apt']); ?>
                        </td>
                        <td class="text-wrap text-break">
                            <?php echo esc_html($officer['city']); ?>
                        </td>
                        <td class="text-wrap text-break">
                            <?php echo esc_html($officer['zip_code']); ?>
                        </td>
                        <td class="text-wrap text-break">
                            <?php echo esc_html($officer['email']); ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <?php
} else {
    echo ('<h2 class="text-center color-gray mt-5">Officers Data not found.</h2> </br>');
}




// Geting directors data
$directors_data = get_user_meta($user_id, 'directors_data', true);

// Convert JSON string to a PHP object or array
$directors = json_decode($directors_data);

if ($directors) {
    ?>
    <div class="container table-responsive">
        <h2 class="text-center pb-5 pt-5 fw-bold">Directors</h2>
        <table class="border rounded-3 table table-light table-striped text-center">
            <thead>
                <tr class="table-dark border-dark">
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Suite. Apt. #, etc.</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Zip Code</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($directors as $director) { ?>
                    <tr>
                        <td class="text-wrap text-break">
                            <?php echo esc_html($director->first_name . " " . $director->last_name); ?>
                        </td>
                        <td class="text-wrap text-break">
                            <?php echo esc_html($director->email); ?>
                        </td>
                        <td class="text-wrap text-break">
                            <?php echo esc_html($director->address); ?>
                        </td>
                        <td class="text-wrap text-break">
                            <?php echo esc_html($director->suit_apt); ?>
                        </td>
                        <td class="text-wrap text-break">
                            <?php echo esc_html($director->city); ?>
                        </td>
                        <td class="text-wrap text-break">
                            <?php echo esc_html($director->state); ?>
                        </td>
                        <td class="text-wrap text-break">
                            <?php echo esc_html($director->zip_code); ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <?php
} else {
    echo ('<h2 class="text-center color-gray ">Directors Data not found.</h2>');
}




get_footer();
?>