<?php
/**
 * Generated stub declarations for Tribe Events Calendar & Addons.
 * @see https://evnt.is
 * @see https://github.com/saas786/php-scoper-wp-excludes
 */

/**
 * Sets up the admin functionality for the plugin.
 *
 * @package    Knowledgebase
 * @subpackage Admin
 * @since      0.0.1
 */
final class KBP_Knowledgebase_Admin
{
    /**
     * Holds the instances of this class.
     *
     * @since  0.0.1
     * @access private
     * @var    object
     */
    private static $instance;
    /**
     * Sets up needed actions/filters for the admin to initialize.
     *
     * @since  0.0.1
     * @access public
     * @return void
     */
    public function __construct()
    {
    }
    public function action_links($links, $file)
    {
    }
    /**
     * Adds a custom filter on 'request' when viewing the edit menu items screen in the admin.
     *
     * @since  0.0.1
     * @access public
     * @return void
     */
    public function load_edit()
    {
    }
    function edit_metaboxes()
    {
    }
    function column_order()
    {
    }
    /**
     * Filter on the 'request' hook to change the 'order' and 'orderby' query variables when
     * viewing the "edit menu items" screen in the admin.  This is to order the menu items
     * alphabetically.
     *
     * @since  1.0.0
     * @access public
     * @param  array  $vars
     * @return array
     */
    public function request($vars)
    {
    }
    /**
     * Renders a knowledgebase tags dropdown on the "menu items" screen table nav.
     *
     * @since  0.0.1
     * @access public
     * @return void
     */
    public function tags_dropdown()
    {
    }
    /**
     * Filters the columns on the "menu items" screen.
     *
     * @since  0.0.1
     * @access public
     * @param  array  $post_columns
     * @return array
     */
    public function edit_knowledgebase_item_columns($post_columns)
    {
    }
    public function manage_knowledgebase_item_columns($column, $post_id)
    {
    }
    /**
     * Style adjustments for the manage menu items screen, particularly for adjusting the thumbnail
     * column in the table to make sure it doesn't take up too much space.
     *
     * @since  0.0.1
     * @access public
     * @return void
     */
    public function print_styles()
    {
    }
    /**
     * Returns the instance.
     *
     * @since  0.0.1
     * @access public
     * @return object
     */
    public static function get_instance()
    {
    }
}
/**
 * Handles custom post meta boxes for the 'knowledgebase_item' post type.
 *
 * @package    Knowledgebase
 * @subpackage Admin
 * @since      0.0.1
 */
final class KBP_Knowledgebase_Settings
{
    /**
     * Holds the instances of this class.
     *
     * @since  0.0.1
     * @access private
     * @var    object
     */
    private static $instance;
    /**
     * Settings page name.
     *
     * @since  0.0.1
     * @access public
     * @var    string
     */
    public $settings_page = '';
    /**
     * Holds an array the plugin settings.
     *
     * @since  0.0.1
     * @access public
     * @var    array
     */
    public $settings = array();
    /**
     * Sets up the needed actions for adding and saving the meta boxes.
     *
     * @since  0.0.1
     * @access public
     * @return void
     */
    public function __construct()
    {
    }
    /**
     * Sets up custom admin menus.
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
    public function admin_menu()
    {
    }
    /**
     * Registers the plugin settings.
     *
     * @since  0.0.1
     * @access public
     * @return void
     */
    function register_settings()
    {
    }
    /**
     * Validates the plugin settings.
     *
     * @since  0.0.1
     * @access public
     * @return void
     */
    function validate_settings($settings)
    {
    }
    /**
     * Displays the menu settings section.
     *
     * @since  0.0.1
     * @access public
     * @return void
     */
    public function section_menu()
    {
    }
    /**
     * Displays the menu title field.
     *
     * @since  0.0.1
     * @access public
     * @return void
     */
    public function field_menu_title()
    {
    }
    /**
     * Displays the menu description field.
     *
     * @since  0.0.1
     * @access public
     * @return void
     */
    public function field_menu_description()
    {
    }
    /**
     * Renders the settings page.
     *
     * @since  0.0.1
     * @access public
     * @return void
     */
    public function settings_page()
    {
    }
    /**
     * Returns the instance.
     *
     * @since  1.0.0
     * @access public
     * @return object
     */
    public static function get_instance()
    {
    }
}
/**
 * Sets up and initializes the Knowledgebase plugin.
 *
 * @since  0.0.1
 * @access public
 * @return void
 */
