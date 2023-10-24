<?php
/*
Plugin Name: Odds Calculator by Calculator.iO
Plugin URI: https://www.calculator.io/odds-calculator/
Description: The odds probability calculator can convert the odds of winning and losing to the probability of winning and losing. Learn the differences between odds and probability.
Version: 1.0.0
Author: Calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_odds_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Odds Calculator by Calculator.iO";

function display_ci_odds_calculator(){
    $page = 'index.html';
    return '<h2><a href="https://www.calculator.io/odds-calculator/" target="_blank"><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48"></a> Odds Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_odds_calculator_iframe"></iframe></div>';
}

add_shortcode( 'ci_odds_calculator', 'display_ci_odds_calculator' );