<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2004 Graham Solomon (graham.solomon@powys.gov.uk)
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/
/**
 * Plugin 'Section index (pagecontent w/Index checked) + Indentation' for the 'sitemap_indented' extension.
 *
 * @author    Graham Solomon <graham.solomon@powys.gov.uk>
 * @modified for BLE masterconfig Sacha Vorbeck <vorbeck@TYPO3Tutor.de>
 */


require_once(PATH_tslib."class.tslib_pibase.php");

class tx_masterconfig_pi1 extends tslib_pibase {
    public $prefixId         = "tx_masterconfig_pi1";                    // Same as class name
    public $scriptRelPath    = "pi1/class.tx_masterconfig_pi1.php";    // Path to this script relative to the extension dir.
    public $extKey             = "masterconfig";                        // The extension key.
    protected $classPrefix;
    protected $listType;


    /**
     * Main function
     *
     * Loops through page content elements creating an unordered list
     * based on the heading_layout values
     */
    public function main($content,$conf)    {
        
        $this->classPrefix = preg_replace('/_/', '-', $this->prefixId).'-';
        #$this->listType = $conf['listType'];
	$this->listType = 'ul';
        
            // Get the PID from which to make the menu.
            // If a page is set as a reference in the 'Startingpoint' field, use that otherwise use the page's id-number from TSFE
        $menuPid = intval($this->cObj->data['pages'] ? $this->cObj->data['pages'] : $GLOBALS['TSFE']->id);

            // Now, get an array with all the subpages to this pid:
            // (Function getMenu() is found in class.t3lib_page.php)
        $menu = $GLOBALS['TYPO3_DB']->exec_SELECTquery('uid, header, header_layout',
                                                       'tt_content',
                                                       '(pid='.$menuPid.' AND sectionIndex=1) AND (hidden=0 AND deleted=0) AND CType!=\'menu\'',
                                                       '',
                                                       'sorting ASC');

            // Traverse menuitems:
        $indent = false;
        while($element = $GLOBALS['TYPO3_DB']->sql_fetch_assoc($menu)) {

                // Is the header hidden?
            if($element['header_layout']==100) {
                continue;
            }
            else {
                if(!$indent) {
                    $indent = $element['header_layout'];
                    $indentBegin = $element['header_layout'];
                }
                
                if($element['header_layout'] > $indent) {
                    $content.= $this->indent($element['header_layout']-$indent);
                }
                elseif($element['header_layout'] < $indent) {
                    $content.= $this->outdent($indent-$element['header_layout']);
                }

                $indent = $element['header_layout'];
                
                
                $content.= '<li><a href="'.$this->_getTypoLinkUrl($menuPid).'#'.$element['uid'].'">'.$element['header'].'</a>';
                
            }
        }

        $content.= $this->outdent($indent-$indentBegin);
        $content = '<'.$this->listType.'>'.$content.'</'.$this->listType.'>';
        return $this->pi_wrapInBaseClass($content);
    }


    /**
     *
     * Generates a TYPO3 link
     *
     * @param integer $pid Page Id to link to
     * @return string
     */
    private function _getTypoLinkUrl($pid) {
        
        $typolink_conf = array(
            "no_cache"         => false,
            "returnLast"     => "url", // Don't wrap the link in anchor tags
            "parameter"     => $pid,
            "useCacheHash"    => false);
            
        return $this->cObj->typolink("", $typolink_conf);
    }


    /**
     * Adds <ul>/<ol> tag(s) for indenting
     *
     * @param integer $int Number of times to indent
     * @return string
     */
    private function indent($int) {

        for($x=0; $x < $int; $x++) {
            $content.= '<'.$this->listType.'>';
        }
        return $content;
    }


    /**
     * Adds </ul> tag(s) for outdenting
     *
     * @param integer $int Number of times to outdent
     * @return string
     */
    private function outdent($int) {

        for($x=0; $x < $int; $x++) {
            $content.= '</'.$this->listType.'>';
        }
        return $content;
    }
}


if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/masterconfig/pi1/class.tx_masterconfig_pi1.php'])    {
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/masterconfig/pi1/class.tx_masterconfig_pi1.php']);
}

?>
