<?php
/*
Plugin Name: Odds Calculator by Calculator.iO
Plugin URI: https://www.calculator.io/odds-calculator/
Description: Easily convert betting odds to implied probability with our free Odds Calculator. Discover your true chances of winning, calculate payouts, and bet smarter.
Version: 1.0.0
Author: www.calculator.io / Odds Calculator
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: calcio_odds_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Odds Calculator by www.calculator.io";

function calcio_odds_calculator_shortcode(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Odds Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="calcio_odds_calculator_iframe"></iframe></div>';
}


add_shortcode( 'calcio_odds_calculator', 'calcio_odds_calculator_shortcode' );