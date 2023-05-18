<?php

/**
 * Twenty Sixteen functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */



/**
 * Twenty Sixteen only works in WordPress 4.4 or later.
 */

if (version_compare($GLOBALS['wp_version'], '4.4-alpha', '<')) {

	require get_template_directory() . '/inc/back-compat.php';
}



if (!function_exists('twentysixteen_setup')):

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * Create your own twentysixteen_setup() function to override in a child theme.
	 *
	 * @since Twenty Sixteen 1.0
	 */

	function twentysixteen_setup()
	{

		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Twenty Sixteen, use a find and replace
		 * to change 'twentysixteen' to the name of your theme in all the template files
		 */

		load_theme_textdomain('twentysixteen', get_template_directory() . '/languages');



		// Add default posts and comments RSS feed links to head.

		add_theme_support('automatic-feed-links');



		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */

		add_theme_support('title-tag');



		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
		 */

		add_theme_support('post-thumbnails');

		set_post_thumbnail_size(1200, 9999);



		// This theme uses wp_nav_menu() in two locations.

		register_nav_menus(
			array(

				'primary' => __('Primary Menu', 'twentysixteen'),

				'social' => __('Social Links Menu', 'twentysixteen'),

			)
		);



		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */

		add_theme_support(
			'html5',
			array(

				'search-form',

				'comment-form',

				'comment-list',

				'gallery',

				'caption',

			)
		);



		/*
		 * Enable support for Post Formats.
		 *
		 * See: https://codex.wordpress.org/Post_Formats
		 */

		add_theme_support(
			'post-formats',
			array(

				'aside',

				'image',

				'video',

				'quote',

				'link',

				'gallery',

				'status',

				'audio',

				'chat',

			)
		);



		/*
		 * This theme styles the visual editor to resemble the theme style,
		 * specifically font, colors, icons, and column width.
		 */

		add_editor_style(array('css/editor-style.css', twentysixteen_fonts_url()));
	}

endif; // twentysixteen_setup

add_action('after_setup_theme', 'twentysixteen_setup');



/**
 * Sets the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 *
 * @since Twenty Sixteen 1.0
 */

function twentysixteen_content_width()
{

	$GLOBALS['content_width'] = apply_filters('twentysixteen_content_width', 840);
}

add_action('after_setup_theme', 'twentysixteen_content_width', 0);



/**
 * Registers a widget area.
 *
 * @link https://developer.wordpress.org/reference/functions/register_sidebar/
 *
 * @since Twenty Sixteen 1.0
 */

function twentysixteen_widgets_init()
{

	register_sidebar(
		array(

			'name' => __('Sidebar', 'twentysixteen'),

			'id' => 'sidebar-1',

			'description' => __('Add widgets here to appear in your sidebar.', 'twentysixteen'),

			'before_widget' => '<section id="%1$s" class="widget %2$s">',

			'after_widget' => '</section>',

			'before_title' => '<h2 class="widget-title">',

			'after_title' => '</h2>',

		)
	);



	register_sidebar(
		array(

			'name' => __('Content Bottom 1', 'twentysixteen'),

			'id' => 'sidebar-2',

			'description' => __('Appears at the bottom of the content on posts and pages.', 'twentysixteen'),

			'before_widget' => '<section id="%1$s" class="widget %2$s">',

			'after_widget' => '</section>',

			'before_title' => '<h2 class="widget-title">',

			'after_title' => '</h2>',

		)
	);



	register_sidebar(
		array(

			'name' => __('Content Bottom 2', 'twentysixteen'),

			'id' => 'sidebar-3',

			'description' => __('Appears at the bottom of the content on posts and pages.', 'twentysixteen'),

			'before_widget' => '<section id="%1$s" class="widget %2$s">',

			'after_widget' => '</section>',

			'before_title' => '<h2 class="widget-title">',

			'after_title' => '</h2>',

		)
	);
}

