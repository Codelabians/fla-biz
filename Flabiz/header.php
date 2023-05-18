<?php
session_start();

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta https-equiv="x-dns-prefetch-control" content="on">
  <?php if (is_singular() && pings_open(get_queried_object())): ?>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  <?php endif; ?>
  <script async src="https://www.googletagmanager.com/gtag/js?id=AW-771679285"></script>
  <script> window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date()); gtag('config', 'AW-771679285'); 
  </script>

  <script> gtag('event', 'conversion', { 'send_to': 'AW-771679285/qAtJCP6Gs5MBELXI--8C', 'transaction_id': '' }); 
  </script>
  <script type="text/javascript">function add_chatinline() { var hccid = 36868316; var nt = document.createElement("script"); nt.async = true; nt.src = "https://mylivechat.com/chatinline.aspx?hccid=" + hccid; var ct = document.getElementsByTagName("script")[0]; ct.parentNode.insertBefore(nt, ct); }
    add_chatinline(); </script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="shortcut icon"
    href="http://copyrightregistry-online-form.com/wp-content/themes/custom/images/bullet-icon.png" type="image/x-icon">
  <link rel="apple-touch-icon"
    href="http://copyrightregistry-online-form.com/wp-content/themes/custom/images/bullet-icon.png">
  <link rel="apple-touch-icon" sizes="72x72"
    href="http://copyrightregistry-online-form.com/wp-content/themes/custom/images/bullet-icon.png">
  <link rel="apple-touch-icon" sizes="114x114"
    href="http://copyrightregistry-online-form.com/wp-content/themes/custom/images/bullet-icon.png">

  <!-- Bootstrap -->
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css">
  <!-- Stylesheet
    ================================================== -->
  <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" media="screen" />

  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/custom.css">
  <!-- Google Fonts
    ================================================== -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- custom alert -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.min.css">




  <?php
  wp_head();
  ?>

</head>

<body>
  <nav id="tf-menu" class="navbar navbar-expand-lg navbar-fixed-top">
    <div class="container">
      <a class="navbar-brand" href="<?php echo home_url()?>">
        <?php
        if (function_exists('custom_custom_logo_setup')) {
          $custom_logo_id = get_theme_mod('custom_logo');
          $logo_image = wp_get_attachment_image_src($custom_logo_id, 'full');
          if ($logo_image) {
            echo '<a href="' . esc_url(home_url('/')) . '">';
            echo '<img style="width:12rem;" src="' . esc_url($logo_image[0]) . '" alt="' . get_bloginfo('name') . '">';
            echo '</a>';
          } else {
            echo '<h1 class="text-light">' . get_bloginfo('name') . '</h1>';
          }
        }
        ?>

      </a>
      <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon text-white bg-white"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="nav navbar-nav ms-auto">
          <li><a href="/" class="scroll nav-link text-white">Home</a></li>

          <li><a href="/faq/" class="scroll nav-link text-white">FAQ</a></li>
          <li><a href="/contact/" class="scroll nav-link text-white">Contact</a></li>
          <li><a href="/infringment-protection/" class="scroll nav-link text-white">Infringement Protection</a></li>
          <?php
          if (is_user_logged_in()) {
            $user = wp_get_current_user();

            ?>
            <li><a href="/record" class="scroll nav-link text-white">
                <?= ucfirst($user->data->user_nicename) ?>
              </a></li>
            <li><a href="<?= wp_logout_url("/") ?>" class="scroll nav-link text-white">Logout</a></li>
            <?php
          } else {
            ?>
            <li><a href="/login/" class="scroll nav-link text-white">Login</a></li>
            <?php
          }
          ?>
        </ul>
      </div>
    </div>
  </nav>