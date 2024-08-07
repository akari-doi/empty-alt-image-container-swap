<?php
/*
Plugin Name: Empty Alt Image Container Swap
Description: For image blocks with an empty alt attribute, this plugin replaces the figure tags wrapping the image with div tags, and vice versa. It also hides figcaption on the frontend for images with empty alt text.
Version: 1.1.0
Author: Akari Doi
Text Domain: empty-alt-image-container-swap
Stable Tag: 1.1.0
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

if (!defined('ABSPATH')) exit;

// Enqueue the custom script for the block editor
function eaics_enqueue_script() {
    wp_enqueue_script(
        'eaics-custom-image-block',
        plugin_dir_url(__FILE__) . 'js/custom-image-block.js',
        array('wp-blocks', 'wp-i18n', 'wp-element'),
        '1.1.0',
        true
    );
}
add_action('enqueue_block_editor_assets', 'eaics_enqueue_script');

// Filter the block content for frontend rendering
function eaics_block_filter($block_content, $block) {
    if ($block['blockName'] === 'core/image' && !empty($block_content)) {
        $dom = new DOMDocument();
        libxml_use_internal_errors(true);
        $success = @$dom->loadHTML(mb_convert_encoding($block_content, 'HTML-ENTITIES', 'UTF-8'), LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        libxml_clear_errors();

        if ($success) {
            $figures = $dom->getElementsByTagName('figure');

            if ($figures->length > 0) {
                foreach ($figures as $figure) {
                    $imgs = $figure->getElementsByTagName('img');
                    foreach ($imgs as $img) {
                        if (!$img->hasAttribute('alt') || empty($img->getAttribute('alt'))) {
                            $div = $dom->createElement('div');
                            foreach ($figure->attributes as $attr) {
                                $div->setAttribute($attr->name, $attr->value);
                            }
                            while ($figure->firstChild) {
                                if ($figure->firstChild->nodeName !== 'figcaption') {
                                    $div->appendChild($figure->firstChild);
                                } else {
                                    $figure->removeChild($figure->firstChild);
                                }
                            }
                            $figure->parentNode->replaceChild($div, $figure);
                        }
                    }
                }

                $block_content = preg_replace('/^<!DOCTYPE.+?>/', '', str_replace(array('<html>', '</html>', '<body>', '</body>'), array('', '', '', ''), $dom->saveHTML()));
            }
        } else {
            error_log('Failed to load HTML: ' . $block_content);
        }
    }

    return $block_content;
}
add_filter('render_block', 'eaics_block_filter', 10, 2);