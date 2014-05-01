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
if ($show_tools == 1):
	include YJSGPATH."layouts/yjsg_tools.php";/* site tools , font resizer , rtl switch */
endif;
?>
<!-- footer -->
<div id="footer" class="yjsgsitew">
  <div id="youjoomla">
    <?php if ($this->countModules('footer')) { ?>
        <div id="footmod">
            <jdoc:include type="modules" name="footer" style="raw" />
        </div>
	<?php } ?>
    	<div id="cp">
		<?php echo getYJLINKS($default_font_family,$yj_copyrightear,$yj_templatename,$show_tools,$show_fres,$show_rtlc,$validators_off,$totop_off)  ?>
			<?php if ($branding_off == 2) { ?>
                <a class="yjsglogo png" href="http://yjsimplegrid.com/" target="_blank">
					<span>YJSimpleGrid Joomla! Templates Framework official website</span>
                </a>
			<?php } ?>
       </div>
  </div>
</div>
<!-- end footer -->
	<?php if ($joomlacredit_off ==2): ?>
		<div id="joomlacredit" class="yjsgsitew">
			<a href="http://www.joomla.org" target="_blank">Joomla!</a> is Free Software released under the 
			<a href="http://www.gnu.org/licenses/gpl-2.0.html" target="_blank">GNU/GPL License.</a>
		</div>
	<?php endif; ?>
<?php echo $yjsg_js;// do not remove.these are site js vars ?>