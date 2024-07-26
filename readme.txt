=== Empty Alt Image Container Swap ===

Contributors: akari_doi
Author: akari_doi
Tags: images, accessibility, alt text, figure, div
Requires at least: 5.0
Tested up to: 6.5.3
Stable tag: 1.0.2
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

This plugin improves accessibility by converting figure tags to div tags for image blocks with missing alt text.

== Description ==
This plugin enhances the accessibility of image blocks in the WordPress block editor by converting the wrapping `<figure>` tags to `<div>` tags when the image has an empty alt attribute.
Images that are purely decorative and lack an alt attribute do not contribute directly to the understanding of the content, and therefore, wrapping them in a <figure> element is not appropriate.
By replacing `<figure>` tags with `<div>` tags for images missing alt text, this plugin ensures proper HTML semantics. `<div>` elements are generic containers without implicit meaning, making them suitable for presenting images without associated descriptions.
In summary, this lightweight plugin dynamically adjusts the markup of image blocks based on the presence of alt text, thereby enhancing their accessibility.

== Installation ==
There are two ways to install the "Empty Alt Image Container Swap" plugin:

1. Upload and Install Manually

    1. Download the plugin ZIP file to your computer.
    2. Log in to your WordPress admin dashboard.
    3. Navigate to Plugins > Add New > Upload Plugin.
    4. Click "Choose File" and select the downloaded ZIP file.
    5. Click "Install Now" to upload and install the plugin.
    6. Once installed, click "Activate Plugin" to activate it.

2. Install from WordPress.org Directory

    1. Log in to your WordPress admin dashboard.
    2. Navigate to Plugins > Add New.
    3. Search for "Empty Alt Image Container Swap" in the search field.
    4. Find the plugin in the results and click "Install Now".
    5. Once installed, click "Activate Plugin" to activate it.

After activating the plugin through either method, it will automatically convert `<figure>` tags to `<div>` tags for image blocks with missing alt text when using the block editor. No further configuration is required.
For best accessibility practices, it's recommended to provide descriptive alt text for all images. However, if you forget or choose not to add alt text for certain images, this plugin ensures proper markup by using `<div>` containers instead of `<figure>`.

== Frequently Asked Questions ==

= What happens if I deactivate the plugin? =

When you deactivate the plugin, image blocks that were using `<div>` tags due to missing alt text will not automatically revert to using `<figure>` tags. You may need to manually update these image blocks if necessary to maintain your preferred markup.