add_action('widgets_init', 'twentysixteen_widgets_init');



if (!function_exists('twentysixteen_fonts_url')):

	/**
	 * Register Google fonts for Twenty Sixteen.
	 *
	 * Create your own twentysixteen_fonts_url() function to override in a child theme.
	 *
	 * @since Twenty Sixteen 1.0
	 *
	 * @return string Google fonts URL for the theme.
	 */

	function twentysixteen_fonts_url()
	{

		$fonts_url = '';

		$fonts = array();

		$subsets = 'latin,latin-ext';



		/* translators: If there are characters in your language that are not supported by Merriweather, translate this to 'off'. Do not translate into your own language. */

		if ('off' !== _x('on', 'Merriweather font: on or off', 'twentysixteen')) {

			$fonts[] = 'Merriweather:400,700,900,400italic,700italic,900italic';
		}



		/* translators: If there are characters in your language that are not supported by Montserrat, translate this to 'off'. Do not translate into your own language. */

		if ('off' !== _x('on', 'Montserrat font: on or off', 'twentysixteen')) {

			$fonts[] = 'Montserrat:400,700';
		}



		/* translators: If there are characters in your language that are not supported by Inconsolata, translate this to 'off'. Do not translate into your own language. */

		if ('off' !== _x('on', 'Inconsolata font: on or off', 'twentysixteen')) {

			$fonts[] = 'Inconsolata:400';
		}



		if ($fonts) {

			$fonts_url = add_query_arg(
				array(

					'family' => urlencode(implode('|', $fonts)),

					'subset' => urlencode($subsets),

				),
				'https://fonts.googleapis.com/css'
			);
		}



		return $fonts_url;
	}

endif;



/**
 * Handles JavaScript detection.
 *
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 *
 * @since Twenty Sixteen 1.0
 */

function twentysixteen_javascript_detection()
{

	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}

add_action('wp_head', 'twentysixteen_javascript_detection', 0);



/**
 * Enqueues scripts and styles.
 *
 * @since Twenty Sixteen 1.0
 */

