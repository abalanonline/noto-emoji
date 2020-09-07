<?php
/**
 * Plugin Name: Android Emoji
 * Plugin URI: https://github.com/abalanonline/wordpress-android-emoji
 * Description: Google Android Noto Emoji for WordPress.
 * Version: 1.0
 * Author: Google LLC
 * Author URI: https://github.com/googlefonts/noto-emoji
 */

add_filter('emoji_svg_url', 'android_emoji_svg_url');

function android_emoji_svg_url() {
  $emoji_url = plugin_dir_url(__FILE__) . 'svg/emoji_u';
  return apply_filters('android_emoji_svg_url', $emoji_url);
}
