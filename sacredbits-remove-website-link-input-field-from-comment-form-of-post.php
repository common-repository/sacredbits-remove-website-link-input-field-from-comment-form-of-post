<?php
/** 
 * Plugin Name: SacredBits Remove Website Link Input Field From Comment Form of Post
 * Plugin Url: https://www.sacredbits.com/
 * Description: This plugin will help you to save your post and website from the spammers by removing the **website/URL** input field from comment section of your posts.  It's very important to be safe from the spammers because they write illegal comments and post their website link to get backlinks which can effect your post SEO and performance.
 * Version: 1.0.0
 * Author: SacredBits
 * Author URI: https://www.sacredbits.com/
 * Text Domain: sacredbits-remove-website-link-input-field-from-comment-form-of-post
 * Requires at least: 5.3
 * Requires PHP: 7.2
 * License:  GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

if (!defined('ABSPATH')) 
{
    exit;   //exit if accessed directly.
}

if (!defined('Remove_Website_Link_Input_Field_From_Comment_Form_Of_Post_File')) 
{
    define('Remove_Website_Link_Input_Field_From_Comment_Form_Of_Post_File', __FILE__);
}

if (!class_exists('Remove_Website_Link_Input_Field_From_Comment_Form_Of_Post_Class')) 
{
    class Remove_Website_Link_Input_Field_From_Comment_Form_Of_Post_Class
    {
        public function __construct()
        {
            add_filter('comment_form_default_fields', array($this, 'sacredbits_remove_url_from_comments'), 10, 1);
        }

        public function sacredbits_remove_url_from_comments($fields)
        {
            if(isset($fields['url']))
            {
                unset($fields['url']);
            }
            return $fields;
        }
    }
}
new Remove_Website_Link_Input_Field_From_Comment_Form_Of_Post_Class();
?>