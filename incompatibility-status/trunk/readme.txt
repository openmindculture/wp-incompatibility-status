=== Incompatibility Status ===
Contributors: openmindculture
Tags: compatibility, incompatibility, check, status, admin, gutenberg, block-editor, full-site-editing
Requires at least: 6.0
Tested up to: 6.1
Requires PHP: 7.4
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

== Description ==

Incompatibility Status adds a status message to the admin dashboard to display possible incompatibility issues using the block editor and full-site editing.

Incompatibility Status is a WordPress plugin that checks for possibly incompatible configurations concerning the new
block editor and full-site editing features of WordPress that might conflict with existing plugins and settings like
page builders, the classic editor plugin, or themes and plugins that do not support the intended WordPress features yet.

In your WordPress admin dashboard at `wp-admin`, you should see a status message to inform you about possibly
incompatible configurations, like using a classic editor together with a block enabled theme, or using full-site-editing
functionality together with a classic site builder.

A warning about a possible incompatibility does not mean that something is wrong or not working as intended!

As the latest default WordPress themes, like Twenty Twenty-Three, support blocks and full-site editing, it will show up as a potential conflict using that theme together with a classic editor plugin, although this might be exactly what you intended to do. But this warnings can be handy for a quick check of an existing  configuration that you did not set up yourself.

Currently, this plugin only performs rudimentary checks. This will be extended in future versions.

=== Settings ====

Currently, there are no settings.

=== Known Issues ===

None.

=== Development and Contribution ===

Incompatibility Status plugin for WordPress was originally developed by Ingo Steinke (@openmindculture).

If you want to contribute to this plugin, you can fork the source code at https://github.com/openmindculture/wp-incompatibility-status/
and open pull requests or issues. You can also open issues on the official WordPress plugin page.

== Installation ==

Install the plugin and activate it.

== Frequently Asked Questions ==

= What can I do with this plugin? =

You can install this plugin to see additional warnings in your WordPress admin dashboard, like incompatible editor plugins.

= What is the current status of this plugin? =

Currently, this plugin only performs rudimentary checks. This will be extended in future versions.

== Screenshots ==

1. This screen shows the status information in the WordPress admin dashboard

== Changelog ==

= 1.0.0 =
* First release.

== Upgrade Notice ==

= 1.0.0 =
* First release.
