<?php
/*
Plugin Name: CSV Importer
Plugin URI: https://github.com/sabbirshawon/csv_import_wp_plugin/
Description: This is a wordpress plugin for csv file import to mysql database
Version: 1.0
Author: Sabbir
Author URI: https://sabbirshawon.github.com/
License: GPLv2 or later
Text Domain: csv-import
Domain Path: /languages/
*/

if(!defined("ABSPATH"))

    exit;

if(!defined("CSV_IMPORT_DIR_PATH"))

    define("CSV_IMPORT_DIR_PATH",plugin_dir_path(__FILE__));



if(!defined("CSV_IMPORT_URL"))

    define("CSV_IMPORT_URL", plugins_url());



define("PLUGIN_VERSION", "1.0");



function csv_menus(){

    add_menu_page(

        "CSV Import", //page title 

        "CSV Import", //menu title

        "manage_options", //admin level

        "csv-import", // page slug - parent slug

        "csv_import", // callback function

        "dashicons-image-filter", // icon url

        6 // positions

    );
    
    
}

add_action("admin_menu","csv_menus");


function csv_file(){

    // add new function

    include_once OP_PHARMA_DIR_PATH."/views/csv-import.php";

}
