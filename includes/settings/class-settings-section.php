<?php
/**
 * WP Glossary Hover Plugin
 *
 * @package   WP_Glossary_Hover_Admin
 * @author    chorton2227
 * @license   GPL-2.0+
 * @copyright 2014
 */

/**
 * WP Glossary Hover Settings Section class. This class serves to hold settings section information.
 *
 * @package   WPGH_Settings_Section
 * @author    chorton2227
 */
class WPGH_Settings_Section
{

    /**
     * The id used to setup a settings section in Wordpress Settings API.
     *
     * @see      http://codex.wordpress.org/Function_Reference/add_settings_section
     * @since    1.0.0
     * @var      string
     */
    public $id = null;

    /**
     * The title used to setup a settings section in Wordpress Settings API.
     *
     * @see      http://codex.wordpress.org/Function_Reference/add_settings_section
     * @since    1.0.0
     * @var      string
     */
    public $title = null;

    /**
     * A description of section. Is displayed on options page, below $title.
     *
     * @since    1.0.0
     * @var      string
     */
    public $description = null;

    /**
     * The fields used to setup a settings section in Wordpress Settings API.
     *
     * @see      http://codex.wordpress.org/Function_Reference/add_settings_section
     * @see      http://codex.wordpress.org/Function_Reference/add_settings_field
     * @since    1.0.0
     * @var      array
     */
    public $fields = null;

    /**
     * Set class variables.
     *
     * @param    string     $id             Unique id of settings section.
     * @param    string     $title          Title of settings section.
     * @param    string     $description    Description of settings section.
     * @param    array      $fields         Fields of settings section.
     * @since    1.0.0
     */
    public function __construct($id, $title, $description, $fields)
    {

        $this->id          = $id;
        $this->title       = $title;
        $this->description = $description;
        $this->fields      = $fields;

    }

}
