<?php

/**
 * Plugin Name: Exotic Estate Custom Elements
 * Plugin URI: https://exotic-estate.com/
 * Description: ALPHA - NOT TO BE USED IN PRODUCTION
 * Author: Skyler
 * Author URI: https://exotic-estate.com/
 * License: GPLv2
 * Text Domain: breakdance
 * Domain Path: /languages/
 * Version: 0.0.1
 */

namespace BreakdanceCustomElements;

use function Breakdance\Util\getDirectoryPathRelativeToPluginFolder;

add_action(
    'breakdance_loaded',
    function () {
        \Breakdance\ElementStudio\registerSaveLocation(
            getDirectoryPathRelativeToPluginFolder(__DIR__) . '/elements',
            'BreakdanceCustomElements',
            'element',
            'EE Custom Elements',
            false
        );

        \Breakdance\ElementStudio\registerSaveLocation(
            getDirectoryPathRelativeToPluginFolder(__DIR__) . '/macros',
            'BreakdanceCustomElements',
            'macro',
            'Custom Macros',
            false,
        );

        \Breakdance\ElementStudio\registerSaveLocation(
            getDirectoryPathRelativeToPluginFolder(__DIR__) . '/presets',
            'BreakdanceCustomElements',
            'preset',
            'Custom Presets',
            false,
        );
    },
    // register elements before loading them
    9
);
