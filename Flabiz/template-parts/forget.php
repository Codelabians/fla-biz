<?php
    // Template Name:Forget
    ob_start();
    get_header();
    
?>
<style>
    #form{
        padding-top:100px;
    }
    #wpforms-submit-594{
        background-color:#B22234;
        color:#fff;
        border-radius:10px;
    }
    .text-my{
        color:#3C3B6E;
        padding-top:5%;
        
    }
    input{
        border-radius:10px;
    }
    .card{
        box-shadow: 2px 2px 15px -5px;
    min-height: 370px!important;
    cursor: pointer;
    transition: transform 200ms;
    }
    .card-body{
        flex: 1 1 auto;
        min-height: 1px;
        padding: 1.25rem
    }
    #wpforms-form-594{
        padding-top:10px;
    }
</style>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div id="tf-works">
	<div class="container" id="form">
	<div class="entry-content">
		<?php
                  if(is_user_logged_in()){
                  $user = wp_get_current_user();
                	if ( in_array( 'administrator', (array) $user->roles ) ) 
                		wp_safe_redirect( "/admin-dashboard" );
                	else if(in_array( 'customer', (array) $user->roles ))
                		 wp_safe_redirect( "/record" );
                  }else 
                  ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
	                             <h1 class="text-center text-my">Forget Password</h1>
                                <div class="card-body col-md-offset-4">
                  <?php
                    echo do_shortcode('[wpforms id="620" title="false" description="false"]');
                  ?>
                  
                  <hr>
                  <a href="/login">Login</a>
                  </div>
                  </div>
                  </div>
                  </div>
                  
	</div>
</div>
	</div>

</article><!-- #post-## -->

<?php
    
    get_footer();

?>


