=== PopPop ===
Contributors: shazdeh
Plugin Name: PopPop
Tags: popup, pop-up, modal, widget, reveal, theme, rokbox
Requires at least: 3.0
Tested up to: 3.6
Stable tag: 0.4

Easily display your widgets inside modal and popup windows.

== Description ==

This plugin enables you to quickly add beautiful modals by adding widgets to the Popup area. You can choose to trigger the popup automatically on page load, or manually, which the plugin generates the required code for you.

Since 0.4, the plugin can be extended to support any popup script library (beta stage). Now the plugin supports <a href="http://www.rockettheme.com/wordpress-downloads/plugins/free/2625-rokbox">RokBox plugin</a> as well. To enable it, you must add this bit to your wp-config.php file:
<code>define( 'POPPOP_SCRIPT', 'RokBox_PopPop_Script' );</code>

You can use <a href="http://wordpress.org/extend/plugins/widget-logic/">Widget Logic</a> plugin to completely take control of in which parts of your website the popups are displayed.

== Installation ==

1. Upload the whole plugin directory to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Goto Appearance -> Widgets and add some widgets to the Popup area.
4. Copy the link code that triggers the popup and display it somewhere on your webpages.
5. Enjoy!

== Screenshots ==

1. The newly added Popup area which allows you to add any widgets you want. Notice that the plugin outputs the necessary link to activate the popup.
2. Displayig the login form widget in Members plugins as a popup.

== Changelog ==

= 0.4 =
* Refactored the codes to make the plugin extendible and support popup scripts.
* Added support for RokBox (http://www.rockettheme.com/wordpress-downloads/plugins/free/2625-rokbox)

= 0.3.1 =
* Fixed the path to stylesheet

= 0.3 =
* Added the cookie option
* Minified scripts

= 0.2 =
* Added the auto-fire option for widgets