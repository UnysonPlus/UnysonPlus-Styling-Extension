<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$manifest = array();

// Basic Info
$manifest['name']        = __( 'Styling', 'fw' );
$manifest['slug']        = 'unysonplus-styling';
$manifest['description'] = __(
    "This extension lets you control the website visual style. Starting from predefined styles to changing specific fonts and colors across the website.",
    'fw'
);

$manifest['version']    = '1.0.7';
$manifest['display']    = true;
$manifest['standalone'] = true;

// Repository Info
$manifest['github_update'] = 'UnysonPlus/UnysonPlus-Styling-Extension';
$manifest['github_repo']   = 'https://github.com/UnysonPlus/UnysonPlus-Styling-Extension';
$manifest['github_branch'] = 'master';

// Author Info
$manifest['author']     = 'UnysonPlus';
$manifest['author_uri'] = 'https://www.lastimosa.com.ph/unysonplus';

// Meta
$manifest['license']      = 'GPL-2.0-or-later';
$manifest['text_domain']  = 'fw';
$manifest['requires_php'] = '7.4';
$manifest['requires_wp']  = '5.8';