final class Knowledgebase
{
    /**
     * Holds the instances of this class.
     *
     * @since  0.0.1
     * @access private
     * @var    object
     */
    private static $instance;
    /**
     * Sets up needed actions/filters for the plugin to initialize.
     *
     * @since  0.0.1
     * @access public
     * @return void
     */
    public function __construct()
    {
    }
    /**
     * Defines constants for the plugin.
     *
     * @since  0.0.1
     * @access public
     * @return void
     */
    function constants()
    {
    }
    /**
     * Loads files from the '/inc' folder.
     *
     * @since  0.0.1
     * @access public
     * @return void
     */
    function includes()
    {
    }
    /**
     * Loads the translation files.
     *
     * @since  0.0.1
     * @access public
     * @return void
     */
    function i18n()
    {
    }
    /**
     * Loads admin files.
     *
     * @since  0.0.1
     * @access public
     * @return void
     */
    function admin()
    {
    }
    /**
     * On plugin activation, add custom capabilities to the 'administrator' role.
     *
     * @since  0.0.1
     * @access public
     * @return void
     */
    function activation()
    {
    }
    /**
     * Returns the instance.
     *
     * @since  0.0.1
     * @access public
     * @return object
     */
    public static function get_instance()
    {
    }
}
/**
 * Returns the default plugin settings.
 *
 * @since  0.0.1
 * @access public
 * @return array
 */
function kbp_get_default_settings()
{
}
/**
 * Defines the base URL slug for the "knowledgebase" section of the Web site.
 *
 * @since  0.0.1
 * @access public
 * @return string
 */
function kbp_knowledgebase_base()
{
}
/**
 * Filters 'post_type_archive_title' to use our custom 'archive_title' label.
 *
 * @since  0.0.1
 * @access public
 * @param  string  $title
 * @return string
 */
function kbp_post_type_archive_title($title)
{
}
/**
 * Registers post types needed by the plugin.
 *
 * @since  0.0.1
 * @access public
 * @return void
 */
function knowledgebase_register_post_types()
{
}
/**
 * Custom "enter title here" text.
 *
 * @since  0.0.1
 * @access public
 * @param  string  $title
 * @param  object  $post
 * @return string
 */
function kbp_enter_title_here($title, $post)
{
}
/**
 * @since  0.0.1
 * @access public
 * @return void
 */
function kbp_post_updated_messages($messages)
{
}
/**
 * Register taxonomies for the plugin.
 *
 * @since  0.0.1
 * @access public
 * @return void.
 */
function knowledgebase_register_taxonomies()
{
}
/**
 * Template tags to use in themes.
 *
 * @package    Knowledgebase
 * @subpackage Includes
 * @since      0.0.1
 */
/**
 * Conditional tag to decide if we're viewing a knowledgebase-related page.
 *
 * @since  0.0.1
 * @access public
 * @return bool
 */
function kbp_is_knowledgebase()
{
}
/**
 * Conditional tag to decide if we're viewing a knowledgebase-related archive page.
 *
 * @since  0.0.1
 * @access public
 * @return bool
 */
function kbp_is_knowledgebase_archive()
{
}
/**
 * Conditional tag to decide if we're viewing a knowledgebase-related taxonomy page.
 *
 * @since  0.0.1
 * @access public
 * @return bool
 */
function kbp_is_knowledgebase_tax()
{
}
/**
 * Conditional tag to decide if we're viewing a knowledgebase-related single page.
 *
 * @since  0.0.1
 * @access public
 * @return bool
 */
function kbp_is_knowledgebase_single()
{
}