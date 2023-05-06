<?php
// Template Name: User
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
);
// Output the user metadata
if ($user_data) {
    ?>
    <div class="container p-5">
        <h2 class="text-center p-5 fw-bold">User
            <strong>
                <?php echo esc_html($user_id) ?>
            </strong>
            Data
        </h2>
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
                            <td><strong class="text-capitalize">
                                    <?php echo esc_html($key); ?> :
                                </strong></td>
                            <td class="text-capitalize">
                                <?php echo esc_html($value[0]); ?>
                            </td>
                            <?php
                    } else {
                        ?>
                            <td><strong class="text-capitalize">
                                    <?php echo esc_html($key); ?> :
                                </strong></td>
                            <td class="text-capitalize">
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
    <?php
} else {
    echo 'User not found.';
}



// Get officers data from the database
$officers_data = get_user_meta($user_id, 'officers_data', true);

// Convert JSON string to a PHP array
$officers = json_decode($officers_data, true);

// Check if officers data is available
if ($officers) {
    ?>
    <div class="container ">
        <h2 class="text-center p-5 fw-bold">Officers</h2>
        <table class="border rounded-3 table table-light table-striped-columns text-center">
            <thead>
                <tr>
                    <th>Position</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Address</th>
                    <th>Suit/Apt</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Zip Code</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($officers as $officer) { ?>
                    <tr>
                        <td>
                            <?php echo esc_html($officer['position']); ?>
                        </td>
                        <td>
                            <?php echo esc_html($officer['first_name']); ?>
                        </td>
                        <td>
                            <?php echo esc_html($officer['last_name']); ?>
                        </td>
                        <td>
                            <?php echo esc_html($officer['address']); ?>
                        </td>
                        <td>
                            <?php echo esc_html($officer['suit_apt']); ?>
                        </td>
                        <td>
                            <?php echo esc_html($officer['city']); ?>
                        </td>
                        <td>
                            <?php echo esc_html($officer['state']); ?>
                        </td>
                        <td>
                            <?php echo esc_html($officer['zip_code']); ?>
                        </td>
                        <td>
                            <?php echo esc_html($officer['email']); ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <?php
} else {
    echo 'Officers data not found.';
}




// Geting directors data
$directors_data = get_user_meta($user_id, 'directors_data', true);

// Convert JSON string to a PHP object or array
$directors = json_decode($directors_data);

if ($directors) {
    ?>
    <div class="container p-5">
        <h2 class="text-center pb-5 pt-0 fw-bold">Directors</h2>
        <table class="border rounded-3 table table-light table-striped-columns text-center">
            <thead>
                <tr>
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
                        <td>
                            <?php echo esc_html($director->first_name . " " . $director->last_name); ?>
                        </td>
                        <td>
                            <?php echo esc_html($director->email); ?>
                        </td>
                        <td>
                            <?php echo esc_html($director->address); ?>
                        </td>
                        <td>
                            <?php echo esc_html($director->suit_apt); ?>
                        </td>
                        <td>
                            <?php echo esc_html($director->city); ?>
                        </td>
                        <td>
                            <?php echo esc_html($director->state); ?>
                        </td>
                        <td>
                            <?php echo esc_html($director->zip_code); ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <?php
} else {
    echo 'Directors data not found.';
}




get_footer();
?>