function twentysixteen_scripts()
{

	wp_enqueue_script('customjs', get_template_directory_uri() . '/js/myjs.js?v=' . time(), array(), false, 'all');



	// Add custom fonts, used in the main stylesheet.

	wp_enqueue_style('twentysixteen-fonts', twentysixteen_fonts_url(), array(), null);



	// Add Genericons, used in the main stylesheet.

	wp_enqueue_style('genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.4.1');



	// Theme stylesheet.

	wp_enqueue_style('twentysixteen-style', get_stylesheet_uri());



	// Load the Internet Explorer specific stylesheet.

	wp_enqueue_style('twentysixteen-ie', get_template_directory_uri() . '/css/ie.css', array('twentysixteen-style'), '20150930');

	wp_style_add_data('twentysixteen-ie', 'conditional', 'lt IE 10');



	// Load the Internet Explorer 8 specific stylesheet.

	wp_enqueue_style('twentysixteen-ie8', get_template_directory_uri() . '/css/ie8.css', array('twentysixteen-style'), '20151230');

	wp_style_add_data('twentysixteen-ie8', 'conditional', 'lt IE 9');



	// Load the Internet Explorer 7 specific stylesheet.

	wp_enqueue_style('twentysixteen-ie7', get_template_directory_uri() . '/css/ie7.css', array('twentysixteen-style'), '20150930');

	wp_style_add_data('twentysixteen-ie7', 'conditional', 'lt IE 8');



	// Load the html5 shiv.

	wp_enqueue_script('twentysixteen-html5', get_template_directory_uri() . '/js/html5.js', array(), '3.7.3');

	wp_script_add_data('twentysixteen-html5', 'conditional', 'lt IE 9');



	wp_enqueue_script('twentysixteen-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151112', true);



	if (is_singular() && comments_open() && get_option('thread_comments')) {

		wp_enqueue_script('comment-reply');
	}



	if (is_singular() && wp_attachment_is_image()) {

		wp_enqueue_script('twentysixteen-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array('jquery'), '20151104');
	}




	wp_enqueue_script('twentysixteen-script', get_template_directory_uri() . '/js/functions.js', array('jquery'), '20151204', true);



	wp_localize_script(
		'twentysixteen-script',
		'screenReaderText',
		array(

			'expand' => __('expand child menu', 'twentysixteen'),

			'collapse' => __('collapse child menu', 'twentysixteen'),

		)
	);
}

add_action('wp_enqueue_scripts', 'twentysixteen_scripts');



/**
 * Adds custom classes to the array of body classes.
 *
 * @since Twenty Sixteen 1.0
 *
 * @param array $classes Classes for the body element.
 * @return array (Maybe) filtered body classes.
 */

function twentysixteen_body_classes($classes)
{

	// Adds a class of custom-background-image to sites with a custom background image.

	if (get_background_image()) {

		$classes[] = 'custom-background-image';
	}



	// Adds a class of group-blog to sites with more than 1 published author.

	if (is_multi_author()) {

		$classes[] = 'group-blog';
	}



	// Adds a class of no-sidebar to sites without active sidebar.

	if (!is_active_sidebar('sidebar-1')) {

		$classes[] = 'no-sidebar';
	}



	// Adds a class of hfeed to non-singular pages.

	if (!is_singular()) {

		$classes[] = 'hfeed';
	}



	return $classes;
}

add_filter('body_class', 'twentysixteen_body_classes');



/**
 * Converts a HEX value to RGB.
 *
 * @since Twenty Sixteen 1.0
 *
 * @param string $color The original color, in 3- or 6-digit hexadecimal form.
 * @return array Array containing RGB (red, green, and blue) values for the given
 *               HEX code, empty array otherwise.
 */

function twentysixteen_hex2rgb($color)
{

	$color = trim($color, '#');



	if (strlen($color) === 3) {

		$r = hexdec(substr($color, 0, 1) . substr($color, 0, 1));

		$g = hexdec(substr($color, 1, 1) . substr($color, 1, 1));

		$b = hexdec(substr($color, 2, 1) . substr($color, 2, 1));
	} else if (strlen($color) === 6) {

		$r = hexdec(substr($color, 0, 2));

		$g = hexdec(substr($color, 2, 2));

		$b = hexdec(substr($color, 4, 2));
	} else {

		return array();
	}



	return array('red' => $r, 'green' => $g, 'blue' => $b);
}



/**
 * Custom template tags for this theme.
 */

require get_template_directory() . '/inc/template-tags.php';



/**
 * Customizer additions.
 */

require get_template_directory() . '/inc/customizer.php';



/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for content images
 *
 * @since Twenty Sixteen 1.0
 *
 * @param string $sizes A source size value for use in a 'sizes' attribute.
 * @param array  $size  Image size. Accepts an array of width and height
 *                      values in pixels (in that order).
 * @return string A source size value for use in a content image 'sizes' attribute.
 */

function twentysixteen_content_image_sizes_attr($sizes, $size)
{

	$width = $size[0];



	840 <= $width && $sizes = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 62vw, 840px';



	if ('page' === get_post_type()) {

		840 > $width && $sizes = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
	} else {

		840 > $width && 600 <= $width && $sizes = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 984px) 61vw, (max-width: 1362px) 45vw, 600px';

		600 > $width && $sizes = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
	}



	return $sizes;
}

add_filter('wp_calculate_image_sizes', 'twentysixteen_content_image_sizes_attr', 10, 2);



/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for post thumbnails
 *
 * @since Twenty Sixteen 1.0
 *
 * @param array $attr Attributes for the image markup.
 * @param int   $attachment Image attachment ID.
 * @param array $size Registered image size or flat array of height and width dimensions.
 * @return string A source size value for use in a post thumbnail 'sizes' attribute.
 */

