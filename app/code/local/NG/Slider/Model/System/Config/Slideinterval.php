<?php
/*---------------------------------------------------------*/
/*------------Created By : Nitin Gautam  -----------------*/
/*--- For any query mail at nitin.gautam070@gmail.com ---*/
/*---------------------------------------------------------*/
?>
<?php
class NG_Slider_Model_System_Config_Slideinterval 
{
    public function toOptionArray()
    {
        return array(
            array('value' => 500, 'label'=>Mage::helper('adminhtml')->__('500')),
            array('value' => 1000, 'label'=>Mage::helper('adminhtml')->__('1000')),
            array('value' => 1500, 'label'=>Mage::helper('adminhtml')->__('1500')),
            array('value' => 2000, 'label'=>Mage::helper('adminhtml')->__('2000')),
    		array('value' => 2500, 'label'=>Mage::helper('adminhtml')->__('2500')),
            array('value' => 3000, 'label'=>Mage::helper('adminhtml')->__('3000')),
			array('value' => 3500, 'label'=>Mage::helper('adminhtml')->__('3500')),
            array('value' => 4000, 'label'=>Mage::helper('adminhtml')->__('4000')),
			array('value' => 4500, 'label'=>Mage::helper('adminhtml')->__('4500')),
            array('value' => 5000, 'label'=>Mage::helper('adminhtml')->__('5000')),
        );
    }
}

