<?php
/*
+--------------------------------------------------------------------+
| CiviCRM version 4.7                                                |
+--------------------------------------------------------------------+
| Copyright CiviCRM LLC (c) 2004-2017                                |
+--------------------------------------------------------------------+
| This file is a part of CiviCRM.                                    |
|                                                                    |
| CiviCRM is free software; you can copy, modify, and distribute it  |
| under the terms of the GNU Affero General Public License           |
| Version 3, 19 November 2007 and the CiviCRM Licensing Exception.   |
|                                                                    |
| CiviCRM is distributed in the hope that it will be useful, but     |
| WITHOUT ANY WARRANTY; without even the implied warranty of         |
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
| See the GNU Affero General Public License for more details.        |
|                                                                    |
| You should have received a copy of the GNU Affero General Public   |
| License and the CiviCRM Licensing Exception along                  |
| with this program; if not, contact CiviCRM LLC                     |
| at info[AT]civicrm[DOT]org. If you have questions about the        |
| GNU Affero General Public License or the licensing of CiviCRM,     |
| see the CiviCRM license FAQ at http://civicrm.org/licensing        |
+--------------------------------------------------------------------+
*/
/**
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2017
 *
 * Generated from xml/schema/CRM/Core/Menu.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:78591d8ca17fb4eb39a7123f35399035)
 */
require_once 'CRM/Core/DAO.php';
require_once 'CRM/Utils/Type.php';
/**
 * CRM_Core_DAO_Menu constructor.
 */