function twentysixteen_post_thumbnail_sizes_attr($attr, $attachment, $size)
{

	if ('post-thumbnail' === $size) {

		is_active_sidebar('sidebar-1') && $attr['sizes'] = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 984px) 60vw, (max-width: 1362px) 62vw, 840px';

		!is_active_sidebar('sidebar-1') && $attr['sizes'] = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 88vw, 1200px';
	}

	return $attr;
}

add_filter('wp_get_attachment_image_attributes', 'twentysixteen_post_thumbnail_sizes_attr', 10, 3);



/**
 * Modifies tag cloud widget arguments to have all tags in the widget same font size.
 *
 * @since Twenty Sixteen 1.1
 *
 * @param array $args Arguments for tag cloud widget.
 * @return array A new modified arguments.
 */

function twentysixteen_widget_tag_cloud_args($args)
{

	$args['largest'] = 1;

	$args['smallest'] = 1;

	$args['unit'] = 'em';

	return $args;
}

add_filter('widget_tag_cloud_args', 'twentysixteen_widget_tag_cloud_args');



// custom code for creating shortcode

function sms()
{

	$headers = 'From: Copyright Application Online <contact@copyrightregistryonline.us>' . "\r\n";

	wp_mail('contact@copyrightregistryonline.us', ' Copyright Application Online - New Order', 'A new order has been placed for  Copyright Application Online', $headers);

	wp_mail('5085964512@txt.att.net', ' Copyright Application Online   - New Order', 'A new order has been placed for Copyright');
}

function registerSms()
{

	add_shortcode('sms', 'sms');
}



add_action('init', 'registerSms');

function sess_start()
{
	if (!session_id())
		session_start();
}
add_action('init', 'sess_start');

function wpf_dev_process_complete($fields, $entry, $form_data, $entry_id)
{

	if (absint($form_data['id']) !== 594) {
		return;
	}
	$user = wp_get_current_user();
	if (in_array('administrator', (array) $user->roles))
		wp_safe_redirect("/admin-dashboard");
	else if (in_array('customer', (array) $user->roles))
		wp_safe_redirect("/record");
}
add_action('wpforms_process_complete', 'wpf_dev_process_complete', 10, 4);
function wpf_dev_process($fields, $entry, $form_data)
{
	if (absint($form_data['id']) !== 594) {
		if (absint($form_data['id']) !== 620)
			if (absint($form_data['id']) !== 623)
				return;
	}


	if (absint($form_data['id']) === 594) {
		// Fields are in JSON, so we decode to an array
		$username = $fields[4]['value'];
		$pwd = $fields[2]['value'];
		$check = wp_authenticate_username_password(NULL, $username, $pwd);
		if (property_exists($check, 'data')) {
			$user = $check->data->ID;
			$con = mysqli_connect("160.153.91.197", 'tax1232807355376', 'LUa-Vod%14ed', 'tax1232807355376');
			$query = mysqli_query($con, "SELECT * FROM copyrightinfo INNER JOIN user_cases ON copyrightinfo.id = user_cases.order_id WHERE copyrightinfo.uid = '$user'");
			if ($query) {
				if (mysqli_num_rows($query) > 0) {
					wp_set_current_user($user);
					wp_set_auth_cookie($user);
				} else
					wpforms()->process->errors[$form_data['id']][4] = esc_html__("You cant access Details Untill Admin Allow");
			}
		} else {
			if (property_exists($check, "errors")) {
				if (array_key_exists("invalid_username", $check->errors)) {
					wpforms()->process->errors[$form_data['id']][4] = esc_html__($check->errors['invalid_username'][0]);
				} else if (array_key_exists("incorrect_password", $check->errors)) {
					$error = explode(".", wp_strip_all_tags($check->errors['incorrect_password'][0]));
					wpforms()->process->errors[$form_data['id']][2] = $error[0];
				}
			}
		}
	} else if (absint($form_data['id']) === 620) {
		$email = $fields[1]['value'];
		if (email_exists($email)) {
			$user = get_user_by("email", $email);
			$uid = $user->ID;
			$random = rand(0, 999999);
			update_user_meta($uid, "user_otp", $random);
			$_SESSION['user_email_otp'] = $email;
			add_filter('wp_mail_from', 'custom_wp_mail_from');
			add_filter('wp_mail_from_name', 'custom_wp_mail_from_name');
			add_filter('wp_mail_content_type', 'text/html');

			$link = "<a href='https://copyright-application-online.com/new-password?token=" . $random . "'>Create New Password</a>";
			wp_mail($email . ",contact@copyrightofficeonline.com", 'Copyright Registry Online - Reset our Password by clickig the link below', $link);

			// $password = $user-
		} else {
			wpforms()->process->errors[$form_data['id']][1] = esc_html__("This email is not Valid");
		}
	} else if (absint($form_data['id']) === 623) {
		$email = $_SESSION['user_email_otp'];
		$user = get_user_by("email", $email);
		$pwd = $fields[1]['value'];
		$uid = $user->ID;
		$random = rand(0, 999999);
		// print_r($fields);
		// die;
		update_user_meta($uid, "user_otp", $random);
		wp_set_password($pwd, $uid);
		session_destroy();
		session_unset();
		if (in_array('administrator', (array) $user->roles))
			wp_safe_redirect("/wp-admin");
		else if (in_array('customer', (array) $user->roles))
			wp_safe_redirect("/login");
	}
}
add_action('wpforms_process', 'wpf_dev_process', 10, 3);




