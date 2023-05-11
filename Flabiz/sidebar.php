<?php

/**
 * The template for the sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<?php if (is_active_sidebar('sidebar-1')) : ?>
	<aside id="secondary" class="sidebar widget-area" role="complementary">
		<?php // dynamic_sidebar('sidebar-1'); ?>
	</aside><!-- .sidebar .widget-area -->
<?php endif; ?>
<div class="col-lg-12 col-md-6  m-4 ">
	<h4>order summary</h4>
	<ul class="ul">
		<li id="order1" class=" list-group-item border-1 border-top m-3 ">
			<span>fla-biz service </span>
			<span class="float-end">$79</span>
		</li>
		<li id="agriment" style="display:none"class=" list-group-item border-1 border-top m-3 ">
			<span>Register agent service </span>
			<span class="float-end">$79</span>
		</li>
		<li id="rr" style="display:none"class=" list-group-item border-1 border-top m-3 ">
			<span>Certificate of Status </span>
			<span class="float-end">$20.00</span>
		</li>
		<li id="order3"style=" display:none "class=" list-group-item border-1 border-top m-3 ">
			<span>Fictitious Name Registration </span>
			<span class="float-end">$69</span>
		</li>
		
		<li id="order4" style=" display:none "class=" list-group-item border-1 border-top m-3 ">
			<span>Corporate Seals & Certificates of Stock </span>
			<span class="float-end">$49</span>
			

		</li>
		
		<li id="order5"style=" display:none "class=" list-group-item border-1 border-top m-3 ">
			<span>Bylaws and Minutes </span>
			<span class="float-end">$49.00</span>
		</li>
		
		<li id="order6" style=" display:none "class=" list-group-item border-1 border-top m-3 ">
			<span>Corporate Embosser </span>
			<span class="float-end">$20.00</span>
		</li>
		
		<li id="order7"style=" display:none "class=" list-group-item border-1 border-top m-3  ">
			<span>EIN Application</span>
			<span class="float-end">$25.00</span>
		</li>
		<li id="total"class=" list-group-item border-1 border-top m-3  ">
			<span>Sub total </span>
			<span class="float-end">$79</span>
		</li>
	</ul>
	<p>*State filing fees, shipping & handling and sales tax will be computed on checkout. You will have a chance to review your order before checking out</p>
</div>