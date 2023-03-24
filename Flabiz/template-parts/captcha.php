<?php
    // Template Name: captcha
if (function_exists('siwp_check_captcha')) {
        // make sure plugin is enabled before calling function
        if (false == siwp_check_captcha($err)) {
            $errors = $err;
        }
        return $error;
    }
 ?>