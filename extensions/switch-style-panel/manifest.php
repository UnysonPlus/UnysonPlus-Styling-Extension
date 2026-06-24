<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$manifest = array();

$manifest['name']        = __( 'Switch Style Panel', 'fw' );
$manifest['slug']        = 'unysonplus-switch-style-panel';
$manifest['description'] = __( 
    'Show on the front-end a panel that allows the user to make the switch between predefined styles.', 
    'fw' 
);

$manifest['version']     = '1.0.1';
$manifest['display']     = false;
$manifest['standalone']  = true;

// Repo Info
$manifest['github_update'] = 'UnysonPlus/UnysonPlus-Switch-Style-Panel-Extension';
$manifest['github_repo']   = 'https://github.com/UnysonPlus/UnysonPlus-Switch-Style-Panel-Extension';
$manifest['github_branch'] = 'master';

// Author Info
$manifest['author']     = 'UnysonPlus';
$manifest['author_uri'] = 'https://www.lastimosa.com.ph/unysonplus';

// Extra Meta
$manifest['license']      = 'GPL-2.0-or-later';
$manifest['text_domain']  = 'fw';
$manifest['requires_php'] = '7.4';
$manifest['requires_wp']  = '5.8';
