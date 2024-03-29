<?php
/*======================================================================*\
|| #################################################################### ||
|| # Package - Joomla Template based on YJSimpleGrid Framework          ||
|| # Copyright (C) 2010  Youjoomla.com. All Rights Reserved.            ||
|| # Authors - Dragan Todorovic and Constantin Boiangiu                 ||
|| # license - PHP files are licensed under  GNU/GPL V2                 ||
|| # license - CSS  - JS - IMAGE files  are Copyrighted material        ||
|| # bound by Proprietary License of Youjoomla.com                      ||
|| # for more information visit http://www.youjoomla.com/license.html   ||
|| # Redistribution and  modification of this software                  ||
|| # is bounded by its licenses                                         ||
|| # websites - http://www.youjoomla.com | http://www.yjsimplegrid.com  ||
|| #################################################################### ||
\*======================================================================*/

// Check to ensure this file is within the rest of the framework
defined('JPATH_BASE') or die();

/**
 * Renders a text element
 *
 * @package 	Joomla.Framework
 * @subpackage		Parameter
 * @since		1.5
 */

class JFormFieldYJSGText extends JFormField
{
	public $type = 'YJSGText';
	public function getInput()
	{
		$document	     = &JFactory::getDocument();
		$uri = str_replace(DIRECTORY_SEPARATOR,"/",str_replace( JPATH_SITE, JURI::base (), dirname(__FILE__) ));
		$uri = str_replace("/administrator/", "", $uri);

$document->addCustomTag('
<style type="text/css">
fieldset#jform_params_yj_item_type label{
	width:100px!important;
}
</style>

');
		$layout_js =  '<script type="text/javascript" src="'.$uri.'/yjmenutype.js"></script>';
		$document->addScript($uri.'/yjmenutype.js');
		
		$size = ( $this->element['size'] ? 'size="'.$this->element['size'].'"' : '' );
		$class = ( $this->element['class'] ? 'class="'.$this->element['class'].'"' : 'class="text_area"' );
        /*
         * Required to avoid a cycle of encoding &
         * html_entity_decode was used in place of htmlspecialchars_decode because
         * htmlspecialchars_decode is not compatible with PHP 4
         */
      	$value = htmlspecialchars(html_entity_decode($this->value, ENT_QUOTES), ENT_QUOTES);
		
       	return '<input type="text" name="'.$this->name.'" id="'.$this->element['name'].'" value="'.$this->value.'" '.$class.' '.$size.' />';
	}	
}