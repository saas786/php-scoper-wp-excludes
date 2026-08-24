<?php
/**
 * Generated stub declarations for Message Board.
 * @see https://github.com/saas786/message-board
 * @see https://github.com/saas786/php-scoper-wp-excludes
 */

/**
 * Sets up the plugin admin.
 *
 * @package    MessageBoard
 * @subpackage Admin
 * @author     Justin Tadlock <justin@justintadlock.com>
 * @copyright  Copyright (c) 2014, Justin Tadlock
 * @link       https://github.com/justintadlock/message-board
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */
final class Message_Board_Admin
{
    /**
     * Forum post type name.
     *
     * @since  1.0.0
     * @access public
     * @var    string
     */
    public $forum_type;
    /**
     * Topic post type name.
     *
     * @since  1.0.0
     * @access public
     * @var    string
     */
    public $topic_type;
    /**
     * Reply post type name.
     *
     * @since  1.0.0
     * @access public
     * @var    string
     */
    public $reply_type;
    /**
     * Holds the instance of this class.
     *
     * @since  1.0.0
     * @access private
     * @var    object
     */
    private static $instance;
    /**
     * Sets up needed actions/filters for the admin to initialize.
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
    public function __construct()
    {
    }
    /**
     * Adds admin menu items needed by the plugin.  Rather than having multiple top-level menu items
     * like some plugins, which shall remain unnamed, we'll consolidate everything into a single
     * item.  Yay for no clutter!
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
    function admin_menu()
    {
    }
    /**
     * Corrects the parent file for post type screens.
     *
     * @since  1.0.0
     * @access public
     * @param  string  $parent_file
     * @return string
     */
    function parent_file($parent_file)
    {
    }
    /**
     * Displays an admin notice if the current theme does not support the Message Board plugin.
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
    function admin_notices()
    {
    }
    /**
     * Registers the admin scripts and styles.
     *
     * @since  1.0.0
     * @access public
     * @return object
     */
    public function register_scripts()
    {
    }
    /**
     * Adds a custom admin body class.
     *
     * @since  1.0.0
     * @access public
     * @param  string  $class
     * @return string
     */
    public function admin_body_class($class)
    {
    }
    /**
     * Puts the post status links in the a better order. By default, WP will list these in the order
     * they're registered.  Instead, we're going to put them in order from public, private, protected,
     * and other.
     *
     * @since  1.0.0
     * @access public
     * @param  array  $views
     * @return array
     */
    public function views_edit($views)
    {
    }
    /**
     * Makes sure the correct post status is used when loading forums on the nav menus screen.  By
     * default, WordPress will only load them if they have the "publish" post status.
     *
     * @since  1.0.0
     * @access public
     * @param  object  $object
     * @return object
     */
    public function nav_menu_meta_box_object($object)
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
 * Handles all the functionality for the `index.php` (dashboard) screen in the admin.
 *
 * @package    MessageBoard
 * @subpackage Admin
 * @author     Justin Tadlock <justin@justintadlock.com>
 * @copyright  Copyright (c) 2014, Justin Tadlock
 * @link       https://github.com/justintadlock/message-board
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */
final class Message_Board_Admin_Dashboard
{
    /**
     * Holds the instance of this class.
     *
     * @since  1.0.0
     * @access private
     * @var    object
     */
    private static $instance;
    /**
     * Sets up needed actions/filters for the admin to initialize.
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
    public function __construct()
    {
    }
    /**
     * Runs our actions only on the dashboard admin screen.
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
    public function load_dashboard()
    {
    }
    /**
     * Adds custom dashboard widgets.  Note that we're using `add_meta_box()` rather than the 
     * `wp_add_dashboard_widget()` function so that we can control the positioning.
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
    public function dashboard_widgets()
    {
    }
    /**
     * Enqueue the plugin admin CSS.
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
    public function print_styles()
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
 * Handles all the functionality for the `edit.php` screen for the forum post type. 
 *
 * @package    MessageBoard
 * @subpackage Admin
 * @author     Justin Tadlock <justin@justintadlock.com>
 * @copyright  Copyright (c) 2014, Justin Tadlock
 * @link       https://github.com/justintadlock/message-board
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */
final class Message_Board_Admin_Edit_Forums
{
    /**
     * Holds the instances of this class.
     *
     * @since  1.0.0
     * @access private
     * @var    object
     */
    private static $instance;
    /**
     * Sets up needed actions/filters for the admin to initialize.
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
    public function __construct()
    {
    }
    /**
     * Adds a custom filter on 'request' when viewing the edit menu items screen in the admin.
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
    public function load_edit()
    {
    }
    /**
     * Filter on the `request` hook to change what posts are loaded.
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
     * Customize the bulk actions drop-down.
     *
     * @since  1.0.0
     * @access public
     * @param  array  $actions
     * @return array
     */
    public function bulk_actions($actions)
    {
    }
    /**
     * Customize the columns on the edit forum screen.
     *
     * @since  1.0.0
     * @access public
     * @param  array  $post_columns
     * @return array
     */
    public function edit_columns($post_columns)
    {
    }
    /**
     * Customize the sortable columns.
     *
     * @since  1.0.0
     * @access public
     * @param  array  $columns
     * @return array
     */
    public function manage_sortable_columns($columns)
    {
    }
    /**
     * Handles the output for custom columns.
     *
     * @since  1.0.0
     * @access public
     * @param  string  $column
     * @param  int     $post_id
     */
    public function manage_columns($column, $post_id)
    {
    }
    /**
     * Custom row actions below the post title.
     *
     * @since  1.0.0
     * @access public
     * @param  array   $actions
     * @param  object  $post
     * @return array
     */
    function row_actions($actions, $post)
    {
    }
    /**
     * Filter for the `post_states` hook.  We're going to replace any defaults and roll our own.
     *
     * @since  1.0.0
     * @access public
     * @param  array   $post_states
     * @param  object  $post
     */
    public function display_post_states($post_states, $post)
    {
    }
    /**
     * Callback function for handling post status changes.
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
    public function handler()
    {
    }
    /**
     * Displays admin notices for the edit forum screen.
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
    public function admin_notices()
    {
    }
    /**
     * Enqueue the plugin admin CSS.
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
    public function print_styles()
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
 * Handles all the functionality for the `edit.php` screen for the reply post type. 
 *
 * @package    MessageBoard
 * @subpackage Admin
 * @author     Justin Tadlock <justin@justintadlock.com>
 * @copyright  Copyright (c) 2014, Justin Tadlock
 * @link       https://github.com/justintadlock/message-board
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */
final class Message_Board_Admin_Edit_Replies
{
    /**
     * Holds the instances of this class.
     *
     * @since  1.0.0
     * @access private
     * @var    object
     */
    private static $instance;
    /**
     * Sets up needed actions/filters for the admin to initialize.
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
    public function __construct()
    {
    }
    /**
     * Adds a custom filter on 'request' when viewing the edit menu items screen in the admin.
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
    public function load_edit()
    {
    }
    /**
     * Filter on the `request` hook to change what posts are loaded.
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
     * Customize the bulk actions drop-down.
     *
     * @since  1.0.0
     * @access public
     * @param  array  $actions
     * @return array
     */
    public function bulk_actions($actions)
    {
    }
    /**
     * Customize the columns on the edit post screen.
     *
     * @since  1.0.0
     * @access public
     * @param  array  $post_columns
     * @return array
     */
    public function edit_columns($post_columns)
    {
    }
    /**
     * Customize the sortable columns.
     *
     * @since  1.0.0
     * @access public
     * @param  array  $columns
     * @return array
     */
    public function manage_sortable_columns($columns)
    {
    }
    /**
     * Handles the output for custom columns.
     *
     * @since  1.0.0
     * @access public
     * @param  string  $column
     * @param  int     $post_id
     */
    public function manage_columns($column, $post_id)
    {
    }
    /**
     * Custom row actions below the post title.
     *
     * @since  1.0.0
     * @access public
     * @param  array   $actions
     * @param  object  $post
     * @return array
     */
    function row_actions($actions, $post)
    {
    }
    /**
     * Filter for the `post_states` hook.  We're going to replace any defaults and roll our own.
     *
     * @since  1.0.0
     * @access public
     * @param  array   $post_states
     * @param  object  $post
     */
    public function display_post_states($post_states, $post)
    {
    }
    /**
     * Callback function for handling post status changes.
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
    public function handler()
    {
    }
    /**
     * Displays admin notices for the edit forum screen.
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
    public function admin_notices()
    {
    }
    /**
     * Enqueue the plugin admin CSS.
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
    public function print_styles()
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
 * Handles all the functionality for the `edit.php` screen for the topic post type. 
 *
 * @package    MessageBoard
 * @subpackage Admin
 * @author     Justin Tadlock <justin@justintadlock.com>
 * @copyright  Copyright (c) 2014, Justin Tadlock
 * @link       https://github.com/justintadlock/message-board
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */
final class Message_Board_Admin_Edit_Topics
{
    /**
     * Holds the instances of this class.
     *
     * @since  1.0.0
     * @access private
     * @var    object
     */
    private static $instance;
    /**
     * Sets up needed actions/filters for the admin to initialize.
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
    public function __construct()
    {
    }
    /**
     * Adds a custom filter on 'request' when viewing the edit menu items screen in the admin.
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
    public function load_edit()
    {
    }
    /**
     * Filter on the `request` hook to change what posts are loaded.
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
     * Add custom views (status list).
     *
     * @since  1.0.0
     * @access public
     * @param  array  $views
     * @return array
     */
    public function views($views)
    {
    }
    /**
     * Customize the bulk actions drop-down.
     *
     * @since  1.0.0
     * @access public
     * @param  array  $actions
     * @return array
     */
    public function bulk_actions($actions)
    {
    }
    /**
     * Customize the columns on the edit post screen.
     *
     * @since  1.0.0
     * @access public
     * @param  array  $post_columns
     * @return array
     */
    public function edit_columns($post_columns)
    {
    }
    /**
     * Customize the sortable columns.
     *
     * @since  1.0.0
     * @access public
     * @param  array  $columns
     * @return array
     */
    public function manage_sortable_columns($columns)
    {
    }
    /**
     * Handles the output for custom columns.
     *
     * @since  1.0.0
     * @access public
     * @param  string  $column
     * @param  int     $post_id
     */
    public function manage_columns($column, $post_id)
    {
    }
    /**
     * Custom row actions below the post title.
     *
     * @since  1.0.0
     * @access public
     * @param  array   $actions
     * @param  object  $post
     * @return array
     */
    function row_actions($actions, $post)
    {
    }
    /**
     * Filter for the `post_states` hook.  We're going to replace any defaults and roll our own.
     *
     * @since  1.0.0
     * @access public
     * @param  array   $post_states
     * @param  object  $post
     */
    public function display_post_states($post_states, $post)
    {
    }
    /**
     * Callback function for handling post status changes.
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
    public function handler()
    {
    }
    /**
     * Displays admin notices for the edit forum screen.
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
    public function admin_notices()
    {
    }
    /**
     * Enqueue the plugin admin CSS.
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
    public function print_styles()
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
 * Handles all the functionality for the `post.php` and `post-new.php` screen for the forum post type. 
 *
 * @package    MessageBoard
 * @subpackage Admin
 * @author     Justin Tadlock <justin@justintadlock.com>
 * @copyright  Copyright (c) 2014, Justin Tadlock
 * @link       https://github.com/justintadlock/message-board
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */
final class Message_Board_Admin_Post_Forum
{
    /**
     * Holds the instances of this class.
     *
     * @since  1.0.0
     * @access private
     * @var    object
     */
    private static $instance;
    /**
     * Sets up needed actions/filters for the admin to initialize.
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
    public function __construct()
    {
    }
    /**
     * Callback function for the `load-post.php` or `load-post-new.php` screen.
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
    function load_post()
    {
    }
    /**
     * Changes the editor's default height to 175px since it's merely being used as a description.
     *
     * @since  1.0.0
     * @access public
     * @param  array   $settings
     * @return array
     */
    public function editor_settings($settings)
    {
    }
    /**
     * Makes sure the editor's height stays the same. Adds the placeholder attribute to the 
     * editor `<textarea>`.
     *
     * @since  1.0.0
     * @access public
     * @param  string  $html
     * @return string
     */
    public function the_editor($html)
    {
    }
    /**
     * Loads scripts and styles.
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
    public function enqueue_scripts()
    {
    }
    /**
     * Adds meta boxes needed for the edit post screen.
     *
     * @since  1.0.0
     * @access public
     * @param  object  $post
     * @return void
     */
    public function add_meta_boxes($post)
    {
    }
    /**
     * Callback for the `save_post` hook to handle meta boxes.
     *
     * @since  1.0.0
     * @access public
     * @param  int     $post_id
     * @param  object  $post
     * @return void
     */
    function save_post($post_id, $post)
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
 * Handles all the functionality for the `post.php` and `post-new.php` screen for the reply post type. 
 *
 * @package    MessageBoard
 * @subpackage Admin
 * @author     Justin Tadlock <justin@justintadlock.com>
 * @copyright  Copyright (c) 2014, Justin Tadlock
 * @link       https://github.com/justintadlock/message-board
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */
final class Message_Board_Admin_Post_Reply
{
    /**
     * Holds the instances of this class.
     *
     * @since  1.0.0
     * @access private
     * @var    object
     */
    private static $instance;
    /**
     * Sets up needed actions/filters for the admin to initialize.
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
    public function __construct()
    {
    }
    /**
     * Callback function for the `load-post.php` or `load-post-new.php` screen.
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
    function load_post()
    {
    }
    /**
     * Loads scripts and styles.
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
    public function enqueue_scripts()
    {
    }
    /**
     * Adds meta boxes needed for the edit post screen.
     *
     * @since  1.0.0
     * @access public
     * @param  object  $post
     * @return void
     */
    public function add_meta_boxes($post)
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
 * Handles all the functionality for the `post.php` and `post-new.php` screen for the topic post type. 
 *
 * @package    MessageBoard
 * @subpackage Admin
 * @author     Justin Tadlock <justin@justintadlock.com>
 * @copyright  Copyright (c) 2014, Justin Tadlock
 * @link       https://github.com/justintadlock/message-board
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */
final class Message_Board_Admin_Post_Topic
{
    /**
     * Holds the instances of this class.
     *
     * @since  1.0.0
     * @access private
     * @var    object
     */
    private static $instance;
    /**
     * Sets up needed actions/filters for the admin to initialize.
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
    public function __construct()
    {
    }
    /**
     * Callback function for the `load-post.php` or `load-post-new.php` screen.
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
    function load_post()
    {
    }
    /**
     * Loads scripts and styles.
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
    public function enqueue_scripts()
    {
    }
    /**
     * Adds meta boxes needed for the edit post screen.
     *
     * @since  1.0.0
     * @access public
     * @param  object  $post
     * @return void
     */
    public function add_meta_boxes($post)
    {
    }
    /**
     * Callback for the `save_post` hook to handle meta boxes.
     *
     * @since  1.0.0
     * @access public
     * @param  int     $post_id
     * @param  object  $post
     * @return void
     */
    function save_post($post_id, $post)
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
 * Handles all the functionality for the `user-edit.php` screen in WordPress.
 *
 * @package    MessageBoard
 * @subpackage Admin
 * @author     Justin Tadlock <justin@justintadlock.com>
 * @copyright  Copyright (c) 2014, Justin Tadlock
 * @link       https://github.com/justintadlock/message-board
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */
final class Message_Board_Admin_User_Edit
{
    /**
     * Holds the instances of this class.
     *
     * @since  1.0.0
     * @access private
     * @var    object
     */
    private static $instance;
    /**
     * Sets up needed actions/filters for the admin to initialize.
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
    public function __construct()
    {
    }
    /**
     * Adds actions/filters.
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
    public function load_user_edit()
    {
    }
    /**
     * Filter on the `request` hook to change what posts are loaded.
     *
     * @since  1.0.0
     * @access public
     * @param  object  $user
     * @return void
     */
    public function profile_fields($user)
    {
    }
    /**
     * Callback function for handling forum role changes.  Note that we needed to execute this function 
     * on a different hook, `profile_update`.  Using the normal hooks on the edit user screen won't work 
     * because WP will wipe out the role.
     *
     * @since  1.0.0
     * @access public
     * @param  int    $user_id
     * @return void
     */
    public function role_update($user_id)
    {
    }
    /**
     * Displays admin notices for the edit forum screen.
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
    public function admin_notices()
    {
    }
    /**
     * Enqueue the plugin admin CSS.
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
    public function print_styles()
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
 * Handles all the functionality for the `users.php` screen in WordPress.
 *
 * @package    MessageBoard
 * @subpackage Admin
 * @author     Justin Tadlock <justin@justintadlock.com>
 * @copyright  Copyright (c) 2014, Justin Tadlock
 * @link       https://github.com/justintadlock/message-board
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */
final class Message_Board_Admin_Users
{
    /**
     * Holds the instances of this class.
     *
     * @since  1.0.0
     * @access private
     * @var    object
     */
    private static $instance;
    /**
     * Sets up needed actions/filters for the admin to initialize.
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
    public function __construct()
    {
    }
    /**
     * Adds actions/filters.
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
    public function load_users()
    {
    }
    /**
     * Filter on the user query to change the users loaded.
     *
     * @since  1.0.0
     * @access public
     * @param  object  $query
     * @return void
     */
    public function pre_get_users($query)
    {
    }
    /**
     * Adds a forum roles dropdown above the users table.
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
    public function roles_dropdown()
    {
    }
    /**
     * Customize the columns on the edit post screen.
     *
     * @since  1.0.0
     * @access public
     * @param  array  $columns
     * @return array
     */
    public function columns($columns)
    {
    }
    /**
     * Customize the sortable columns.
     *
     * @since  1.0.0
     * @access public
     * @param  array  $columns
     * @return array
     */
    public function sortable_columns($columns)
    {
    }
    /**
     * Handles the output for custom columns.
     *
     * @since  1.0.0
     * @access public
     * @param  string  $column
     * @param  string  $column_name
     * @param  int     $post_id
     */
    public function custom_column($column, $column_name, $user_id)
    {
    }
    /**
     * Callback function for handling post status changes.
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
    public function handler()
    {
    }
    /**
     * Displays admin notices for the edit forum screen.
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
    public function admin_notices()
    {
    }
    /**
     * Enqueue the plugin admin CSS.
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
    public function print_styles()
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
 * Class that extends the main Breadcrumb Trail class.  We'll create our own breadcrumb trail items
 * for plugin pages only.
 *
 * @since  1.0.0
 * @access public
 */
class MB_Breadcrumb_Trail extends \Breadcrumb_Trail
{
    /**
     * Overwrites the `do_trail_items()` method and creates custom trail items.
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
    public function do_trail_items()
    {
    }
    /**
     * Adds the board home link to `$items` array.
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
    public function mb_do_board_home_link()
    {
    }
    /**
     * Adds the user archive link to `$items` array.
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
    public function mb_do_user_archive_link()
    {
    }
    /**
     * Adds the role archive link to `$items` array.
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
    public function mb_do_role_archive_link()
    {
    }
}
class MB_Walker_Forum_Dropdown extends \Walker_PageDropdown
{
    /**
     * @see Walker::start_el()
     * @since 1.0.0
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param object $page Page data object.
     * @param int $depth Depth of page in reference to parent pages. Used for padding.
     * @param array $args Uses 'selected' argument for selected page to set selected HTML attribute for option element.
     * @param int $id
     */
    public function start_el(&$output, $page, $depth = 0, $args = array(), $id = 0)
    {
    }
}
/**
 * Plugin Name: Message Board
 * Plugin URI:  http://themehybrid.com
 * Description: Simple forums for us simple folks.
 * Version:     1.0.0-pre-alpha
 * Author:      Justin Tadlock
 * Author URI:  http://justintadlock.com
 * Text Domain: message-board
 * Domain Path: /languages
 */
/**
 * Sets up and initializes the Message Board plugin.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
final class Message_Board
{
    /**
     * Plugin version number.
     *
     * @since  1.0.0
     * @access public
     * @var    string
     */
    public $version = '1.0.0';
    /**
     * Current database version.
     *
     * @since  1.0.0
     * @access public
     * @var    int
     */
    public $db_version = 1;
    /**
     * Directory path to the plugin folder.
     *
     * @since  1.0.0
     * @access public
     * @var    string
     */
    public $dir_path = '';
    /**
     * Directory URI to the plugin folder.
     *
     * @since  1.0.0
     * @access public
     * @var    string
     */
    public $dir_uri = '';
    /**
     * Forum roles (e.g., keymaster, moderator, participant, spectator, banned).
     *
     * @since  1.0.0
     * @access public
     * @var    array
     */
    public $roles = array();
    /**
     * Forum types (e.g., normal, category).
     *
     * @since  1.0.0
     * @access public
     * @var    array
     */
    public $forum_types = array();
    /**
     * Topic types (e.g., normal, super, sticky).
     *
     * @since  1.0.0
     * @access public
     * @var    array
     */
    public $topic_types = array();
    /**
     * Forum query.  Is assigned a WP_Query object.  On forum archive/single views, this is the
     * main `$wp_query` object.
     *
     * @since  1.0.0
     * @access public
     * @var    object
     */
    public $forum_query;
    /**
     * Sub-forum query.  Is assigned a WP_Query object.  This is only useful when getting the sub-forums
     * of a particular forum.
     *
     * @since  1.0.0
     * @access public
     * @var    object
     */
    public $subforum_query;
    /**
     * Topic query.  Is assigned a WP_Query object.  On topic single/archive views, this is the
     * main `$wp_query` object.
     *
     * @since  1.0.0
     * @access public
     * @var    object
     */
    public $topic_query;
    /**
     * Reply query.  Is assigned a WP_Query object.  This is mainly useful on single topic views,
     * where it is used to display the replies to the current topic.
     *
     * @since  1.0.0
     * @access public
     * @var    object
     */
    public $reply_query;
    /**
     * Search query.  Is assigned a WP_Query object.  This is the `$wp_query` object when viewing
     * a forum search results page.
     *
     * @since  1.0.0
     * @access public
     * @var    object
     */
    public $search_query;
    /**
     * User query. This holds the results of `get_users()` and is particularly useful for the user
     * archive page.
     *
     * @since  1.0.0
     * @access public
     * @var    object|null
     */
    public $user_query = \null;
    /**
     * Role query. This holds the results of `mb_get_dynamic_roles()` and is used on the role
     * archive page.
     *
     * @since  1.0.0
     * @access public
     * @var    object|null
     */
    public $role_query = \null;
    /**
     * Used for temporarily saving a deleted post object.
     *
     * @since  1.0.0
     * @access public
     * @var    object|null
     */
    public $deleted_post = \null;
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
    /**
     * Constructor method.
     *
     * @since  1.0.0
     * @access private
     * @return void
     */
    private function __construct()
    {
    }
    /**
     * Magic method to output a string if trying to use the object as a string.
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
    public function __toString()
    {
    }
    /**
     * Magic method to keep the object from being cloned.
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
    public function __clone()
    {
    }
    /**
     * Magic method to keep the object from being unserialized.
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
    public function __wakeup()
    {
    }
    /**
     * Magic method to prevent a fatal error when calling a method that doesn't exist.
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
    public function __call($method = '', $args = array())
    {
    }
    /**
     * Initial plugin setup.
     *
     * @since  1.0.0
     * @access private
     * @return void
     */
    private function setup()
    {
    }
    /**
     * Loads include and admin files for the plugin.
     *
     * @since  1.0.0
     * @access private
     * @return void
     */
    private function includes()
    {
    }
    /**
     * Sets up initial actions.
     *
     * @since  1.0.0
     * @access private
     * @return void
     */
    private function setup_actions()
    {
    }
    /**
     * Loads the translation files.
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
    public function i18n()
    {
    }
    /**
     * Loads the front end scripts and styles.  No styles are loaded if the theme supports the plugin.
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
    public function enqueue_scripts()
    {
    }
    /**
     * Method that runs only when the plugin is activated.
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
    public function activation()
    {
    }
}
/**
 * Callback functions for the various meta boxes used on the post screen in the admin for all 
 * the plugin's post types.
 *
 * @package    MessageBoard
 * @subpackage Admin
 * @author     Justin Tadlock <justin@justintadlock.com>
 * @copyright  Copyright (c) 2014, Justin Tadlock
 * @link       https://github.com/justintadlock/message-board
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */
/**
 * Custom `submitdiv` meta box.  This replaces the WordPress default because it has too many things 
 * hardcoded that we cannot overwrite, particularly dealing with post statuses.
 *
 * @since  1.0.0
 * @access public
 * @param  object  $post
 * @param  array   $args
 * @return void
 */
function mb_submit_meta_box($post, $args = array())
{
}
/**
 * Forum attribute meta box.  This handles the forum type, parent, and menu order.
 *
 * @since  1.0.0
 * @access public
 * @param  object  $post
 * @return void
 */
function mb_forum_attributes_meta_box($post)
{
}
/**
 * Topic attributes meta box.  This handles whether the topic is sticky and the parent forum. It also 
 * has the hidden input to save the proper `menu_order` field for the post.
 *
 * @since  1.0.0
 * @access public
 * @param  object  $post
 * @return void
 */
function mb_topic_attributes_meta_box($post)
{
}
/**
 * Reply info meta box.  Displays relevant information about the reply.  This box doesn't have editable 
 * content in it.
 *
 * @since  1.0.0
 * @access public
 * @param  object  $post
 * @return void
 */
function mb_reply_info_meta_box($post)
{
}
/**
 * Forum activity dashboard widget.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function mb_dashboard_activity_meta_box()
{
}
/**
 * Post template functions.  In this plugin, both "topics" and "replies" are technically custom post types. 
 * This file exists so that we can consolidate some of these template functions into one.  For more-specific 
 * template tags that apply to topics and replies, see `template-topic.php` and `template-post.php`.
 *
 * Technically, you could use WP's built-in functions for getting the data needed because most of these 
 * functions are simply wrappers for those functions.  However, this is discouraged because there are 
 * certain hooks that will be executed when using these functions.
 */
function mb_get_content_type($post_id = 0)
{
}
function mb_format_template_tag($args)
{
}
/* ====== Login ====== */
function mb_login_url()
{
}
function mb_get_login_url()
{
}
function mb_login_link()
{
}
function mb_get_login_link()
{
}
/* ====== Thread Position ====== */
function mb_thread_position($post_id = 0)
{
}
function mb_get_thread_position($post_id = 0)
{
}
/* ====== Forum Front Page ====== */
function mb_board_url()
{
}
function mb_get_board_url()
{
}
function mb_board_home_url()
{
}
function mb_get_board_home_url()
{
}
/* ====== Post Status ====== */
function mb_dropdown_forum_status($args = array())
{
}
function mb_dropdown_topic_status($args = array())
{
}
function mb_dropdown_reply_status($args = array())
{
}
function mb_dropdown_post_status($args = array())
{
}
/* ====== Log In Page ====== */
/**
 * Displays the login page title.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function mb_login_page_title()
{
}
/**
 * Returns the login page title.
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
function mb_get_login_page_title()
{
}
/* Edit page title. */
function mb_edit_page_title()
{
}
function mb_get_edit_page_title()
{
}
/* ====== Post ID ====== */
function mb_get_post_id($post_id = 0)
{
}
/* ====== Post Content ====== */
function mb_post_content($post_id = 0)
{
}
function mb_get_post_content($post_id = 0)
{
}
/* ====== Post Title ====== */
function mb_post_title($post_id = 0)
{
}
function mb_get_post_title($post_id = 0)
{
}
/* ====== Post URL ====== */
function mb_post_url($post_id = 0)
{
}
function mb_get_post_url($post_id = 0)
{
}
function mb_post_jump_url($post_id = 0)
{
}
/* example.com/board/topics/example/#post-1000 */
function mb_get_post_jump_url($post_id = 0)
{
}
/* ====== Post Author ====== */
function mb_post_author_id($post_id = 0)
{
}
function mb_get_post_author_id($post_id = 0)
{
}
function mb_post_author($post_id = 0)
{
}
function mb_get_post_author($post_id = 0)
{
}
function mb_post_author_profile_url($post_id = 0)
{
}
function mb_get_post_author_profile_url($post_id = 0)
{
}
function mb_post_author_profile_link($post_id = 0)
{
}
function mb_get_post_author_profile_link($post_id = 0)
{
}
function mb_edit_form_action_url()
{
}
function mb_get_edit_form_action_url()
{
}
function mb_edit_form()
{
}
function mb_get_edit_form()
{
}
/**
 * Outputs pagination links for single topic pages (the replies are paginated).
 *
 * @since  1.0.0
 * @access public
 * @param  array  $args
 * @param  object $query
 * @return string
 */
function mb_pagination($args = array(), $query = \null)
{
}
/**
 * Removes the ability to add a new forum topic from the admin bar.
 *
 * @since  1.0.0
 * @access public
 * @global object  $wp_admin_bar
 * @return void
 */
function mb_admin_bar()
{
}
/**
 * Plugin capabilities.
 *
 * @package    MessageBoard
 * @subpackage Includes
 * @author     Justin Tadlock <justin@justintadlock.com>
 * @copyright  Copyright (c) 2014, Justin Tadlock
 * @link       https://github.com/justintadlock/message-board
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */
/**
 * Returns an array of common capabilities used throughout the forums.
 *
 * @since  1.0.0
 * @access public
 * @return array
 */
function mb_get_common_capabilities()
{
}
/**
 * Helper function for checking if a user can read forums, topics, or replies. We need this to handle 
 * users who are not logged in but should have permission to read (e.g, non-private forums).  This 
 * function is meant to be used in conjunction with a filter on `map_meta_cap`.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $user_id
 * @param  string  $cap
 * @param  int     $post_id
 * @return bool
 */
function mb_user_can($user_id, $cap, $post_id)
{
}
/**
 * Filters `wp_title` to handle the title on the forum front page since this is a non-standard WP page.
 *
 * @since  1.0.0
 * @access public
 * @param  string  $title
 * @return string
 */
function mb_wp_title($title)
{
}
/**
 * Filter on `body_class` to add custom classes for the plugin's pages on the front end.
 *
 * @todo Remove `bbpress` class.
 * @todo Decide on class naming system.
 *
 * @since  1.0.0
 * @access public
 * @param  array  $classes
 * @return array
 */
function mb_body_class($classes)
{
}
/**
 * Filter on `get_the_archive_title` to output the correct archive page title.
 *
 * @since  1.0.0
 * @access public
 * @param  string  $title
 * @return string
 */
function mb_the_archive_title_filter($title)
{
}
/**
 * Handles forums, topics, and replies without titles. The titles will use the post ID. By default, 
 * replies do not have titles and will be replaced with "Reply to: Topic Title".
 *
 * @since  1.0.0
 * @access public
 * @param  string  $title
 * @param  int     $post
 * @return string
 */
function mb_post_title_empty($title, $post)
{
}
/**
 * Handles adding the post status to the post title for specific statuses.
 *
 * @since  1.0.0
 * @access public
 * @param  string  $title
 * @param  int     $post
 * @return string
 */
function mb_post_title_status($title, $post)
{
}
/**
 * Filters the edit post link for front-end editing.
 *
 * @since  1.0.0
 * @access public
 * @param  string  $url
 * @param  int     $post_id
 */
function mb_get_edit_post_link($url, $post_id)
{
}
/**
 * Filters the edit user link for front-end editing.
 *
 * @since  1.0.0
 * @access public
 * @param  string  $url
 * @param  int     $post_id
 */
function mb_get_edit_user_link_filter($url, $user_id)
{
}
/**
 * Removes some quicktag buttons from the editors.
 *
 * @since  1.0.0
 * @access public
 * @param  array   $settings
 * @param  string  $editor_id
 * @return array
 */
function mb_quicktags_settings_filter($settings, $editor_id)
{
}
/**
 * Removes scripts and styles that we don't need wit front end editors.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function mb_dequeue_editor_scripts()
{
}
/**
 * Formatting functions. These mostly deal with formatting the content.
 *
 * @package    MessageBoard
 * @subpackage Includes
 * @author     Justin Tadlock <justin@justintadlock.com>
 * @copyright  Copyright (c) 2014, Justin Tadlock
 * @link       https://github.com/justintadlock/message-board
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */
/**
 * @link https://core.trac.wordpress.org/ticket/29849
 */
function mb_natural_time($from, $to = '', $limit = 1)
{
}
/**
 * Post kses filter for topics/replies.
 *
 * @since  1.0.0
 * @access public
 * @param  string  $content
 * @return string
 */
function mb_filter_post_kses($content)
{
}
/**
 * Function for using backticks to wrap text in code tags. This is code from the original standalone
 * bbPress software (not the plugin).
 *
 * @author    bbPress
 * @license   http://www.gnu.org/licenses/gpl-2.0.html
 * @link      http://bbpress.org
 * @link      http://bbpress.org/download/legacy/
 *
 * @since  1.0.0
 * @access public
 * @param  string  $text
 * @return string
 */
function mb_code_trick($text)
{
}
/**
 * Function for reversing the `mb_code_trick()` output. This is code from the original standalone
 * bbPress software (not the plugin).
 *
 * @author    bbPress
 * @license   http://www.gnu.org/licenses/gpl-2.0.html
 * @link      http://bbpress.org
 * @link      http://bbpress.org/download/legacy/
 *
 * @since  1.0.0
 * @access public
 * @param  string  $text
 * @return string
 */
function mb_code_trick_reverse($text)
{
}
/**
 * Function for encoding HTML and wrapping the output in `<code>` and `<pre>` tags.  Used along with the
 * `mb_code_trick()` function as a callback. This is code from the original standalone bbPress software
 * (not the plugin).
 *
 * @author    bbPress
 * @license   http://www.gnu.org/licenses/gpl-2.0.html
 * @link      http://bbpress.org
 * @link      http://bbpress.org/download/legacy/
 *
 * @since  1.0.0
 * @access public
 * @param  string  $text
 * @return string
 */
function mb_encodeit($matches)
{
}
/**
 * Function for decoding encoded HTML and wrapping the output in backtick (`) characters.  Used along with
 * the `mb_code_trick_reverse()` function as a callback. This is code from the original standalone bbPress
 * software (not the plugin).
 *
 * @author    bbPress
 * @license   http://www.gnu.org/licenses/gpl-2.0.html
 * @link      http://bbpress.org
 * @link      http://bbpress.org/download/legacy/
 *
 * @since  1.0.0
 * @access public
 * @param  string  $text
 * @return string
 */
function mb_decodeit($matches)
{
}
/**
 * Helper function.
 *
 * @author    bbPress
 * @license   http://www.gnu.org/licenses/gpl-2.0.html
 * @link      http://bbpress.org
 * @link      http://bbpress.org/download/legacy/
 *
 * @since  1.0.0
 * @access private
 * @param  string  $text
 * @param  string  $key
 * @param  string  $preg
 * @return string
 */
function _mb_encode_bad_empty(&$text, $key, $preg)
{
}
/**
 * Helper function.
 *
 * @author    bbPress
 * @license   http://www.gnu.org/licenses/gpl-2.0.html
 * @link      http://bbpress.org
 * @link      http://bbpress.org/download/legacy/
 *
 * @since  1.0.0
 * @access private
 * @param  string  $text
 * @param  string  $key
 * @param  string  $preg
 * @return string
 */
function _mb_encode_bad_normal(&$text, $key, $preg)
{
}
/**
 * Helper function.
 *
 * @author    bbPress
 * @license   http://www.gnu.org/licenses/gpl-2.0.html
 * @link      http://bbpress.org
 * @link      http://bbpress.org/download/legacy/
 *
 * @since  1.0.0
 * @access public
 * @param  string  $text
 * @param  string  $key
 * @param  string  $preg
 * @return string
 */
function mb_encode_bad($text)
{
}
/**
 * Returns allowed tags.
 *
 * @since  1.0.0
 * @access public
 * @return array
 */
function mb_allowed_tags()
{
}
function mb_template_redirect()
{
}
/**
 * Checks if we're currently viewing a board action page. Actions mean we want to perform some action, 
 * typically interacting with the database on the front end of the site.
 *
 * @since  1.0.0
 * @access public
 * @return bool
 */
function mb_is_board_action($action = '')
{
}
/**
 * Gets the current board action. If not viewing an action page, returns an empty string.
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
function mb_get_board_action()
{
}
/**
 * Checks a `$_POST` nonce by name and action.  If the nonce wasn't posted, returns `FALSE`.  If the 
 * nonce was posted, verify it using `wp_verify_nonce()`.  Returns `TRUE` if things check.  Dies if 
 * it fails.
 *
 * @since  1.0.0
 * @access public
 * @param  string  $name
 * @param  string  $action
 * @return bool
 */
function mb_check_post_nonce($name, $action)
{
}
/**
 * Returns an array of messages when something fails.
 *
 * @since  1.0.0
 * @access public
 * @return array
 */
function mb_get_messages_of_doom()
{
}
/**
 * Gets one of the failed messages based on context.
 *
 * @since  1.0.0
 * @access public
 * @param  string  $handle
 * @return string
 */
function mb_get_message_of_doom($handle)
{
}
/**
 * Kills the page and prints an error message using `wp_die()`.
 *
 * @since  1.0.0
 * @access public
 * @param  string  $handle
 * @return void
 */
function mb_bring_the_doom($handle)
{
}
/**
 * Figures out whether we're on an edit page and whether the current user has permission to be here.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function mb_handler_edit_access()
{
}
/**
 * Front end new forum handler.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function mb_handler_new_forum()
{
}
/**
 * Front end edit forum handler.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function mb_handler_edit_forum()
{
}
/**
 * Front end new topic handler.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function mb_handler_new_topic()
{
}
/**
 * Front end edit topic handler.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function mb_handler_edit_topic()
{
}
/**
 * Front end new reply handler.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function mb_handler_new_reply()
{
}
/**
 * Front end edit reply handler.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function mb_handler_edit_reply()
{
}
function mb_handler_edit_user()
{
}
function mb_handler_topic_subscribe()
{
}
function mb_handler_topic_bookmark()
{
}
function mb_handler_forum_toggle_open()
{
}
function mb_handler_topic_toggle_open()
{
}
function mb_handler_topic_toggle_spam()
{
}
function mb_handler_reply_toggle_spam()
{
}
function mb_handler_forum_toggle_trash()
{
}
function mb_handler_topic_toggle_trash()
{
}
function mb_handler_reply_toggle_trash()
{
}
/**
 * Registers custom meta keys with WordPress and provides callbacks for sanitizing and authorizing 
 * the metadata.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function mb_register_meta()
{
}
/**
 * Returns the meta key used for the "previous post status" for the any post type.
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
function mb_get_prev_status_meta_key()
{
}
/**
 * Returns the meta key used for the "activity datetime" for the "forum" post type.
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
function mb_get_forum_activity_datetime_meta_key()
{
}
/**
 * Returns the meta key used for the "activity epoch datetime" for the "forum" post type.
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
function mb_get_forum_activity_datetime_epoch_meta_key()
{
}
/**
 * Returns the meta key used for the "last topic ID" for the "forum" post type.
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
function mb_get_forum_last_topic_id_meta_key()
{
}
/**
 * Returns the meta key used for the "last reply ID" for the "forum" post type.
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
function mb_get_forum_last_reply_id_meta_key()
{
}
/**
 * Returns the meta key used for the "subforum count" for the "forum" post type.
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
function mb_get_forum_subforum_count_meta_key()
{
}
/**
 * Returns the meta key used for the "topic count" for the "forum" post type.
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
function mb_get_forum_topic_count_meta_key()
{
}
/**
 * Returns the meta key used for the "reply count" for the "forum" post type.
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
function mb_get_forum_reply_count_meta_key()
{
}
/**
 * Returns the meta key used for the "forum type" for the "forum" post type.
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
function mb_get_forum_type_meta_key()
{
}
/**
 * Returns the meta key used for the "forum level" for the "forum" post type.
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
function mb_get_forum_level_meta_key()
{
}
/**
 * Returns the meta key used for the "activity datetime" for the "topic" post type.
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
function mb_get_topic_activity_datetime_meta_key()
{
}
/**
 * Returns the meta key used for the "activity epoch datetime" for the "topic" post type.
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
function mb_get_topic_activity_datetime_epoch_meta_key()
{
}
/**
 * Returns the meta key used for the "last reply ID" for the "topic" post type.
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
function mb_get_topic_last_reply_id_meta_key()
{
}
/**
 * Returns the meta key used for the "voices" for the "topic" post type.
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
function mb_get_topic_voices_meta_key()
{
}
/**
 * Returns the meta key used for the "voice count" for the "topic" post type.
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
function mb_get_topic_voice_count_meta_key()
{
}
/**
 * Returns the meta key used for the "reply count" for the "topic" post type.
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
function mb_get_topic_reply_count_meta_key()
{
}
/**
 * Returns the meta key used for the "topic type" for the "topic" post type.
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
function mb_get_topic_type_meta_key()
{
}
/**
 * Returns the meta key used for user "forum subscriptions".
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
function mb_get_user_forum_subscriptions_meta_key()
{
}
/**
 * Returns the meta key used for user "topic subscriptions".
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
function mb_get_user_topic_subscriptions_meta_key()
{
}
/**
 * Returns the meta key used for user "topic bookmarks".
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
function mb_get_user_topic_bookmarks_meta_key()
{
}
/**
 * Returns the meta key used for user "topic count".
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
function mb_get_user_forum_count_meta_key()
{
}
/**
 * Returns the meta key used for user "topic count".
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
function mb_get_user_topic_count_meta_key()
{
}
/**
 * Returns the meta key used for user "reply count".
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
function mb_get_user_reply_count_meta_key()
{
}
/**
 * Wrapper functions for plugin options saved in the database.
 *
 * @package    MessageBoard
 * @subpackage Includes
 * @author     Justin Tadlock <justin@justintadlock.com>
 * @copyright  Copyright (c) 2014, Justin Tadlock
 * @link       https://github.com/justintadlock/message-board
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */
/**
 * Returns what to show on the forum front page.
 *
 * @todo Plugin setting.
 *
 * @since  1.0.0
 * @access public
 * @return string forums|topics
 */
function mb_get_show_on_front()
{
}
/**
 * Returns the forum archive display (hierarchical or flat).
 *
 * @todo Plugin setting.
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
function mb_get_forum_archive_display()
{
}
/**
 * Returns the number of forums to show per page.
 *
 * @todo Plugin setting.
 *
 * @since  1.0.0
 * @access public
 * @return int
 */
function mb_get_forums_per_page()
{
}
/**
 * Returns the number of topics to show per page.
 *
 * @todo Plugin setting.
 *
 * @since  1.0.0
 * @access public
 * @return int
 */
function mb_get_topics_per_page()
{
}
/**
 * Returns the number of replies to show per page.
 *
 * @todo Plugin setting.
 *
 * @since  1.0.0
 * @access public
 * @return int
 */
function mb_get_replies_per_page()
{
}
/**
 * Returns the number of users to show per page on the user archive.
 *
 * @todo Plugin setting.
 *
 * @since  1.0.0
 * @access public
 * @return int
 */
function mb_get_users_per_page()
{
}
/**
 * Returns the number of roles to show per page on the role archive.
 *
 * @since  1.0.0
 * @access public
 * @return int
 */
function mb_get_roles_per_page()
{
}
/**
 * Returns the default forum ID.  This is the first-selected forum in drop-down lists for forums.  Also, 
 * this forum should not be allowed to be trashed/deleted.  Any permanently-deleted forum's topics should 
 * be assigned to the default forum.
 *
 * @since  1.0.0
 * @access public
 * @return int
 */
function mb_get_default_forum_id()
{
}
/**
 * Returns the ID/slug of the default forum role. By default, this is set to the `mb_participant` role.
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
function mb_get_default_role()
{
}
/**
 * Returns TRUE if the bookmarks feature is enabled.  Returns FALSE if disabled.
 *
 * @since  1.0.0
 * @access public
 * @return bool
 */
function mb_is_bookmarks_active()
{
}
/**
 * Returns TRUE if the subscriptions feature is enabled.  Returns FALSE if disabled.
 *
 * @since  1.0.0
 * @access public
 * @return bool
 */
function mb_is_subscriptions_active()
{
}
/**
 * Returns an array of super sticky topics.
 *
 * @since  1.0.0
 * @access public
 * @return array
 */
function mb_get_super_topics()
{
}
/**
 * Returns an array of sticky topics.
 *
 * @since  1.0.0
 * @access public
 * @return array
 */
function mb_get_sticky_topics()
{
}
/**
 * Returns the slug for the "publish" post status.  Used by replies by default.  Note that this status 
 * is not registered because it's a default WordPress post status.
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
function mb_get_publish_post_status()
{
}
/**
 * Returns the slug for the "trash" post status.  Used by forums, topics, and replies by default.  Note 
 * that this status is not registered because it's a default WordPress post status.
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
function mb_get_trash_post_status()
{
}
/**
 * Returns the slug for the "private" post status.  Used by forums, and topics by default.  Note 
 * that this status is not registered because it's a default WordPress post status.
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
function mb_get_private_post_status()
{
}
/**
 * Returns the slug for the "open" post status.  Used by forums and topics by default.
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
function mb_get_open_post_status()
{
}
/**
 * Returns the slug for the "close" post status.  Used by forums and topics by default.
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
function mb_get_close_post_status()
{
}
/**
 * Returns the slug for the "archive" post status.  Used by forums by default.
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
function mb_get_archive_post_status()
{
}
/**
 * Returns the slug for the "hidden" post status.  Used by forums by default.
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
function mb_get_hidden_post_status()
{
}
/**
 * Returns the slug for the "spam" post status.  Used by topics and replies by default.
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
function mb_get_spam_post_status()
{
}
/**
 * Returns the slug for the "orphan" post status.  Used by topics and replies by default.
 *
 * @note Not currently in use.
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
function mb_get_orphan_post_status()
{
}
/**
 * Returns an array of allowed post statuses for forums.
 *
 * @since  1.0.0
 * @access public
 * @return array
 */
function mb_get_forum_post_statuses()
{
}
/**
 * Returns an array of allowed post statuses for topics.
 *
 * @since  1.0.0
 * @access public
 * @return array
 */
function mb_get_topic_post_statuses()
{
}
/**
 * Returns an array of allowed post statuses for replies.
 *
 * @since  1.0.0
 * @access public
 * @return array
 */
function mb_get_reply_post_statuses()
{
}
/**
 * Returns an array of the statuses that are considered "published".  These are statuses that should
 * always be shown on the front end regardless if they're private or protected.
 *
 * @since  1.0.0
 * @access public
 * @return array
 */
function mb_get_published_post_statuses()
{
}
/**
 * Checks if post status is considered "published".
 *
 * @since  1.0.0
 * @access public
 * @param  string  $status
 * @return bool
 */
function mb_is_status_published($status)
{
}
/**
 * Registers post statuses used by the plugin that WordPress doesn't offer out of the box.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function mb_register_post_statuses()
{
}
/**
 * Callback function for the `transition_post_status` hook.  This function saves the previous post status 
 * as metadata.  It also adds actions for more specific status changes.
 *
 * @since  1.0.0
 * @access public
 * @param  string  $new_status
 * @param  string  $old_status
 * @param  object  $post
 * @return void
 */
function mb_transition_post_status($new_status, $old_status, $post)
{
}
/**
 * Resets topic/reply data when the post status is changed from 'publish' to 'spam'.
 *
 * @since  1.0.0
 * @access public
 * @param  $post  object
 * @return void
 */
function mb_publish_to_spam($post)
{
}
/**
 * Resets topic/reply data when the post status is changed from 'publish' to 'trash'.
 *
 * @since  1.0.0
 * @access public
 * @param  $post  object
 * @return void
 */
function mb_publish_to_trash($post)
{
}
/**
 * Resets topic data when the post status is changed from 'close' to 'spam'.
 *
 * @since  1.0.0
 * @access public
 * @param  $post  object
 * @return void
 */
function mb_close_to_spam($post)
{
}
/**
 * Resets topic data when the post status is changed from 'close' to 'trash'.
 *
 * @since  1.0.0
 * @access public
 * @param  $post  object
 * @return void
 */
function mb_close_to_trash($post)
{
}
/**
 * Resets topic/reply data when the post status is changed from 'spam' to 'publish'.
 *
 * @since  1.0.0
 * @access public
 * @param  $post  object
 * @return void
 */
function mb_spam_to_publish($post)
{
}
/**
 * Resets topic data when the post status is changed from 'spam' to 'close'.
 *
 * @since  1.0.0
 * @access public
 * @param  $post  object
 * @return void
 */
function mb_spam_to_close($post)
{
}
/**
 * Resets topic/reply data when the post status is changed from 'trash' to 'publish'.
 *
 * @since  1.0.0
 * @access public
 * @param  $post  object
 * @return void
 */
function mb_trash_to_publish($post)
{
}
/**
 * Resets topic data when the post status is changed from 'trash' to 'close'.
 *
 * @since  1.0.0
 * @access public
 * @param  $post  object
 * @return void
 */
function mb_trash_to_close($post)
{
}
/**
 * Changes a forum's post status to "open" if it has a different status.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $forum_id
 * @return int|WP_Error
 */
function mb_open_forum($forum_id)
{
}
/**
 * Changes a forum's post status to "close" if it has a different status.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $forum_id
 * @return int|WP_Error
 */
function mb_close_forum($forum_id)
{
}
/**
 * Changes a forum's post status to "archive" if it has a different status.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $forum_id
 * @return int|WP_Error
 */
function mb_archive_forum($forum_id)
{
}
/**
 * Changes a topic's post status to "open" if it has a different status.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $topic_id
 * @return int|WP_Error
 */
function mb_open_topic($topic_id)
{
}
/**
 * Changes a topic's post status to "close" if it has a different status.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $topic_id
 * @return int|WP_Error
 */
function mb_close_topic($topic_id)
{
}
/**
 * Changes a topic's post status to "spam" if it has a different status.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $topic_id
 * @return int|WP_Error
 */
function mb_spam_topic($topic_id)
{
}
/**
 * Changes a topic's status from "spam" to its previous status.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $topic_id
 * @return int|WP_Error
 */
function mb_unspam_topic($topic_id)
{
}
/**
 * Changes a topic's post status to "orphan" if it has a different status.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $topic_id
 * @return int|WP_Error
 */
function mb_orphan_topic($topic_id)
{
}
/**
 * Changes a topic's status from "orphan" to its previous status.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $topic_id
 * @return int|WP_Error
 */
function mb_unorphan_topic($topic_id)
{
}
/**
 * Changes a reply's post status to "spam" if it has a different status.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $reply_id
 * @return int|WP_Error
 */
function mb_spam_reply($reply_id)
{
}
/**
 * Changes a reply's status from "spam" to its previous status.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $reply_id
 * @return int|WP_Error
 */
function mb_unspam_reply($reply_id)
{
}
/**
 * Changes a reply's post status to "orphan" if it has a different status.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $reply_id
 * @return int|WP_Error
 */
function mb_orphan_reply($reply_id)
{
}
/**
 * Changes a reply's status from "orphan" to its previous status.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $reply_id
 * @return int|WP_Error
 */
function mb_unorphan_reply($reply_id)
{
}
/**
 * Gets a post's previous post status.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $post_id
 * @return string
 */
function mb_get_prev_post_status($post_id)
{
}
/**
 * Helper function for quicky restoring a post's previous status.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $post_id
 * @return int|WP_Error
 */
function mb_restore_post_status($post_id)
{
}
/**
 * Helper function for quickly updating a post's status.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $post_id
 * @param  string  $status
 * @return int|WP_Error
 */
function mb_update_post_status($post_id, $status)
{
}
/**
 * Callback function on the `before_delete_post` hook for when a post is deleted. This sets up some 
 * specific actions based on our post types. It also saves the deleted post object for later use in 
 * those actions.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $post_id
 * @return void
 */
function mb_before_delete_post($post_id)
{
}
/**
 * Callback function on the `after_delete_post` hook for when a forum is deleted.
 *
 * @todo All forum topics need to become orphans at this point. Attempt to move topics into parent if avail.
 * @todo Reset counts for parent forums.
 * @todo `wp_die()` if this is the default forum.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $post_id
 * @return void
 */
function mb_after_delete_forum($post_id)
{
}
/**
 * Callback function on the `after_delete_post` hook for when a topic is deleted.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $post_id
 * @return void
 */
function mb_after_delete_topic($post_id)
{
}
/**
 * Callback function on the `after_delete_post` hook for when a reply is deleted.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $post_id
 * @return void
 */
function mb_after_delete_reply($post_id)
{
}
/**
 * Displays the forum post type.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function mb_forum_post_type()
{
}
/**
 * Returns the name of the "forum" post type.
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
function mb_get_forum_post_type()
{
}
/**
 * Displays the topic post type.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function mb_topic_post_type()
{
}
/**
 * Returns the name of the "topic" post type.
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
function mb_get_topic_post_type()
{
}
/**
 * Displays the reply post type.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function mb_reply_post_type()
{
}
/**
 * Returns the name of the "reply" post type.
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
function mb_get_reply_post_type()
{
}
/**
 * Returns an array of the forum-related post types.
 *
 * @since  1.0.0
 * @access public
 * @return array
 */
function mb_get_post_types()
{
}
/**
 * Registers post types needed by the plugin.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function mb_register_post_types()
{
}
/**
 * Returns the top-level menu page.  This function is needed because the WordPress admin function
 * `user_can_access_admin_page()` returns an incorrect result for sub-menu pages of post types
 * when the user doesn't have permission to view the top-level page.  What this function does is
 * change the top-level menu based on what capability the user does have.
 *
 * @link https://core.trac.wordpress.org/ticket/29714
 * @link https://core.trac.wordpress.org/ticket/22895
 * @link https://core.trac.wordpress.org/ticket/16204
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
function mb_get_admin_menu_page()
{
}
/**
 * Changes the post type name to the "common" name used within the plugin.  Because the post type names
 * can be filtered, we need an easy way to track the common name.
 *
 * @since  1.0.0
 * @access public
 * @param  string  $post_type
 * @return string
 */
function mb_translate_post_type($post_type)
{
}
/**
 * Custom "enter title here" text.
 *
 * @since  1.0.0
 * @access public
 * @param  string  $title
 * @param  object  $post
 * @return string
 */
function mb_enter_title_here($title, $post)
{
}
/**
 * Post updated messages in the admin.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function mb_post_updated_messages($messages)
{
}
/**
 * Checks if viewing the forum front page.
 *
 * @since  1.0.0
 * @access public
 * @return bool
 */
function mb_is_forum_front()
{
}
/**
 * Checks if viewing the forum login page.
 *
 * @since  1.0.0
 * @access public
 * @return bool
 */
function mb_is_forum_login()
{
}
/**
 * Checks if viewing the edit page.
 *
 * @since  1.0.0
 * @access public
 * @return bool
 */
function mb_is_edit()
{
}
/**
 * Checks if viewing the edit page.
 *
 * @since  1.0.0
 * @access public
 * @return bool
 */
function mb_is_forum_edit()
{
}
/**
 * Checks if viewing the edit page.
 *
 * @since  1.0.0
 * @access public
 * @return bool
 */
function mb_is_topic_edit()
{
}
/**
 * Checks if viewing the edit page.
 *
 * @since  1.0.0
 * @access public
 * @return bool
 */
function mb_is_reply_edit()
{
}
/**
 * Checks if viewing one of the Message Board plugin pages.
 *
 * @since  1.0.0
 * @access public
 * @return bool
 */
function mb_is_message_board()
{
}
/**
 * Overwrites the main query depending on the situation.
 *
 * @since  1.0.0
 * @access public
 * @param  object  $query
 * @return void
 */
function mb_pre_get_posts($query)
{
}
/**
 * This is a filter on `posts_clauses` that allows the plugin to work around core WP expecting
 * hierarchical post types to have hierarchical permalinks.  Rather, we want our forums to be
 * flat, so we need to make sure the correct forum is queried on single forum views.  We do this 
 * by overwriting the "where" clause and querying by the post name.
 *
 * @since  1.0.0
 * @access public
 * @param  array   $clauses
 * @param  object  $query
 * @return array
 */
function mb_posts_clauses($clauses, $query)
{
}
/**
 * Filter on 'posts_where' to make sure we're not loading posts by the author.
 *
 * @since  1.0.0
 * @access public
 * @param  string  $where
 * @param  object  $query
 * @global object  $wpdb
 * @return string
 */
function mb_auth_posts_where($where, $query)
{
}
/**
 * Filter on `the_posts` on single post views to make sure the current user can read the parent
 * post.  Otherwise, return an empty array.  This will cause the page to properly 404.
 *
 * @since  1.0.0
 * @access public
 * @param  array  $posts
 * @return array
 */
function mb_posts_can_read_parent($posts)
{
}
/**
 * Puts forums in the correct, hierarchical order.  Meant to be used as a filter on `the_posts`.
 *
 * @link   http://wordpress.stackexchange.com/questions/63599/custom-post-type-wp-query-and-orderby
 * @since  1.0.0
 * @access public
 * @param  array  $posts
 * @param  object $query
 * @return array
 */
function mb_posts_hierarchy_filter($posts, $query)
{
}
/**
 * Adds super sticky posts to the posts array.  Meant to be used as a filter on `the_posts`.
 *
 * @since  1.0.0
 * @access public
 * @param  array  $posts
 * @param  object $query
 * @return array
 */
function mb_posts_super_filter($posts, $query)
{
}
/**
 * Adds sticky posts to the posts array.  Meant to be used as a filter on `the_posts`.
 *
 * @since  1.0.0
 * @access public
 * @param  array  $posts
 * @param  object $query
 * @return array
 */
function mb_posts_sticky_filter($posts, $query)
{
}
/**
 * Helper function for flattening a list of parent/child posts.
 *
 * @since  1.0.0
 * @access public
 * @param  array  $list
 * @param  array  $result
 * @return void
 */
function mb_recursively_flatten_list($list, &$result)
{
}
/**
 * Adds sticky posts to the front of the line with any given set of posts and stickies.
 *
 * @since  1.0.0
 * @access public
 * @param  array  $posts         Array of post objects.
 * @param  array  $sticky_posts  Array of post IDs.
 * @param  int    $forum_id      Limit to specific forum.
 * @return array
 */
function mb_add_stickies($posts, $sticky_posts, $forum_id = 0)
{
}
/**
 * Sets `$query->is_404` to `false` right after the query has been parsed when viewing the forum front
 * page, which WP sets to 404 by default.
 *
 * @since  1.0.0
 * @access public
 * @param  object  $query
 * @return void
 */
function mb_parse_query($query)
{
}
/**
 * Overrides the 404 for the forum front page early on the `template_redirect` hook.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function mb_404_override()
{
}
function mb_forum_rewrite_tags($post_type, $args)
{
}
//	add_filter( "forum_rewrite_rules", 'mb_forum_rewrite_rules' );
function mb_forum_rewrite_rules($rules)
{
}
/**
 * Returns the board root/index slug.
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
function mb_get_root_slug()
{
}
/**
 * Returns the board root/index slug or an empty string, depending on whether we need to use the root slug.
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
function mb_maybe_get_root_slug()
{
}
/**
 * Returns the forums slug.
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
function mb_get_forum_slug()
{
}
/**
 * Returns the topics slug.
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
function mb_get_topic_slug()
{
}
/**
 * Returns the reply slug.
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
function mb_get_reply_slug()
{
}
/**
 * Returns the users slug.
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
function mb_get_user_slug()
{
}
/**
 * Returns the login slug.
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
function mb_get_login_slug()
{
}
/**
 * Returns the edit slug.
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
function mb_get_edit_slug()
{
}
/**
 * Returns the search slug.
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
function mb_get_search_slug()
{
}
/**
 * Adds custom query vars.
 *
 * @since  1.0.0
 * @access public
 * @return array
 */
function mb_query_vars($vars)
{
}
/**
 * Sets up custom rewrite rules for pages that aren't handled by the CPT and CT APIs but are needed by
 * the plugin.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function mb_rewrite_rules()
{
}
/**
 * Changes the forum post type to use a non-hierarchical permalink structure, even though the
 * post type itself is hierarchical.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function mb_forum_rewrite_tag($post_type, $args)
{
}
/**
 * Overwrites the rewrite rules for the `topic` post type.  In particular, we need to handle the
 * pagination on singular topics because the `reply` post type is paginated on this page.
 *
 * @todo See if this can be simplified where we're only taking care of the things we need.
 *
 * @since  1.0.0
 * @access public
 * @param  array  $rules
 * @return array
 */
function mb_forum_topic_rewrite_rules($rules)
{
}
/**
 * Makes sure any paged redirects are corrected.
 *
 * @since  1.0.0
 * @access public
 * @param  string  $redirect_url
 * @param  string  $requested_url
 * @return string
 */
function mb_redirect_canonical($redirect_url, $requested_url)
{
}
/**
 * Various functions for handling shortcodes.
 *
 * @package    MessageBoard
 * @subpackage Includes
 * @author     Justin Tadlock <justin@justintadlock.com>
 * @copyright  Copyright (c) 2014, Justin Tadlock
 * @link       https://github.com/justintadlock/message-board
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */
/**
 * Returns an array of allowed shortcodes. By default, only the WordPress-bundled shortcodes are 
 * allowed.  Note that auto-embeds are handled separately.
 *
 * @since  1.0.0
 * @access public
 * @return array
 */
function mb_get_allowed_shortcodes()
{
}
/**
 * Content filter that removes all shortcodes and only allows allowed shortcodes to be run.  This is a 
 * wrapper for the `do_shortcode()` function.
 *
 * @since  1.0.0
 * @access public
 * @param  string  $content
 * @return string
 */
function mb_do_shortcode($content)
{
}
/**
 * Content filter for only "un-auto-p'ing" allowed shortcodes.  This is a wrapper for `shortcode_unautop()`.
 *
 * @since  1.0.0
 * @access public
 * @param  string  $content
 * @return string
 */
function mb_shortcode_unautop($content)
{
}
/**
 * Returns the theme folder that houses the templates for the plugin.
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
function mb_get_theme_template_folder()
{
}
/**
 * Returns the plugin's template folder name.  This is the fallback used when a template can't be found 
 * in the theme.
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
function mb_get_plugin_template_folder()
{
}
/**
 * Function for loading template parts.  This is similar to the WordPress `get_template_part()` function 
 * with the exception that it will fall back to templates in the plugin's `/templates` folder.
 *
 * @since  1.0.0
 * @access public
 * @param  string  $slug
 * @param  string  $name
 * @return void
 */
function mb_get_template_part($slug, $name = '')
{
}
/**
 * Callback function on WordPress' `template_include` filter hook.  This function looks for a template within 
 * the theme for handling the current page's output.  If no template is found, it falls back to a default 
 * `board.php` template within the plugin.
 *
 * @since  1.0.0
 * @access public
 * @param  string  $template
 * @return string
 */
function mb_template_include($template)
{
}
/**
 * Callback function on the `mb_theme_compat` hook.  This hook is used to output the plugin's content 
 * as a fallback in the case that a theme doesn't handle the templates.  This function first looks for 
 * a template within the theme for compatibility.  If it doesn't find one, it'll load its own.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function mb_theme_compat()
{
}
/**
 * Builds the template hierarchy for the plugin.  This function figures out what the current page 
 * is and returns an array of possible templates to use.  Note that this function only returns 
 * the templates name and not a full paths.  It is meant to be used within other functions that actually 
 * locate/load the templates.
 *
 * @since  1.0.0
 * @access public
 * @return array
 */
function mb_get_template_hierarchy()
{
}
/**
 * Filter on `breadcrumb_trail_object`.  This filter returns a custom object if viewing a page from 
 * the Message Board plugin.
 *
 * @since 1.0.0
 * @access public
 * @param  object|null  $breadcrumb
 * @param  array        $args
 * @return object|null
 */
function mb_breadcrumb_trail_object($breadcrumb, $args)
{
}
function mb_register_role_groups()
{
}
/**
 * Returns an array of capabilities for the "forum" post type.
 *
 * @since  1.0.0
 * @access public
 * @return array
 */
function mb_get_forum_capabilities()
{
}
/**
 * Overwrites capabilities in certain scenarios.
 *
 * @since  1.0.0
 * @access public
 * @param  array   $caps
 * @param  string  $cap
 * @param  int     $user_id
 * @param  array   $args
 * @return array
 */
function mb_forum_map_meta_cap($caps, $cap, $user_id, $args)
{
}
/**
 * Callback function executed after a forum has been updated.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $post_id
 * @param  object  $post_after
 * @param  object  $post_before
 * @return void
 */
function mb_forum_post_updated($post_id, $post_after, $post_before)
{
}
/**
 * Inserts a new forum.  This is a wrapper for the `wp_insert_post()` function and should be used in its 
 * place where possible.
 *
 * @since  1.0.0
 * @access public
 * @param  array  $args
 * @return int|WP_Error
 */
function mb_insert_forum($args = array())
{
}
/**
 * Function for inserting forum data when it's first published.
 *
 * @since  1.0.0
 * @access public
 * @param  object  $post
 * @return void
 */
function mb_insert_forum_data($post)
{
}
/**
 * Resets a specific forum's data.
 *
 * @since  1.0.0
 * @access public
 * @param  object|int  $post
 * @return void
 */
function mb_reset_forum_data($post)
{
}
/**
 * Gets a forum's level in the hierarchy.
 *
 * @since  1.0.0
 * @access public
 * @param  int    $forum_id
 * @return int
 */
function mb_get_forum_level($forum_id = 0)
{
}
/**
 * Sets a forum's level.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $forum_id
 * @return int
 */
function mb_reset_forum_level($forum_id)
{
}
/**
 * Resets a forum's subforum count.
 *
 * @todo Update the $status_where to use any published forum status rather than hardcoding them.
 *
 * @since  1.0.0
 * @access public
 * @param  int    $forum_id
 * @global object $wpdb
 * @return int
 */
function mb_reset_forum_subforum_count($forum_id)
{
}
/**
 * Sets a forum's subforum count.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $forum_id
 * @param  int     $count
 * @return bool
 */
function mb_set_forum_subforum_count($forum_id, $count)
{
}
/**
 * Resets the forum topic count.
 *
 * @since  1.0.0
 * @access public
 * @param  int    $forum_id
 * @global object $wpdb
 * @return int
 */
function mb_reset_forum_topic_count($forum_id)
{
}
/**
 * Set the forum reply count.
 *
 * @since  1.0.0
 * @access public
 * @param  int    $forum_id
 * @global object $wpdb
 * @return int
 */
function mb_reset_forum_reply_count($forum_id)
{
}
/**
 * Returns an array of topic IDs for the forum.
 *
 * @since  1.0.0
 * @access public
 * @param  int    $forum_id
 * @global object $wpdb
 * @return array
 */
function mb_get_forum_topic_ids($forum_id)
{
}
/**
 * Resets the forum's "latest" data.
 *
 * @since  1.0.0
 * @access public
 * @param  int    $forum_id
 * @return int
 */
function mb_reset_forum_latest($forum_id)
{
}
/**
 * Sets the forum level.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $forum_id
 * @param  int     $level
 * @return bool
 */
function mb_set_forum_level($forum_id, $level)
{
}
/**
 * Sets the forum topic count
 *
 * @since  1.0.0
 * @access public
 * @param  int     $forum_id
 * @param  int     $count
 * @return bool
 */
function mb_set_forum_topic_count($forum_id, $count)
{
}
/**
 * Sets the forum reply count.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $forum_id
 * @param  int     $count
 * @return bool
 */
function mb_set_forum_reply_count($forum_id, $count)
{
}
/**
 * Sets the forum last topic ID.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $forum_id
 * @param  int     $topic_id
 * @return bool
 */
function mb_set_forum_last_topic_id($forum_id, $topic_id)
{
}
/**
 * Sets the forum last reply ID.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $forum_id
 * @param  int     $reply_id
 * @return bool
 */
function mb_set_forum_last_reply_id($forum_id, $reply_id)
{
}
/**
 * Sets the forum last activity datetime.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $forum_id
 * @param  string  $datetime
 * @return bool
 */
function mb_set_forum_activity_datetime($forum_id, $datetime)
{
}
/**
 * Sets the forum last activity datetime epoch.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $forum_id
 * @param  int     $epoch
 * @return bool
 */
function mb_set_forum_activity_epoch($forum_id, $epoch)
{
}
/**
 * Filter on the post type link for forums. If the user doesn't have permission to view the forum, 
 * return an empty string.
 *
 * @since  1.0.0
 * @access public
 * @param  string  $link
 * @param  object  $post
 * @return string
 */
function mb_forum_post_type_link($link, $post)
{
}
/**
 * Adds the placeholder text to the editor textarea.
 *
 * @since  1.0.0
 * @access public
 * @param  string  $html
 * @return string
 */
function mb_forum_the_editor_filter($html)
{
}
/**
 * Template functions for forum-related functionality.
 *
 * @package    MessageBoard
 * @subpackage Includes
 * @author     Justin Tadlock <justin@justintadlock.com>
 * @copyright  Copyright (c) 2014, Justin Tadlock
 * @link       https://github.com/justintadlock/message-board
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */
/* ====== Forum Query ====== */
/**
 * Creates a new forum query and checks if there are any forums found.
 *
 * @since  1.0.0
 * @access public
 * @return bool
 */
function mb_forum_query()
{
}
/**
 * Sets up the forum data for the current forum in the forum loop.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function mb_the_forum()
{
}
/**
 * Creates a new sub-forum query and checks if there are any forums found.
 *
 * @since  1.0.0
 * @access public
 * @return bool
 */
function mb_subforum_query()
{
}
/**
 * Sets up the forum data for the current forum in the subforum loop.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function mb_the_subforum()
{
}
/* ====== Forum ID ====== */
/**
 * Displays the forum ID.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $forum_id
 * @return void
 */
function mb_forum_id($forum_id = 0)
{
}
/**
 * Returns the forum ID.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $forum_id
 * @return int
 */
function mb_get_forum_id($forum_id = 0)
{
}
/* ====== Conditionals ====== */
/**
 * Checks if the post is a forum.  This is a wrapper for `get_post_type()`.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $forum_id
 * @return bool
 */
function mb_is_forum($post_id = 0)
{
}
/**
 * Checks if viewing a single forum.  Wrapper function for the WordPress `is_single()` function.
 *
 * @since  1.0.0
 * @access public
 * @param  int|string
 * @return bool
 */
function mb_is_single_forum($forum = '')
{
}
/**
 * Checks if viewing the forum archive.  Wrapper function for `is_post_type_archive()`.
 *
 * @since  1.0.0
 * @access public
 * @return bool
 */
function mb_is_forum_archive()
{
}
/**
 * Checks if the forums should be shown in hierarchical (vs. flat) format.
 *
 * @since  1.0.0
 * @access public
 * @return bool
 */
function mb_show_hierarchical_forums()
{
}
/**
 * Conditional check to see if a forum allows new subforums to be created.
 *
 * @since  1.0.0
 * @access public
 * @param  int    $forum_id
 * @return bool
 */
function mb_forum_allows_subforums($forum_id = 0)
{
}
/**
 * Conditional check to see if a forum allows new topics to be created.
 *
 * @since  1.0.0
 * @access public
 * @param  int    $forum_id
 * @return bool
 */
function mb_forum_allows_topics($forum_id = 0)
{
}
/* ====== Forum Status ====== */
/**
 * Displays the forum post status.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $forum_id
 * @return void
 */
function mb_forum_status($forum_id = 0)
{
}
/**
 * Returns the forum post status.  Wrapper function for `get_post_status()`.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $forum_id
 * @return void
 */
function mb_get_forum_status($forum_id = 0)
{
}
/**
 * Whether the forum's post status is a "public" post status.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $forum_id
 * @return bool
 */
function mb_is_forum_public($forum_id = 0)
{
}
/**
 * Conditional check to see whether a forum has the "open" post status.
 *
 * @since  1.0.0
 * @access public
 * @return bool
 */
function mb_is_forum_open($forum_id = 0)
{
}
/**
 * Conditional check to see whether a forum has the "close" post status.
 *
 * @since  1.0.0
 * @access public
 * @return bool
 */
function mb_is_forum_closed($forum_id = 0)
{
}
/**
 * Conditional check to see whether a forum has the "archive" post status.
 *
 * @since  1.0.0
 * @access public
 * @return bool
 */
function mb_is_forum_archived($forum_id = 0)
{
}
/**
 * Conditional check to see whether a forum has the "private" post status.
 *
 * @since  1.0.0
 * @access public
 * @return bool
 */
function mb_is_forum_private($forum_id = 0)
{
}
/**
 * Conditional check to see whether a forum has the "hidden" post status.
 *
 * @since  1.0.0
 * @access public
 * @return bool
 */
function mb_is_forum_hidden($forum_id = 0)
{
}
/**
 * Conditional check to see whether a forum has the "trash" post status.
 *
 * @since  1.0.0
 * @access public
 * @return bool
 */
function mb_is_forum_trash($forum_id = 0)
{
}
/**
 * Conditional check to see if a forum status allows new subforums to be created.
 *
 * @since  1.0.0
 * @access public
 * @param  string  $status
 * @return bool
 */
function mb_forum_status_allows_subforums($status)
{
}
/**
 * Conditional check to see if a forum status allows new topics to be created.
 *
 * @since  1.0.0
 * @access public
 * @param  string  $status
 * @return bool
 */
function mb_forum_status_allows_topics($status)
{
}
function mb_forum_toggle_open_url($forum_id = 0)
{
}
function mb_get_forum_toggle_open_url($forum_id = 0)
{
}
function mb_forum_toggle_open_link($forum_id = 0)
{
}
function mb_get_forum_toggle_open_link($forum_id = 0)
{
}
function mb_forum_toggle_close_url($forum_id = 0)
{
}
function mb_get_forum_toggle_close_url($forum_id = 0)
{
}
function mb_forum_toggle_close_link($forum_id = 0)
{
}
function mb_get_forum_toggle_close_link($forum_id = 0)
{
}
function mb_forum_toggle_trash_url($forum_id = 0)
{
}
function mb_get_forum_toggle_trash_url($forum_id = 0)
{
}
function mb_forum_toggle_trash_link($forum_id = 0)
{
}
function mb_get_forum_toggle_trash_link($forum_id = 0)
{
}
/* ====== Forum Labels ====== */
/**
 * Displays a forum post type label.
 *
 * @since  1.0.0
 * @access public
 * @param  string  $label
 * @return void
 */
function mb_forum_label($label)
{
}
/**
 * Returns a forum post type label.
 *
 * @since  1.0.0
 * @access public
 * @param  string  $label
 * @return void
 */
function mb_get_forum_label($label)
{
}
/* ====== Forum States (better function names?) ====== */
/**
 * Outputs a forum's states.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function mb_forum_states($forum_id = 0)
{
}
/**
 * Returns a forum's labels.
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
function mb_get_forum_states($forum_id = 0)
{
}
/* ====== Forum Content ====== */
/**
 * Displays the forum content.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $forum_id
 * @return void
 */
function mb_forum_content($forum_id = 0)
{
}
/**
 * Returns the forum content.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $forum_id
 * @return string
 */
function mb_get_forum_content($forum_id = 0, $mode = 'display')
{
}
/* ====== Forum Title ====== */
/**
 * Displays the single forum title.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function mb_single_forum_title()
{
}
/**
 * Returns the single forum title.  Wrapper function for `single_post_title()`.
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
function mb_get_single_forum_title()
{
}
/**
 * Displays the the forum archive title.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function mb_forum_archive_title()
{
}
/**
 * Returns the forum archive title.  Wrapper function for `post_type_archive_title()`.
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
function mb_get_forum_archive_title()
{
}
/**
 * Displays the forum title.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $forum_id
 * @return void
 */
function mb_forum_title($forum_id = 0)
{
}
/**
 * Returns the forum title.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $forum_id
 * @return string
 */
function mb_get_forum_title($forum_id = 0)
{
}
/* ====== Forum URL ====== */
/**
 * Displays the forum URL.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $forum_id
 * @return void
 */
function mb_forum_url($forum_id = 0)
{
}
/**
 * Returns the forum URL.  Wrapper function for `get_permalink()`.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $forum_id
 * @return string
 */
function mb_get_forum_url($forum_id = 0)
{
}
/**
 * Displays the forum link.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $forum_id
 * @return void
 */
function mb_forum_link($forum_id = 0)
{
}
/**
 * Returns the forum link.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $forum_id
 * @return string
 */
function mb_get_forum_link($forum_id = 0)
{
}
/**
 * Displays the forum date.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $forum_id,
 * @param  string  $format
 * @return void
 */
function mb_forum_date($forum_id = 0, $format = '')
{
}
/**
 * Returns the forum date.  Wrapper function for `get_post_time()`.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $forum_id,
 * @param  string  $format
 * @return void
 */
function mb_get_forum_date($forum_id = 0, $format = '')
{
}
/**
 * Displays the forum time.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $forum_id,
 * @param  string  $format
 * @return void
 */
function mb_forum_time($forum_id = 0, $format = '')
{
}
/**
 * Returns the forum time.  Wrapper function for `get_post_time()`.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $forum_id,
 * @param  string  $format
 * @return void
 */
function mb_get_forum_time($forum_id = 0, $format = '')
{
}
/**
 * Outputs the forum natural time (e.g., 1 month ago, 5 minutes ago, etc.)
 *
 * @since  1.0.0
 * @access public
 * @param  int     $forum_id
 * @return void
 */
function mb_forum_natural_time($forum_id = 0)
{
}
/**
 * Outputs the forum natural time (e.g., 1 month ago, 5 minutes ago, etc.)
 *
 * @since  1.0.0
 * @access public
 * @param  int     $forum_id
 * @return string
 */
function mb_get_forum_natural_time($forum_id = 0)
{
}
/* ====== Forum Author ====== */
/**
 * Displays the forum author ID.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $forum_id
 * @return void
 */
function mb_forum_author_id($forum_id = 0)
{
}
/**
 * Returns the forum autor ID.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $forum_id
 * @return int
 */
function mb_get_forum_author_id($forum_id = 0)
{
}
/**
 * Displays the forum author.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $forum_id
 * @return void
 */
function mb_forum_author($forum_id = 0)
{
}
/**
 * Returns the forum author.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $forum_id
 * @return string
 */
function mb_get_forum_author($forum_id = 0)
{
}
/**
 * Displays the forum author URL.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $forum_id
 * @return void
 */
function mb_forum_author_url($forum_id = 0)
{
}
/**
 * Returns the forum author URL.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $forum_id
 * @return string
 */
function mb_get_forum_author_url($forum_id = 0)
{
}
/**
 * Displays the forum author link.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $forum_id
 * @return void
 */
function mb_forum_author_link($forum_id = 0)
{
}
/**
 * Returns the forum author link.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $forum_id
 * @return string
 */
function mb_get_forum_author_link($forum_id = 0)
{
}
/* ====== Last Activity ====== */
/**
 * Prints the forum last activity time.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function mb_forum_last_active_time($forum_id = 0)
{
}
/**
 * Returns the forum last activity time.
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
function mb_get_forum_last_active_time($forum_id = 0)
{
}
/* ====== Last Post Author ====== */
/**
 * Displays the last post author for a forum.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $forum_id
 * @return void
 */
function mb_forum_last_post_author($forum_id = 0)
{
}
/**
 * Returns the last post author for a forum.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $forum_id
 * @return string
 */
function mb_get_forum_last_post_author($forum_id = 0)
{
}
/* ====== Last Post ID ====== */
/**
 * Displays the forum last post (topic or reply) ID.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function mb_forum_last_post_id($forum_id = 0)
{
}
/**
 * Returns the forum last post (topic or reply) ID.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function mb_get_forum_last_post_id($forum_id = 0)
{
}
/* ====== Last Post URL ====== */
/**
 * Displays the last post URL for a forum.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $forum_id
 * @return void
 */
function mb_forum_last_post_url($forum_id = 0)
{
}
/**
 * Returns a forum's last post URL.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $forum_id
 * @return string
 */
function mb_get_forum_last_post_url($forum_id = 0)
{
}
/* ====== Last Reply ID ====== */
/**
 * Display the forum last reply ID.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function mb_forum_last_reply_id($forum_id = 0)
{
}
/**
 * Returns the last forum reply ID.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $forum_id
 * @retrn  int
 */
function mb_get_forum_last_reply_id($forum_id = 0)
{
}
/* ====== Last Topic ID ====== */
/**
 * Displays the forum last topic ID.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $forum_id
 * @return void
 */
function mb_forum_last_topic_id($forum_id = 0)
{
}
/**
 * Returns the forum last topic ID.  This returns the last topic by activity, which is not
 * necessarily the newest topic created.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $forum_id
 * @return int
 */
function mb_get_forum_last_topic_id($forum_id = 0)
{
}
/* ====== Last Topic URL ====== */
/**
 * Displays the forum last topic URL.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $forum_id
 * @return void
 */
function mb_forum_last_topic_url($forum_id = 0)
{
}
/**
 * Returns the forum last topic URL.  This returns the last topic by activity, which is not
 * necessarily the newest topic created.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $forum_id
 * @return string
 */
function mb_get_forum_last_topic_url($forum_id = 0)
{
}
/**
 * Displays the forum last topic link.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $forum_id
 * @return void
 */
function mb_forum_last_topic_link($forum_id = 0)
{
}
/**
 * Returns the forum last topic link.  This returns the last topic by activity, which is not
 * necessarily the newest topic created.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $forum_id
 * @return string
 */
function mb_get_forum_last_topic_link($forum_id = 0)
{
}
/* ====== Subforums ====== */
function mb_get_forum_order($forum_id = 0)
{
}
function mb_get_forum_parent_id($forum_id = 0)
{
}
function mb_is_subforum($forum_id = 0)
{
}
/* ====== Forum Counts ====== */
function mb_forum_subforum_count($forum_id = 0)
{
}
function mb_get_forum_subforum_count($forum_id = 0)
{
}
function mb_forum_topic_count($forum_id = 0)
{
}
function mb_get_forum_topic_count($forum_id = 0)
{
}
function mb_forum_post_count($forum_id = 0)
{
}
function mb_get_forum_post_count($forum_id = 0)
{
}
function mb_forum_reply_count($forum_id = 0)
{
}
function mb_get_forum_reply_count($forum_id = 0)
{
}
/* ====== Pagination ====== */
/**
 * Checks if viewing a paginated forum. Only for use on single forum pages.
 *
 * @since  1.0.0
 * @access public
 * @return bool
 */
function mb_is_forum_paged()
{
}
/**
 * Outputs pagination links for single topic pages (the replies are paginated).
 *
 * @since  1.0.0
 * @access public
 * @param  array  $args
 * @return string
 */
function mb_loop_forum_pagination($args = array())
{
}
function mb_dropdown_forums($args = array())
{
}
/* ====== Forum Form ====== */
/**
 * Outputs the URL to the new forum form.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function mb_forum_form_url()
{
}
/**
 * Returns the URL to the new forum form.
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
function mb_get_forum_form_url()
{
}
/**
 * Outputs a link to the new forum form.
 *
 * @since  1.0.0
 * @access public
 * @param  array  $args
 * @return void
 */
function mb_forum_form_link($args = array())
{
}
/**
 * Returns a link to the new forum form.
 *
 * @since  1.0.0
 * @access public
 * @param  array  $args
 * @return string
 */
function mb_get_forum_form_link($args = array())
{
}
/**
 * Displays the new forum form.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function mb_forum_form()
{
}
/**
 * Displays the edit forum form.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function mb_forum_edit_form()
{
}
/**
 * Topic content editor.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function mb_forum_editor()
{
}
/**
 * Returns the "normal" forum type.
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
function mb_get_normal_forum_type()
{
}
/**
 * Returns the "category" forum type.
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
function mb_get_category_forum_type()
{
}
/**
 * Registers custom forum types.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function mb_register_forum_types()
{
}
/**
 * Registers a new forum type.
 *
 * @since  1.0.0
 * @access public
 * @param  string  $name
 * @param  array   $args
 * @return void
 */
function mb_register_forum_type($name, $args = array())
{
}
/**
 * Unregister a forum type.
 *
 * @since  1.0.0
 * @access public
 * @param  string  $name
 * @return void
 */
function mb_unregister_forum_type($name)
{
}
/**
 * Check if a forum type is registered.
 *
 * @since  1.0.0
 * @access public
 * @param  string  $name
 * @return bool
 */
function mb_forum_type_exists($name)
{
}
/**
 * Returns an array of the registered forum type objects.
 *
 * @since  1.0.0
 * @access public
 * @return array
 */
function mb_get_forum_type_objects()
{
}
/**
 * Returns a single forum type object.
 *
 * @since  1.0.0
 * @access public
 * @param  string  $name
 * @return object|bool
 */
function mb_get_forum_type_object($name)
{
}
/**
 * Conditional check to see if a forum has the "normal" type.
 *
 * @since  1.0.0
 * @access public
 * @param  int    $forum_id
 * @return bool
 */
function mb_is_forum_normal($forum_id = 0)
{
}
/**
 * Conditional check to see if a forum has the "category" type.
 *
 * @since  1.0.0
 * @access public
 * @param  int    $forum_id
 * @return bool
 */
function mb_is_forum_category($forum_id = 0)
{
}
/**
 * Displays the forum type for a specific forum.
 *
 * @since  1.0.0
 * @access public
 * @param  int    $forum_id
 * @return void
 */
function mb_forum_type($forum_id = 0)
{
}
/**
 * Returns the forum type for a specific forum.
 *
 * @since  1.0.0
 * @access public
 * @param  int    $forum_id
 * @return string
 */
function mb_get_forum_type($forum_id = 0)
{
}
/**
 * Sets the forum type for a specific forum.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $forum_id
 * @param  string  $forum_type
 * @return bool
 */
function mb_set_forum_type($forum_id, $type)
{
}
/**
 * Conditional check to see if a forum type allows new topics to be posted.
 *
 * @since  1.0.0
 * @access public
 * @param  string  $type
 * @return bool
 */
function mb_forum_type_allows_topics($type)
{
}
/**
 * Conditional check to see if a forum type allows new subforums to be created.
 *
 * @since  1.0.0
 * @access public
 * @param  string  $type
 * @return bool
 */
function mb_forum_type_allows_subforums($type)
{
}
/**
 * Creates a dropdown `<select>` for selecting the forum type in forms.
 *
 * @since  1.0.0
 * @access public
 * @param  array  $args
 * @return string
 */
function mb_dropdown_forum_type($args = array())
{
}
/**
 * Returns an array of capabilities for the "reply" post type.
 *
 * @since  1.0.0
 * @access public
 * @return array
 */
function mb_get_reply_capabilities()
{
}
/**
 * Overwrites capabilities in certain scenarios.
 *
 * @since  1.0.0
 * @access public
 * @param  array   $caps
 * @param  string  $cap
 * @param  int     $user_id
 * @param  array   $args
 * @return array
 */
function mb_reply_map_meta_cap($caps, $cap, $user_id, $args)
{
}
/**
 * Inserts a new reply and adds/updates metadata.  This is a wrapper for the `wp_insert_post()` function 
 * and should be used in its place where possible.
 *
 * @since  1.0.0
 * @access public
 * @param  array  $args
 * @return int|WP_Error
 */
function mb_insert_reply($args = array())
{
}
/**
 * Function for inserting reply data when it's first published.
 *
 * @since  1.0.0
 * @access public
 * @param  object  $post
 * @return void
 */
function mb_insert_reply_data($post)
{
}
/**
 * Filter on the post type link for replies. If the user doesn't have permission to view the reply, 
 * return an empty string.  Else, generate the reply URL based on the topic ID.
 *
 * @since  1.0.0
 * @access public
 * @param  string  $link
 * @param  object  $post
 * @return string
 */
function mb_reply_post_type_link($link, $post)
{
}
/**
 * Generates the reply URL based on its position (`menu_order` field).
 *
 * @since  1.0.0
 * @access public
 * @param  int     $reply_id
 * @return string
 */
function mb_generate_reply_url($reply_id = 0)
{
}
function mb_get_topic_reply_ids($topic_id)
{
}
function mb_reset_reply_data($post, $reset_latest = \false)
{
}
/* Update all reply positions with a single query. */
function mb_reset_reply_positions($topic_id)
{
}
function mb_orphanize_replies($topic_id)
{
}
/**
 * Adds the placeholder text to the editor textarea.
 *
 * @since  1.0.0
 * @access public
 * @param  string  $html
 * @return string
 */
function mb_reply_the_editor_filter($html)
{
}
/**
 * Reply template functions for theme authors.
 *
 * @package    MessageBoard
 * @subpackage Includes
 * @author     Justin Tadlock <justin@justintadlock.com>
 * @copyright  Copyright (c) 2014, Justin Tadlock
 * @link       https://github.com/justintadlock/message-board
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */
/**
 * Creates a new reply query and checks if there are any replies found.
 *
 * @since  1.0.0
 * @access public
 * @return bool
 */
function mb_reply_query()
{
}
/**
 * Sets up the reply data for the current reply in The Loop.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function mb_the_reply()
{
}
/* ====== Reply ID ====== */
/**
 * Displays the reply ID.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $reply_id
 * @return void
 */
function mb_reply_id($reply_id = 0)
{
}
/**
 * Returns the reply ID.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $reply_id
 * @return int
 */
function mb_get_reply_id($reply_id = 0)
{
}
/* ====== Conditionals ====== */
/**
 * Checks if the post is a reply.  This is a wrapper for `get_post_type()`.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $reply_id
 * @return bool
 */
function mb_is_reply($post_id = 0)
{
}
/**
 * Checks if viewing a single reply page.  This is a wrapper for `is_single()`.
 *
 * @since  1.0.0
 * @access public
 * @param  int|string  $reply
 * @return bool
 */
function mb_is_single_reply($reply = '')
{
}
/**
 * Checks if viewing the reply archive.  Wrapper function for `is_post_type_archive()`.
 *
 * @since  1.0.0
 * @access public
 * @return bool
 */
function mb_is_reply_archive()
{
}
/* ====== Reply Title ====== */
/**
 * Displays the single reply title.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function mb_single_reply_title()
{
}
/**
 * Returns the single reply title.
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
function mb_get_single_reply_title()
{
}
/**
 * Displays the reply archive title.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function mb_reply_archive_title()
{
}
/**
 * Returns the reply archive title.
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
function mb_get_reply_archive_title()
{
}
/* ====== Reply Position ====== */
/**
 * Displays the reply position.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $reply_id
 * @return void
 */
function mb_reply_position($reply_id = 0)
{
}
/**
 * Returns the reply position. The reply position is stored as the `menu_order` post field. The position 
 * indicates where the reply is in reference to the other replies for a topic. It's used for keeping 
 * them in the correct order.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $reply_id
 * @return void
 */
function mb_get_reply_position($reply_id = 0)
{
}
/* ====== Reply Edit ====== */
/**
 * Displays the reply edit URL.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $reply_id
 * @return void
 */
function mb_reply_edit_url($reply_id = 0)
{
}
/**
 * Returns the reply edit URL.  This is a wrapper for `get_edit_post_link()`.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $reply_id
 * @return string
 */
function mb_get_reply_edit_url($reply_id = 0)
{
}
/**
 * Displays the reply edit link.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $reply_id
 * @return void
 */
function mb_reply_edit_link($reply_id = 0)
{
}
/**
 * Returns the reply edit link.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $reply_id
 * @return string
 */
function mb_get_reply_edit_link($reply_id = 0)
{
}
/* ====== Reply Status ====== */
/**
 * Displays the reply post status.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $reply_id
 * @return void
 */
function mb_reply_status($reply_id = 0)
{
}
/**
 * Returns the reply post status.  Wrapper for the `get_post_status()` function.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $reply_id
 * @return string
 */
function mb_get_reply_status($reply_id = 0)
{
}
/**
 * Whether the reply's post status is a "public" post status.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $reply_id
 * @return bool
 */
function mb_is_reply_public($reply_id = 0)
{
}
/**
 * Conditional check to see whether a reply has the "publish" post status.
 *
 * @since  1.0.0
 * @access public
 * @return bool
 */
function mb_is_reply_published($reply_id = 0)
{
}
/**
 * Conditional check to see whether a reply has the "spam" post status.
 *
 * @since  1.0.0
 * @access public
 * @return bool
 */
function mb_is_reply_spam($reply_id = 0)
{
}
/**
 * Conditional check to see whether a reply has the "trash" post status.
 *
 * @since  1.0.0
 * @access public
 * @return bool
 */
function mb_is_reply_trash($reply_id = 0)
{
}
/**
 * Conditional check to see whether a reply has the "orphan" post status.
 *
 * @since  1.0.0
 * @access public
 * @return bool
 */
function mb_is_reply_orphan($reply_id = 0)
{
}
function mb_reply_toggle_spam_url($reply_id = 0)
{
}
function mb_get_reply_toggle_spam_url($reply_id = 0)
{
}
function mb_reply_toggle_spam_link($reply_id = 0)
{
}
function mb_get_reply_toggle_spam_link($reply_id = 0)
{
}
function mb_reply_toggle_trash_url($reply_id = 0)
{
}
function mb_get_reply_toggle_trash_url($reply_id = 0)
{
}
function mb_reply_toggle_trash_link($reply_id = 0)
{
}
function mb_get_reply_toggle_trash_link($reply_id = 0)
{
}
/* ====== Reply Labels ====== */
function mb_reply_label($label)
{
}
function mb_get_reply_label($label)
{
}
/* ====== Reply Content ====== */
function mb_reply_content($reply_id = 0)
{
}
function mb_get_reply_content($reply_id = 0, $mode = 'display')
{
}
/* ====== Reply Title ====== */
function mb_reply_title($reply_id = 0)
{
}
function mb_get_reply_title($reply_id = 0)
{
}
/* ====== Reply URL ====== */
function mb_reply_url($reply_id = 0)
{
}
function mb_get_reply_url($reply_id = 0)
{
}
/**
 * Displays the reply link.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $reply_id
 * @return void
 */
function mb_reply_link($reply_id = 0)
{
}
/**
 * Returns the reply link.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $reply_id
 * @return string
 */
function mb_get_reply_link($reply_id = 0)
{
}
/**
 * Displays the reply date.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $reply_id,
 * @param  string  $format
 * @return void
 */
function mb_reply_date($reply_id = 0, $format = '')
{
}
/**
 * Returns the reply date.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $reply_id,
 * @param  string  $format
 * @return void
 */
function mb_get_reply_date($reply_id = 0, $format = '')
{
}
/**
 * Displays the reply time.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $reply_id,
 * @param  string  $format
 * @return void
 */
function mb_reply_time($reply_id = 0, $format = '')
{
}
/**
 * Returns the reply time.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $reply_id,
 * @param  string  $format
 * @return void
 */
function mb_get_reply_time($reply_id = 0, $format = '')
{
}
/**
 * Outputs the reply natural time (e.g., 1 month ago, 5 minutes ago, etc.)
 *
 * @since  1.0.0
 * @access public
 * @param  int     $reply_id
 * @return void
 */
function mb_reply_natural_time($reply_id = 0)
{
}
/**
 * Outputs the reply natural time (e.g., 1 month ago, 5 minutes ago, etc.)
 *
 * @since  1.0.0
 * @access public
 * @param  int     $reply_id
 * @return string
 */
function mb_get_reply_natural_time($reply_id = 0)
{
}
/* ====== Reply Author ====== */
/**
 * Displays the reply author ID.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $reply_id
 * @return void
 */
function mb_reply_author_id($reply_id = 0)
{
}
/**
 * Returns the reply author ID.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $reply_id
 * @return int
 */
function mb_get_reply_author_id($reply_id = 0)
{
}
/**
 * Displays the reply author display name.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $reply_id
 * @return void
 */
function mb_reply_author($reply_id = 0)
{
}
/**
 * Returns the reply author display name.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $reply_id
 * @return string
 */
function mb_get_reply_author($reply_id = 0)
{
}
/**
 * Displays the reply author URL.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $reply_id
 * @return void
 */
function mb_reply_author_url($reply_id = 0)
{
}
/**
 * Returns the reply author URL.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $reply_id
 * @return string
 */
function mb_get_reply_author_url($reply_id = 0)
{
}
/**
 * Displays the reply author link.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $reply_id
 * @return void
 */
function mb_reply_author_link($reply_id = 0)
{
}
/**
 * Displays the reply author link.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $reply_id
 * @return string
 */
function mb_get_reply_author_link($reply_id = 0)
{
}
/* ====== Reply Forum ====== */
/**
 * Displays the reply's forum ID.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $reply_id
 * @return void
 */
function mb_reply_forum_id($reply_id = 0)
{
}
/**
 * Returns the reply's forum ID.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $reply_id
 * @return int
 */
function mb_get_reply_forum_id($reply_id = 0)
{
}
/* ====== Reply Topic ====== */
/**
 * Displays the reply's topic ID.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $reply_id
 * @return void
 */
function mb_reply_topic_id($reply_id = 0)
{
}
/**
 * Returns the reply's topic ID.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $reply_id
 * @return int
 */
function mb_get_reply_topic_id($reply_id = 0)
{
}
/**
 * Outputs pagination links for single topic pages (the replies are paginated).
 *
 * @since  1.0.0
 * @access public
 * @param  array  $args
 * @return string
 */
function mb_loop_reply_pagination($args = array())
{
}
/* ====== Reply Form. ====== */
/**
 * Topic content editor.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function mb_reply_editor()
{
}
/**
 * Returns the role ID/slug for the forum keymaster role.
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
function mb_get_keymaster_role()
{
}
/**
 * Returns the role ID/slug for the forum moderator role.
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
function mb_get_moderator_role()
{
}
/**
 * Returns the role ID/slug for the forum participant role.
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
function mb_get_participant_role()
{
}
/**
 * Returns the role ID/slug for the forum spectator role.
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
function mb_get_spectator_role()
{
}
/**
 * Returns the role ID/slug for the forum banned role.
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
function mb_get_banned_role()
{
}
/**
 * Returns the capabilities for the keymaster forum role.
 *
 * @since  1.0.0
 * @access public
 * @return array
 */
function mb_get_keymaster_role_caps()
{
}
/**
 * Returns the capabilities for the moderator forum role.
 *
 * @since  1.0.0
 * @access public
 * @return array
 */
function mb_get_moderator_role_caps()
{
}
/**
 * Returns the capabilities for the participant forum role.
 *
 * @since  1.0.0
 * @access public
 * @return array
 */
function mb_get_participant_role_caps()
{
}
/**
 * Returns the capabilities for the spectator forum role.
 *
 * @since  1.0.0
 * @access public
 * @return array
 */
function mb_get_spectator_role_caps()
{
}
/**
 * Returns the capabilities for the banned forum role. Note that we're explicitly denying all
 * forum-related capabilities for this role.  This means that any user with this role, regardless of
 * any other roles they have, will be denied forum permissions.
 *
 * @since  1.0.0
 * @access public
 * @return array
 */
function mb_get_banned_role_caps()
{
}
/**
 * Registers the plugin's default user roles.
 *
 * @since  1.0.0
 * @access public
 * @global object $wpdb
 * @return void
 */
function mb_register_roles()
{
}
/**
 * Merges user roles with WordPress.  Typically, WordPress roles are saved to the database.  We're going
 * to bypass this and hook our roles into other roles when the page is loaded.  This allows us to keep the
 * roles dynamic without having to save them to the DB.
 *
 * @since  1.0.0
 * @access public
 * @global array  $wp_roles
 * @return void
 */
function mb_merge_roles()
{
}
/**
 * Filters the user roles when WP pulls them from the database.
 *
 * @since  1.0.0
 * @access public
 * @param  array  $roles
 * @return array
 */
function mb_option_user_roles_filter($roles)
{
}
/**
 * Register a custom user forum role.
 *
 * @since  1.0.0
 * @access public
 * @param  string  $role
 * @param  array   $args {
 *     Array of arguments for registering a user forum role.
 *
 *     @type  array  $capabilities  Key/value pairs of capabilities.  The key should be the capability
 *                                  and the value should `TRUE` to explicity grant a cap or `FALSE` to
 *                                  explicitly deny a cap.
 *     @type  array  $labels        Array of internationalized labels for this role.
 *     @type  string $description   Description of the role.
 * }
 * @return void
 */
function mb_register_role($role, $args = array())
{
}
/**
 * Unregister a registered forum role.
 *
 * @since  1.0.0
 * @access public
 * @param  string  $role
 * @return bool
 */
function mb_unregister_role($role)
{
}
/**
 * Return a role object.
 *
 * @since  1.0.0
 * @access public
 * @param  string  $role
 * @return object
 */
function mb_get_role_object($role = '')
{
}
/**
 * Returns an array of the plugin's dynamic roles.  These roles are "dynamic" because they are not saved in
 * the database.  Instead, they're added early in the page load.
 *
 * Developers can overwrite the default roles with custom ones. If doing so, it is recommended to use the
 * API (e.g., `mb_register_role()`, `mb_unregister_role()`).
 *
 * @since  1.0.0
 * @access public
 * @return array
 */
function mb_get_dynamic_roles()
{
}
/**
 * Adds a user's forum role.  If no role is given, the role will be set to the default mapping.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $user_id
 * @param  string  $role
 */
function mb_add_user_role($user_id, $role = '')
{
}
/**
 * Sets a user's forum role.  If no role is given, the role will be set to the default mapping.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $user_id
 * @param  string  $role
 */
function mb_set_user_role($user_id, $role = '')
{
}
/**
 * Removes a user's forum role.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $user_id
 * @param  string  $role
 */
function mb_remove_user_role($user_id, $role)
{
}
/**
 * Gets a user's forum role.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function mb_get_user_role($user_id = 0)
{
}
/**
 * Conditional check to see if the user is a keymaster (i.e., forum admin).
 *
 * @since  1.0.0
 * @access public
 * @param  int     $user_id
 * @return bool
 */
function mb_is_user_keymaster($user_id)
{
}
/**
 * Displays the translatable forum role name for a specific user.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $user_id
 * @return void
 */
function mb_user_role_name($user_id = 0)
{
}
/**
 * Returns the translatable forum role name for a specific user.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $user_id
 * @return string
 */
function mb_get_user_role_name($user_id = 0)
{
}
/**
 * Displays the name/label for a specific role.
 *
 * @since  1.0.0
 * @access public
 * @param  string  $role
 * @return void
 */
function mb_role_name($role = '')
{
}
/**
 * Returns the name/label for a specific role.
 *
 * @since  1.0.0
 * @access public
 * @param  string  $role
 * @return string
 */
function mb_get_role_name($role = '')
{
}
/**
 * Displays the URL (/board/users/roles/rolename) for a specific role.
 *
 * @since  1.0.0
 * @access public
 * @param  string  $role
 * @return void
 */
function mb_role_url($role = '')
{
}
/**
 * Returns the URL (/board/users/roles/rolename) for a specific role.  Note that we remove the `mb_` prefix
 * for prettier URLs.  Only forum-specific roles get archive pages.
 *
 * @since  1.0.0
 * @access public
 * @param  string  $role
 * @return string
 */
function mb_get_role_url($role = '')
{
}
/**
 * Outputs the user role archive link.
 *
 * @since  1.0.0
 * @access public
 * @param  string  $role
 * @return void
 */
function mb_role_link($role = '')
{
}
/**
 * Returns the user role archive link.
 *
 * @since  1.0.0
 * @access public
 * @param  string  $role
 * @return void
 */
function mb_get_role_link($role = '')
{
}
/**
 * Maps default WordPress roles to the plugin's roles.  This is the default used when a user doesn't yet
 * have a forum role.  Developers can add custom-created roles to the map using a filter on the
 * `mb_get_role_map` hook.  Roles are mapped in key/value pairs.  The key is the WP or custom role.  The
 * value is the forum role to map it to.
 *
 * @since  1.0.0
 * @access public
 * @return array
 */
function mb_get_role_map()
{
}
/**
 * Makes sure the current user has a forum role.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function mb_set_current_user_role()
{
}
/**
 * Removes the plugin's dynamic roles from the editable roles list.
 *
 * @since  1.0.0
 * @access public
 * @param  array   $roles
 * @return array
 */
function mb_editable_roles_filter($roles)
{
}
/**
 * Action on the `set_user_role` hook that makes sure that a user's forum role doesn't get wiped
 * when WP or another plugin calls `set_user_role()` instead of `add_user_role()`, which is
 * often the most appropriate function to call.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $user_id
 * @param  string  $role
 * @param  array   $old_roles
 * @return void
 */
function mb_overwrite_set_user_role($user_id, $role, $old_roles)
{
}
/**
 * `<select>` dropdown for displaying the forum roles in a form.
 *
 * @since  1.0.0
 * @access public
 * @param  array  $args
 * @return string|void
 */
function mb_dropdown_roles($args = array())
{
}
/**
 * Template functions for role-related functionality.
 *
 * @package    MessageBoard
 * @subpackage Includes
 * @author     Justin Tadlock <justin@justintadlock.com>
 * @copyright  Copyright (c) 2014, Justin Tadlock
 * @link       https://github.com/justintadlock/message-board
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */
/* ====== Role Query ====== */
/**
 * Creates a new role query.  This function is modeled after the WordPress posts query so that theme 
 * authors have an easier time grasping it.  Normally, you would use a `foreach` loop and so on, but 
 * because we're modeling this after the posts query, you'd use a while loop.  This also allows us to 
 * set up the role of the current role object in the loop behind the scenes so that anything using 
 * `mb_get_role()` will automatically work.
 *
 * @since  1.0.0
 * @access public
 * @return bool
 */
function mb_role_query()
{
}
/**
 * Sets up the role data.  Basically, this function bumps the role in the `mb_role_query()` loop to the 
 * next role.  It also sets the current role in the loop so that `mb_get_role()` will return the 
 * correct role.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function mb_the_role()
{
}
/* ====== Role (role "ID") ====== */
function mb_role($role = '')
{
}
function mb_get_role($role = '')
{
}
/* ====== Conditionals ====== */
function mb_is_role_archive()
{
}
function mb_is_single_role($role = '')
{
}
/* ====== Title ====== */
function mb_single_role_title()
{
}
function mb_get_single_role_title()
{
}
function mb_role_archive_title()
{
}
function mb_get_role_archive_title()
{
}
/* ====== Links ====== */
function mb_role_archive_url()
{
}
function mb_get_role_archive_url()
{
}
function mb_role_archive_link()
{
}
function mb_get_role_archive_link()
{
}
/* ====== Content ====== */
function mb_role_description($role = '')
{
}
function mb_get_role_description($role = '')
{
}
/* ====== Counts ====== */
function mb_role_user_count($role = '')
{
}
function mb_get_role_user_count($role = '')
{
}
/* ====== Pagination ====== */
/**
 * Pagination for the role loop.
 *
 * @since  1.0.0
 * @access public
 * @param  array  $args
 * @return string|void
 */
function mb_loop_role_pagination($args = array())
{
}
/**
 * Search template functions for theme authors.
 *
 * @package    MessageBoard
 * @subpackage Includes
 * @author     Justin Tadlock <justin@justintadlock.com>
 * @copyright  Copyright (c) 2014, Justin Tadlock
 * @link       https://github.com/justintadlock/message-board
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */
/**
 * Checks if viewing the search (advanced) page.
 *
 * @since  1.0.0
 * @access public
 * @return bool
 */
function mb_is_search()
{
}
/**
 * Checks if viewing the forum search page.
 *
 * @since  1.0.0
 * @access public
 * @return bool
 */
function mb_is_search_results()
{
}
function mb_get_search_mode()
{
}
function mb_is_advanced_search()
{
}
function mb_is_basic_search()
{
}
function mb_search_url()
{
}
function mb_get_search_url()
{
}
/**
 *
 * @since  1.0.0
 * @access public
 * @return bool
 */
function mb_search_query()
{
}
/**
 * Sets up the topic data for the current topic in The Loop.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function mb_the_search_result()
{
}
/**
 * Outputs the search page title.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function mb_search_page_title()
{
}
/**
 * Returns the search page title.
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
function mb_get_search_page_title()
{
}
/**
 * Outputs pagination links for search results.
 *
 * @since  1.0.0
 * @access public
 * @param  array  $args
 * @return string
 */
function mb_loop_search_pagination($args = array())
{
}
/**
 * Returns an array of capabilities for the "topic" post type.
 *
 * @since  1.0.0
 * @access public
 * @return array
 */
function mb_get_topic_capabilities()
{
}
/**
 * Overwrites capabilities in certain scenarios.
 *
 * @since  1.0.0
 * @access public
 * @param  array   $caps
 * @param  string  $cap
 * @param  int     $user_id
 * @param  array   $args
 * @return array
 */
function mb_topic_map_meta_cap($caps, $cap, $user_id, $args)
{
}
/**
 * Inserts a new topic.  This is a wrapper for the `wp_insert_post()` function and should be used in 
 * its place where possible.
 *
 * @since  1.0.0
 * @access public
 * @param  array  $args
 * @return int|WP_Error
 */
function mb_insert_topic($args = array())
{
}
/**
 * Function for inserting topic data when it's first published.
 *
 * @since  1.0.0
 * @access public
 * @param  object  $post
 * @return void
 */
function mb_insert_topic_data($post)
{
}
/**
 * Attempt to always make sure that topics have a post parent.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $post_parent
 * @param  int     $post_id
 * @param  array   $new_postarr
 * @return int
 */
function mb_insert_topic_post_parent($post_parent, $post_id, $new_postarr)
{
}
/**
 * Resets the topic's latest data.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $topic_id
 * @return void
 */
function mb_reset_topic_latest($topic_id)
{
}
/**
 * Resets the topic reply count.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $topic_id
 * @global object $wpdb
 * @return array
 */
function mb_reset_topic_reply_count($topic_id)
{
}
/**
 * Resets the topic voices.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $topic_id
 * @return array
 */
function mb_reset_topic_voices($topic_id)
{
}
/**
 * Resets topic data.
 *
 * @since  1.0.0
 * @access public
 * @param  object|int  $post
 * @return array
 */
function mb_reset_topic_data($post, $reset_latest = \false)
{
}
function mb_topic_post_updated($post_id, $post_after, $post_before)
{
}
/**
 * Sets the `menu_order` for a topic.  This is how we save the topic position.  The position should 
 * either be based on the datetime epoch of the topic's last reply if there is one or of the topic 
 * itself if there are no replies.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $topic_id
 * @param  int     $position
 * @return bool
 */
function mb_set_topic_position($topic_id, $position)
{
}
/**
 * Sets the topic last activity datetime.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $topic_id
 * @param  string  $datetime
 * @return bool
 */
function mb_set_topic_activity_datetime($topic_id, $datetime)
{
}
/**
 * Sets the topic last activity datetime epoch.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $topic_id
 * @param  int     $epoch
 * @return bool
 */
function mb_set_topic_activity_epoch($topic_id, $epoch)
{
}
/**
 * Sets the topic voices.
 *
 * @since  1.0.0
 * @access public
 * @param  int           $topic_id
 * @param  array|string  $voices
 * @return bool
 */
function mb_set_topic_voices($topic_id, $voices)
{
}
/**
 * Sets the topic voice count.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $topic_id
 * @param  int     $count
 * @return bool
 */
function mb_set_topic_voice_count($topic_id, $count)
{
}
/**
 * Sets the topic reply count.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $topic_id
 * @param  int     $count
 * @return bool
 */
function mb_set_topic_reply_count($topic_id, $count)
{
}
/**
 * Sets the topic last reply ID.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $topic_id
 * @param  int     $reply_id
 * @return bool
 */
function mb_set_topic_last_reply_id($topic_id, $reply_id)
{
}
/**
 * Adds hidden topic form fields.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function mb_topic_form_fields()
{
}
/**
 * Filter on the post type link for topics. If the user doesn't have permission to view the topic, 
 * return an empty string.
 *
 * @since  1.0.0
 * @access public
 * @param  string  $link
 * @param  object  $post
 * @return string
 */
function mb_topic_post_type_link($link, $post)
{
}
/**
 * Adds the placeholder text to the editor textarea.
 *
 * @since  1.0.0
 * @access public
 * @param  string  $html
 * @return string
 */
function mb_topic_the_editor_filter($html)
{
}
/**
 * Topic template functions for theme authors.
 *
 * @package    MessageBoard
 * @subpackage Includes
 * @author     Justin Tadlock <justin@justintadlock.com>
 * @copyright  Copyright (c) 2014, Justin Tadlock
 * @link       https://github.com/justintadlock/message-board
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */
/**
 * Creates a new topic query and checks if there are any topics found.  Note that we ue the main
 * WordPress query if viewing the topic archive or a single topic.  This function is a wrapper
 * function for the standard WP `have_posts()`, but this function should be used instead because
 * it must also create a query of its own under some circumstances.
 *
 * @since  1.0.0
 * @access public
 * @return bool
 */
function mb_topic_query()
{
}
/**
 * Sets up the topic data for the current topic in The Loop.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function mb_the_topic()
{
}
/* ====== Topic ID ====== */
/**
 * Displays the topic ID.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $topic_id
 * @return void
 */
function mb_topic_id($topic_id = 0)
{
}
/**
 * Returns the topic ID.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $topic_id
 * @return int
 */
function mb_get_topic_id($topic_id = 0)
{
}
/* ====== Conditionals ====== */
/**
 * Checks if the post is a topic.  This is a wrapper for `get_post_type()`.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $topic_id
 * @return bool
 */
function mb_is_topic($post_id = 0)
{
}
function mb_is_single_topic($topic = '')
{
}
function mb_is_topic_archive()
{
}
/**
 * Conditional check to see if a topic allows new replies to be created.
 *
 * @since  1.0.0
 * @access public
 * @param  int    $topic
 * @return bool
 */
function mb_topic_allows_replies($topic_id = 0)
{
}
/* ====== Lead Topic ====== */
/**
 * Whether to show the topic when viewing a single topic page.  By default, the topic is shown
 * on page #1, but it's not shown on subsequent pages if the topic is paginated.
 *
 * @since  1.0.0
 * @access public
 * @return bool
 */
function mb_show_lead_topic()
{
}
/* ====== Topic Edit ====== */
function mb_topic_edit_url($topic_id = 0)
{
}
function mb_get_topic_edit_url($topic_id = 0)
{
}
function mb_topic_edit_link($topic_id = 0)
{
}
function mb_get_topic_edit_link($topic_id = 0)
{
}
/* ====== Topic Status ====== */
function mb_topic_status($topic_id = 0)
{
}
function mb_get_topic_status($topic_id = 0)
{
}
/**
 * Whether the topic's post status is a "public" post status.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $topic_id
 * @return bool
 */
function mb_is_topic_public($topic_id = 0)
{
}
/**
 * Conditional check to see whether a topic has the "open" post status.
 *
 * @since  1.0.0
 * @access public
 * @return bool
 */
function mb_is_topic_open($topic_id = 0)
{
}
/**
 * Conditional check to see whether a topic has the "close" post status.
 *
 * @since  1.0.0
 * @access public
 * @return bool
 */
function mb_is_topic_closed($topic_id = 0)
{
}
/**
 * Conditional check to see whether a topic has the "private" post status.
 *
 * @since  1.0.0
 * @access public
 * @return bool
 */
function mb_is_topic_private($topic_id = 0)
{
}
/**
 * Conditional check to see whether a topic has the "hidden" post status.
 *
 * @since  1.0.0
 * @access public
 * @return bool
 */
function mb_is_topic_hidden($topic_id = 0)
{
}
/**
 * Conditional check to see whether a topic has the "spam" post status.
 *
 * @since  1.0.0
 * @access public
 * @return bool
 */
function mb_is_topic_spam($topic_id = 0)
{
}
/**
 * Conditional check to see whether a topic has the "trash" post status.
 *
 * @since  1.0.0
 * @access public
 * @return bool
 */
function mb_is_topic_trash($topic_id = 0)
{
}
/**
 * Conditional check to see whether a topic has the "orphan" post status.
 *
 * @since  1.0.0
 * @access public
 * @return bool
 */
function mb_is_topic_orphan($topic_id = 0)
{
}
/**
 * Conditional check to see if a topic status allows new replies to be created.
 *
 * @since  1.0.0
 * @access public
 * @param  string  $status
 * @return bool
 */
function mb_topic_status_allows_replies($status)
{
}
function mb_topic_toggle_open_url($topic_id = 0)
{
}
function mb_get_topic_toggle_open_url($topic_id = 0)
{
}
function mb_topic_toggle_open_link($topic_id = 0)
{
}
function mb_get_topic_toggle_open_link($topic_id = 0)
{
}
function mb_topic_toggle_close_url($topic_id = 0)
{
}
function mb_get_topic_toggle_close_url($topic_id = 0)
{
}
function mb_topic_toggle_close_link($topic_id = 0)
{
}
function mb_get_topic_toggle_close_link($topic_id = 0)
{
}
function mb_topic_toggle_spam_url($topic_id = 0)
{
}
function mb_get_topic_toggle_spam_url($topic_id = 0)
{
}
function mb_topic_toggle_spam_link($topic_id = 0)
{
}
function mb_get_topic_toggle_spam_link($topic_id = 0)
{
}
function mb_topic_toggle_trash_url($topic_id = 0)
{
}
function mb_get_topic_toggle_trash_url($topic_id = 0)
{
}
function mb_topic_toggle_trash_link($topic_id = 0)
{
}
function mb_get_topic_toggle_trash_link($topic_id = 0)
{
}
/* ====== Topic Labels ====== */
function mb_topic_label($label)
{
}
function mb_get_topic_label($label)
{
}
/**
 * Outputs a topics labels.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function mb_topic_states($topic_id = 0)
{
}
/**
 * Returns a topic's labels.
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
function mb_get_topic_states($topic_id = 0)
{
}
/* ====== Topic Content ====== */
/**
 * Displays the topic content.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $topic_id
 * @return void
 */
function mb_topic_content($topic_id = 0)
{
}
/**
 * Returns the topic content.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $topic_id
 * @return string
 */
function mb_get_topic_content($topic_id = 0, $mode = 'display')
{
}
/* ====== Topic Title ====== */
/**
 * Displays the single topic title.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function mb_single_topic_title()
{
}
function mb_get_single_topic_title()
{
}
function mb_topic_archive_title()
{
}
function mb_get_topic_archive_title()
{
}
/**
 * Displays the topic title.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $topic_id
 * @return void
 */
function mb_topic_title($topic_id = 0)
{
}
/**
 * Returns the topic title.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $topic_id
 * @return string
 */
function mb_get_topic_title($topic_id = 0)
{
}
/* ====== Topic URL ====== */
/**
 * Displays the topic URL.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $topic_id
 * @return void
 */
function mb_topic_url($topic_id = 0)
{
}
/**
 * Returns the topic URL.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $topic_id
 * @return string
 */
function mb_get_topic_url($topic_id = 0)
{
}
/**
 * Displays the topic link.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $topic_id
 * @return void
 */
function mb_topic_link($topic_id = 0)
{
}
/**
 * Returns the topic link.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $topic_id
 * @return string
 */
function mb_get_topic_link($topic_id = 0)
{
}
/**
 * Displays the topic date.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $topic_id,
 * @param  string  $format
 * @return void
 */
function mb_topic_date($topic_id = 0, $format = '')
{
}
/**
 * Returns the topic date.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $topic_id,
 * @param  string  $format
 * @return void
 */
function mb_get_topic_date($topic_id = 0, $format = '')
{
}
/**
 * Displays the topic time.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $topic_id,
 * @param  string  $format
 * @return void
 */
function mb_topic_time($topic_id = 0, $format = '')
{
}
/**
 * Returns the topic time.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $topic_id,
 * @param  string  $format
 * @return void
 */
function mb_get_topic_time($topic_id = 0, $format = '')
{
}
/**
 * Outputs the topic natural time (e.g., 1 month ago, 5 minutes ago, etc.)
 *
 * @since  1.0.0
 * @access public
 * @param  int     $topic_id
 * @return void
 */
function mb_topic_natural_time($topic_id = 0)
{
}
/**
 * Outputs the topic natural time (e.g., 1 month ago, 5 minutes ago, etc.)
 *
 * @since  1.0.0
 * @access public
 * @param  int     $topic_id
 * @return string
 */
function mb_get_topic_natural_time($topic_id = 0)
{
}
/* ====== Topic Author ====== */
/**
 * Displays the topic author ID.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $topic_id
 * @return void
 */
function mb_topic_author_id($topic_id = 0)
{
}
/**
 * Returns the topic autor ID.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $topic_id
 * @return int
 */
function mb_get_topic_author_id($topic_id = 0)
{
}
/**
 * Displays the topic author.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $topic_id
 * @return void
 */
function mb_topic_author($topic_id = 0)
{
}
/**
 * Returns the topic author.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $topic_id
 * @return string
 */
function mb_get_topic_author($topic_id = 0)
{
}
/**
 * Displays the topic author profile URL.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $topic_id
 * @return void
 */
function mb_topic_author_profile_url($topic_id = 0)
{
}
/**
 * Returns the topic author profile URL.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $topic_id
 * @return string
 */
function mb_get_topic_author_profile_url($topic_id = 0)
{
}
/**
 * Displays the topic author profile link.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $topic_id
 * @return void
 */
function mb_topic_author_profile_link($topic_id = 0)
{
}
/**
 * Returns the topic author profile link.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $topic_id
 * @return string
 */
function mb_get_topic_author_profile_link($topic_id = 0)
{
}
/* ====== Topic Forum ====== */
function mb_get_topic_forum_id($topic_id = 0)
{
}
function mb_topic_forum_link($topic_id = 0)
{
}
function mb_get_topic_forum_link($topic_id = 0)
{
}
/* ====== Last Activity ====== */
/**
 * Prints the topic last activity time.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function mb_topic_last_active_time($topic_id = 0)
{
}
/**
 * Returns the topic last activity time.
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
function mb_get_topic_last_active_time($topic_id = 0)
{
}
/* ====== Last Reply ID ====== */
function mb_topic_last_reply_id($topic_id = 0)
{
}
/**
 * Returns the last topic reply ID.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $topic_id
 * @retrn  int
 */
function mb_get_topic_last_reply_id($topic_id = 0)
{
}
/* ====== Last Post Author ====== */
/**
 * Displays the last post author for a topic.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $topic_id
 * @return void
 */
function mb_topic_last_poster($topic_id = 0)
{
}
/**
 * Returns the last post author for a topic.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $topic_id
 * @return string
 */
function mb_get_topic_last_poster($topic_id = 0)
{
}
/* ====== Last Post URL ====== */
/**
 * Displays the last post URL for a topic.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $topic_id
 * @return void
 */
function mb_topic_last_post_url($topic_id = 0)
{
}
/**
 * Returns a topic's last post URL.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $topic_id
 * @return string
 */
function mb_get_topic_last_post_url($topic_id = 0)
{
}
/* ====== Post/Reply Count ====== */
/**
 * Displays the topic reply count.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $topic_id
 * @return void
 */
function mb_topic_reply_count($topic_id = 0)
{
}
/**
 * Returns the topic reply count.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $topic_id
 * @return int
 */
function mb_get_topic_reply_count($topic_id = 0)
{
}
/**
 * Displays the topic post count (topic + reply count).
 *
 * @since  1.0.0
 * @access public
 * @param  int     $topic_id
 * @return void
 */
function mb_topic_post_count($topic_id = 0)
{
}
/**
 * Returns the topic post count (topic + reply count).
 *
 * @since  1.0.0
 * @access public
 * @param  int     $topic_id
 * @return string
 */
function mb_get_topic_post_count($topic_id = 0)
{
}
/* ====== Topic Voices ====== */
/**
 * Displays the topic voice count.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $topic_id
 * @return void
 */
function mb_topic_voice_count($topic_id = 0)
{
}
/**
 * Retuurns the topic voice count.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $topic_id
 * @return int
 */
function mb_get_topic_voice_count($topic_id = 0)
{
}
/**
 * Returns an array of user IDs (topic voices).
 *
 * @since  1.0.0
 * @access public
 * @param  int     $topic_id
 * @return array
 */
function mb_get_topic_voices($topic_id = 0)
{
}
/* ====== Pagination ====== */
/**
 * Checks if viewing a paginated topic. Only for use on single topic pages.
 *
 * @since  1.0.0
 * @access public
 * @return bool
 */
function mb_is_topic_paged()
{
}
/**
 * Outputs pagination links for single topic pages (the replies are paginated).
 *
 * @since  1.0.0
 * @access public
 * @param  array  $args
 * @return string
 */
function mb_loop_topic_pagination($args = array())
{
}
/**
 * Outputs pagination links for single topic pages (the replies are paginated).
 *
 * @since  1.0.0
 * @access public
 * @param  array  $args
 * @return string
 */
function mb_single_topic_pagination($args = array())
{
}
/* ====== Topic Form ====== */
/**
 * Outputs the URL to the new topic form.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function mb_topic_form_url()
{
}
/**
 * Returns the URL to the new topic form.
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
function mb_get_topic_form_url()
{
}
/**
 * Outputs a link to the new topic form.
 *
 * @since  1.0.0
 * @access public
 * @param  array  $args
 * @return void
 */
function mb_topic_form_link($args = array())
{
}
/**
 * Returns a link to the new topic form.
 *
 * @since  1.0.0
 * @access public
 * @param  array  $args
 * @return string
 */
function mb_get_topic_form_link($args = array())
{
}
/**
 * Displays the new topic form.
 *
 * @todo Set up system of hooks.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function mb_topic_form()
{
}
/**
 * Displays the edit topic form.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function mb_topic_edit_form()
{
}
/**
 * Topic content editor.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function mb_topic_editor()
{
}
/* ====== Topic Subscriptions ====== */
/**
 * Displays the topic subscribe URL.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $topic_id
 * @return string
 */
function mb_topic_subscribe_url($topic_id = 0)
{
}
/**
 * Returns the topic subscribe URL.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $topic_id
 * @return string
 */
function mb_get_topic_subscribe_url($topic_id = 0)
{
}
/**
 * Displays the topic un/subscribe link.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $topic_id
 * @return void
 */
function mb_topic_subscribe_link($topic_id = 0)
{
}
/**
 * Returns the topic un/subscribe link.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $topic_id
 * @return string
 */
function mb_get_topic_subscribe_link($topic_id = 0)
{
}
/* ====== Topic Bookmarks ====== */
/**
 * Displays the topic bookmark URL.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $topic_id
 * @return void
 */
function mb_topic_bookmark_url($topic_id = 0)
{
}
/**
 * Returns the topic bookmark URL.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $topic_id
 * @return string
 */
function mb_get_topic_bookmark_url($topic_id = 0)
{
}
/**
 * Displays the topic un/bookmark link.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $topic_id
 * @return void
 */
function mb_topic_bookmark_link($topic_id = 0)
{
}
/**
 * Returns the topic un/bookmark link.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $topic_id
 * @return string
 */
function mb_get_topic_bookmark_link($topic_id = 0)
{
}
/**
 * Returns the "normal" topic type.
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
function mb_get_normal_topic_type()
{
}
/**
 * Returns the "super" topic type.
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
function mb_get_super_topic_type()
{
}
/**
 * Returns the "sticky" topic type.
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
function mb_get_sticky_topic_type()
{
}
/**
 * Registers custom topic types.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function mb_register_topic_types()
{
}
/**
 * Registers a new topic type.
 *
 * @since  1.0.0
 * @access public
 * @param  string  $name
 * @param  array   $args
 * @return void
 */
function mb_register_topic_type($name, $args = array())
{
}
/**
 * Unregister a topic type.
 *
 * @since  1.0.0
 * @access public
 * @param  string  $name
 * @return void
 */
function mb_unregister_topic_type($name)
{
}
/**
 * Check if a topic type is registered.
 *
 * @since  1.0.0
 * @access public
 * @param  string  $name
 * @return bool
 */
function mb_topic_type_exists($name)
{
}
/**
 * Returns an array of the registered topic type objects.
 *
 * @since  1.0.0
 * @access public
 * @return array
 */
function mb_get_topic_type_objects()
{
}
/**
 * Returns a single topic type object.
 *
 * @since  1.0.0
 * @access public
 * @param  string  $name
 * @return object|bool
 */
function mb_get_topic_type_object($name)
{
}
/**
 * Conditional check to see if a topic has the "normal" type.
 *
 * @since  1.0.0
 * @access public
 * @param  int    $topic_id
 * @return bool
 */
function mb_is_topic_normal($topic_id = 0)
{
}
/**
 * Conditional check to see if a topic has the "super" type.
 *
 * @since  1.0.0
 * @access public
 * @param  int    $topic_id
 * @return bool
 */
function mb_is_topic_super($topic_id = 0)
{
}
/**
 * Conditional check to see if a topic has the "sticky" type.
 *
 * @since  1.0.0
 * @access public
 * @param  int    $topic_id
 * @return bool
 */
function mb_is_topic_sticky($topic_id = 0)
{
}
/**
 * Displays the topic type for a specific topic.
 *
 * @since  1.0.0
 * @access public
 * @param  int    $topic_id
 * @return void
 */
function mb_topic_type($topic_id = 0)
{
}
/**
 * Returns the topic type for a specific topic.
 *
 * @since  1.0.0
 * @access public
 * @param  int    $topic_id
 * @return string
 */
function mb_get_topic_type($topic_id = 0)
{
}
/**
 * Sets the topic type for a specific topic.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $topic_id
 * @param  string  $topic_type
 * @return bool
 */
function mb_set_topic_type($topic_id, $type)
{
}
/**
 * Conditional check to see if a topic type allows new replies to be posted.
 *
 * @since  1.0.0
 * @access public
 * @param  string  $type
 * @return bool
 */
function mb_topic_type_allows_replies($type)
{
}
/**
 * Adds a topic to the list of super sticky topics.
 *
 * @since  1.0.0
 * @access public
 * @param  int    $topic_id
 * @return bool
 */
function mb_add_super_topic($topic_id)
{
}
/**
 * Removes a topic from the list of super sticky topics.
 *
 * @since  1.0.0
 * @access public
 * @param  int    $topic_id
 * @return bool
 */
function mb_remove_super_topic($topic_id)
{
}
/**
 * Adds a topic to the list of sticky topics.
 *
 * @since  1.0.0
 * @access public
 * @param  int    $topic_id
 * @return bool
 */
function mb_add_sticky_topic($topic_id)
{
}
/**
 * Removes a topic from the list of sticky topics.
 *
 * @since  1.0.0
 * @access public
 * @param  int    $topic_id
 * @return bool
 */
function mb_remove_sticky_topic($topic_id)
{
}
/**
 * Creates a dropdown `<select>` for selecting the topic type in forms.
 *
 * @since  1.0.0
 * @access public
 * @param  array  $args
 * @return string
 */
function mb_dropdown_topic_type($args = array())
{
}
/**
 * Bookmarks API.  This allows users to bookmark/favorite topics.
 *
 * @package    MessageBoard
 * @subpackage Includes
 * @author     Justin Tadlock <justin@justintadlock.com>
 * @copyright  Copyright (c) 2014, Justin Tadlock
 * @link       https://github.com/justintadlock/message-board
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */
/* ====== Topic Bookmarks ====== */
function mb_add_user_topic_bookmark($user_id, $topic_id)
{
}
function mb_remove_user_topic_bookmark($user_id, $topic_id)
{
}
function mb_get_user_topic_bookmarks($user_id)
{
}
/**
 * Checks if the user is bookmarkd to the topic.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $user_id
 * @param  int     $topic_id
 * @return bool
 */
function mb_is_topic_user_bookmark($user_id = 0, $topic_id = 0)
{
}
/**
 * Get an array of user IDs for users who are bookmarkd to the topic.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $topic_id
 * @return array
 */
function mb_get_topic_bookmarkers($topic_id = 0)
{
}
/**
 * Plugin functions and filters for users.
 *
 * @package    MessageBoard
 * @subpackage Includes
 * @author     Justin Tadlock <justin@justintadlock.com>
 * @copyright  Copyright (c) 2014, Justin Tadlock
 * @link       https://github.com/justintadlock/message-board
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */
function mb_set_user_forum_count($user_id)
{
}
function mb_set_user_topic_count($user_id)
{
}
function mb_set_user_reply_count($user_id)
{
}
/**
 * Subscriptions/Notifications API.  This allows users to subscribe to forums or topics.  Notifications 
 * should be hierarchical.  If a user is subscribed to a topic, the user should receive notifications of 
 * new replies.  If a user is subscribed to a forum, the user should receive notifications of new topics 
 * and replies to those topics.
 *
 * @package    MessageBoard
 * @subpackage Includes
 * @author     Justin Tadlock <justin@justintadlock.com>
 * @copyright  Copyright (c) 2014, Justin Tadlock
 * @link       https://github.com/justintadlock/message-board
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */
/* ====== Forum Subscriptions ====== */
function mb_add_user_forum_subscription($user_id, $forum_id)
{
}
function mb_remove_user_forum_subscription($user_id, $forum_id)
{
}
function mb_get_user_forum_subscriptions($user_id)
{
}
/**
 * Checks if the user is subscribed to the forum.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $user_id
 * @param  int     $forum_id
 * @return bool
 */
function mb_is_user_subscribed_forum($user_id = 0, $forum_id = 0)
{
}
/**
 * Get an array of user IDs for users who are subscribed to the forum.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $forum_id
 * @return array
 */
function mb_get_forum_subscribers($forum_id = 0)
{
}
/* ====== Topic Subscriptions ====== */
function mb_add_user_topic_subscription($user_id, $topic_id)
{
}
function mb_get_user_topic_subscriptions($user_id)
{
}
function mb_remove_user_topic_subscription($user_id, $topic_id)
{
}
/**
 * Checks if the user is subscribed to the topic.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $user_id
 * @param  int     $topic_id
 * @return bool
 */
function mb_is_user_subscribed_topic($user_id = 0, $topic_id = 0)
{
}
/**
 * Get an array of user IDs for users who are subscribed to the topic.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $topic_id
 * @return array
 */
function mb_get_topic_subscribers($topic_id = 0)
{
}
/**
 * Notifies users by email when a new post is published.  By default, notifications are sent to users 
 * who are subscribed to a particular forum or a particular topic.
 *
 * @since  1.0.0
 * @access public
 * @param  object|int  $post
 * @return void
 */
function mb_notify_subscribers($post)
{
}
function mb_notify_forum_subscribers($forum_id, $post)
{
}
function mb_notify_topic_subscribers($topic_id, $post)
{
}
/**
 * Template functions for user-related functionality.
 *
 * @package    MessageBoard
 * @subpackage Includes
 * @author     Justin Tadlock <justin@justintadlock.com>
 * @copyright  Copyright (c) 2014, Justin Tadlock
 * @link       https://github.com/justintadlock/message-board
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */
/* ====== User Query ====== */
/**
 * Creates a new `WP_User` query.  This function is modeled after the WordPress posts query so that theme 
 * authors have an easier time grasping it.  Normally, you would use a `foreach` loop and so on, but 
 * because we're modeling this after the posts query, you'd use a while loop.  This also allows us to 
 * set up the ID of the current user in the loop behind the scenes so that anything using `mb_get_user_id()`
 * will automatically work.
 *
 * @since  1.0.0
 * @access public
 * @return bool
 */
function mb_user_query()
{
}
/**
 * Sets up the user data.  Basically, this function bumps the user in the `mb_user_query()` loop to the 
 * next user.  It also sets the current user ID in the loop so that `mb_get_user_id()` will return the 
 * correct user.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function mb_the_user()
{
}
/* ====== User ID ====== */
/**
 * Displays the ID of the user.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $user_id
 * @return void
 */
function mb_user_id($user_id = 0)
{
}
/**
 * Returns the ID of the user.  The function assumes that you're looking for a user ID within the context 
 * of a user loop or a specific user page.  If not, it will assume you're looking for the currently-logged 
 * in user.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $user_id
 * @return int
 */
function mb_get_user_id($user_id = 0)
{
}
/* ====== Conditionals ====== */
/**
 * Checks if viewing the user archive page.
 *
 * @since  1.0.0
 * @access public
 * @return bool
 */
function mb_is_user_archive()
{
}
/**
 * Checks if viewing a single user page.
 *
 * @since  1.0.0
 * @access public
 * @return bool
 */
function mb_is_single_user()
{
}
/**
 * Conditional check to see if we're viewing a user page.  User pages are sub-pages of the single user 
 * page, which show things like topics, forums, replies, etc.
 *
 * @since  1.0.0
 * @access public
 * @param  string|array  $page
 * @return bool
 */
function mb_is_user_page($page = '')
{
}
function mb_is_user_forums()
{
}
function mb_is_user_topics()
{
}
function mb_is_user_replies()
{
}
function mb_is_user_bookmarks()
{
}
function mb_is_user_forum_subscriptions()
{
}
function mb_is_user_topic_subscriptions()
{
}
/**
 * Checks if viewing an edit user page.
 *
 * @since  1.0.0
 * @access public
 * @return bool
 */
function mb_is_user_edit()
{
}
/**
 * Checks if viewing an edit user page that is the current user's profile.
 *
 * @since  1.0.0
 * @access public
 * @return bool
 */
function mb_is_user_profile_edit()
{
}
/* ====== Titles ====== */
/**
 * Displays the user archive title.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function mb_user_archive_title()
{
}
/**
 * Returns the user archive title.
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
function mb_get_user_archive_title()
{
}
/**
 * Displays a single user title.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function mb_single_user_title()
{
}
/**
 * Returns a single user title.
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
function mb_get_single_user_title()
{
}
/**
 * Displays the user page title.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function mb_user_page_title()
{
}
/**
 * Returns the user page title.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function mb_get_user_page_title()
{
}
function mb_user_forums_title()
{
}
function mb_get_user_forums_title()
{
}
function mb_user_topics_title()
{
}
function mb_get_user_topics_title()
{
}
function mb_user_replies_title()
{
}
function mb_get_user_replies_title()
{
}
function mb_user_bookmarks_title()
{
}
function mb_get_user_bookmarks_title()
{
}
function mb_user_forum_subscriptions_title()
{
}
function mb_get_user_forum_subscriptions_title()
{
}
function mb_user_topic_subscriptions_title()
{
}
function mb_get_user_topic_subscriptions_title()
{
}
/* ====== URLs / Links ====== */
/**
 * Displays the user archive URL.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function mb_user_archive_url()
{
}
/**
 * Returns the user archive URL.
 *
 * @since  1.0.0
 * @access public
 * @global object  $wp_rewrite
 * @return string
 */
function mb_get_user_archive_url()
{
}
/**
 * Displays the user archive link.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function mb_user_archive_link()
{
}
/**
 * Returns the user archive link.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function mb_get_user_archive_link()
{
}
/**
 * Displays a user edit URL.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $user_id
 * @return void
 */
function mb_user_edit_url($user_id = 0)
{
}
/**
 * Returns a user edit URL.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $user_id
 * @return string
 */
function mb_get_user_edit_url($user_id = 0)
{
}
/**
 * Displays a user edit link.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $user_id
 * @return void
 */
function mb_user_edit_link($user_id = 0)
{
}
/**
 * Returns a user edit link.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $user_id
 * @return string
 */
function mb_get_user_edit_link($user_id = 0)
{
}
/**
 * Displays a single user URL.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $user_id
 * @return void
 */
function mb_user_url($user_id = 0)
{
}
/**
 * Returns a single user URL.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $user_id
 * @global object  $wp_rewrite
 * @return string
 */
function mb_get_user_url($user_id = 0)
{
}
/**
 * Displays a single user link.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $user_id
 * @return void
 */
function mb_user_link($user_id = 0)
{
}
/**
 * Returns a single user link.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $user_id
 * @return string
 */
function mb_get_user_link($user_id = 0)
{
}
/**
 * Displays a single user topics URL.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $user_id
 * @return void
 */
function mb_user_topics_url($user_id = 0)
{
}
/**
 * Returns a single user topics URL.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $user_id
 * @global object  $wp_rewrite
 * @return string
 */
function mb_get_user_topics_url($user_id = 0)
{
}
/**
 * Displays a single user topics link.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $user_id
 * @return void
 */
function mb_user_topics_link($user_id = 0)
{
}
/**
 * Returns a single user topics link.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $user_id
 * @return string
 */
function mb_get_user_topics_link($user_id = 0)
{
}
/**
 * Displays a single user forums URL.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $user_id
 * @return void
 */
function mb_user_forums_url($user_id = 0)
{
}
/**
 * Returns a single user forums URL.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $user_id
 * @global object  $wp_rewrite
 * @return void
 */
function mb_get_user_forums_url($user_id = 0)
{
}
/**
 * Displays a single user forums link.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $user_id
 * @return void
 */
function mb_user_forums_link($user_id = 0)
{
}
/**
 * Returns a single user forums link.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $user_id
 * @return string
 */
function mb_get_user_forums_link($user_id = 0)
{
}
/**
 * Displays a single user replies URL.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $user_id
 * @return void
 */
function mb_user_replies_url($user_id = 0)
{
}
/**
 * Returns a single user replies URL.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $user_id
 * @global object  $wp_rewrite
 * @return void
 */
function mb_get_user_replies_url($user_id = 0)
{
}
/**
 * Displays a single user replies link.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $user_id
 * @return void
 */
function mb_user_replies_link($user_id = 0)
{
}
/**
 * Returns a single user replies link.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $user_id
 * @return string
 */
function mb_get_user_replies_link($user_id = 0)
{
}
/**
 * Displays a single user bookmarks URL.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $user_id
 * @return void
 */
function mb_user_bookmarks_url($user_id = 0)
{
}
/**
 * Returns a single user bookmarks URL.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $user_id
 * @global object  $wp_rewrite
 * @return string
 */
function mb_get_user_bookmarks_url($user_id = 0)
{
}
/**
 * Displays a single user bookmarks link.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $user_id
 * @return void
 */
function mb_user_bookmarks_link($user_id = 0)
{
}
/**
 * Returns a single user bookmarks link.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $user_id
 * @return string
 */
function mb_get_user_bookmarks_link($user_id = 0)
{
}
/**
 * Displays a single user topic subscriptions URL.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $user_id
 * @return void
 */
function mb_user_topic_subscriptions_url($user_id = 0)
{
}
/**
 * Returns a single user topic subscriptions URL.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $user_id
 * @global object  $wp_rewrite
 * @return string
 */
function mb_get_user_topic_subscriptions_url($user_id = 0)
{
}
/**
 * Displays a single user topic subscriptions link.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $user_id
 * @return void
 */
function mb_user_topic_subscriptions_link($user_id = 0)
{
}
/**
 * Returns a single user topic subscriptions link.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $user_id
 * @return string
 */
function mb_get_user_topic_subscriptions_link($user_id = 0)
{
}
/**
 * Displays a single user forum subscriptions URL.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $user_id
 * @return void
 */
function mb_user_forum_subscriptions_url($user_id = 0)
{
}
/**
 * Returns a single user forum subscriptions URL.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $user_id
 * @global object  $wp_rewrite
 * @return string
 */
function mb_get_user_forum_subscriptions_url($user_id = 0)
{
}
/**
 * Displays a single user forum subscriptions link.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $user_id
 * @return void
 */
function mb_user_forum_subscriptions_link($user_id = 0)
{
}
/**
 * Returns a single user forum subscriptions link.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $user_id
 * @return string
 */
function mb_get_user_forum_subscriptions_link($user_id = 0)
{
}
/* ====== Counts ====== */
/**
 * Displays a user's forum count.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $user_id
 * @return void
 */
function mb_user_forum_count($user_id = 0)
{
}
/**
 * Returns a user's forum count.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $user_id
 * @return int
 */
function mb_get_user_forum_count($user_id = 0)
{
}
/**
 * Displays a user's topic count.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $user_id
 * @return void
 */
function mb_user_topic_count($user_id = 0)
{
}
/**
 * Returns a user's topic count.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $user_id
 * @return int
 */
function mb_get_user_topic_count($user_id = 0)
{
}
/**
 * Displays a user's reply count.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $user_id
 * @return void
 */
function mb_user_reply_count($user_id = 0)
{
}
/**
 * Returns a user's reply count.
 *
 * @since  1.0.0
 * @access public
 * @param  int     $user_id
 * @return int
 */
function mb_get_user_reply_count($user_id = 0)
{
}
/**
 * Displays a user's post count (topics + replies).
 *
 * @since  1.0.0
 * @access public
 * @param  int     $user_id
 * @return void
 */
function mb_user_post_count($user_id = 0)
{
}
/**
 * Returns a user's post count (topics + replies).
 *
 * @since  1.0.0
 * @access public
 * @param  int     $user_id
 * @return int
 */
function mb_get_user_post_count($user_id = 0)
{
}
/* ====== Pagination ====== */
/**
 * Pagination for the user loop.
 *
 * @since  1.0.0
 * @access public
 * @param  array  $args
 * @return string|void
 */
function mb_loop_user_pagination($args = array())
{
}
/**
 * Displays the edit user form.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function mb_user_edit_form()
{
}
/**
 * Returns an array of user contact methods.
 *
 * @since  1.0.0
 * @access public
 * @return array
 */
function mb_get_user_contact_methods()
{
}
/**
 * Gets the instance of the Message_Board class.  This function is useful for quickly grabbing data
 * used throughout the plugin.
 *
 * @since  1.0.0
 * @access public
 * @return object
 */
function message_board()
{
}