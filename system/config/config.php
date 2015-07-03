<?php

/**
* @package		General Configuration
* @version 		01.00.A
* @category		Configuration
* @author		GIEVO
* @license		License under GIEVO For Personal and Small Business Only
* @copyright	2015
* @since		version 1.00.A
* @link			Http://gievo.org
*/

// :::::::::::::::::::::::::::: SECURITY ::::::::::::::::::::::::::::

/*
| -------------------------------------------------------------------
| Fake File Path
| -------------------------------------------------------------------
| These Configuration used For make Fake path to deliver File
|
| Prototype:
|
|	$config['file_url'] = 'myfile';
|	$config['file_path'] = 'resource';
|	$config['file_use_security'] = true / false;
*/
$config['file_url'] = 'file';
$config['folder_path'] = 'resource';
$config['file_use_security'] = false;

/*
| -------------------------------------------------------------------
| Encryption Key
| -------------------------------------------------------------------
| These Configuration used For General Encryption
|
| Prototype:
|
|	$config['encryption_key'] = '4nYk3yYouW4nT3d';
*/
$config['encryption_key'] = '';

/*
| -------------------------------------------------------------------
| Form Token
| -------------------------------------------------------------------
| These Configuration used For Enable / Disable Form Post Validation
| Security
|
| Prototype:
|
|	$config['form_token'] = true / false;
*/
$config['form_token'] = false;

/*
| -------------------------------------------------------------------
| Form Name Encryption
| -------------------------------------------------------------------
| These Configuration used to Enable / Disable Encrypting Form
| Name For Security Reason
|
| Prototype:
|
|	$config['form_name_encrypt'] = true / false;
*/
$config['form_name_encrypt'] = false;

/*
| -------------------------------------------------------------------
| Remote Activation
| -------------------------------------------------------------------
| These Configuration used For Enable / Disable Your website Application
| by Remote Application. get your ID and KEY at Http://gievo.org
|
| Prototype:
|
|	$config['remote_application'] = true / false;
|	$config['remote_ID'] = 'Your ID From Http://gievo.org';
|	$config['remote_KEY'] = 'Your KEY From Http://gievo.org';
|	$config['remote_PROG'] = 'GHJLAS';
*/
$config['remote_application'] = false;
$config['remote_ID'] = '';
$config['remote_KEY'] = '';
$config['remote_PROG'] = '';

/*
| -------------------------------------------------------------------
| Autoload
| -------------------------------------------------------------------
| These Configuration used For Autoload Function
|
| Prototype:
|
|	$config['autoload_library'] = array('db');
|	$config['autoload_models'] = array();
*/
$config['autoload_library'] = array();
$config['autoload_models'] = array();