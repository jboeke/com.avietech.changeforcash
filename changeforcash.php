<?php

require_once 'changeforcash.civix.php';

function changeforcash_civicrm_buildAmount($pageType, &$form, &$amount) {
  // Show calculator when a price set is loaded
  echo "<script>document.getElementById('calcchange').style.display = 'block';</script>";
}

function changeforcash_civicrm_buildForm($formName, &$form) {
  
  //printDebugInfo($formName, $form);

  if ($formName == 'CRM_Event_Form_Participant') {
    $action = $form->getAction(); 
    if ($action == CRM_Core_Action::ADD || $action == CRM_Core_Action::UPDATE)
    {
      if (intval($form->_priceSetId) == 0) {
        CRM_Core_Region::instance('page-body')->add(array('template' => 'changeforcash.tpl'));
      }
    }
  }

}

function printDebugInfo($formName, &$form) {
  echo '<h1>FORM LOAD: ' . $formName . '</h1>';
  echo "<script>console.log('Form Name: " . $formName . "' );</script>";
  echo "<script>console.log('Form URL: " . $form->_urlPath . "' );</script>";

  $vars = get_object_vars($form);
  echo '<pre>'; 
  print_r($vars); 
  echo '</pre>';
}

// Hooks for future use?
/*
function changeforcash_civicrm_alterContent(&$content, $context, $tplName, &$object) {
  //if($context == "page") {
    //$content = "<p>Template: " . $tplName . "</p>".$content;
  //}
}

function changeforcash_civicrm_buildAmount( $pageType, &$form, &$amount ) {

}
*/

/**
 * Implements hook_civicrm_config().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_config
 */
function changeforcash_civicrm_config(&$config) {
  _changeforcash_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_xmlMenu().
 *
 * @param array $files
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_xmlMenu
 */
function changeforcash_civicrm_xmlMenu(&$files) {
  _changeforcash_civix_civicrm_xmlMenu($files);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_install
 */
function changeforcash_civicrm_install() {
  _changeforcash_civix_civicrm_install();
}

/**
* Implements hook_civicrm_postInstall().
*
* @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_postInstall
*/
function changeforcash_civicrm_postInstall() {
  _changeforcash_civix_civicrm_postInstall();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_uninstall
 */
function changeforcash_civicrm_uninstall() {
  _changeforcash_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_enable
 */
function changeforcash_civicrm_enable() {
  _changeforcash_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_disable
 */
function changeforcash_civicrm_disable() {
  _changeforcash_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @param $op string, the type of operation being performed; 'check' or 'enqueue'
 * @param $queue CRM_Queue_Queue, (for 'enqueue') the modifiable list of pending up upgrade tasks
 *
 * @return mixed
 *   Based on op. for 'check', returns array(boolean) (TRUE if upgrades are pending)
 *                for 'enqueue', returns void
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_upgrade
 */
function changeforcash_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _changeforcash_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_managed().
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_managed
 */
function changeforcash_civicrm_managed(&$entities) {
  _changeforcash_civix_civicrm_managed($entities);
}

/**
 * Implements hook_civicrm_caseTypes().
 *
 * Generate a list of case-types.
 *
 * @param array $caseTypes
 *
 * Note: This hook only runs in CiviCRM 4.4+.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_caseTypes
 */
function changeforcash_civicrm_caseTypes(&$caseTypes) {
  _changeforcash_civix_civicrm_caseTypes($caseTypes);
}

/**
 * Implements hook_civicrm_angularModules().
 *
 * Generate a list of Angular modules.
 *
 * Note: This hook only runs in CiviCRM 4.5+. It may
 * use features only available in v4.6+.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_caseTypes
 */
function changeforcash_civicrm_angularModules(&$angularModules) {
_changeforcash_civix_civicrm_angularModules($angularModules);
}

/**
 * Implements hook_civicrm_alterSettingsFolders().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_alterSettingsFolders
 */
function changeforcash_civicrm_alterSettingsFolders(&$metaDataFolders = NULL) {
  _changeforcash_civix_civicrm_alterSettingsFolders($metaDataFolders);
}

/**
 * Functions below this ship commented out. Uncomment as required.
 *

/**
 * Implements hook_civicrm_preProcess().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_preProcess
 *
function changeforcash_civicrm_preProcess($formName, &$form) {

} // */

/**
 * Implements hook_civicrm_navigationMenu().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_navigationMenu
 *
function changeforcash_civicrm_navigationMenu(&$menu) {
  _changeforcash_civix_insert_navigation_menu($menu, NULL, array(
    'label' => ts('The Page', array('domain' => 'com.avietech.changeforcash')),
    'name' => 'the_page',
    'url' => 'civicrm/the-page',
    'permission' => 'access CiviReport,access CiviContribute',
    'operator' => 'OR',
    'separator' => 0,
  ));
  _changeforcash_civix_navigationMenu($menu);
} // */

