<?php
/*
Author: GeoDirectory Team
Author URI: http://wpgeodirectory.com

To manage your codebase properly, you should place all your functions in 'lib' folder.
Include each function file here.
*/

require_once get_template_directory() . '/lib/config.php';            // Configuration goes here
require_once get_template_directory() . '/lib/init.php';              // Theme setup functions goes here
require_once get_template_directory() . '/lib/cleanup.php';           // Cleanup functions goes here
require_once get_template_directory() . '/lib/scripts.php';           // CSS and JS includes goes here
require_once get_template_directory() . '/lib/utils.php';             // Utility functions goes here
require_once get_template_directory() . '/lib/nav.php';               // Nav menu functions goes here
require_once get_template_directory() . '/lib/sidebars.php';          // Register your sidebars here
require_once get_template_directory() . '/lib/widgets.php';           // Widget functions goes here
require_once get_template_directory() . '/lib/comments.php';          // Comments functions goes here
require_once get_template_directory() . '/lib/custom.php';            // Any custom functions goes here
require_once get_template_directory() . '/lib/admin/customizer.php';