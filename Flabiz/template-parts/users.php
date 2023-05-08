<?php
// Template Name: users
// Get all users
get_header();


$args = array(
    'role' => 'subscriber',
    'orderby' => 'ID',
    'order' => 'ASC'
);
$user_query = new WP_User_Query($args);

// Check if users were found
if (!empty($user_query->results)) {
    ?>
    <!-- Output the table -->
    <div class="container  p-5">
        <h3 class="text-center p-5">All Users Data</h3>
        <table class="border rounded-3 table table-light table-striped-columns text-center">
            <thead>
                <tr class="table-dark border-dark">
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>View</th>
                    <!-- <th>Delete</th> -->
                </tr>
            </thead>
            <tbody>
                <?php foreach ($user_query->results as $user): ?>
                    <tr>
                        <td>
                            <?php echo esc_html($user->ID); ?>
                        </td>
                        <td>
                            <?php echo esc_html($user->user_login); ?>
                        </td>
                        <td>
                            <?php echo esc_html($user->user_email); ?>
                        </td>
                        <td>
                            <?php echo esc_html($user->first_name); ?>
                        </td>
                        <td>
                            <?php echo esc_html($user->last_name); ?>
                        </td>
                        <td>
                            <a href="<?php echo esc_url(get_permalink(get_page_by_title('User')) . '?user_id=' . $user->ID); ?>"
                                class="btn btn-primary">View</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>


    </div>
    <?php
} else {
    echo 'No users found.';
}


get_footer();
?>