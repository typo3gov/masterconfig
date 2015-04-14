<?php

class  Tx_Masterconfig_ViewHelpers_SessionViewHelper extends Tx_Fluid_ViewHelpers_Link_ActionViewHelper {
    /**
     * @param string $varname Variable name
     * @return string Rendered var
     */
    public function render($varname) {
        $sessionData = $GLOBALS['TSFE']->fe_user->getKey('ses', 'tx_masterconfig');
        if ($sessionData[$varname]) {
            return $sessionData[$varname];
        } else {
            return NULL;
        }
    }
}