<?php
/*
Plugin Name: Share Me Socials By CheekyApps
Description: <strong>Completely &quot;fat free&quot;</strong>. Fastest Social Sharing Buttons Plugin without any Iframes, Scripts and other bloats. Prevent Your WordPress site from slow-running.
Plugin URI: http://cheekyapps.com
Author: Scott Moses
Author URI: https://CheekyApps.com
Version: 1.0.0
License: GPL2
*/

/*
    Copyright (C) 2016 CheekyApps

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

// prevent loading this file directly
defined( 'ABSPATH' ) || exit;

require_once ( plugin_dir_path(__FILE__) . 'share-me-socials-admin-page.php' );
require_once ( plugin_dir_path(__FILE__) . 'share-me-socials-output.php' );