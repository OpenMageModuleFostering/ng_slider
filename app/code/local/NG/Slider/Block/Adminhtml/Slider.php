<?php
/*---------------------------------------------------------*/
/*------------Created By : Nitin Gautam  -----------------*/
/*--- For any query mail at nitin.gautam070@gmail.com ---*/
/*---------------------------------------------------------*/
?>
<?php
class NG_Slider_Block_Adminhtml_Slider extends Mage_Adminhtml_Block_Widget_Grid_Container
{
  public function __construct()
  {
    $this->_controller = 'adminhtml_slider';
    $this->_blockGroup = 'slider';
    $this->_headerText = Mage::helper('slider')->__('3D-Slider Manager');
    $this->_addButtonLabel = Mage::helper('slider')->__('Add Slide');
    parent::__construct();
  }
}