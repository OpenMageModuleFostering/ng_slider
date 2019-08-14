<?php
/*---------------------------------------------------------*/
/*------------Created By : Nitin Gautam  -----------------*/
/*--- For any query mail at nitin.gautam070@gmail.com ---*/
/*---------------------------------------------------------*/
?>
<?php
class NG_Slider_Model_System_Config_Speed 
{
    public function toOptionArray()
    {
        return array(
		    array('value' => 200, 'label'=>Mage::helper('adminhtml')->__('200')),
            array('value' => 400, 'label'=>Mage::helper('adminhtml')->__('400')),
            array('value' => 600, 'label'=>Mage::helper('adminhtml')->__('600')),
            array('value' => 800, 'label'=>Mage::helper('adminhtml')->__('800')),
            array('value' => 1000, 'label'=>Mage::helper('adminhtml')->__('1000')),
            array('value' => 1200, 'label'=>Mage::helper('adminhtml')->__('1200')),
            array('value' => 1400, 'label'=>Mage::helper('adminhtml')->__('1400')),
            array('value' => 1600, 'label'=>Mage::helper('adminhtml')->__('1600')),
            array('value' => 1800, 'label'=>Mage::helper('adminhtml')->__('1800')),
            array('value' => 2000, 'label'=>Mage::helper('adminhtml')->__('2000')),
        );
    }
}