function wpf_dev_entries_table($atts)
{
	if (current_user_can('administrator')) {
		$atts = shortcode_atts(
			array(
				'id' => ''
			),
			$atts
		);
		if (empty($atts['id']) || !function_exists('wpforms')) {
			return;
		}
		$form = wpforms()->form->get(absint($atts['id']));

		if (empty($form)) {
			return;
		}
		$form_data = !empty($form->post_content) ? wpforms_decode($form->post_content) : '';
		$entries = wpforms()->entry->get_entries(array('form_id' => absint($atts['id']), 'number' => -1));
		$disallow = apply_filters('wpforms_frontend_entries_table_disallow', array('divider', 'html', 'pagebreak', 'captcha', 'checkbox'));
		// $ids = array();
		$ids = array(31, 32, 39, 21, 43, 44, 56, 57, 60, 61, 62, 63, 64, 65, 66);
		ob_start();
		$serial_no = 0;
		echo '<div class="table-responsive">
	    <table class="wpforms-frontend-entries table table-stripped">';
		echo '<thead><tr><th>Serial No#</th>';
		foreach ($form_data['fields'] as $field) {
			if (!in_array($field['type'], $disallow)) {
				// $ids[] = $field['id'];
				if (!in_array($field['id'], $ids)) {
					echo '<th>' . sanitize_text_field($field['label']) . '</th>';
				}
			}
		}
		echo '<th>Actions</th></tr></thead>';
		echo '<tbody></div>';
		foreach ($entries as $entry) {
			$serial_no++;
			echo '<tr> 
	                        <td><b>' . $serial_no . '</b></td>';
			$fields = wpforms_decode($entry->fields);
			foreach ($fields as $field) {
				if (!in_array($field['id'], $ids)) {
					echo '<td>' . apply_filters('wpforms_html_field_value', wp_strip_all_tags($field['value']), $field, $form_data, 'entry-frontend-table') . '</td>';
				}
			}
			echo '<td><a href="/view?entry_id=' . $entry->entry_id . '&&form_id=' . $entry->form_id . '"><button class="my-btn-update">View</button></a>
	                    <a href="/delete?entry_id=' . $entry->entry_id . '"><button class="my-btn-del">Delete</button></a>
	                </td></tr>';
		}
		echo '</tbody>';
		echo '</table>';
	} else {
		?>
		<div class="container my-container">
			<div class="row">
				<div class="colm-md-12 error-msg">
					<h3>Sorry You Are Not Allowed To Access This Page</h3>
				</div>
			</div>
		</div>
		<?php
	}
	$output = ob_get_clean();
	return $output;
}
add_shortcode('wpforms_entries_table', 'wpf_dev_entries_table');


