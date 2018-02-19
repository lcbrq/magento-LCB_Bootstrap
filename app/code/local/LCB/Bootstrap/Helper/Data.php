<?php

/**
 * Small Magento toolkit for Bootstrap usage
 *
 * @category   LCB
 * @package    LCB_Bootstrap
 * @license    https://opensource.org/licenses/GPL-3.0 GNU Public License
 * @author     Silpion Tomasz Gregorczyk <tom@leftcurlybracket.com>
 */
class LCB_Bootstrap_Helper_Data extends Mage_Core_Helper_Abstract {

    /**
     * List of js files for include.
     *
     * @var array
     */
    protected $_js = array(
        'jquery.min.js',
        'bootstrap.min.js'
    );

    /**
     * List of skin js files for include
     */
    protected $_skin_js = array(
        'bracket.bootstrap.js'
    );

    /**
     * List of skin css files for include.
     *
     * @var array
     */
    protected $_css = array(
        'bootstrap.css',
        'bootstrap-theme.css',
        'bracket.bootstrap.css'
    );

    /**
     * Return array of js files.
     *
     * @return array
     */
    public function getJs()
    {
        return $this->_js;
    }

    /**
     * Return array of skin js files.
     *
     * @return array
     */
    public function getSkinJs()
    {
        return $this->_skin_js;
    }

    /**
     * Return array of css files.
     *
     * @return array
     */
    public function getCss()
    {
        return $this->_css;
    }

}
