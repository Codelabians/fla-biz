<?php
// Template Name: users
// Get all users
ob_start();
get_header();

if (!current_user_can('manage_options')) {
    wp_redirect('restricted');
    exit;
}

$args = array(
    'role' => 'subscriber',
    'orderby' => 'ID',
    'order' => 'DESC'
);
$user_query = new WP_User_Query($args);

// Check if users were found
if (!empty($user_query->results)) {
    ?>
    <!-- Output the table -->
    <div class="container table-responsive">
        <h3 class="text-center p-5">All Users Data</h3>
        <table class=" border rounded-3 table table-light table-striped text-center">
            <thead>
                <tr class="table-dark border-dark">
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Date Posted</th>
                    <th>View</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($user_query->results as $user):
                
                    ?>
                    <tr>
                        <td class="text-wrap text-break">
                            <?php echo esc_html($user->ID); ?>
                        </td>
                        <td class="text-wrap text-break">
                            <?php echo esc_html($user->user_login); ?>
                        </td>
                        <td class="text-wrap text-break">
                            <?php echo esc_html($user->primary_email); ?>
                        </td>
                        <td class="text-wrap text-break">
                            <?php echo esc_html($user->first_name); ?>
                        </td>
                        <td class="text-wrap text-break">
                            <?php echo esc_html($user->last_name); ?>
                        </td>
                        <td class="text-wrap text-break">
                            <?php echo esc_html($user->date); ?>
                        </td>
                        <td class="text-wrap text-break">
                            <a href="<?php echo esc_url(get_permalink(get_page_by_title('User')) . '?user_id=' . $user->ID); ?>"
                                class="btn-primary">View</a>
                        </td>

                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?php
} else {
    echo ('
    <h2 class="text-center color-gray p-5 m-5">Users not found.</h2>
    ');

}
get_footer();
?>