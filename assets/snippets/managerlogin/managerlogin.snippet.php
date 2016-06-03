<?php
/******************************************************************************
 * ManagerLogin snippet
 ******************************************************************************
 * Description:
 *   Allows you to login to the manager through the frontend.
 * Author:
 *   Adam Crownoble (contact: adam@obledesign.com)
 *   Added template and language parameters by enidan (contact: lariflakneur@gmail.com)
 * Version:
 *   2.0
 * Date:
 *   2008.02.15
 * History:
 *   2008.02.15 -> New version adding template and language parameters
 *   2008.02.15 -> 1.0.1: - Bug fix: In case of dynamic publishing (option 2),
 *                          the HTML <object> element had no ID attribute.
 *   2005.12.05 -> Updated for MODx 0.9.1 support including login startup pages
 *   2005.08.06 -> Updated
 *   2005.07.31 -> Created
 * TODO:
 *   Include Captcha support
 *
 ******************************************************************************
 * Parameters (all optional):
 *   &language [string]
 *     String defining which language file to use for default templates and error messages.
 *     Defaults to 'en' (english).
 *   &loginTpl [string]
 *     Template to use when no user is logged within the manager.
 *     Can be either a chunk name or a document ID or directly HTML code.
 *     Defaults to the template used by ManagerLogin previous releases. 
 *   &loggedTpl [string]
 *     Template to use when a user is logged within the manager.
 *     Can be either a chunk name or a document ID or directly HTML code.
 *     Defaults to the template used by ManagerLogin previous releases. 
 *   &errorTpl [string]
 *     Template to use for each error message to display.
 *     Can be either a chunk name or a document ID or directly HTML code.
 *     Defaults to the template used by ManagerLogin previous releases. 
 *   &cssStyle [string]
 *     CSS style to add within the document <head> tag.
 *     Can be either a filename or directly CSS code inside a <style> tag.
 *     No default value. 
 *
 * Warning: When using directly HTML or CSS code for the parameters, it may not
 *          work because of MODx parser behaviour. For example, '=' is not supported. 
 *
 * Templates' placeholders
 * (see default templates in templates.inc.php file for example use)
 *   [+ml.erroritem+]
 *     Used in &errorTpl: error message text.
 *   [+ml.errors+]
 *     Used in &loginTpl: templated error messages.
 *   [+ml.user_fldname+]
 *     Used in &loginTpl: name of username form field.
 *   [+ml.user_lbl+]
 *     Used in &loginTpl: text label for username form field.
 *   [+ml.passwd_fldname+]
 *     Used in &loginTpl: name of password form field.
 *   [+ml.passwd_lbl+]
 *     Used in &loginTpl: text label for password form field.
 *   [+ml.remember_fldname+]
 *     Used in &loginTpl: name of rememberme form checkbox field.
 *   [+ml.remember_lbl+]
 *     Used in &loginTpl: label for rememberme form checkbox field.
 *   [+ml.login_lbl+]
 *     Used in &loginTpl: text for login button.
 *   [+ml.logged_msg+]
 *     Used in &loggedTpl: message displayed when a user is logged.
 *   [+ml.logout_lbl+]
 *     Used in &loggedTpl: text for logout link.
 *   [+ml.home_lbl+]
 *     Used in &loggedTpl: text for homepage link.
 *   [+ml.username+]
 *     Used in &loginTpl and &loggedTpl: user name
 *   [+ml.action_name+]
 *     Used in &loginTpl and &loggedTpl: name of action parameter (hidden form
 *     field or URL argument).
 *   [+ml.action_val+]
 *     Used in &loginTpl and &loggedTpl: value of action parameter (hidden form
 *     field or URL argument).
 ******************************************************************************/ 

define(MANAGER_LOGIN_PATH, $modx->config['base_path'] . 'assets/snippets/managerlogin/');

include_once MANAGER_LOGIN_PATH . 'inc/managerlogin.inc.php';

$loginTpl = isset($loginTpl) ? managerLoginTemplate($loginTpl) : '';
$loggedTpl = isset($loggedTpl) ? managerLoginTemplate($loggedTpl) : '';
$errorTpl = isset($errorTpl) ? managerLoginTemplate($errorTpl) : '';
$cssStyle = isset($cssStyle) ? $cssStyle : '';
$language = isset($language) ? $language : '';
return managerLogin($loginTpl, $loggedTpl, $errorTpl, $cssStyle, $language);
?>