class CRM_Core_DAO_Menu extends CRM_Core_DAO {
  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  static $_tableName = 'civicrm_menu';
  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var boolean
   */
  static $_log = false;
  /**
   *
   * @var int unsigned
   */
  public $id;
  /**
   * Which Domain is this menu item for
   *
   * @var int unsigned
   */
  public $domain_id;
  /**
   * Path Name
   *
   * @var string
   */
  public $path;
  /**
   * Arguments to pass to the url
   *
   * @var text
   */
  public $path_arguments;
  /**
   *
   * @var string
   */
  public $title;
  /**
   * Function to call to check access permissions
   *
   * @var string
   */
  public $access_callback;
  /**
   * Arguments to pass to access callback
   *
   * @var text
   */
  public $access_arguments;
  /**
   * function to call for this url
   *
   * @var string
   */
  public $page_callback;
  /**
   * Arguments to pass to page callback
   *
   * @var text
   */
  public $page_arguments;
  /**
   * Breadcrumb for the path.
   *
   * @var text
   */
  public $breadcrumb;
  /**
   * Url where a page should redirected to, if next url not known.
   *
   * @var string
   */
  public $return_url;
  /**
   * Arguments to pass to return_url
   *
   * @var string
   */
  public $return_url_args;
  /**
   * Component that this menu item belongs to
   *
   * @var int unsigned
   */
  public $component_id;
  /**
   * Is this menu item active?
   *
   * @var boolean
   */
  public $is_active;
  /**
   * Is this menu accessible to the public?
   *
   * @var boolean
   */
  public $is_public;
  /**
   * Is this menu exposed to the navigation system?
   *
   * @var boolean
   */
  public $is_exposed;
  /**
   * Should this menu be exposed via SSL if enabled?
   *
   * @var boolean
   */
  public $is_ssl;
  /**
   * Ordering of the menu items in various blocks.
   *
   * @var int
   */
  public $weight;
  /**
   * Drupal menu type.
   *
   * @var int
   */
  public $type;
  /**
   * CiviCRM menu type.
   *
   * @var int
   */
  public $page_type;
  /**
   * skip this url being exposed to breadcrumb
   *
   * @var boolean
   */
  public $skipBreadcrumb;
  /**
   * All other menu metadata not stored in other fields
   *
   * @var text
   */
  public $module_data;
  /**
   * Class constructor.
   */
  function __construct() {
    $this->__table = 'civicrm_menu';
    parent::__construct();
  }
  /**
   * Returns foreign keys and entity references.
   *
   * @return array
   *   [CRM_Core_Reference_Interface]
   */
  static function getReferenceColumns() {
    if (!isset(Civi::$statics[__CLASS__]['links'])) {
      Civi::$statics[__CLASS__]['links'] = static ::createReferenceColumns(__CLASS__);
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName() , 'domain_id', 'civicrm_domain', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName() , 'component_id', 'civicrm_component', 'id');
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'links_callback', Civi::$statics[__CLASS__]['links']);
    }
    return Civi::$statics[__CLASS__]['links'];
  }
  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  static function &fields() {
    if (!isset(Civi::$statics[__CLASS__]['fields'])) {
      Civi::$statics[__CLASS__]['fields'] = array(
        'id' => array(
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Menu ID') ,
          'required' => true,
          'table_name' => 'civicrm_menu',
          'entity' => 'Menu',
          'bao' => 'CRM_Core_DAO_Menu',
          'localizable' => 0,
        ) ,
        'domain_id' => array(
          'name' => 'domain_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Domain') ,
          'description' => 'Which Domain is this menu item for',
          'required' => true,
          'table_name' => 'civicrm_menu',
          'entity' => 'Menu',
          'bao' => 'CRM_Core_DAO_Menu',
          'localizable' => 0,
          'FKClassName' => 'CRM_Core_DAO_Domain',
          'pseudoconstant' => array(
            'table' => 'civicrm_domain',
            'keyColumn' => 'id',
            'labelColumn' => 'name',
          )
        ) ,
        'path' => array(
          'name' => 'path',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Path') ,
          'description' => 'Path Name',
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'table_name' => 'civicrm_menu',
          'entity' => 'Menu',
          'bao' => 'CRM_Core_DAO_Menu',
          'localizable' => 0,
        ) ,
        'path_arguments' => array(
          'name' => 'path_arguments',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Arguments') ,
          'description' => 'Arguments to pass to the url',
          'table_name' => 'civicrm_menu',
          'entity' => 'Menu',
          'bao' => 'CRM_Core_DAO_Menu',
          'localizable' => 0,
        ) ,
        'title' => array(
          'name' => 'title',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Menu Title') ,
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'table_name' => 'civicrm_menu',
          'entity' => 'Menu',
          'bao' => 'CRM_Core_DAO_Menu',
          'localizable' => 0,
        ) ,
        'access_callback' => array(
          'name' => 'access_callback',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Access Callback') ,
          'description' => 'Function to call to check access permissions',
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'table_name' => 'civicrm_menu',
          'entity' => 'Menu',
          'bao' => 'CRM_Core_DAO_Menu',
          'localizable' => 0,
        ) ,
        'access_arguments' => array(
          'name' => 'access_arguments',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Access Arguments') ,
          'description' => 'Arguments to pass to access callback',
          'table_name' => 'civicrm_menu',
          'entity' => 'Menu',
          'bao' => 'CRM_Core_DAO_Menu',
          'localizable' => 0,
        ) ,
        'page_callback' => array(
          'name' => 'page_callback',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Page Callback') ,
          'description' => 'function to call for this url',
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'table_name' => 'civicrm_menu',
          'entity' => 'Menu',
          'bao' => 'CRM_Core_DAO_Menu',
          'localizable' => 0,
        ) ,
        'page_arguments' => array(
          'name' => 'page_arguments',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Page Arguments') ,
          'description' => 'Arguments to pass to page callback',
          'table_name' => 'civicrm_menu',
          'entity' => 'Menu',
          'bao' => 'CRM_Core_DAO_Menu',
          'localizable' => 0,
        ) ,
        'breadcrumb' => array(
          'name' => 'breadcrumb',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Breadcrumb') ,
          'description' => 'Breadcrumb for the path.',
          'table_name' => 'civicrm_menu',
          'entity' => 'Menu',
          'bao' => 'CRM_Core_DAO_Menu',
          'localizable' => 0,
        ) ,
        'return_url' => array(
          'name' => 'return_url',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Return Url') ,
          'description' => 'Url where a page should redirected to, if next url not known.',
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'table_name' => 'civicrm_menu',
          'entity' => 'Menu',
          'bao' => 'CRM_Core_DAO_Menu',
          'localizable' => 0,
        ) ,
        'return_url_args' => array(
          'name' => 'return_url_args',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Return Url Args') ,
          'description' => 'Arguments to pass to return_url',
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'table_name' => 'civicrm_menu',
          'entity' => 'Menu',
          'bao' => 'CRM_Core_DAO_Menu',
          'localizable' => 0,
        ) ,
        'component_id' => array(
          'name' => 'component_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Component') ,
          'description' => 'Component that this menu item belongs to',
          'table_name' => 'civicrm_menu',
          'entity' => 'Menu',
          'bao' => 'CRM_Core_DAO_Menu',
          'localizable' => 0,
          'FKClassName' => 'CRM_Core_DAO_Component',
          'html' => array(
            'type' => 'Select',
          ) ,
          'pseudoconstant' => array(
            'table' => 'civicrm_component',
            'keyColumn' => 'id',
            'labelColumn' => 'name',
          )
        ) ,
        'is_active' => array(
          'name' => 'is_active',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Enabled?') ,
          'description' => 'Is this menu item active?',
          'table_name' => 'civicrm_menu',
          'entity' => 'Menu',
          'bao' => 'CRM_Core_DAO_Menu',
          'localizable' => 0,
        ) ,
        'is_public' => array(
          'name' => 'is_public',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Public?') ,
          'description' => 'Is this menu accessible to the public?',
          'table_name' => 'civicrm_menu',
          'entity' => 'Menu',
          'bao' => 'CRM_Core_DAO_Menu',
          'localizable' => 0,
        ) ,
        'is_exposed' => array(
          'name' => 'is_exposed',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Exposed?') ,
          'description' => 'Is this menu exposed to the navigation system?',
          'table_name' => 'civicrm_menu',
          'entity' => 'Menu',
          'bao' => 'CRM_Core_DAO_Menu',
          'localizable' => 0,
        ) ,
        'is_ssl' => array(
          'name' => 'is_ssl',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Use SSL?') ,
          'description' => 'Should this menu be exposed via SSL if enabled?',
          'table_name' => 'civicrm_menu',
          'entity' => 'Menu',
          'bao' => 'CRM_Core_DAO_Menu',
          'localizable' => 0,
        ) ,
        'weight' => array(
          'name' => 'weight',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Order') ,
          'description' => 'Ordering of the menu items in various blocks.',
          'required' => true,
          'default' => '1',
          'table_name' => 'civicrm_menu',
          'entity' => 'Menu',
          'bao' => 'CRM_Core_DAO_Menu',
          'localizable' => 0,
        ) ,
        'type' => array(
          'name' => 'type',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Type') ,
          'description' => 'Drupal menu type.',
          'required' => true,
          'default' => '1',
          'table_name' => 'civicrm_menu',
          'entity' => 'Menu',
          'bao' => 'CRM_Core_DAO_Menu',
          'localizable' => 0,
        ) ,
        'page_type' => array(
          'name' => 'page_type',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Page Type') ,
          'description' => 'CiviCRM menu type.',
          'required' => true,
          'default' => '1',
          'table_name' => 'civicrm_menu',
          'entity' => 'Menu',
          'bao' => 'CRM_Core_DAO_Menu',
          'localizable' => 0,
        ) ,
        'skipBreadcrumb' => array(
          'name' => 'skipBreadcrumb',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Hide Breadcrumb?') ,
          'description' => 'skip this url being exposed to breadcrumb',
          'table_name' => 'civicrm_menu',
          'entity' => 'Menu',
          'bao' => 'CRM_Core_DAO_Menu',
          'localizable' => 0,
        ) ,
        'module_data' => array(
          'name' => 'module_data',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Other menu data') ,
          'description' => 'All other menu metadata not stored in other fields',
          'table_name' => 'civicrm_menu',
          'entity' => 'Menu',
          'bao' => 'CRM_Core_DAO_Menu',
          'localizable' => 0,
        ) ,
      );
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'fields_callback', Civi::$statics[__CLASS__]['fields']);
    }
    return Civi::$statics[__CLASS__]['fields'];
  }
  /**
   * Return a mapping from field-name to the corresponding key (as used in fields()).
   *
   * @return array
   *   Array(string $name => string $uniqueName).
   */
  static function &fieldKeys() {
    if (!isset(Civi::$statics[__CLASS__]['fieldKeys'])) {
      Civi::$statics[__CLASS__]['fieldKeys'] = array_flip(CRM_Utils_Array::collect('name', self::fields()));
    }
    return Civi::$statics[__CLASS__]['fieldKeys'];
  }
  /**
   * Returns the names of this table
   *
   * @return string
   */
  static function getTableName() {
    return self::$_tableName;
  }
  /**
   * Returns if this table needs to be logged
   *
   * @return boolean
   */
  function getLog() {
    return self::$_log;
  }
  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  static function &import($prefix = false) {
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'menu', $prefix, array());
    return $r;
  }
  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  static function &export($prefix = false) {
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'menu', $prefix, array());
    return $r;
  }
  /**
   * Returns the list of indices
   */
  public static function indices($localize = TRUE) {
    $indices = array(
      'UI_path_domain_id' => array(
        'name' => 'UI_path_domain_id',
        'field' => array(
          0 => 'path',
          1 => 'domain_id',
        ) ,
        'localizable' => false,
        'unique' => true,
        'sig' => 'civicrm_menu::1::path::domain_id',
      ) ,
    );
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }
}
