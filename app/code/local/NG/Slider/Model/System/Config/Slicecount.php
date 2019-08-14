<?php
/*---------------------------------------------------------*/
/*------------Created By : Nitin Gautam  -----------------*/
/*--- For any query mail at nitin.gautam070@gmail.com ---*/
/*---------------------------------------------------------*/
/*---------------------------------------------------------*/
?>
<?php
class NG_Slider_Model_System_Config_Slicecount 
{
    public function toOptionArray()
    {
        return array(
		    array('value' => 0, 'label'=>Mage::helper('adminhtml')->__('0')),
            array('value' => 3, 'label'=>Mage::helper('adminhtml')->__('3')),
            array('value' => 5, 'label'=>Mage::helper('adminhtml')->__('5')),
            array('value' => 7, 'label'=>Mage::helper('adminhtml')->__('7')),
            array('value' => 9, 'label'=>Mage::helper('adminhtml')->__('9')),
            array('value' => 12, 'label'=>Mage::helper('adminhtml')->__('12')),
        );
    }
}

