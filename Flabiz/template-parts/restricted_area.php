<?php 
// Template Name: restricted
get_header();
function redirect_to_homePage() {
    wp_redirect(home_url());
    exit;
}
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
    <p>This page can only be visited by the admin, if you're admin please try to login again</p>
    <button  class="btn btn-warning">Go to Home</button>
</div>










<?php 
get_footer();

?>