<?php
/*---------------------------------------------------------*/
/*------------Created By : Nitin Gautam  -----------------*/
/*--- For any query mail at nitin.gautam070@gmail.com ---*/
/*---------------------------------------------------------*/
?>
<?php
class NG_Slider_Block_Slider extends Mage_Core_Block_Template
{
	public function _prepareLayout()
    {
		return parent::_prepareLayout();
    }
    
     public function getSlide()     
     { 
        if (!$this->hasData('slider')) {
            $this->setData('slider', Mage::registry('slider'));
        }
        return $this->getData('slider');
    }
}