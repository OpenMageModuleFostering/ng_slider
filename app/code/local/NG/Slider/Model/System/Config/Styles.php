<?php
/*---------------------------------------------------------*/
/*------------Created By : Nitin Gautam  -----------------*/
/*--- For any query mail at nitin.gautam070@gmail.com ---*/
/*---------------------------------------------------------*/
?>
<?php
class NG_Slider_Model_System_Config_Styles 
{
    public function toOptionArray()
    {
        return array(
		    array('value' => 'v', 'label'=>Mage::helper('adminhtml')->__('vertical')),
            array('value' => 'h', 'label'=>Mage::helper('adminhtml')->__('horizontal')),
            array('value' => 'r', 'label'=>Mage::helper('adminhtml')->__('random')),
        );
    }
}

