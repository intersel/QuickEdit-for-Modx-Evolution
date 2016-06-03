//<?php

/***********************
Plugin configuration
  * &web_group_manager=List of webgroup can edit the content of the site;string;<agroupename>

Plugin Events
  * Web Access Service Events
    * OnWebLogin
	* OnWebLogout
************************/

$web_group_manager = array ( 'myGroupForQuickEdit' );

$e = &$modx->Event;
switch($e->name) {
    case 'OnWebLogin': 
        if ( $modx->isMemberOfWebGroup( $web_group_manager ) ) {
			// a manager user
            $_POST['username'] = 'WebUserAdmin';
            $_POST['password'] = 'myPassWord';
            $_POST['action'] = 'login';
            $modx->runSnippet('ManagerLogin');
        }
        break;
    case 'OnWebLogout': if (session_id() != "") session_destroy(); break;
}