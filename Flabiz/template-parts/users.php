<?php
// Template Name: users
// Get all users
get_header();

$args = array(
    'role' => 'subscriber', // or any other role you want to retrieve
    'orderby' => 'ID',
    'order' => 'ASC'
);
$user_query = new WP_User_Query( $args );

// Check if users were found
if ( ! empty( $user_query->results ) ) {
    ?>
    <!-- Output the table -->
    <div class="container  p-5">
        <h3 class="text-center p-5">All Users Data</h3>
        <table  class="border rounded-3 table table-light table-striped-columns text-center">
            <thead>
                <tr class="table-dark border-dark">
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>View</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ( $user_query->results as $user ) : ?>
                    <tr>
                        <td><?php echo esc_html( $user->ID ); ?></td>
                        <td><?php echo esc_html( $user->user_login ); ?></td>
                        <td><?php echo esc_html( $user->user_email ); ?></td>
                        <td><?php echo esc_html( $user->first_name ); ?></td>
                        <td><?php echo esc_html( $user->last_name ); ?></td>
                        <td><a href="<?php echo esc_url( get_author_posts_url( $user->ID ) ); ?>" class=" btn-primary">View</a></td>
                        <td><a href="javascript:void(0)" onclick="confirmDelete(<?php echo $user->ID; ?>)" class="btn-primary">Delete</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

                    <script>
                         function confirmDelete(userId) {
                        var confirmMsg = "Are you sure you want to delete this user?";
                        if (confirm(confirmMsg)) {
                        // If user clicks "OK" on the confirmation dialog box, redirect to the delete user page
                        window.location.href = "<?php echo esc_url( admin_url( 'user-edit.php?user_id=' ) ); ?>" + userId + "&amp;action=delete";
                            }
                        }
                    </script>

    </div>
    <?php
} else {
    echo 'No users found.';
}

get_footer();
?>
