<?php

/**
 * Plugin Name: KCMS URL
 * Plugin URI: https://github.com/kubeeapp/kcms-url
 * Description: Fixes issues with home and site URL on multisite when using KCMS
 * Version: 1.0.0
 * Author: Kubee
 * Author URI: https://kubee.com/
 * License: MIT License
 */

class_exists('Roots\Bedrock\URLFixer') || require_once __DIR__.'/vendor/autoload.php';

use Roots\Bedrock\URLFixer;

if (is_multisite()) {
    (new URLFixer)->addFilters();
}
