<?php

/**
 * Magmodules.eu - http://www.magmodules.eu
 *
 * NOTICE OF LICENSE
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to info@magmodules.eu so we can send you a copy immediately.
 *
 * @category      Magmodules
 * @package       Magmodules_Sooqr
 * @author        Magmodules <info@magmodules.eu>
 * @copyright     Copyright (c) 2017 (http://www.magmodules.eu)
 * @license       http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Magmodules_Sooqr_Model_Adminhtml_System_Config_Source_Pricemodel
{

    public function toOptionArray()
    {
        $type = array();
        $type[] = array('value' => '', 'label' => Mage::helper('adminhtml')->__('Use default price'));
        $type[] = array('value' => 'min', 'label' => Mage::helper('adminhtml')->__('Use minimum price'));
        $type[] = array('value' => 'max', 'label' => Mage::helper('adminhtml')->__('Use maximum price'));
        $type[] = array('value' => 'total', 'label' => Mage::helper('adminhtml')->__('Use total price'));
        return $type;
    }

}