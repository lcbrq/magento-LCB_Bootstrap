<?php

class LCB_Bootstrap_Model_Observer {

    /**
     * Append necessary scripts and styles to head before defaults
     * 
     * @param Varien_Event_Observer $observer
     * @return LCB_Bootstrap_Model_Observer
     */
    public function prepareLayoutBefore(Varien_Event_Observer $observer)
    {

        /* @var $block Mage_Page_Block_Html_Head */
        $block = $observer->getEvent()->getBlock();

        if ("head" == $block->getNameInLayout()) {
            foreach (Mage::helper('lcb_bootstrap')->getJs() as $js) {
                $block->addJs('bootstrap' . DS . $js);
            }
            foreach (Mage::helper('lcb_bootstrap')->getSkinJs() as $skinJs) {
                $block->addItem("skin_js", 'js' . DS . $skinJs);
            }
            foreach (Mage::helper('lcb_bootstrap')->getCss() as $css) {
                $block->addItem('skin_css', 'css' . DS . $css);
            }
        }

        return $this;
    }

}
