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
		<?php // dynamic_sidebar('sidebar-1'); 
		?>
	</aside><!-- .sidebar .widget-area -->
<?php endif; ?>
<div class="col-lg-12 col-md-6  m-4 ">
	<h4 class="text text-center">Order summary</h4>
	<ul class="ul">
		<li id="order1" class=" list-group-item border-1 border-top m-3 ">
			<span>fla-biz service </span>
			<span class="float-end">79</span>
		</li>
		<li id="agriment" style="display:none" class=" list-group-item  m-3 ">
			<span>Register agent service </span>
			<span class="float-end">500</span>
		</li>
		<li id="rr" style="display:none" class=" list-group-item  m-3 ">
			<span>Certificate of Status </span>
			<span class="float-end">20.00</span>
		</li>
		<li id="order3" style=" display:none " class=" list-group-item  m-3 ">
			<span>Fictitious Name Registration </span>
			<span class="float-end">69</span>
		</li>
		<li id="order4" style=" display:none " class=" list-group-item  m-3 ">
			<span>Corporate Seals &  Stock </span>
			<span class="float-end">49</span>


		</li>

		<li id="order5" style=" display:none " class=" list-group-item  m-3 ">
			<span>Bylaws and Minutes </span>
			<span class="float-end">49.00</span>
		</li>

		<li id="order6" style=" display:none " class=" list-group-item  m-3 ">
			<span>Corporate Embosser </span>
			<span class="float-end">20.00</span>
		</li>

		<li id="order7" style=" display:none " class=" order7 list-group-item  m-3  ">
			<span>EIN Application</span>
			<span class="float-end">25.00</span>
		</li>
		<li id="order11" style="display:none" class="list-group-item m-3 ">
			<span> Sub-S Election</span>
			<span class="float-end">39</span>
		</li>
		<li id="application4" class=" list-group-item  m-3 d-flex justify-content-between">

		</li>
		<li id="application" class=" list-group-item  m-3 d-flex justify-content-between ">

		</li>
		<li id="applications" class=" list-group-item  m-3 d-flex justify-content-between ">

		</li>
		<li id="applicationss" class=" list-group-item  m-3 d-flex justify-content-between ">

		</li>
		<li id="applicationsss" class=" list-group-item  m-3 d-flex justify-content-between ">

		</li>
		<li id="applicationssss" class=" list-group-item  m-3 d-flex justify-content-between ">

		</li>
		<li id="applicationsssss" class=" list-group-item  m-3 d-flex justify-content-between ">

		</li>
		<li id="application11" class=" list-group-item  m-2 d-flex justify-content-between ">

		</li>
		<li id="count" class=" list-group-item  m-3 border-1 border-top  ">
			<!-- <span>Sub total </span>
			<span class="float-end">$79</span> -->
		</li>
	</ul>
	<p>*State filing fees, shipping & handling and sales tax will be computed on checkout. You will have a chance to review your order before checking out</p>
</div>