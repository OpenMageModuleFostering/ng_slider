<?php
/*---------------------------------------------------------*/
/*------------Created By : Nitin Gautam  -----------------*/
/*--- For any query mail at nitin.gautam070@gmail.com ---*/
/*---------------------------------------------------------*/
?>
<?php
class NG_Slider_Model_System_Config_Factor 
{
    public function toOptionArray()
    {
        return array(
		    array('value' => 0, 'label'=>Mage::helper('adminhtml')->__('0')),
		    array('value' => 5, 'label'=>Mage::helper('adminhtml')->__('5')),
            array('value' => 10, 'label'=>Mage::helper('adminhtml')->__('10')),
            array('value' => 15, 'label'=>Mage::helper('adminhtml')->__('15')),
            array('value' => 20, 'label'=>Mage::helper('adminhtml')->__('20')),
            array('value' => 25, 'label'=>Mage::helper('adminhtml')->__('25')),
            array('value' => 30, 'label'=>Mage::helper('adminhtml')->__('30')),		   
        );
    }
	
}

