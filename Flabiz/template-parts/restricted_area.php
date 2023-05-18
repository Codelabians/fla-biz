<?php 
// Template Name: restricted
// ob_start();
get_header();
?>


<style>
    .restricted_are{
        width: 100%;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        margin: auto;
        gap: 1rem;
    }
</style>
<div class="container restricted_are border-2 p-2 text-center center-middle">
    <h2><strong> You need higher level to visit this page</strong></h2>
    <p>This page can only be visited by the admin, if you're admin please try to login here 👇</p>
    <a href="<?php echo home_url()?>/wp-admin"  class="btn btn-warning">Login Here</a>
</div>










<?php 
get_footer();

?>