function custom_custom_logo_setup()
{
	$defaults = array(
		'height' => 160,
		'width' => 55,
		'flex-height' => true,
		'flex-width' => true,
		'header-text' => array('site-title', 'site-description'),
		'unlink-homepage-logo' => true,
	);
	add_theme_support('custom-logo', $defaults);
}
add_action('after_setup_theme', 'custom_custom_logo_setup');


// Add this code to a plugin or theme's functions.php file

// AJAX handler function
add_action('wp_ajax_insert_form_data', 'insert_form_data');
add_action('wp_ajax_nopriv_insert_form_data', 'insert_form_data');
function insert_form_data()
{
	// Retrieve form data from AJAX request
	$formData = $_POST['formData'];

	// Connect to WordPress database
	global $wpdb;

	// Create an array of user data
	$user_data = array(
		'user_login' => $formData['user_name'],
		'user_email' => $formData['user_login'],
		'user_pass' => $formData['password'],
		'first_name' => $formData['first_name'],
		'last_name' => $formData['last_name'],
	);

	// Insert user data into the WordPress user table
	$user_id = wp_insert_user($user_data);


	// First, save the main form data
	if (!empty($formData)) {
		foreach ($formData as $key => $value) {
			if ($key == 'officers' || $key == 'directors') {
				continue;
			}
			update_user_meta($user_id, $key, $value);
		}
	}

	// Save the officers metadata
	if (!empty($formData['officers'])) {
		$officers_data = array();
		foreach ($formData['officers'] as $officer_key => $officer_value) {
			foreach ($officer_value as $meta_key => $meta_value) {
				$officers_data[$officer_key][$meta_key] = $meta_value;
			}
		}
		// Encode officers data as JSON
		$officers_json = json_encode($officers_data);
		// Save officers data as a user meta field
		update_user_meta($user_id, 'officers_data', $officers_json);
	}


	// Save the directors metadata
	if (!empty($formData['directors'])) {
		$directors_data = array();
		foreach ($formData['directors'] as $director_key => $director_value) {
			$director_data = array();
			foreach ($director_value as $meta_key => $meta_value) {
				$director_data[$meta_key] = $meta_value;
			}
			$directors_data[] = $director_data;
		}
		$directors_data_json = json_encode($directors_data);
		update_user_meta($user_id, 'directors_data', $directors_data_json);

	}

	$to = 'jabbar.azam@codelab.pk';  // Replace with the recipient's email address
    $subject = 'test email title';     // Replace with your email subject
    $message = 'test email body';     // Replace with your email content
    
    $headers = array('Content-Type: text/html; charset=UTF-8');
    
    // Send the email
    wp_mail($to, $subject, $message, $headers);

	// Send response back to JavaScript
	wp_send_json_success('User created successfully, and its data is inserted.');
	exit;


}



// // restricte users and user page 
// function restrict_page_access()
// {
// 	if (!current_user_can('manage_options') && (is_page('users') || is_page('user'))) {
// 		wp_redirect('restricted');
// 		exit;
// 	}
// }
// add_action('wp', 'restrict_page_access');


function wpse_set_noindex() {
    if (is_page(array('user', 'users', 'restricted'))) { 
        $meta_tags = get_option('wpse_noindex_meta_tags', array());
        $meta_tags['noindex'] = 'noindex';
        update_option('wpse_noindex_meta_tags', $meta_tags);
    }
}
add_action('wp_head', 'wpse_set_noindex');
