=== Empty Alt Image Container Swap ===

Contributors: akari_doi
Author: akari_doi
Tags: images, accessibility, alt text, figure, div
Requires at least: 5.0
Tested up to: 6.6.1
Stable tag: 1.1.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

This plugin improves accessibility by converting figure tags to div tags for image blocks with missing alt text and hides captions for these images.

== Description ==
This plugin enhances the accessibility of image blocks in the WordPress block editor by converting the wrapping `<figure>` tags to `<div>` tags when the image has an empty alt attribute. Additionally, it hides the caption for images with empty alt text on the frontend.

Key features:
- Converts `<figure>` tags to `<div>` tags for images with empty alt text
- Hides captions for images with empty alt text on the frontend (output a warning to the editor)
- Works dynamically without modifying stored content

Images that are purely decorative and lack an alt attribute do not contribute directly to the understanding of the content, and therefore, wrapping them in a `<figure>` element is not appropriate.
By replacing `<figure>` tags with `<div>` tags for images missing alt text, this plugin ensures proper HTML semantics. `<div>` elements are generic containers without implicit meaning, making them suitable for presenting images without associated descriptions.

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

After activating the plugin through either method, it will automatically convert `<figure>` tags to `<div>` tags for image blocks with missing alt text when rendering pages. No further configuration is required.
For best accessibility practices, it's recommended to provide descriptive alt text for all images. However, if you forget or choose not to add alt text for certain images, this plugin ensures proper markup by using `<div>` containers instead of `<figure>`.

== Frequently Asked Questions ==

= What happens if I deactivate the plugin? =
When you deactivate the plugin, all image blocks will immediately revert to their original state. The plugin does not make any permanent changes to your content, so you don't need to update or edit anything after deactivation.

= Why are captions hidden for images with empty alt text? =
Captions are typically used to provide additional context or information about an image. For decorative images (those with empty alt text), captions are usually unnecessary and may even cause confusion, which is why they are hidden.

= Can I still add captions to images with empty alt text in the editor? =
Yes, you can still add captions to images with empty alt text in the editor. However, these captions will not be displayed on the frontend while the plugin is active. 

= Does this plugin modify my database or stored content? =
No, this plugin does not make any changes to your database or stored content. It works dynamically when pages are rendered, which means your original content remains intact.

== Changelog ==

= 1.1.0 =
* Added feature to hide captions for images with empty alt text on the frontend
* Improved code for handling empty alt text cases
* Updated plugin to work dynamically without modifying stored content

= 1.0.4 =
* Initial release

== Upgrade Notice ==

= 1.1.0 =
This update adds the ability to hide captions for images with empty alt text and improves the plugin's performance. The plugin now works dynamically, ensuring your original content remains unchanged.