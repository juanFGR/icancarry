<?php
/*======================================================================*\
|| #################################################################### ||
|| # Package - Joomla Template based on YJSimpleGrid Framework          ||
|| # Copyright (C) 2010  Youjoomla.com. All Rights Reserved.            ||
|| # license - PHP files are licensed under  GNU/GPL V2                 ||
|| # license - CSS  - JS - IMAGE files  are Copyrighted material        ||
|| # bound by Proprietary License of Youjoomla.com                      ||
|| # for more information visit http://www.youjoomla.com/license.html   ||
|| # Redistribution and  modification of this software                  ||
|| # is bounded by its licenses                                         ||
|| # websites - http://www.youjoomla.com | http://www.yjsimplegrid.com  ||
|| #################################################################### ||
\*======================================================================*/
/**
 * YJ system plugin
 *
 * @package		YJSG Framework V 1.0.10
 * @subpackage	System 
 */ 

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
jimport( 'joomla.event.plugin' );
/**
 * YJ system plugin
 *
 * @package		Joomla
 * @subpackage	System 
 */ 
class  plgSystemYJMegaMenu extends JPlugin
{
	function onContentPrepareForm($form, $data)
	{
		if ($form->getName()=='com_menus.item')
		{
			JForm::addFormPath(JPATH_PLUGINS.DIRECTORY_SEPARATOR.'system'.DIRECTORY_SEPARATOR.'YJMegaMenu'.DIRECTORY_SEPARATOR.'YJMegaMenu'.DIRECTORY_SEPARATOR.'params');
			JForm::addFieldPath(JPATH_PLUGINS.DIRECTORY_SEPARATOR.'system'.DIRECTORY_SEPARATOR.'YJMegaMenu'.DIRECTORY_SEPARATOR.'YJMegaMenu'.DIRECTORY_SEPARATOR.'element');			
			$form->loadFile('yj_mega_menu_params', false);
		}
	}

}
?>